@extends('admin.admin_master')
@section('admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Form Validation</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Forms</li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Form Validation</h4>
                        <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning"
                                href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form novalidate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Grup User <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="selectUser" id="selectUser" required class="form-control">
                                                        <option value="">Pilih Grup User</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="user">User</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- END basic select --}}
                                        </div>
                                        {{-- END col-md-6 --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Nama <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="textNama" class="form-control" required
                                                        data-validation-required-message="This field is required">
                                                </div>
                                                <div class="form-control-feedback"><small>Add <code>required</code>
                                                        attribute to field for required validation.</small></div>
                                            </div>
                                        </div>
                                        {{-- END col-md-6 --}}
                                    </div>
                                    {{-- END row select --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Email <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control" required
                                                        data-validation-required-message="This field is required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Password <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" name="password" class="form-control" required
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
