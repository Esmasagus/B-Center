@extends('admin.master')
@section('content')
<section class="content">

    <div class="row">

      <div class="col-12">
        <div class="box">
            
          <div class="box-header">
              <h4 class="box-title">Add User</h4>  
          </div>

          <form action="{{ route('user.update',[$user->id]) }}" method="POST">
            @csrf
            @method('patch')
            <div class="box-body">
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Full Name</label>
                    <div class="col-md-10 mb-3">
                        <input class="form-control" type="text" name="name" required value="{{ $user->name }}">
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-form-label col-md-2">Phone Number</label>
                  <div class="col-md-10 mb-3">
                      <input class="form-control" type="text" name="no_telp" value="{{ $user->no_telp }}">
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-form-label col-md-2">Email</label>
                  <div class="col-md-10 mb-3">
                      <input class="form-control" type="email" name="email" value="{{ $user->email }}">
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-form-label col-md-2">Password</label>
                  <div class="col-md-10 mb-3">
                      <input class="form-control" type="password" name="password" value="{{ $user->password }}">
                  </div>
              </div>				
          </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-success">Update</button>
              <a href="{{ route('user.index') }}" type="button" class="btn btn-danger float-right">Cancel</a>
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