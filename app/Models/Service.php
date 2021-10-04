<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Service
 * @package App\Models
 * @version October 4, 2021, 7:40 am UTC
 *
 * @property string $product_name
 * @property string $repair_service_warranty
 * @property string $warranty_code
 */
class Service extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'services';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_name',
        'repair_service_warranty',
        'warranty_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_name' => 'string',
        'repair_service_warranty' => 'string',
        'warranty_code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'nullable|string|max:255',
        'repair_service_warranty' => 'nullable|string|max:255',
        'warranty_code' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
