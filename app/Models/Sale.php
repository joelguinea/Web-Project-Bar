<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sale
 * @package App\Models
 * @version September 30, 2021, 7:40 am UTC
 *
 * @property string $Salesname
 */
class Sale extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'sales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Salesname'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Salesname' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Salesname' => 'nullable|string|max:60',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
