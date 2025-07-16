<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdukMasukKeluarRequest extends FormRequest
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
            'id_produk' => 'required',
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'produk_masuk' => 'required',
            'tanggal_produk_masuk' => 'required',
            'produk_keluar' => 'required',
            'tanggal_produk_keluar' => 'required',
            'total_produk_masuk_keluar' => 'required'
        ];
    }
}
