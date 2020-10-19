<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comptes
 * @package App\Models
 * @version October 16, 2020, 3:03 pm UTC
 *
 * @property \App\Models\Operation $operations
 * @property integer $operations_id
 * @property string $accountnumber
 * @property integer $clerib
 * @property integer $typecompte
 * @property string $solde
 * @property string $datecreation
 */
class Comptes extends Model
{
    use SoftDeletes;

    public $table = 'comptes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'operations_id',
        'accountnumber',
        'clerib',
        'typecompte',
        'solde',
        'datecreation'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'operations_id' => 'integer',
        'accountnumber' => 'string',
        'clerib' => 'integer',
        'typecompte' => 'integer',
        'solde' => 'string',
        'datecreation' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'operations_id' => 'required',
        'accountnumber' => 'required',
        'clerib' => 'required',
        'typecompte' => 'required',
        'solde' => 'required',
        'datecreation' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function operations()
    {
        return $this->belongsTo(\App\Models\Operation::class, 'operations_id');
    }
}
