<?php

namespace App\Repositories;

use App\Models\Operations;
use App\Repositories\BaseRepository;

/**
 * Class OperationsRepository
 * @package App\Repositories
 * @version October 16, 2020, 3:04 pm UTC
*/

class OperationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numoperation',
        'typeoperation',
        'dateoperation',
        'montantoperation',
        'etats',
        'agence'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Operations::class;
    }
}
