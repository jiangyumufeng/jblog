<?php

namespace App;

use App\Traits\FollowTrait;
use App\Scopes\StatusScope;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, FollowTrait, SoftDeletes;

    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'is_admin', 'avatar', 'password', 'confirm_code',
        'nickname', 'real_name', 'weibo_name', 'weibo_link', 'email_notify_enabled',
        'github_id', 'github_name', 'github_url', 'website', 'description', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'confirm_code', 'updated_at', 'deleted_at'
    ];

    public static function boot() {
        parent::boot();

        static::addGlobalScope(new StatusScope());
    }
}
