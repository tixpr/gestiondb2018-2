<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var array
     */
    protected $table = 'revisers';
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];
}
