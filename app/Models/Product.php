<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version October 4, 2021, 7:25 am UTC
 *
 * @property string $product_name
 * @property string $branch_name
 * @property number $price
 * @property string $comment
 */
class Product extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_name',
        'branch_name',
        'price',
        'comment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_name' => 'string',
        'branch_name' => 'string',
        'price' => 'decimal:2',
        'comment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'nullable|string|max:200',
        'branch_name' => 'nullable|string|max:200',
        'price' => 'required|numeric',
        'comment' => 'nullable|string|max:200',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
