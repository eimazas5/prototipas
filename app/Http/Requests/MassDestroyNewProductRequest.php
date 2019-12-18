<?php

namespace App\Http\Requests;

use App\NewProduct;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyNewProductRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('new_product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:new_products,id',
        ];
    }
}
