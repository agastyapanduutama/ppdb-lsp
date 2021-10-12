     <section class="h-100 w-100 bg-white" style="box-sizing: border-box">

         <div class="header-4-2 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
             <div>
                 <div class="mx-auto d-flex flex-lg-row flex-column hero">
                     <!-- Left Column -->
                     <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                         <h1 class="title-text-big">
                             Penerimaan <br class="d-lg-block d-none" />
                             Peserta Didik Baru
                         </h1>
                         <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                             <button class="btn d-inline-flex mb-md-0 btn-try text-white">
                                 Daftar sekarang
                             </button>
                         </div>
                     </div>
                     <!-- Right Column -->
                     <div class="right-column text-center d-flex justify-content-lg-end justify-content-center pe-0">
                         <img id="img-fluid" width="400" class="h-auto mw-100" src="<?= base_url('assets/img/education.png') ?>" />
                     </div>
                 </div>
             </div>
         </div>
     </section>




     <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f2f6ff">


         <style>

         </style>

         <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
             <!-- Data Covid -->
             <div class="container mb-5">
                 <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                     <h2 class="title-text">Kasus Covid-19</h2>
                 </div>
                 <div class="row">
                     <div class="col-sm-12 col-md-3">
                         <div class="card text-white bg-danger mb-3">
                             <div class="card-body ">
                                 <div class="row align-items-center">
                                     <div class="col col-stats ml-3 ml-sm-0">
                                         <div class="numbers">
                                             <p class="card-category">Total Positif</p>
                                             <h4 class="card-title" id="positif"><?= $positif ?>
                                             </h4>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-md-3">
                         <div class="card text-white bg-success  mb-3">
                             <div class="card-body ">
                                 <div class="row align-items-center">
                                     <div class="col col-stats ml-3 ml-sm-0">
                                         <div class="numbers">
                                             <p class="card-category">Total Sembuh</p>
                                             <h4 class="card-title" id="sembuh"><?= $sembuh ?></h4>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-md-3">
                         <div class="card text-dark bg-warning mb-3">
                             <div class="card-body ">
                                 <div class="row align-items-center">
                                     <div class="col col-stats ml-3 ml-sm-0">
                                         <div class="numbers">
                                             <p class="card-category">Total Dirawat</p>
                                             <h4 class="card-title" id="dirawat"><?= $dirawat ?></h4>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-md-3">
                         <div class="card text-white bg-dark mb-3">
                             <div class="card-body ">
                                 <div class="row align-items-center">
                                     <div class="col col-stats ml-3 ml-sm-0">
                                         <div class="numbers">
                                             <p class="card-category">Total Meninggal</p>
                                             <h4 class="card-title" id="meninggal"><?= $meninggal ?></h4>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="container mx-auto mb-5">
                 <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                     <h2 class="title-text">Tips keluar di tempat umum</h2>
                     <p class="caption-text mx-auto">
                         Tetap patuhi Prokes selama pandemi Covid-19
                     </p>
                 </div>
                 <div class="d-flex flex-wrap">
                     <div class="card mb-3">
                         <div class="row g-0">
                             <div class="col-3">
                                 <img class="img-fluid rounded-start" width="200" src="<?= base_url('assets/img/social_distance.png') ?>" alt="">
                             </div>
                             <div class="col-8">
                                 <div class="card-body">
                                     <h5 class="card-title">Menjaga Jarak</h5>
                                     <p class="card-text">Menjaga jarak merupakan cara yang paling efektif untuk menahan penyebaran virus corona dan juga Menjaga jarak memperlambat penyebaran virus dari individu yang tidak mengalami gejala penyakit dan individu yang tidak tahu bahwa dirinya telah terinfeksi.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex flex-wrap">
                     <div class="card mb-3">
                         <div class="row g-0">
                             <div class="col-3">
                                 <img class="img-fluid rounded-start" width="200" src="<?= base_url('assets/img/keep_mask.png') ?>" alt="">
                             </div>
                             <div class="col-8">
                                 <div class="card-body">
                                     <h5 class="card-title">Memakai Masker</h5>
                                     <p class="card-text">Nah, memakai masker hidung bisa menjadi cara yang cukup ampuh untuk melindungi diri. Masker hidung juga bisa membantu mencegah penularan kuman penyebab penyakit, terutama di tengah pandemi COVID-19 saat ini.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="d-flex flex-wrap">
                     <div class="card mb-3">
                         <div class="row g-0">
                             <div class="col-3">
                                 <img class="img-fluid rounded-start" width="200" src="<?= base_url('assets/img/hand_wash.png') ?>" alt="">
                             </div>
                             <div class="col-8">
                                 <div class="card-body">
                                     <h5 class="card-title">Mencuci Tangan</h5>
                                     <p class="card-text">Saat menjaga kebersihan diri, salah satu cara terpenting yang harus ditempuh adalah dengan mencuci tangan. Hal ini penting karena tangan sering kali menjadi perantara penularan penyakit.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>