<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var array
     */
    protected $table = 'mentors';
    protected $fillable = [
        'created_at', 
        
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
