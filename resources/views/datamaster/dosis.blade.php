{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
    <!-- row -->
    <div class="col-lg-12">
        <div class="card">
            <div class="container-fluid">
                <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
                    <div class="mr-auto">
                        <h2 class="text-black font-w600">Manajemen Dosis Obat</h2>
                        <p class="mb-0"> </p>
                    </div>
                    {{-- <div>

                        
                    </div> --}}
                </div>
                <div class="modal fade" id="addDosis">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Dosis</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Dosis</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Dosis</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Satuan Dosis</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary">TAMBAH</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editDosis">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Obat</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Dosis</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Dosis</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Satuan Dosis</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary">TAMBAH</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="detailDosis">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Dosis</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Dosis</label>
                                        <br>
                                        <label class="text-black font-w300">001</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Dosis</label>
                                        <br>
                                        <label class="text-black font-w300">100</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Satuan</label>
                                        <br>
                                        <label class="text-black font-w300">MG</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <h4 class="card-title">Daftar Dosis Obat</h4>
                    <a href="javascript:void(0)" class="btn btn-primary mr-3 btn-sm" data-toggle="modal"
                            data-target="#addDosis">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th class="width50">
                                        <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                            <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th><strong>ID Dosis</strong></th>
                                    <th><strong>Nama Dosis</strong></th>

                                    <th><strong>Satuan Dosis</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheckBox2"
                                                required="">
                                            <label class="custom-control-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td><strong>001</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center"> <span aria-rowspan="2"
                                                class="w-space-no">100</span>
                                        </div>
                                    </td>
                                    <td>MG</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="modal"
                                                data-target="#editDosis"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-secondary shadow btn-xs sharp" data-toggle="modal"
                                                data-target="#detailDosis"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
