@extends('admin.master')
@section('content')
<div class="col-12 mt-4">
    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Data Users</h3>
         <a href="{{ route('user.create') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i > Add</a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th>No</th>
                       <th>Fullname</th>
                       <th>Phone Number</th>
                       <th>Email</th>
                       <th>Time</th>
                       <th>action</th>
                   </tr>
               </thead>
               <tbody>
                @foreach ($users as $row)
                <tr>
                    <td>{{ $loop->iteration + ($users->perpage()) * ($users->currentpage()-1)}}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->no_telp }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->created_at->diffForHumans()}}</td>
                                <td>
                                    <form action="{{ route('user.destroy', [$row->id]) }}"
                                        onsubmit="return confirm('apakah anda yakin ingin menghapus,{{ $row->name }}?..')"
                                        method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <a class="btn btn-dark" href="{{ route('user.edit', [$row->id]) }}"><i class="fa fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        <a class="btn btn-warning" href="{{ route('user.show', [$row->id]) }}"><i class="fa fa-eye"></i></a>
                                    </form>
                                </td>
                    </tr>
                    @endforeach
               </tbody>
             </table>
             {{ $users->links() }}
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
</div>
@endsection
