@extends('templates.layout')

@push('style')

@endpush

@section('content')
    <section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Produk</h3>

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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFormProduk">
                Tambah Produk
            </button>
        </div>
        @include('produk.data')
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
@endsection
@include('produk.form')

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

    $('#tbl-produk').DataTable();

    $('.remove').on('click', function() {
        const data = $(this).closest('tr').find('td:eq(1)').text()

        $('#data-delete').text(data)

        const form = $(this).closest('tr').find('form')
        $('#btn-confirm').on('click', function() {
            form.submit()
        })
    })

    $('#modalFormProduk').on('show.bs.modal', function(e){
    const btn = $(e.relatedTarget)
    const modal = $(this)
    const mode = btn.data('mode')
    const id_produk = btn.data('id_produk')
    const nama_produk = btn.data('nama_produk')
    const jenis_produk = btn.data('jenis_produk')
    const stok_produk = btn.data('stok_produk')
    const harga_produk = btn.data('harga_produk')
    const route = btn.data('route')
    if (mode === 'edit') {
        modal.find('.modal-title').text('Edit Data')
        modal.find('#nama_produk').val(nama_produk)
        modal.find('#jenis_produk').val(jenis_produk)
        modal.find('#stok_produk').val(stok_produk)
        modal.find('#harga_produk').val(harga_produk)
        $('#modalFormProduk form').attr('action', route)
        // $('#method').html('@method("PUT")')
        modal.find('#method').html('@method("PATCH")')
        modal.find('form').attr('action', `{{ url('produk') }}/${id_produk}`)
    } else {
        modal.find('.modal-title').text('Form Absensi')
        modal.find('#namaProduk').val('')
        modal.find('#jenisProduk').val('')
        modal.find('#stokProduk').val('')
        modal.find('#hargaProduk').val('')
        modal.find('form').attr('action', `{{ url("produk") }}`)
    }
})

$('#modalFormProduk').on('show.bs.modal', function () {
        $('#nama_produk').delay(1000).focus().select();
    })
</script>
@endpush