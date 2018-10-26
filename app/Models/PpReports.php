<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpReports extends Model
{
    /**
     * the table associated with the model
     * @var string
     */
    protected $table ='pp_reports';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 
        'created_at',
        'updated_at',
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
