@extends('admin.admin_master')
@section('admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Tambah Barang</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('barang.store') }}">
                                    @csrf
                                        {{-- END col-md-6 --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Nama <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="nama" class="form-control" required data-validation-required-message="This field is required">
                                                </div>
                                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                                            </div>
                                        </div>
                                        {{-- END col-md-6 --}}
                                    </div>
                                    {{-- END row select --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Merk <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="merk" name="merk" class="form-control" required
                                                        data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Harga <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="harga" name="harga" class="form-control" required
                                                        data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                    {{-- END row     --}}
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection

<script src="{{ asset('backend/js/pages/form-validation.js') }}"></script>
