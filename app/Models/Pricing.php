<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pricing
 * @package App\Models
 * @version October 4, 2021, 7:48 am UTC
 *
 * @property string $product_name
 * @property number $price
 * @property string $warranty_code
 * @property string $start_of_sale
 * @property string $end_of_sale
 */
class Pricing extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'pricings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_name',
        'price',
        'warranty_code',
        'start_of_sale',
        'end_of_sale'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_name' => 'string',
        'price' => 'decimal:2',
        'warranty_code' => 'string',
        'start_of_sale' => 'date',
        'end_of_sale' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'nullable|string|max:255',
        'price' => 'required|numeric',
        'warranty_code' => 'nullable|string|max:255',
        'start_of_sale' => 'nullable',
        'end_of_sale' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
