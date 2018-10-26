<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpMentors extends Model
{
    /**
     * the table associated with the model
     * @var string
     */
    protected $table ='mentors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'created_at',
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
    public $timestamps = false;
}
