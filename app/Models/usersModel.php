<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usersModel extends Model
{
	public $table = 'users'; 
    public $fillable = ['username', 'name', 'email', 'password','roles'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public $hidden = [
        'password', 'remember_token',
    ];

    public function staff()
    {
        return $this->hasOne('App\Models\staffsModel');
    }


}
