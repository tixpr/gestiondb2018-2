<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpProjection extends Model
{/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pp_projections';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'title', 
        'organization', 
        'exit_at',
        'is_exit',
        'is_practice',
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
