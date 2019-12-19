<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Jenssegers\Mongodb\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];

    public static function fetch() {
      return static::
        where('client_id', Auth::user()->client->id)
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function property() {
      return $this->belongsTo(Property::class);
    }
}
