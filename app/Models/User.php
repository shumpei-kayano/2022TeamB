<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'publish_flag', 'icon', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles()
    {
        return $this->hasMany('App\Article');
    }


    //https://qiita.com/yukibe/items/b7186f05d1c266076a35
    //ユーザ(ブログ投稿者)は複数のブログ記事を投稿できるので、Userは複数のBlogを持つことができる
    public function blogs()
    {
        return $this->hasMany('App\Blog');
    }
    public function events()
    {
        return $this->hasMany('App\Event');
    }




    /* フォロー機能 */
    // public function follows()
    // {
    //     return $this->belongsToMany(User::class, 'follower_user', 'follower_id', 'user_id');
    // }

    // public function followers()
    // {
    //     return $this->belongsToMany(User::class, 'follower_user', 'user_id', 'follower_id');
    // }

    // 自治体スコープ
    public function scopePublicUser($query)
    {
        return $query->where('publish_flag', '1');
    }
}
