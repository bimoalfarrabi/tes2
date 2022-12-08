@extends('admin.admin_master')

@section('admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Data Karyawan</h3>
                                <a href="{{ route('karyawan.add') }}" style="float: right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah User</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $allDataUser as $key => $user )
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $user->nik }}</td>
                                                <td>{{ $user->namaKaryawan }}</td>
                                                <td>{{ $user->jabatanKaryawan }}</td>
                                                <td>
                                                    <a href="{{ route('karyawans.edit',$user->id) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ route('karyawans.delete',$user->id) }}" id="delete" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection

{{-- Vendor.JS --}}
<script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js ') }}"></script>
<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>
