<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The table associated whit the model 
     *
     * @var string
     */
   
    protected $table='members';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
protected $fillable = [
   
    'pp_projection_id',
    'user_id',

];

/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
protected $hidden = [
    'id'/* estas columnas no apareceran*/
];
public $timestamps=false; 
}




