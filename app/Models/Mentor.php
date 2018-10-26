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
    
    public $timestamps=false;
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
        'id',
        'created_at'
    ];
}
