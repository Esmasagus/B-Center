@extends('admin.master')
@section('content')
<div class="col-12 mt-4">
    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Detail Suppliers</h3>
         <a href="{{ route('supplier.index') }}" class="btn btn-success float-right"><i class="fa fa-arrow-left"></i > back</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example1" class="table table-border table-striped">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>{{ $supplier->name }}</td>
                </tr>
                <tr>
                    <td>address</td>
                    <td>:</td>
                    <td>{{ $supplier->address }}</td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>:</td>
                    <td>{{ $supplier->no_telp }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ $supplier->email }}</td>
                </tr>

                <tr>
                    <td>Created at</td>
                    <td>:</td>
                    <td>{{ $supplier->created_at->format('d F Y') }}</td>
                </tr>

                <tr>
                    <td>Updated at</td>
                    <td>:</td>
                    <td>{{ $supplier->updated_at->format('d F Y') }}</td>
                </tr>
             </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
</div>
@endsection