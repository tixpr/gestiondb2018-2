<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentors extends Model
{
    //
    protected $table='mentors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'pp_projections_id',
       'create_at',
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
