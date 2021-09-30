<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Products
 * @package App\Models
 * @version September 30, 2021, 7:38 am UTC
 *
 * @property string $Productname
 * @property string $Price
 */
class Products extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Productname',
        'Price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Productname' => 'string',
        'Price' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Productname' => 'nullable|string|max:60',
        'Price' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
