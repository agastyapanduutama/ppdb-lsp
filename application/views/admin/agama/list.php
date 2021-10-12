

<div class="card">
    <div class="card-header">
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalTambah">Tambah Data</button>
        <h4 class="card-title"><?= $title ?></h4>
    </div>
    <div class="card-body">
        <div class="table-responsive table-hover table-sales">
            <table id="list_agama" class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Agama</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalTambah">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Agama</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formAddagama">
                    <div class="modal-body">
                        <label for="">Label yang memililiki tanda <span style="color:red">*</span> Tidak boleh kosong</label>
                        <br><br><br>
                        <div class="form-group">
                            <label>Nama Agama <span style="color:red">*</span> </label>
                            <input type="text" name="nama_agama" id="Agama" class="form-control" required>
                        </div>

                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalEdit">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Agama</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formEditagama">
                    <div class="modal-body">

                        <label for="">Label yang memililiki tanda <span style="color:red">*</span> Tidak boleh kosong</label>
                        <br><br><br>

                        <input type="hidden" name="id" id="idData">


                        <div class="form-group">
                            <label>Nama Agama <span style="color:red">*</span> </label>
                            <input type="text" name="nama_agama" id="agama1" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>