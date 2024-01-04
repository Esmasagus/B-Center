@extends('admin.master')
@section('content')
<div class="col-12 mt-4">
    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Detail Seragam</h3>
         <a href="{{ route('seragam.index') }}" class="btn btn-success float-right"><i class="fa fa-arrow-left"></i > back</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example1" class="table table-border table-striped">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $seragam->nama }}</td>
                </tr>
                <tr>
                    <td>Ukuran</td>
                    <td>:</td>
                    <td>{{ $seragam->ukuran }}</td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td>{{ $seragam->stok }}</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>{{ $seragam->harga }}</td>
                </tr>

                <tr>
                    <td>Created at</td>
                    <td>:</td>
                    <td>{{ $seragam->created_at->format('d F Y') }}</td>
                </tr>

                <tr>
                    <td>Updated at</td>
                    <td>:</td>
                    <td>{{ $seragam->updated_at->format('d F Y') }}</td>
                </tr>
             </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
</div>
@endsection