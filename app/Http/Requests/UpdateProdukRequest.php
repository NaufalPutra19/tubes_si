<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdukRequest extends FormRequest
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
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'stok_produk' => 'required',
            'harga_produk' => 'required',
        ]; 
    }

    public function messages()
    {
        return [
            'nama_produk.required' => 'Nama Produk belum dipilih',
            'jenis_produk.required' => 'Jenis Produk belum dipilih',
            'stok_produk.required' => 'Stok Produk belum dipilih',
            'harga_produk.required' => 'Harga Produk belum dipilih',
        ];
    }
}
