<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Jenssegers\Mongodb\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [];

    public static function fetch() {
      return static::
        where('client_id', Auth::user()->client->id)
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function company() {
      return $this->belongsTo(Company::class);
    }

    public function rooms() {
      return $this->hasMany(Room::class);
    }
}
