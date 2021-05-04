<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends BaseModel
{
	 public $table = 'machine';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'fon',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}


