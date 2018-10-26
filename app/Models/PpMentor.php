<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class PpMentor extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pp_mentors';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'created_at',
        'user_id',
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