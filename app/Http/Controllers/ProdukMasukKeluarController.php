<?php

namespace App\Http\Controllers;

use App\Models\ProdukMasukKeluar;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdukMasukKeluarRequest;
use App\Http\Requests\UpdateProdukMasukKeluarRequest;
use Illuminate\Support\Facades\Log;

class ProdukMasukKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['produkmasukkeluar'] = ProdukMasukKeluar::get();
        return view('produkmasukkeluar.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdukMasukKeluarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdukMasukKeluarRequest $request)
    {
        ProdukMasukKeluar::create($request->all());
        return redirect('produkmasukkeluar')->with('success', 'Produk Masuk Keluar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukMasukKeluar  $produkMasukKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukMasukKeluar $produkMasukKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukMasukKeluar  $produkMasukKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdukMasukKeluar $produkMasukKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukMasukKeluarRequest  $request
     * @param  \App\Models\ProdukMasukKeluar  $produkMasukKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdukMasukKeluarRequest $request, ProdukMasukKeluar $produkMasukKeluar)
    {
        // dd($request);
        // die();
        ProdukMasukKeluar::where('id_kelola', $request->id_kelola)->update([
            'id_produk' => $request->id_produk,
            'nama_produk' => $request->nama_produk,
            'jenis_produk' => $request->jenis_produk,
            'produk_masuk' => $request->produk_masuk,
            'tanggal_produk_masuk' => $request->tanggal_produk_masuk,
            'produk_keluar' => $request->produk_keluar,
            'tanggal_produk_keluar' => $request->tanggal_produk_keluar,
            'total_produk_masuk_keluar' => $request->total_produk_masuk_keluar
            // tambahkan kolom lainnya
        ]);
        // Log::info('Data yang diupdate:', $request->all());
        // Log::info('Model:', $produkMasukKeluar->toArray());

        return redirect('produkmasukkeluar')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukMasukKeluar  $produkMasukKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kelola)
    {   
        $produkMasukKeluar = ProdukMasukKeluar::where('id_kelola', $id_kelola)->firstOrFail();
        // dd($produkMasukKeluar);
        // die();
        $produkMasukKeluar->delete();

        return redirect('produkmasukkeluar')->with('success', 'Data Produk Masuk Keluar berhasil Dihapus');
    }
}
