<?php

namespace App\Repositories;

use App\Models\Sale;
use App\Repositories\BaseRepository;

/**
 * Class SaleRepository
 * @package App\Repositories
 * @version September 30, 2021, 7:40 am UTC
*/

class SaleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Salesname'
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
        return Sale::class;
    }
}
