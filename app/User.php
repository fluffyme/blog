<?php

namespace App;

use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function posts(){
       return  $this->hasMany(Post::class, "author_id", "id");
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    public  function getBioHtmlAttribute($value){
        return $this->bio ? Markdown::convertToHtml(e($this->bio)): NULL;
    }

    public function gravatar(){
        $email = $this->email;
        $default = asset("img/author.jpg");
        $size = 100;

        $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

        return $grav_url;
    }
}
