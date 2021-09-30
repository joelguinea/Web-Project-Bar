<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pricings
 * @package App\Models
 * @version September 30, 2021, 7:51 am UTC
 *
 * @property string $Picingname
 */
class Pricings extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'pricing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Picingname'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Picingname' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Picingname' => 'nullable|string|max:60',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
