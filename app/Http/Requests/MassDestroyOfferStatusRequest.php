<?php

namespace App\Http\Requests;

use App\OfferStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOfferStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('offer_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:offer_statuses,id',
        ];
    }
}
