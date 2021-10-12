<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="card-category">Jumlah Siswa</p>
                            <h4 class="card-title"><?= $totalsiswa ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="card">
    <div class="card-header">
        <div class="card-head-row">
            <h4 class="card-title">Siswa Baru Daftar belum di Konfirmasi</h4>
            <div class="card-tools">
                <button onclick="window.location.reload()" class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive table-hover table-sales">
            <table id="list_siswa" class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Siswa</td>
                        <td>Jurusan</td>
                        <td>NIK</td>
                        <td>NISN</td>
                        <td>No HP/WA</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($listsiswa as $sis) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $sis->nama_siswa ?></td>
                            <td><?= $sis->nama_jurusan ?></td>
                            <td><?= $sis->nik ?></td>
                            <td><?= $sis->nisn ?></td>
                            <td><?= $sis->no_hp ?></td>
                            <td><span style='color:red'>Belum di Konfirmasi</span></td>
                            <td><a href='<?php echo base_url('admin/siswa/edit/' . $this->req->acak($sis->id));?>' class='btn btn-warning btn-sm' title='Edit Data'><i class='fas fa-pencil-alt'></i></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>