<div class="modal fade" id="modalFormLaporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="laporan">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">ID Kelola</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="id_kelola" value="" name="id_kelola">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-4 col-sm-8 col-xs-12">Tanggal Laporan</label>
                        <div class="col-md-8 col-sm-4 col-xs-12">
                            <input class="date-picker form-control col-md-7 col-sm-5 col-xs-12" required="required" type="date"
                                value="{{ date('Y-m-d') }}" id="tanggal_laporan" name="tanggal_laporan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-4 col-sm-8 col-xs-12">Periode Dari</label>
                        <div class="col-md-8 col-sm-4 col-xs-12">
                            <input class="date-picker form-control col-md-7 col-sm-5 col-xs-12" required="required" type="date"
                                value="{{ date('Y-m-d') }}" id="periode_dari" name="periode_dari">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-4 col-sm-8 col-xs-12">Periode Sampai</label>
                        <div class="col-md-8 col-sm-4 col-xs-12">
                            <input class="date-picker form-control col-md-7 col-sm-5 col-xs-12" required="required" type="date"
                                value="{{ date('Y-m-d') }}" id="periode_sampai" name="periode_sampai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Total Produk Masuk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="total_produk_masuk" value="" name="total_produk_masuk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Total Produk Keluar</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="total_produk_keluar" value="" name="total_produk_keluar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">catatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="catatan" value="" name="catatan">
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