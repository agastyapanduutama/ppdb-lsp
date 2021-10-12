<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/C_login/login';
$route['admin/masuk'] = 'admin/C_login/login';
$route['admin/masuk/aksi'] = 'admin/C_login/aksi';

$route['admin/dashboard'] = 'admin/C_home';


$route['beranda'] = 'C_home';
$route['siswa/masuk'] = 'siswa/C_login/login';
$route['siswa/masuk/aksi'] = 'siswa/C_login/aksi';
$route['siswa/daftar'] = 'siswa/C_login/daftar';
$route['siswa/daftar/aksi'] = 'siswa/C_login/aksiDaftar';
$route['siswa/sukses'] = 'siswa/C_login/success';


//siswa
$route['admin/siswa'] = 'admin/C_siswa/list';
$route['admin/siswa/data'] = 'admin/C_siswa/data';
$route['admin/siswa/get/(:any)'] = 'admin/C_siswa/get/$1';
$route['admin/siswa/set/(:any)/(:any)'] = 'admin/C_siswa/set/$1/$2';
$route['admin/siswa/delete/(:any)'] = 'admin/C_siswa/delete/$1';

$route['admin/siswa/edit/(:any)'] = 'admin/C_siswa/editData/$1';
$route['admin/siswa/edit/aksi/(:any)'] = 'admin/C_siswa/aksiEdit/$1';
$route['admin/siswa/tambah'] = 'admin/C_siswa/tambahData';
$route['admin/siswa/tambah/aksi'] = 'admin/C_siswa/aksiTambah';

//agama
$route['admin/agama'] = 'admin/C_agama/list';
$route['admin/agama/data'] = 'admin/C_agama/data';
$route['admin/agama/get/(:any)'] = 'admin/C_agama/get/$1';
$route['admin/agama/set/(:any)/(:any)'] = 'admin/C_agama/set/$1/$2';
$route['admin/agama/insert'] = 'admin/C_agama/insert';
$route['admin/agama/update'] = 'admin/C_agama/update';
$route['admin/agama/delete/(:any)'] = 'admin/C_agama/delete/$1';
$route['admin/agama/tambah'] = 'admin/C_agama/tambahData';
$route['admin/agama/edit/(:any)'] = 'admin/C_agama/editData/$1';



//jurusan
$route['admin/jurusan'] = 'admin/C_jurusan/list';
$route['admin/jurusan/data'] = 'admin/C_jurusan/data';
$route['admin/jurusan/get/(:any)'] = 'admin/C_jurusan/get/$1';
$route['admin/jurusan/set/(:any)/(:any)'] = 'admin/C_jurusan/set/$1/$2';
$route['admin/jurusan/insert'] = 'admin/C_jurusan/insert';
$route['admin/jurusan/update'] = 'admin/C_jurusan/update';
$route['admin/jurusan/delete/(:any)'] = 'admin/C_jurusan/delete/$1';
$route['admin/jurusan/tambah'] = 'admin/C_jurusan/tambahData';
$route['admin/jurusan/edit/(:any)'] = 'admin/C_jurusan/editData/$1';
