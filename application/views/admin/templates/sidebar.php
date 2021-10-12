 <!-- Sidebar -->
 <div class="sidebar">

     <div class="sidebar-wrapper scrollbar-inner">
         <div class="sidebar-content">
             <div class="user">
                 <div class="avatar-sm float-left mr-2">
                     <img src="<?= base_url() ?>assets/admin/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                 </div>
                 <div class="info">
                     <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                         <span>
                             <?= $_SESSION['nama_user'] ?>
                             <!-- <span class="user-level">Administrator</span> -->
                             <!-- <span class="caret"></span> -->
                         </span>
                     </a>
                     <div class="clearfix"></div>

                     <!-- <div class="collapse in" id="collapseExample">
                         <ul class="nav">
                             <li>
                                 <a href="#profile">
                                     <span class="link-collapse">My Profile</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="#edit">
                                     <span class="link-collapse">Edit Profile</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="#settings">
                                     <span class="link-collapse">Settings</span>
                                 </a>
                             </li>
                         </ul>
                     </div> -->
                 </div>
             </div>
             <ul class="nav">
                 <li class="nav-item <?php if ($this->uri->segment(2) == 'dashboard') {
                                            echo "active";
                                        } ?>">
                     <a href="<?= base_url('admin/dashboard') ?>">
                         <i class="fas fa-home"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>
                 <li class="nav-section">
                     <span class="sidebar-mini-icon">
                         <i class="fa fa-ellipsis-h"></i>
                     </span>
                     <h4 class="text-section">Master Data</h4>
                 </li>
                 <li class="nav-item <?php if ($this->uri->segment(2) == 'agama') {
                                            echo "active";
                                        } ?>">
                     <a href="<?= base_url('admin/agama') ?>">
                         <i class="fas fa-heart"></i>
                         <p>Agama</p>
                     </a>
                 </li>
                 <li class="nav-item <?php if ($this->uri->segment(2) == 'jurusan') {
                                            echo "active";
                                        } ?>">
                     <a href="<?= base_url('admin/jurusan') ?>"">
                         <i class=" fas fa-star "></i>
                         <p>Jurusan</p>
                     </a>
                 </li>
                 <li class=" nav-section">
                         <span class="sidebar-mini-icon">
                             <i class="fa fa-ellipsis-h"></i>
                         </span>
                         <h4 class="text-section">Siswa</h4>
                 </li>
                 <li class="nav-item <?php if ($this->uri->segment(2) == 'siswa') {
                                            echo "active";
                                        } ?>">
                     <a href="<?= base_url('admin/siswa') ?>">
                         <i class="far fa-id-card"></i>
                         <p>Data Siswa</p>
                     </a>
                 </li>


             </ul>
         </div>
     </div>
 </div>