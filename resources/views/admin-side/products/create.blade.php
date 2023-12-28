@extends('layout.master')
@section('content')
    <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Tambah Produk Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('products-store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Nama Produk" name="products_name">
                  </div>
                  <div class="d-flex mb-3">
                    <input type="text" class="form-control" id="" placeholder="Stok" name="stocks">
                    <input type="text" class="form-control" id="" placeholder="Harga" name="prices">
                  </div>
                  <div class="d-flex">
                    <input type="text" class="form-control" id="" placeholder="Kategori" name="categories">
                    <input type="text" class="form-control" id="" placeholder="Tag" name="tag">
                  </div>

                 <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">Buat</button>
                  <button type="submit" class="btn btn-default">Batal</button>
                </div>
              </form>
            </div>
@endsection