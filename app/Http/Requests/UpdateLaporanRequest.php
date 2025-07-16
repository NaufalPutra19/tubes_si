<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLaporanRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id_kelola' => 'required',
            'tanggal_laporan' => 'required',
            'periode_dari' => 'required',
            'periode_sampai' => 'required',
            'total_produk_masuk' => 'required',
            'total_produk_keluar' => 'required',
            'catatan' => 'required'
        ];
    }
}
