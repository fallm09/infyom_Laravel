<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Operations
 * @package App\Models
 * @version October 16, 2020, 3:04 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $comptes
 * @property integer $numoperation
 * @property integer $typeoperation
 * @property string $dateoperation
 * @property string $montantoperation
 * @property string $etats
 * @property string $agence
 */
class Operations extends Model
{
    use SoftDeletes;

    public $table = 'operations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'numoperation',
        'typeoperation',
        'dateoperation',
        'montantoperation',
        'etats',
        'agence'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numoperation' => 'integer',
        'typeoperation' => 'integer',
        'dateoperation' => 'string',
        'montantoperation' => 'string',
        'etats' => 'string',
        'agence' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numoperation' => 'required',
        'typeoperation' => 'required',
        'dateoperation' => 'required',
        'montantoperation' => 'required',
        'etats' => 'required',
        'agence' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function comptes()
    {
        return $this->hasMany(\App\Models\Compte::class, 'operations_id');
    }
}
