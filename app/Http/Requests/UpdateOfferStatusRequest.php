<?php

namespace App\Http\Requests;

use App\OfferStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateOfferStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('offer_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
