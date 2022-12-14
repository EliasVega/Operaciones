<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'amount'            => '',
            'advance'           => '',
            'total'             => '',
            'reference'         => '',
            'status'            => '',
            'bank_id'           => '',
            'payment_method_id' => '',
            'user_id'           => '',
            'responsible_id'    => '',
            'bank_origin-id'    => ''
        ];
    }
}
