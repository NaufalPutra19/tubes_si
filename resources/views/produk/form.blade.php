<div class="modal fade" id="modalFormProduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="produk">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Nama Produk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_produk" value="" name="nama_produk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label" style="padding-top:5px">Jenis Produk</label>
                        <div class="col-sm-8">
                        <select name="jenis_produk" id="jenis_produk" class="form-control">
                                <option value="selected disabled hidden">Pilih Jenis Produk</option>
                                <option value="sabun">Sabun</option>
                                <option value="lotion">Lotion</option>
                                <option value="spons">Spons</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jk" class="col-sm-4 col-form-label">Stok Produk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="stok_produk" value="" name="stok_produk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label" style="padding-top:5px">Harga Produk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="harga_produk" value="" name="harga_produk">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>