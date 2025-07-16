@extends('templates.layout')

@push('style')

@endpush

@section('content')
    <section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Produk Masuk Keluar</h3>

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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFormProdukmasukkeluar">
                Tambah kelola
            </button>
        </div>
        @include('produkmasukkeluar.data')
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
@endsection
@include('produkmasukkeluar.form')

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

    $('#tbl-produkmasukkeluar').DataTable();

    // $('.remove').on('click', function() {
    //     const data = $(this).closest('tr').find('td:eq(1)').text()

    //     $('#data-delete').text(data)

    //     const form = $(this).closest('tr').find('form')
    //     $('#btn-confirm').on('click', function() {
    //         form.submit()
    //     })
    // })

    $(document).on('click', '.remove', function () {
    const id_kelola = $(this).data('id');
    const url =`{{ url('produkmasukkeluar') }}/${id_kelola}`; // Sesuaikan dengan route kamu

  $('#formDelete').attr('action',url);
});

    $('#modalFormProdukmasukkeluar').on('show.bs.modal', function(e){
    const btn = $(e.relatedTarget)
    const modal = $(this)
    const mode = btn.data('mode')
    const id_kelola = btn.data('id_kelola')
    const id_produk = btn.data('id_produk')
    const nama_produk = btn.data('nama_produk')
    const jenis_produk = btn.data('jenis_produk')
    const produk_masuk = btn.data('produk_masuk')
    const tanggal_produk_masuk = btn.data('tanggal_produk_masuk')
    const produk_keluar = btn.data('produk_keluar')
    const tanggal_produk_keluar = btn.data('tanggal_produk_keluar')
    const total_produk_masuk_keluar = btn.data('total_produk_masuk_keluar')
    const route = btn.data('route')
    if (mode === 'edit') {
        modal.find('.modal-title').text('Edit Data')
        modal.find('#id_kelola').val(id_kelola)
        modal.find('#id_produk').val(id_produk)
        modal.find('#nama_produk').val(nama_produk)
        modal.find('#jenis_produk').val(jenis_produk)
        modal.find('#produk_masuk').val(produk_masuk)
        modal.find('#tanggal_produk_masuk').val(tanggal_produk_masuk)
        modal.find('#produk_keluar').val(produk_keluar)
        modal.find('#tanggal_produk_keluar').val(tanggal_produk_keluar)
        modal.find('#total_produk_masuk_keluar').val(total_produk_masuk_keluar)
        $('#modalFormProdukmasukkeluar form').attr('action', route)
        $('#methodInput').val('PUT')
        // $('#method').html('@method("PUT")')
        modal.find('#method').html('@method("PATCH")')
        modal.find('form').attr('action', `{{ url('produkmasukkeluar') }}/${id_kelola}`)
    } else {
        modal.find('.modal-title').text('Form Produk Masuk Keluar')
        modal.find('#id_produk').val('')
        modal.find('#nama_produk').val('')
        modal.find('#jenis_produk').val('')
        modal.find('#produk_masuk').val('')
        modal.find('#tanggal_produk_masuk').val('')
        modal.find('#produk_keluar').val('')
        modal.find('#tanggal_produk_keluar').val('')
        modal.find('#total_produk_masuk_keluar').val('')
        modal.find('form').attr('action', `{{ url("produkmasukkeluar") }}`)
        $('#methodInput').val('POST')
    }
})

$('#modalFormprodukmasukkeluar').on('show.bs.modal', function () {
        $('#id_kelola').delay(1000).focus().select();
    })
</script>
@endpush