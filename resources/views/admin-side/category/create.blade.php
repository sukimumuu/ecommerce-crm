@extends('layout.master')
@section('content')
    <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Tambah Kategori Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('category-store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Kategori" name="category">
                  </div>

                 <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">Buat</button>
                  <button type="submit" class="btn btn-default">Batal</button>
                </div>
              </form>
            </div>

            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Kategori</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                      <tr class="bg-light">
                        <td>{{ $item->category }}</td>
                        <td>
                          Sunting | 
                          <a href="{{ route('products-destroy', ['id' => $item->id]) }}">Hapus</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
@endsection