@extends('admin.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Suppliers</h3>
                        <a target="_blank" href="{{ route('cetak_supplier') }}" class="btn btn-danger float-right"><i
                            class="fa fa-file"></i> Print</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($supplier as $row)
                                        <tr>
                                            <td>{{ $loop->iteration + $supplier->perpage() * ($supplier->currentpage() - 1) }}
                                            </td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->no_telp }}</td>
                                            <td>{{ $row->address }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->created_at->format('d F Y')}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $supplier->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection
