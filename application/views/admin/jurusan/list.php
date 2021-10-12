

<div class="card">
    <div class="card-header">
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalTambah">Tambah Data</button>
        <h4 class="card-title"><?= $title ?></h4>
    </div>
    <div class="card-body">
        <div class="table-responsive table-hover table-sales">
            <table id="list_jurusan" class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama jurusan</td>
                        <td>Keterangan</td>
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
                    <h5 class="modal-title">Tambah jurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formAddjurusan">
                    <div class="modal-body">
                        <label for="">Label yang memililiki tanda <span style="color:red">*</span> Tidak boleh kosong</label>
                        <br><br><br>
                        <div class="form-group">
                            <label>Nama jurusan <span style="color:red">*</span> </label>
                            <input type="text" name="nama_jurusan" id="jurusan" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Keterangan <span style="color:red">*</span> </label>
                            <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
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
                    <h5 class="modal-title">Tambah jurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formEditjurusan">
                    <div class="modal-body">

                        <label for="">Label yang memililiki tanda <span style="color:red">*</span> Tidak boleh kosong</label>
                        <br><br><br>

                        <input type="hidden" name="id" id="idData">


                        <div class="form-group">
                            <label>Nama jurusan <span style="color:red">*</span> </label>
                            <input type="text" name="nama_jurusan" id="jurusan1" class="form-control" required>
                        </div>



                        <div class="form-group">
                            <label>Keterangan <span style="color:red">*</span> </label>
                            <textarea class="form-control" name="keterangan" id="keterangan1" cols="30" rows="10"></textarea>
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