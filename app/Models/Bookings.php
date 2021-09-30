<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Bookings
 * @package App\Models
 * @version September 17, 2021, 6:18 am UTC
 *
 * @property string $Name
 * @property string $Lastname
 * @property string $Location
 * @property string $Hotelname
 * @property string $Date
 * @property string $RoomType
 * @property string $Citizenship
 * @property string $Gender
 */
class Bookings extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'bookings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'Lastname' => 'string',
        'Location' => 'string',
        'Hotelname' => 'string',
        'Date' => 'string',
        'RoomType' => 'string',
        'Citizenship' => 'string',
        'Gender' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'nullable|string|max:60',
        'Lastname' => 'nullable|string|max:60',
        'Location' => 'nullable|string|max:60',
        'Hotelname' => 'nullable|string|max:60',
        'Date' => 'nullable|string|max:255',
        'RoomType' => 'nullable|string|max:60',
        'Citizenship' => 'nullable|string|max:50',
        'Gender' => 'nullable|string|max:12',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
