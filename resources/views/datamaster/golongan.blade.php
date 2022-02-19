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
                        <h2 class="text-black font-w600">Golongan</h2>
                        <p class="mb-0"> </p>
                    </div>
                </div>


                <div class="modal fade" id="addKatagori">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Katagori</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Katagori</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Katagori</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Golongan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary btn-sm">TAMBAH</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="addGolongan">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Golongan</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Golongan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Golongan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary btn-sm">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="addDaftar">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Daftar Obat & Golongan</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Obat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Obat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Katagori</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Golongan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary btn-sm">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="editKatagori">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Katagori</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Katagori</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Katagori</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Golongan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary btn-sm">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editGolongan">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Golongan</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Golongan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Golongan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary btn-sm">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editDaftar">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Daftar Obat & Golongan</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Obat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Obat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Katagori</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Golongan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="text" class="btn btn-primary btn-sm">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="detailKatagori">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Katagori</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Katagori</label>
                                        <br>
                                        <label class="text-black font-w300">001</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Katagori</label>
                                        <br>
                                        <label class="text-black font-w300">Analgesik</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Golongan</label>
                                        <br>
                                        <label class="text-black font-w300">Bebas</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="detailGolongan">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Golongan</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Golongan</label>
                                        <br>
                                        <label class="text-black font-w300">001</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Golongan</label>
                                        <br>
                                        <label class="text-black font-w300">Bebas</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="detailDaftar">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Daftar Obat & Golongan</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">ID Katagori</label>
                                        <br>
                                        <label class="text-black font-w300">001</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama Obat</label>
                                        <br>
                                        <label class="text-black font-w300">Panadol</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Golongan</label>
                                        <br>
                                        <label class="text-black font-w300">Antibiotik</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Katagori</label>
                                        <br>
                                        <label class="text-black font-w300">Bebas Terbatas</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <h4 class="card-title">Master Katagori</h4>
                    <a href="javascript:void(0)" class="btn btn-primary mr-3 btn-sm" data-toggle="modal"
                        data-target="#addKatagori">Tambah</a>
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
                                    <th><strong>ID Katagori</strong></th>
                                    <th><strong>Nama Katagori</strong></th>
                                    <th><strong>Nama Golongan</strong></th>
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
                                                class="w-space-no">Analgesik</span>
                                        </div>
                                    </td>
                                        <td>Bebas</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                data-toggle="modal" data-target="#editKatagori"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-secondary shadow btn-xs sharp" data-toggle="modal"
                                                data-target="#detailKatagori"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheckBox2"
                                                required="">
                                            <label class="custom-control-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td><strong>002</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center"> <span aria-rowspan="2"
                                                class="w-space-no">Antibiotik</span>
                                        </div>
                                    </td>
                                        <td>Bebas Terbatas</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                data-toggle="modal" data-target="#editKatagori"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-secondary shadow btn-xs sharp" data-toggle="modal"
                                                data-target="#detailKatagori"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-header">
                    <h4 class="card-title">Master Golongan Obat</h4>
                    <a href="javascript:void(0)" class="btn btn-primary mr-3 btn-sm" data-toggle="modal"
                        data-target="#addGolongan">Tambah</a>
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
                                    <th><strong>ID Golongan</strong></th>
                                    <th rowspan="3"><strong>Nama Golongan</strong></th>
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
                                                class="w-space-no">Bebas</span>
                                                
                                        </div>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-toggle="modal" data-target="#editGolongan"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-secondary shadow btn-xs sharp" data-toggle="modal"
                                                    data-target="#detailGolongan"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </td>     
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheckBox2"
                                                required="">
                                            <label class="custom-control-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td><strong>002</strong></td>
                                    <td>
                                        
                                            <div class="d-flex align-items-center"> <span aria-rowspan="2"
                                                class="w-space-no">Bebas Terbatas</span>
                                        </div>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-toggle="modal" data-target="#editGolongan"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-secondary shadow btn-xs sharp" data-toggle="modal"
                                                    data-target="#detailGolongan"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheckBox2"
                                                required="">
                                            <label class="custom-control-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td><strong>003</strong></td>
                                    <td>
                                        
                                            <div class="d-flex align-items-center"> <span aria-rowspan="2"
                                                class="w-space-no">Keras</span>
                                        </div>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                    data-toggle="modal" data-target="#editGolongan"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-secondary shadow btn-xs sharp" data-toggle="modal"
                                                    data-target="#detailGolongan"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-header">
                    <h4 class="card-title">Daftar Obat & Golongannya</h4>
                    <a href="javascript:void(0)" class="btn btn-primary mr-3 btn-sm" data-toggle="modal"
                        data-target="#addDaftar">Tambah</a>
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
                                    <th><strong>Katagori</strong></th>
                                    <th><strong>Golongan</strong></th>
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
                                        <td>Antibiotik</td>
                                        <td>Bebas Terbatas</td>
                                    <td class='right-align-class'>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                data-toggle="modal" data-target="#editDaftar"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-secondary shadow btn-xs sharp" data-toggle="modal"
                                                data-target="#detailDaftar"><i class="fa fa-eye"></i></a>
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
