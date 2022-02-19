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
                        <h2 class="text-black font-w600">Manajemen Kandungan Obat</h2>
                        <p class="mb-0"> </p>
                    </div>
                    
                </div>
                <div class="modal fade" id="addKandungan">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Kandungan Obat</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Kandungan Obat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Dosis Kandungan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="addDaftarKand">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Daftar Obat & Kandungan</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama  Obat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Kandungan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Dosis Kandungan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editKandungan">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Kandungan Obat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Dosis Kandungan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editDaftarKand">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Obat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Kandungan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Dosis Kandungan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="detailKandungan">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Kandungan Obat</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID</label>
                                        <br>
                                        <label class="text-black font-w300">001</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Kandungan Obat</label>
                                        <br>
                                        <label class="text-black font-w300">Paracetamol</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Dosis Kandungan</label>
                                        <br>
                                        <label class="text-black font-w300">500mg</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="detailDaftarKand">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Daftar Obat & Kandungan</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID</label>
                                        <br>
                                        <label class="text-black font-w300">001</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Obat</label>
                                        <br>
                                        <label class="text-black font-w300">Panadol</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Kandungan Obat</label>
                                        <br>
                                        <label class="text-black font-w300">Paracetamol</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Dosis Kandungan</label>
                                        <br>
                                        <label class="text-black font-w300">500mg</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <h4 class="card-title">Daftar Manajemen Kandungan Obat</h4>
                    <a href="javascript:void(0)" class="btn btn-primary mr-3 btn-sm" data-toggle="modal"
                            data-target="#addKandungan">Tambah</a>
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
                                    <th><strong>ID</strong></th>
                                    <th><strong>Nama Kandungan Obat</strong></th>
                                    <th><strong>Dosis Kandungan</strong></th>
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
                                                class="w-space-no">Paracetamol</span>
                                        </div>
                                    </td>
                                        <td>500mg</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                data-toggle="modal" data-target="#editKandungan"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-secondary shadow btn-xs sharp" data-toggle="modal"
                                                data-target="#detailKandungan"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-header">
                    <h4 class="card-title">Daftar Obat & Kandungannya</h4>
                    <a href="javascript:void(0)" class="btn btn-primary mr-3 btn-sm" data-toggle="modal"
                        data-target="#addDaftarKand">Tambah</a>
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
                                    <th><strong>ID</strong></th>
                                    <th><strong>Nama Obat</strong></th>
                                    <th><strong>Kandungan</strong></th>
                                    <th><strong>Dosis Kandungan</strong></th>
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
                                                class="w-space-no">Panadol</span>
                                        </div>
                                    </td>
                                        <td>Parasetamol</td>
                                        <td>500mg</td>
                                    <td class='right-align-class'>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                data-toggle="modal" data-target="#editDaftarKand"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-secondary shadow btn-xs sharp" data-toggle="modal"
                                                data-target="#detailDaftarKand"><i class="fa fa-eye"></i></a>
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
