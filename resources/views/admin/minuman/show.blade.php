@extends('admin.master')
@section('content')
<div class="col-12 mt-4">
    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Detail Minuman</h3>
         <a href="{{ route('minuman.index') }}" class="btn btn-success float-right"><i class="fa fa-arrow-left"></i > back</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example1" class="table table-border table-striped">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $minuman->nama }}</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>@rupiah{{ $minuman->harga }}</td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td>{{ $minuman->stok }}</td>
                </tr>

                <tr>
                    <td>Created at</td>
                    <td>:</td>
                    <td>{{ $minuman->created_at->format('d F Y') }}</td>
                </tr>

                <tr>
                    <td>Updated at</td>
                    <td>:</td>
                    <td>{{ $minuman->updated_at->diffForHumans() }}</td>
                </tr>
             </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
</div>
@endsection