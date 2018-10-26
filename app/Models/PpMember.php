<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpMember extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pp_members';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pp_projection_id',
        'user_id'
       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id' 
    ];
    public $timestamps = false;
}
