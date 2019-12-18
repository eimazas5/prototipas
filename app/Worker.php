<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    use SoftDeletes;

    public $table = 'workers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'last_name',
        'first_name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function nameSales()
    {
        return $this->hasMany(Sale::class, 'name_id', 'id');
    }
}
