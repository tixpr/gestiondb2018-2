<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpPProjection extends Model
{
    //
    protected $table='pp_p_projections';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','user_id', 'organization', 'exit_at','is_exit','is_practice',
    
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
