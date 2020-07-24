<?php

namespace Karyam\LeaveManagement\app\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Leave
 * @package App\Models
 * @version July 24, 2020, 7:11 pm UTC
 *
 * @property integer $user_id
 * @property string $from_date
 * @property string $to_date
 * @property string $reason
 * @property boolean $compoff
 * @property string $compoffreason
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 */
class Leave extends Model
{
    use SoftDeletes;

    public $table = 'leaves';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'from_date',
        'to_date',
        'reason',
        'compoff',
        'compoffreason',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'from_date' => 'date',
        'to_date' => 'date',
        'reason' => 'string',
        'compoff' => 'boolean',
        'compoffreason' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'deleted_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'from_date' => 'required',
        'to_date' => 'required',
        'reason' => 'required',
        'compoff' => 'required'
    ];


}
