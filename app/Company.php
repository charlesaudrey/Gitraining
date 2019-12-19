<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Jenssegers\Mongodb\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public static function fetch() {
      return static::
        where('client_id', Auth::user()->client->id)
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function client() {
      return $this->belongsTo(Client::class);
    }

    public function properties() {
      return $this->hasMany(Property::class);
    }
}
