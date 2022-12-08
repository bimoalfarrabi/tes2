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
                                <h3 class="box-title">Data Barang</h3>
                                <a href="{{ route('barang.add') }}" style="float: right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Barang</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Merk</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $allDataBarang as $key => $barang )
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $barang->name }}</td>
                                                <td>{{ $barang->merk }}</td>
                                                <td>{{ $barang->harga }}</td>
                                                <td>
                                                    <a href="{{ route('barangs.edit',$barang->id) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ route('barangs.delete',$barang->id) }}" id="delete" class="btn btn-danger">Hapus</a>
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
