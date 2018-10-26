<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpProjection extends Model
{
    /**
     * The table associated with the model.
     *
     * @var array
     */
    protected $table = 'pp_projections';
    protected $fillable = [
        'title', 
        'organization',
        'exit_at',
        'is_exit',
        'is_practice'
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
