<?php

namespace App\Http\Requests;

use App\InvStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyInvStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('inv_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:inv_statuses,id',
        ];
    }
}
