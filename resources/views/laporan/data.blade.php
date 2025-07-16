<!-- Load library -->
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.2/dist/bootstrap-table.min.css">
<script src="https://unpkg.com/bootstrap-table@1.22.2/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.22.2/dist/extensions/export/bootstrap-table-export.min.js"></script>
<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>

<!-- Toolbar (optional) -->
<div id="toolbar">
    <button class="btn btn-primary export btn-sm" data-type="excel">Export ke Excel</button>
    <button class="btn btn-success export btn-sm" data-type="csv">Export ke CSV</button>
    <button class="btn btn-danger export btn-sm" data-type="pdf">Export ke PDF</button>
</div>

<!-- Tabel Laporan -->
<div class="mt-4">
    <table 
        id="tbl-laporan"
        class="table table-hover text-center"
        data-toggle="table"
        data-search="true" 
        data-show-export="true"
        data-export-types='["csv", "excel", "pdf"]'
        data-toolbar="#toolbar">

        <thead>
            <tr>
                <th>No.</th>
                <th>ID Kelola</th>
                <th>Tanggal Laporan</th>
                <th>Periode Dari</th>
                <th>Periode Sampai</th>
                <th>Total Produk Masuk</th>
                <th>Total Produk Keluar</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1; @endphp
            @foreach ($laporan as $l)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $l->id_kelola }}</td>
                <td>{{ $l->tanggal_laporan }}</td>
                <td>{{ $l->periode_dari }}</td>
                <td>{{ $l->periode_sampai }}</td>
                <td>{{ $l->total_produk_masuk }}</td>
                <td>{{ $l->total_produk_keluar }}</td>
                <td>{{ $l->catatan }}</td>
                <td>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalFormLaporan"
                        data-mode="edit"
                        data-id_laporan="{{ $l->id_laporan }}"
                        data-id_kelola="{{ $l->id_kelola }}"
                        data-tanggal_laporan="{{ $l->tanggal_laporan }}"
                        data-periode_dari="{{ $l->periode_dari }}"
                        data-periode_sampai="{{ $l->periode_sampai }}"
                        data-total_produk_masuk="{{ $l->total_produk_masuk }}"
                        data-total_produk_keluar="{{ $l->total_produk_keluar }}"
                        data-catatan="{{ $l->catatan }}">
                        <i class="fas fa-pen"></i>
                    </button>

                    <form action="{{ route('laporan.destroy', $l->id_laporan) }}" method="POST" style="display: inline;">
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

<!-- Modal Konfirmasi -->
<div class="modal fade" id="confirmDialog" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
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

<!-- Script Export -->
<script>
    $(function () {
        $('#tbl-laporan').bootstrapTable();

        $('.export').click(function () {
            var type = $(this).data('type');
            $('#tbl-laporan').tableExport({x
                type: type,
                escape: false
            });
        });
    });
</script>