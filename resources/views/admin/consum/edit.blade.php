@extends('admin.master')
@section('content')
<section class="content">

    <div class="row">

      <div class="col-12">
        <div class="box">

          <div class="box-header">
              <h4 class="box-title">Edit Consum</h4>
          </div>

          <form action="{{ route('consum.update',[$consum->id]) }}" method="POST">
            @csrf
            @method('patch')
            <div class="box-body">
              <div class="form-group row">
                <label class="col-form-label col-md-2">Nama</label>
                <div class="col-md-10 mb-3">
                  <input class="form-control" type="text" name="nama" required value="{{ $consum->nama }}">
                </div>
              </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Kategori</label>
                    <div class="col-md-10 mb-3">
                        <select name="kategori" value="{{ $consum->kategori }}" class="form-control">
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                        </select>
                    </div>
                </div>
              <div class="form-group row">
                <label class="col-form-label col-md-2">Harga</label>
                <div class="col-md-10 mb-3">
                    <input class="form-control" type="number" name="harga" value="{{ $consum->harga }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-md-2">Stok</label>
                <div class="col-md-10 mb-3">
                    <input class="form-control" type="text" name="stok" value="{{ $consum->stok }}">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-success">Update</button>
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
