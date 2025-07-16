<div class="mt-4" >
    <table id="tbl-produk" class="table table-hover text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Stok Produk</th>
                <th>Harga Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $p)
            <tr>
                <td>{{ $i = (isset($i)?++$i:$i=1) }}</td>
                <td>{{ $p->nama_produk }}</td>
                <td>{{ $p->jenis_produk }}</td>
                <td>{{ $p->stok_produk }}</td>
                <td>{{ $p->harga_produk }}</td>
                <td>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalFormProduk" 
                    data-mode="edit"
                    data-id_produk = "{{$p->id_produk}}" 
                    data-nama_produk="{{$p->nama_produk}}"
                    data-jenis_produk="{{$p->jenis_produk}}"
                    data-stok_produk="{{$p->stok_produk}}"
                    data-harga_produk="{{$p->harga_produk}}"

                  
                    >
                    <i class="fas fa-pen"></i>
                    </button>
                    <form action="{{route('produk.destroy', $p->id_produk) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-light remove" data-toggle="modal" data-target="#confirmDialog">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
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
                <button type="button" class="btn btn-primary" id="btn-confirm">Ya, data akan dihapus</button>
            </div>
        </div>
    </div>
</div>