<div class="modal fade" id="modalFormProdukMasukKeluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Produk Masuk Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="produkmasukkeluar">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
                        <label for="id_produk" class="col-sm-4 col-form-label">ID Produk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="id_produk" value="" name="id_produk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_produk" class="col-sm-4 col-form-label">Nama Produk</label>
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
                        <label for="produkmasuk" class="col-sm-4 col-form-label">Produk Masuk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="produk_masuk" value="" name="produk_masuk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-4 col-sm-8 col-xs-12">Tanggal Produk Masuk</label>
                        <div class="col-md-8 col-sm-4 col-xs-12">
                            <input class="date-picker form-control col-md-7 col-sm-5 col-xs-12" required="required" type="date"
                                value="{{ date('Y-m-d') }}" name="tanggal_produk_masuk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="produkkeluar" class="col-sm-4 col-form-label">Produk Keluar</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="produk_keluar" value="" name="produk_keluar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-4 col-sm-8 col-xs-12">Tanggal Produk Keluar</label>
                        <div class="col-md-8 col-sm-4 col-xs-12">
                            <input class="date-picker form-control col-md-7 col-sm-5 col-xs-12" required="required" type="date"
                                value="{{ date('Y-m-d') }}" name="tanggal_produk_keluar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jk" class="col-sm-4 col-form-label">Total Produk Masuk Keluar</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="total_produk_masuk_keluar" alue="" name="total_produk_masuk_keluar">
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