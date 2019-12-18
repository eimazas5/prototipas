<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddStock extends Model
{
    use SoftDeletes;

    public $table = 'add_stocks';

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
        'amounttoadd',
    ];

    public function name()
    {
        return $this->belongsTo(NewProduct::class, 'name_id');
    }
}
