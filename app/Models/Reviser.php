<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviser extends Model
{
     protected $table='revisers';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
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
