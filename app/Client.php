<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function users() {
      return $this->hasMany(User::class);
    }

    public function companies() {
      return $this->hasMany(Company::class);
    }

    public function properties() {
      return $this->hasMany(Property::class);
    }

    public function platform() {
      return $this->belongsTo(Platform::class);
    }
}
