<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpRevisers extends Model
{
    /**
     * the table associated with the model
     * @var string
     */
    protected $table ='revisers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 
        'created_at',
        'updated_at',
        'user_id',
        'pp_projection_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];
}
