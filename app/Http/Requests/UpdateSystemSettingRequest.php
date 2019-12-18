<?php

namespace App\Http\Requests;

use App\SystemSetting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateSystemSettingRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('system_setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
