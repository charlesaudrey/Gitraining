<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public static function fetch() {
      return static::where('name', '!=', 'superadmin')
        ->get();
    }

    public function users() {
      return $this->belongsToMany(User::class);
    }
}
