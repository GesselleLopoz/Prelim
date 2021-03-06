<?php

namespace App\Repositories;

use App\Models\Sale;
use App\Repositories\BaseRepository;

/**
 * Class SaleRepository
 * @package App\Repositories
 * @version October 4, 2021, 7:57 am UTC
*/

class SaleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Sale::class;
    }
}
