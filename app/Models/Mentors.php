<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentors extends Model
{
    //
    public $timestamps=true;
    protected $table='mentors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'pp_projections_id',
       'user_id'
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
