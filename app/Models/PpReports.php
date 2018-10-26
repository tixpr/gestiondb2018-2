<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpReports extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'created_at',
        'update_at',
        'is_valid'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id','password', 'remember_token',
    ];
}
