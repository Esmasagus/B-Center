@extends('admin.master')
@section('content')
<section class="content">

    <div class="row">

      <div class="col-12">
        <div class="box">
            
          <div class="box-header">
              <h4 class="box-title">Add Supplier</h4>  
          </div>

          <form action="{{ route('supplier.update',[$supplier->id]) }}" method="POST">
            @csrf
            @method('patch')
            <div class="box-body">
              <div class="form-group row">
                <label class="col-form-label col-md-2">Name</label>
                <div class="col-md-10 mb-3">
                    <input class="form-control" type="text" name="name" required value="{{ $supplier->name }}">
              </div>
          </div>

          <div class="form-group row">
              <label class="col-form-label col-md-2">Address</label>
              <div class="col-md-10 mb-3">
                  <textarea class="textarea form-control" type="text" name="address" value="{{ $supplier->address }}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; padding: 10px;"></textarea>
              </div>
          </div>				
          <div class="form-group row">
              <label class="col-form-label col-md-2">Phone Number</label>
              <div class="col-md-10 mb-3">
                  <input class="form-control" type="text" name="no_telp" value="{{ $supplier->no_telp }}">
              </div>
          </div>

          <div class="form-group row">
              <label class="col-form-label col-md-2">Email</label>
              <div class="col-md-10 mb-3">
                  <input class="form-control" type="email" name="email" value="{{ $supplier->email }}">
              </div>
          </div>

          </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-success">Update</button>
              <a href="{{ route('supplier.index') }}" type="button" class="btn btn-danger float-right">Cancel</a>
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