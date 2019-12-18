<?php

namespace App\Http\Requests;

use App\InvStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateInvStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('inv_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
