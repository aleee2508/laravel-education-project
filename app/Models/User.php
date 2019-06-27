<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


use App\Configuration;

class User extends Authenticatable
{
    use CrudTrait;
    use HasRoles;
    use Notifiable;
    Protected $guard_name ='web';
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

    public function configurations(){

      return $this->belongsToMany(Configuration::class);

    }

    public function notices(){

      return $this->belongsToMany(Notice::class);

    }

    public function collaborators(){

      return $this->belongsToMany(Collaborator::class);

    }

    public function messages(){

      return $this->belongsToMany(Message::class);

    }

    public function sliders(){

      return $this->belongsToMany(Slider::class);

    }

    public function formations(){

      return $this->belongsToMany(Formation::class);

    }
}
