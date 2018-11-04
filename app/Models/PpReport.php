<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpReport extends Model
{
     protected $table='pp_reports';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type'
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
