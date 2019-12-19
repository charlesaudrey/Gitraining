<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class ConfirmToken extends Model
{
    protected $guarded = [];

    public function user() {
      return $this->belongsTo(User::class);
    }
}
