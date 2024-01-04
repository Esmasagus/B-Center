@extends('admin.master')
@section('content')
<div class="col-12 mt-4">
    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Detail Users</h3>
         <a href="{{ route('user.index') }}" class="btn btn-success float-right"><i class="fa fa-arrow-left"></i > back</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example1" class="table table-bordered table-striped">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>:</td>
                    <td>{{ $user->no_telp }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ $user->email }}</td>
                </tr>

                <tr>
                    <td>Created at</td>
                    <td>:</td>
                    <td>{{ $user->created_at->format('d F Y') }}</td>
                </tr>

                <tr>
                    <td>Updated at</td>
                    <td>:</td>
                    <td>{{ $user->updated_at->format('d F Y') }}</td>
                </tr>
             </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
</div>
@endsection