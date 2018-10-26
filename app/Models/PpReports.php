<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpReports extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pp_reports';
    protected $fillable = [
        'type',
        'pp_projections_id'
        
        
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
