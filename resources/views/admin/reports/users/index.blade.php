@extends('admin.master')
@section('title')
  Data Users
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Users</h3>
                        <a target="_blank" href="{{ route('cetak_user') }}" class="btn btn-danger float-right"><i
                            class="fa fa-file"></i> Print</a>
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
                                    @foreach ($user as $row)
                                        <tr>
                                            <td>{{ $loop->iteration + $user->perpage() * ($user->currentpage() - 1) }}
                                            </td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->no_telp }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $user->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection
