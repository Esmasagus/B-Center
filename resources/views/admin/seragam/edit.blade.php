@extends('admin.master')
@section('content')
<section class="content">

    <div class="row">

      <div class="col-12">
        <div class="box">
            
          <div class="box-header">
              <h4 class="box-title">Add Seragam</h4>  
          </div>

          <form action="{{ route('seragam.update',[$seragam->id]) }}" method="POST">
            @csrf
            @method('patch')
            <div class="box-body">
              <div class="form-group row">
                <label class="col-form-label col-md-2">Nama</label>
                <div class="col-md-10 mb-3">
                    <input class="form-control" type="text" name="nama" required value="{{ $seragam->nama }}">
              </div>
          </div>

          <div class="form-group row">
              <label class="col-form-label col-md-2">Ukuran</label>
              <div class="col-md-10 mb-3">
                  <select name="ukuran" class="form-control" value="{{ $seragam->ukuran }}">
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                  </select>
              </div>
          </div>				
          <div class="form-group row">
              <label class="col-form-label col-md-2">Stok</label>
              <div class="col-md-10 mb-3">
                  <input class="form-control" type="text" name="stok" value="{{ $seragam->stok }}">
              </div>
          </div>

          <div class="form-group row">
              <label class="col-form-label col-md-2">Harga</label>
              <div class="col-md-10 mb-3">
                  <input class="form-control" type="number" name="harga" value="{{ $seragam->harga }}">
              </div>
          </div>

          </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-success">Update</button>
              <a href="{{ route('seragam.index') }}" type="button" class="btn btn-danger float-right">Cancel</a>
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