
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
            <h4 class="card-title">Lokasi Wisata Baru ditambahkan</h4>
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
                        <td>Judul Wisata</td>
                        <td>Kategori</td>
                        <td>Tanggal Dibuat</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

</div>