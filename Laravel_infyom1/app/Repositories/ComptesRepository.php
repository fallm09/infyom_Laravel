<?php

namespace App\Repositories;

use App\Models\Comptes;
use App\Repositories\BaseRepository;

/**
 * Class ComptesRepository
 * @package App\Repositories
 * @version October 16, 2020, 3:03 pm UTC
*/

class ComptesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'operations_id',
        'accountnumber',
        'clerib',
        'typecompte',
        'solde',
        'datecreation'
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
        return Comptes::class;
    }
}
