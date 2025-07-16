<?php

namespace App\Http\Controllers;

use App\Models\ProdukMasukKeluar;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdukMasukKeluarRequest;
use App\Http\Requests\UpdateProdukMasukKeluarRequest;

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
        $produkMasukKeluar->update($request->all());

        return redirect('produkmasukkeluar')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukMasukKeluar  $produkMasukKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdukMasukKeluar $produkMasukKeluar)
    {
        $produkMasukKeluar->delete();

        return redirect('produkmasukkeluar')->with('success', 'Data Produk Masuk Keluar berhasil Dihapus');
    }
}
