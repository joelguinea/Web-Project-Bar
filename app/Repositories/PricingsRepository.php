<?php

namespace App\Repositories;

use App\Models\Pricings;
use App\Repositories\BaseRepository;

/**
 * Class PricingsRepository
 * @package App\Repositories
 * @version September 30, 2021, 7:51 am UTC
*/

class PricingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Picingname'
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
        return Pricings::class;
    }
}
