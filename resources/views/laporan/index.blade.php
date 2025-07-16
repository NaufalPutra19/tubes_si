@extends('templates.layout')

@push('style')

@endpush

@section('content')
    <section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Laporan Produk</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFormLaporan">
                Tambah Laporan
            </button>
            <!-- <a href="" class="btn btn-success">
                <i class="fa fa-file-excel"></i> Export
            </a> -->
        </div>
        @include('laporan.data')
        
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
@endsection
@include('laporan.form')

@push('script')
<script>
    $('.alert-success').fadeTo(2000, 500).slideUp(500,
        function() {
            $('.alert-success').slideUp(500)
        })
    
     $('.alert-danger').fadeTo(2000, 500).slideUp(500,
        function() {
            $('.alert-danger').slideUp(500)
        })

    $('#tbl-laporan').DataTable();

    $('.remove').on('click', function() {
        const data = $(this).closest('tr').find('td:eq(1)').text()

        $('#data-delete').text(data)

        const form = $(this).closest('tr').find('form')
        $('#btn-confirm').on('click', function() {
            form.submit()
        })
    })

    $('#modalFormLaporan').on('show.bs.modal', function(e){
    const btn = $(e.relatedTarget)
    const modal = $(this)
    const mode = btn.data('mode')
    const id_laporan = btn.data('id_laporan')
    const id_kelola = btn.data('id_kelola')
    const tanggal_laporan = btn.data('tanggal_laporan')
    const periode_dari = btn.data('periode_dari')
    const periode_sampai = btn.data('periode_sampai')
    const total_produk_masuk = btn.data('total_produk_masuk')
    const total_produk_keluar = btn.data('total_produk_keluar')
    const catatan = btn.data('catatan')
    const route = btn.data('route')
    if (mode === 'edit') {
        modal.find('.modal-title').text('Edit Data')
        modal.find('#id_kelola').val(id_kelola)
        modal.find('#tanggal_laporan').val(tanggal_laporan)
        modal.find('#periode_dari').val(periode_dari)
        modal.find('#periode_sampai').val(periode_sampai)
        modal.find('#total_produk_masuk').val(total_produk_masuk)
        modal.find('#total_produk_keluar').val(total_produk_keluar)
        modal.find('#catatan').val(catatan)
        $('#modalFormLaporan form').attr('action', route)
        // $('#method').html('@method("PUT")')
        modal.find('#method').html('@method("PATCH")')
        modal.find('form').attr('action', `{{ url('laporan') }}/${id_laporan}`)
    } else {
        modal.find('.modal-title').text('Form Laporan')
        modal.find('#id_kelola').val('')
        modal.find('#tanggal_laporan').val('')
        modal.find('#periode_dari').val('')
        modal.find('#periode_sampai').val('')
        modal.find('#total_produk_masuk').val('')
        modal.find('#total_produk_keluar').val('')
        modal.find('#catatan').val('')
        modal.find('form').attr('action', `{{ url("laporan") }}`)
    }
})

$('#modalFormLaporan').on('show.bs.modal', function () {
        $('#id_laporan').delay(1000).focus().select();
    })
</script>
@endpush