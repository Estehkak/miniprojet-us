<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends BaseModel
{


public static  function inCreating()
  {
    $data = Hash::check($request->input('password'));
    return $data;
    //return app('request')->all();
  }

    public $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}
