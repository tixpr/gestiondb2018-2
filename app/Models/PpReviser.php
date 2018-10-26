<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpReviser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pp_revisers';
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
        'id',
    ];
}
