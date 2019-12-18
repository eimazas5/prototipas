<?php

namespace App\Http\Requests;

use App\AddStock;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateAddStockRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('add_stock_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'amounttoadd' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
