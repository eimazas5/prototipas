<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewProduct extends Model
{
    use SoftDeletes;

    public $table = 'new_products';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'stock',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function nameAddStocks()
    {
        return $this->hasMany(AddStock::class, 'name_id', 'id');
    }
}
