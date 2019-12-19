<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Narwy\Mongodb\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;



class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes;

    protected $connection = 'mongodb';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'mobile', 'password', 'active', 'show', 'email_verified_at', 'client_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'show'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function fetch() {
      return static::
        where('client_id', Auth::user()->client->id)
        ->whereNull('deleted_at')
        ->latest()
        ->paginate(10);
    }

    public function confirm_token() {
      return $this->hasOne(ConfirmToken::class);
    }

    public function client() {
      return $this->belongsTo(Client::class);
    }

    public function roles() {
      return $this->belongsToMany(Role::class);
    }

    public function properties() {
      return $this->belongsToMany(Property::class);
    }
}
