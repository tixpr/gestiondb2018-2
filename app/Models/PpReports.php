<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpReports extends Model
{
    //
    protected $table ='pp_reports';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 
        'pp_projection_id'
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
