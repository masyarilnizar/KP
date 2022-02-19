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
                        <h2 class="text-black font-w600">PBF</h2>
                        <p class="mb-0"> </p>
                    </div>
                    {{-- <div>
                        
                    </div> --}}
                </div>
                <div class="modal fade" id="addPbf">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama PBF</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Alamat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">No. Telepon</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama PIC</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">No. Telepon PIC</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">No. Rekening</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Lead Time</label>
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
                <div class="modal fade" id="editPbf">
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
                                        <label class="text-black font-w500">Nama PBF</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Alamat</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">No. Telepon</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama PIC</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">No. Telepon PIC</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">No. Rekening</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Lead Time</label>
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
                <div class="modal fade" id="detailPbf">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail PBF</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama PBF</label>
                                        <br>
                                        <label class="text-black font-w300">Sanbe</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Alamat</label>
                                        <br>
                                        <label class="text-black font-w300">Jl. Genteng</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">No. Telepon</label>
                                        <br>
                                        <label class="text-black font-w300">123123123</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Nama PIC</label>
                                        <br>
                                        <label class="text-black font-w300">Hari</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">No. Telepon PIC</label>
                                        <br>
                                        <label class="text-black font-w300">21321321</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">No. Telepon PIC</label>
                                        <br>
                                        <label class="text-black font-w300">21321321</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">No. Rekening PBF</label>
                                        <br>
                                        <label class="text-black font-w300">1111111</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Lead Time</label>
                                        <br>
                                        <label class="text-black font-w300">3ms</label>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th><strong>Nama Obat</strong></th>
                                                        <th><strong>Dosis Obat</strong></th>
                                                        <th><strong>Satuan Obat</strong></th>
                                                        <th><strong>Tanggal Beli</strong></th>
                                                        <th><strong>Expired Date</strong></th>
                                                        <th><strong>Harga Obat</strong></th>
                                                        <th><strong>Jumlah Beli</strong></th>
                                                        <th><strong>Stok</strong></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        
                                                        <td>
                                                            <div class="d-flex align-items-center"> <span aria-rowspan="2"
                                                                    class="w-space-no">Panadol</span>
                                                            </div>
                                                        </td>
                                                        <td>500mg</td>
                                                        <td>Tablet</td>
                                                        <td>1/1/2022</td>
                                                        <td>2/2/2023</td>
                                                        <td>2000</td>
                                                        <td>100</td>
                                                        <td>60</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <h4 class="card-title">Daftar PBF</h4>
                    <a href="javascript:void(0)" class="btn btn-primary mr-3 btn-sm" data-toggle="modal"
                            data-target="#addPbf">Tambah</a>
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
                                    <th><strong>Nama PBF</strong></th>
                                    
                                    <th><strong>Nama PIC</strong></th>
                                    <th><strong>No. Telepon PIC</strong></th>
                                    <th><strong>Lead Time</strong></th>
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
                                                class="w-space-no">PT. Hari Sehat</span>
                                        </div>
                                    </td>
                                    <td>Hari</td>
                                    <td>32132121</td>
                                    <td>3ms</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"
                                                data-toggle="modal" data-target="#editPbf"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-secondary shadow btn-xs sharp" data-toggle="modal"
                                                data-target="#detailPbf"><i class="fa fa-eye"></i></a>
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
