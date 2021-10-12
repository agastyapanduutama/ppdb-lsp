    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?= $title ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">




        <script src="https://kit.fontawesome.com/f1edfd5750.js" crossorigin="anonymous"></script>

        <?= (isset($css)) ? "<link rel='stylesheet' href='" . base_url() . "assets/css/" . $css . ".css'>" : '' ?>
    </head>

    <body>

        <section class="h-100 w-100 bg-white" style="box-sizing: border-box">

            <div class="header-4-2 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">


                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($this->uri->segment(1) == 'beranda') {
                                                            echo "active";
                                                        } ?>" aria-current="page" href="<?= base_url('beranda') ?>">Beranda</a>
                                </li>


                            </ul>
                            <?php if (empty($_SESSION['logged_in'])) : ?>
                                <a href="<?= base_url('siswa/masuk') ?>" class="btn btn-default btn-no-fill">Masuk</a>
                                <a href="<?= base_url('siswa/daftar') ?>" class="btn btn-fill text-white">Daftar</a>

                            <?php else : ?>

                                <ul style="list-style-type:none;" class="float-right">
                                    <li class="nav-item dropdown">
                                        <button class="nav-link dropdown-toggle btn btn-fill text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= $_SESSION['nama_user'] ?>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="<?= base_url('siswa/profil') ?>">Akun</a></li>
                                            <li><a class="dropdown-item" href="<?= base_url('siswa/profil/pengaturan') ?>">Rubah Kata Sandi</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="<?= base_url('siswa/keluar') ?>">Keluar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>



            </div>
        </section>