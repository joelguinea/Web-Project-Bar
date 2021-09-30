<?php

namespace App\Repositories;

use App\Models\Bookings;
use App\Repositories\BaseRepository;

/**
 * Class BookingsRepository
 * @package App\Repositories
 * @version September 17, 2021, 6:18 am UTC
*/

class BookingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Lastname',
        'Location',
        'Hotelname',
        'Date',
        'RoomType',
        'Citizenship',
        'Gender'
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
        return Bookings::class;
    }
}
