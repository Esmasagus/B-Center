@extends('admin.master')
@section('content')
<div class="col-12 mt-4">
    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Data Consum</h3>
         <a href="{{ route('consum.create') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i > Add</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th>No</th>
                       <th>Nama</th>
                       <th>Kategori</th>
                       <th>Harga</th>
                       <th>Stok</th>
                       <th>Time</th>
                       <th>action</th>
                   </tr>
               </thead>
               <tbody>
                  @foreach ($consum as $row)
                    <tr>
                      <td>{{ $loop->iteration + ($consum->perpage()) * ($consum->currentpage()-1)}}</td>
                      <td>{{ $row->nama }}</td>
                      <td>{{ $row->kategori }}</td>
                      <td>@rupiah{{ $row->harga  }}</td>
                      <td>{{ $row->stok  }}</td>
                      <td>{{ $row->created_at->diffForHumans() }}</td>
                      <td>
                          <form action="{{ route('consum.destroy', [$row->id]) }}"
                              onsubmit="return confirm('apakah anda yakin ingin menghapus,{{ $row->nama }}?..')"
                              method="POST">
                              @csrf
                              {{ method_field('DELETE') }}
                              <a class="btn btn-dark" href="{{ route('consum.edit', [$row->id]) }}"><i class="fa fa-edit"></i></a>
                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                              <a class="btn btn-warning" href="{{ route('consum.show', [$row->id]) }}"><i class="fa fa-eye"></i></a>
                          </form>
                      </td>
                    </tr>
                  @endforeach
               </tbody>
             </table>
             {{ $consum->links() }}
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
</div>
@endsection
