<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Platform extends Model
{
    protected $guarded = [];

    public function client() {
      return $this->hasOne(Client::class);
    }

    public function users() {
      return $this->belongsToMany(User::class);
    }
}
