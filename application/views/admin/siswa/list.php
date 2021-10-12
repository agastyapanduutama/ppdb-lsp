<div class="card">
    <div class="card-header">
        <a href="<?= base_url('admin/siswa/tambah') ?>" class="btn btn-primary float-right">Tambah Data</a>
        <h4 class="card-title"><?= $title ?></h4>
    </div>
    <div class="card-body">
        <div class="table-responsive table-hover table-sales">
            <?php

            if ($this->session->flashdata('warning')) {
                echo '<div class="alert alert-warning">';
                echo $this->session->flashdata('warning');
                echo '</div>';
            }

            if ($this->session->flashdata('success')) {
                echo '`<div class="alert alert-success">';
                echo $this->session->flashdata('success');
                echo '</div>';
            }

            ?>
            <table id="list_siswa" class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Siswa</td>
                        <td>Jurusan</td>
                        <td>NIK</td>
                        <td>NISN</td>
                        <td>No HP/WA</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>


</div>