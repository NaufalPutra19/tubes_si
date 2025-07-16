<div class="mt-4" >
    <table id="tbl-produkmasukkeluar" class="table table-hover text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Produk Masuk</th>
                <th>Tanggal Produk Masuk</th>
                <th>Produk Keluar</th>
                <th>Tanggal Produk Keluar</th>
                <th>Total Produk Masuk Keluar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produkmasukkeluar as $pmk)
            <tr>
                <td>{{ $i = (isset($i)?++$i:$i=1) }}</td>
                <td>{{ $pmk->id_produk }}</td>
                <td>{{ $pmk->nama_produk }}</td>
                <td>{{ $pmk->jenis_produk }}</td>
                <td>{{ $pmk->produk_masuk }}</td>
                <td>{{ $pmk->tanggal_produk_masuk }}</td>
                <td>{{ $pmk->produk_keluar }}</td>
                <td>{{ $pmk->tanggal_produk_keluar }}</td>
                <td>{{ $pmk->total_produk_masuk_keluar }}</td>
                <td>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalFormProdukmasukkeluar" 
                    data-mode="edit"
                    data-id_kelola = "{{$pmk->id_kelola}}" 
                    data-id_produk = "{{$pmk->id_produk}}" 
                    data-nama_produk="{{$pmk->nama_produk}}"
                    data-jenis_produk="{{$pmk->jenis_produk}}"
                    data-produk_masuk="{{$pmk->produk_masuk}}"
                    data-tanggal_produk_masuk="{{$pmk->tanggal_produk_masuk}}"
                    data-produk_keluar="{{$pmk->produk_keluar}}"
                    data-tanggal_produk_keluar="{{$pmk->tanggal_produk_keluar}}"
                    data-total_produk_masuk_keluar="{{$pmk->total_produk_masuk_keluar}}"

                  
                    >
                    <i class="fas fa-pen"></i>
                    </button>
                    <button type="button"
                        class="btn btn-light remove"
                        data-toggle="modal"
                        data-target="#confirmDialog"
                        data-id="{{ $pmk->id_kelola }}">
                        <i class="fas fa-trash"></i>
                    </button>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Dialog konfirmasi delete -->
<div class="modal fade" id="confirmDialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Data ini <b id="data-delete"></b> akan dihapus?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <form id="formDelete" action="" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary" id="btn-confirm">Ya, data akan dihapus</button>
                </form>
            </div>
        </div>
    </div>
</div>