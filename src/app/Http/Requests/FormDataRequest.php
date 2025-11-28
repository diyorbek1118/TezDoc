<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'document_id' => 'required',
            'fio' => 'required|string|max:255',

            'manzil' => 'required|array',
            'manzil.kocha' => 'required|string|max:255',
            'manzil.tuman' => 'required|string|max:255',
            'manzil.viloyat' => 'required|string|max:255',
            'manzil.uy_raqam' => 'required|string|max:50',

            'uy_joy_manzil' => 'required|array',
            'uy_joy_manzil.kocha' => 'required|string|max:255',
            'uy_joy_manzil.tuman' => 'required|string|max:255',
            'uy_joy_manzil.viloyat' => 'required|string|max:255',
            'uy_joy_manzil.uy_raqam' => 'required|string|max:50',
            'uy_joy_manzil.xonadon_raqam' => 'required|string|max:50',

            'mazmun' => 'required|array',
            'mazmun.mulkdor_fio' => 'required|string|max:255',
            'mazmun.umumiy_maydon' => 'required|string|max:255',
            'mazmun.royxatga_olinuvchi_fio' => 'required|string|max:255',

             'oila_azolari' => 'required|array|min:1',
             'oila_azolari.*.fio' => 'required|string|max:255',
             'oila_azolari.*.qarindoshlik' => 'required|string|max:255',
             'oila_azolari.*.tugilgan_joy' => 'required|string|max:255',

             'ariza_rekvizit' => 'required|array',
             'ariza_rekvizit.sana' => 'required|date',
             'ariza_rekvizit.tashkilot' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'fio.required' => 'FIO maydoni majburiy',
            'manzil.kocha.required' => 'Manzil ko‘cha majburiy',
            'uy_joy_manzil.xonadon_raqam.required' => 'Xonadon raqami majburiy',
            'oila_azolari.*.fio.required' => 'Oila a’zosi FIO majburiy',
            'ariza_rekvizit.sana.date' => 'Sana to‘g‘ri formatda bo‘lishi kerak: YYYY-MM-DD',
        ];
    }
}
