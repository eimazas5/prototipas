<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemSetting extends Model
{
    use SoftDeletes;

    public $table = 'system_settings';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'logo',
        'vat_code',
        'created_at',
        'updated_at',
        'deleted_at',
        'company_name',
        'company_code',
    ];
}
