@extends('layout.template')
@section('body')
<!-- modal tambah data -->
<div class="modal fade" id="modalTambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah fasilitas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nm_fasilitas">Nama Fasilitas</label>
                        <input type="text" name="nm_fasilitas" class="form-control" placeholder="nama fasilitas">
                    </div>
                    <div class="form-group">
                        <label for="jml_fasilitas">Jumlah</label>
                        <input type="number" name="jml_fasilitas" class="form-control" placeholder="jumlah fasilitas">
                    </div>
                    <div class="form-group">
                        <label for="jml_fasilitas">Satuan</label>
                        <input type="text" name="jml_fasilitas" class="form-control" placeholder="satuan fasilitas">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- end-modal tambah data -->

<!-- modal edit data -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit fasilitas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nm_fasilitas">Nama Fasilitas</label>
                        <input type="text" name="nm_fasilitas" class="form-control" placeholder="nama fasilitas">
                    </div>
                    <div class="form-group">
                        <label for="jml_fasilitas">Jumlah</label>
                        <input type="number" name="jml_fasilitas" class="form-control" placeholder="jumlah fasilitas">
                    </div>
                    <div class="form-group">
                        <label for="jml_fasilitas">Satuan</label>
                        <input type="text" name="jml_fasilitas" class="form-control" placeholder="satuan fasilitas">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- end-modal edit data -->

<!-- modal hapus data -->
<div class="modal fade" id="modalHapus">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Yakin ingin menghapus data ini...?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-warning">Hapus</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- end-modal hapus data -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="text-center">Fasilitas UKM</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- /.card-header -->
                            <!-- modal add-data -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambah">
                                <i class="fas fa-plus"></i>
                                <span class="ml-2">Tambah</span>
                            </button>
                        </div>
                        <div class="table-responsive">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama fasilitas</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>1</td>
                                            <td>Trident</td>
                                            <td>Explorer</td>
                                            <td>Explorer</td>
                                            <td>
                                                <!-- modal add-data -->
                                                <button type="button" class="btn btn-warning mr-1" data-toggle="modal" data-target="#modalInfo">
                                                    <i class="fas fa-info-circle"></i>
                                                </button>
                                                <!-- end-modal add-data -->
                                                <!-- modal add-data -->
                                                <button type="button" class="btn btn-info mr-1" data-toggle="modal" data-target="#modalEdit">
                                                    <i class="far fa-edit"></i>
                                                </button>
                                                <!-- end-modal add-data -->
                                                <!-- modal hapus data -->
                                                <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#modalHapus">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                                <!-- end-modal hapus data -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.card -->

@endsection