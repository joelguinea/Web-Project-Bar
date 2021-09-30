<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Services
 * @package App\Models
 * @version September 30, 2021, 7:39 am UTC
 *
 * @property string $Servicesname
 * @property string $Address
 */
class Services extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'services';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Servicesname',
        'Address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Servicesname' => 'string',
        'Address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Servicesname' => 'nullable|string|max:60',
        'Address' => 'nullable|string|max:500',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
