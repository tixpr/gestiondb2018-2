<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    //
    public $timestamps=false;
    protected $table='members';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  
    protected $fillable = [
        'user_id',
        'pp_projection_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];
    
}
