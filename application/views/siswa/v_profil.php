<link rel="stylesheet" href="<?= base_url() ?>assets/admin//assets/css/azzara.min.css">
<div class="container">
    <div class="card">

        <div class="card-header">
            <h3>Status Penerimaan</h3>
        </div>
        <div class="card-body">
            <?php if ($data->status == '1') : ?>
                <button class="btn btn-success">Diterima</button>
                <p>Siswa Yang sudah diterima tidak dapat merubah data, silakan hubungi bagian terkait</p>
            <?php elseif ($data->status == '2') : ?>
                <button class="btn btn-info text-white">Cadangan</button>
            <?php elseif ($data->status == '3') : ?>
                <button class="btn btn-dark">Tidak Diterima</button>
            <?php else : ?>
                <button class="btn btn-danger">Belum Di konfirmasid all i</button>
            <?php endif ?>
        </div>
    </div>

    <div class="card">

        <div class="card-header">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
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
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-1" type="button" class="btn btn-success">1</a>
                        <p><small>Bio Data 1</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-2" type="button" class="btn btn-default" disabled="disabled">2</a>
                        <p><small>Bio Data 2</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-3" type="button" class="btn btn-default" disabled="disabled">3</a>
                        <p><small>Nilai Rapot</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-4" type="button" class="btn btn-default" disabled="disabled">4</a>
                        <p><small>Foto</small></p>
                    </div>
                </div>
            </div>

            <form id="target" enctype="multipart/form-data" method="POST" action="<?= base_url('siswa/profil/update/aksi/' . $this->req->acak($data->id)) ?>" role="form">
                <div class="panel panel-primary setup-content" id="step-1">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bio Data 1</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Nama Siswa<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Nama Siswa" type="text" value="<?= $data->nama_siswa ?>" name="nama_siswa" id="judul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NIK<span style="color:red">*</span>
                            </label>
                            <input required placeholder="NIK" type="number" value="<?= $data->nik ?>" name="nik" id="nik" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NISN<span style="color:red">*</span>
                            </label>
                            <input required placeholder="NISN" type="number" value="<?= $data->nisn ?>" name="nisn" id="nisn" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Tempat Lahir" type="text" value="<?= $data->tempat_lahir ?>" name="tempat_lahir" id="tempat_lahir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>tanggal Lahir<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Tanggal Lahir" type="date" value="<?= $data->tanggal_lahir ?>" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin<span style="color:red">*</span> :
                            </label>
                            <input required <?php if ($data->jk == '0') {
                                                echo "checked";
                                            } ?> type="radio" name="jk" id="jk" class="" value="0">Perempuan
                            <input required <?php if ($data->jk == '1') {
                                                echo "checked";
                                            } ?> type="radio" name="jk" id="jk" class="" value="1">Laki-laki
                        </div>
                        <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                    </div>
                </div>

                <div class="panel panel-primary setup-content" id="step-2">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bio Data 2</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Agama<span style="color:red">*</span>
                            </label>
                            <select name="id_agama" class="form-control" id="">
                                <?php foreach ($agama as $a) : ?>
                                    <option <?php if ($data->id_agama == $a->id) {
                                                echo "selected";
                                            } ?> value="<?= $a->id ?>"><?= $a->nama_agama ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Asal Sekolah<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Asal Sekolah" type="text" value="<?= $data->sekolah_asal ?>" name="sekolah_asal" id="sekolah_asal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Orang tua/wali<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Nama Orang Tua Wali" type="text" value="<?= $data->nama_ortu ?>" name="nama_ortu" id="nama_ortu" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Alamat<span style="color:red">*</span>
                            </label>
                            <textarea name="alamat" placeholder="Alamat Saat ini" class="form-control" id="" cols="30" rows="5"><?= $data->alamat ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Desa Kelurahan<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Desa / Kelurahan anda saat ini" type="text" value="<?= $data->desa ?>" name="desa" id="desa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kecamatan<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Kecamatan Saat ini" type="text" value="<?= $data->kecamatan ?>" name="kecamatan" id="kecamatan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kota<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Kota Saat ini" type="text" value="<?= $data->kota ?>" name="kota" id="kota" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Provinsi<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Provinsi Saat ini" type="text" value="<?= $data->provinsi ?>" name="provinsi" id="provinsi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>No HP/WA<span style="color:red">*</span>
                            </label>
                            <input required placeholder="No HP/WA anda" type="number" value="<?= $data->no_hp ?>" name="no_hp" id="no_hp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jurusan Diminati<span style="color:red">*</span>
                            </label>
                            <select name="id_jurusan" class="form-control" id="">
                                <?php foreach ($jurusan as $j) : ?>
                                    <option <?php if ($data->id_agama == $a->id) {
                                                echo "selected";
                                            } ?> value="<?= $j->id ?>"><?= $j->nama_jurusan ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                    </div>
                </div>

                <div class="panel panel-primary setup-content" id="step-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nilai Raport</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Nilai Rapor UN Bahasa Indonesia<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Nilai Rapor UN Bahasa Indonesia" type="number" value="<?= $data->nilai_un_ind ?>" name="nilai_un_ind" id="nilai_un_ind" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nilai Rapor UN Bahasa Inggris<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Nilai Rapor UN Bahasa Inggris" type="number" value="<?= $data->nilai_un_ing ?>" name="nilai_un_ing" id="nilai_un_ing" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nilai Rapor UN Matematika<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Nilai Rapor UN Matematika" type="number" value="<?= $data->nilai_un_mat ?>" name="nilai_un_mat" id="nilai_un_mat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nilai Rapor UN IPA<span style="color:red">*</span>
                            </label>
                            <input required placeholder="Nilai Rapor UN IPA" type="number" value="<?= $data->nilai_un_ipa ?>" name="nilai_un_ipa" id="nilai_un_ipa" class="form-control">
                        </div>
                        <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                    </div>
                </div>

                <div class="panel panel-primary setup-content" id="step-4">
                    <div class="panel-heading">
                        <h3 class="panel-title">Foto</h3>
                    </div>
                    <div class="panel-body">
                        <span>Abaikan jika tidak ingin dirubah</span>
                        <div class="form-group">
                            <label>Foto Siswa<span style="color:red">*</span>
                            </label>
                            <input type="file" name="foto" id="imgInp" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Preview Gambar</label><br>
                            <?php if ($data->foto != '') : ?>
                                <img id="imgView" src="<?= base_url() ?>assets/upload/siswa/<?= $data->foto ?>" class="img-thumbnail" src="#" width="300" alt="Gambar" />
                            <?php else : ?>
                                <img id="imgView" src="<?= base_url() ?>assets/img/face.png" class="img-thumbnail" src="#" width="300" alt="Gambar" />
                            <?php endif; ?>
                        </div>
                    </div>

                    <button class="btn btn-success pull-right" type="submit">Finish!</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
