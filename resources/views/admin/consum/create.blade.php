@extends('admin.master')
@section('content')
<section class="content">

    <div class="row">

      <div class="col-12">
        <div class="box">

          <div class="box-header">
              <h4 class="box-title">Add Consum</h4>
          </div>

          <form action="{{ route('consum.store') }}" method="POST">
            @csrf
            <div class="box-body">
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Nama</label>
                    <div class="col-md-10 mb-3">
                        <input class="form-control" type="text" name="nama" required value="{{ old('nama') }}">
                  </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">Kategori</label>
                <div class="col-md-10 mb-3">
                    <select name="kategori" value="{{ old('kategori') }}" class="form-control">
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                    </select>
                </div>
            </div>
              <div class="form-group row">
                  <label class="col-form-label col-md-2">Harga</label>
                  <div class="col-md-10 mb-3">
                      <input class="form-control" type="number" name="harga" value="{{ old('harga') }}">
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-form-label col-md-2">Stok</label>
                  <div class="col-md-10 mb-3">
                      <input class="form-control" type="number" name="stok" value="{{ old('stok') }}">
                  </div>
              </div>
          </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{ route('consum.index') }}" type="button" class="btn btn-danger float-right">Cancel</a>
            </div>
        </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </section>
@endsection
