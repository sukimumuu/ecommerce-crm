@extends('layout.master')
@section('content')
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Produk</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Stok</th>
                      <th>Harga</th>
                      <th>Kategori</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $item)
                      <tr>
                        <td>{{ $item->products_name }}</td>
                        <td>{{ $item->stocks }}</td>
                        <td>{{ $item->prices }}</td>
                        <td><span class="tag tag-success">{{ $item->categories }}</span></td>
                        <td>{{ $item->tag }}</td>
                        <td>Sunting | Hapus</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection