@extends('templates.layout')

@push('style')

@endpush

@section('content')
    <section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="mt-5 mr-4"></div>
        <div class="row">
            <div class="card ml-4" style="width: 16rem;">
                <div class="card-body">
                  <h5 class="card-title">Produk</h5>
                  <p class="card-text">Kamu bisa mengecek data produk dengan menekan button</p>
                  <a href="{{('produk')}}" class="btn btn-primary">Table Produk</a>
                </div>
            </div>
            <div class="card ml-4" style="width: 16rem;">
                <div class="card-body">
                  <h5 class="card-title">Produk Masuk Keluar</h5>
                  <p class="card-text">Kamu bisa mengecek data produk masuk dan keluar dengan menekan button</p>
                  <a href="{{('produkmasukkeluar')}}" class="btn btn-primary">Table Kelola</a>
                </div>
            </div>
            <div class="card ml-4" style="width: 16rem;">
                <div class="card-body">
                  <h5 class="card-title">Laporan</h5>
                  <p class="card-text">Kamu bisa  mengecek laporan dengan menekan button</p>
                  <a href="{{('laporan')}}" class="btn btn-primary">Table Laporan</a>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="mb-5"></div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
@endsection

@push('script')
<script>

</script>
@endpush