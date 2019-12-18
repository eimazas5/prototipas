<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes;

    public $table = 'sales';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'sales_amount',
    ];

    public function name()
    {
        return $this->belongsTo(Worker::class, 'name_id');
    }
}
