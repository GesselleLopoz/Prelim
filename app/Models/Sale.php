<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sale
 * @package App\Models
 * @version October 4, 2021, 7:57 am UTC
 *
 * @property string $product_name
 * @property string $branch_name
 * @property string $date_sold
 * @property number $discount
 * @property string $customer
 * @property string $address
 * @property string $email_address
 * @property string $contact_number
 */
class Sale extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'sales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_name',
        'branch_name',
        'date_sold',
        'discount',
        'customer',
        'address',
        'email_address',
        'contact_number'
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
        'date_sold' => 'date',
        'discount' => 'decimal:2',
        'customer' => 'string',
        'address' => 'string',
        'email_address' => 'string',
        'contact_number' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'nullable|string|max:255',
        'branch_name' => 'nullable|string|max:255',
        'date_sold' => 'nullable',
        'discount' => 'required|numeric',
        'customer' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
        'email_address' => 'nullable|string|max:255',
        'contact_number' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
