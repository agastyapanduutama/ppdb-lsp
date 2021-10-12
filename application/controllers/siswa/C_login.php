<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login', 'login');
    }

    public function index()
    {
        show_404();
    }


    public function login()
    {
        $data = array(
            'css' => 'login',
            'title' => 'masuk siswa',
            'konten' => 'siswa/v_login'
        );

        $this->load->view('templates/template', $data);
    }


    function aksi()
    {

        
        $user = $this->input->post('nik');
        $pass = $this->input->post('password');
        $where = array(
            'nik' => $user,
            'password' => $this->req->acak($pass)
        );

        if ($this->login->cek($where) == true) {
            $userData = $this->login->getData();
            if ($userData->status >= 0) {
                $session = array(
                    'id_user'   => $userData->id,
                    'nama_user'  => $userData->nama_siswa,
                    'nik'     => $userData->nik,
                    'logged_in' => true,
                );
                // var_dump($session);
                $this->session->set_userdata($session);
                redirect('siswa/profil', 'refresh');
            } else {

                // $this->req->print($_POST);
                $this->session->set_flashdata('warning', "Akun belum di aktivasi silakan Periksa NIK anda");
                redirect('siswa/masuk', 'refresh');
            }
        } else {
            $this->session->set_flashdata('warning', "NIK atau Password mungkin Salah");
            redirect('siswa/masuk', 'refresh');
        }
    }

    public function logout()
    {

       
        $token = $this->uri->segment('4');
        if ($this->session->userdata('token') == $token) {
            $this->session->sess_destroy();
            redirect(base_url());
        } else {
            show_404();
        }
    }

    public function daftar()
    {
        $data = array(
            'css' => 'login',
            'title' => 'daftar baru',
            'konten' => 'siswa/v_daftar'
        );

        $this->load->view('templates/template', $data);
    }

    public function aksiDaftar()
    {
        $custom = [
            'status' => 0,
            'password' => $this->req->acak($_POST['password'])
        ];
        $data = $this->req->all($custom);
        $cekNik = $this->db->get_where('t_siswa', ['nik' => $data['nik']])->num_rows();

        if ($cekNik > 0) {
            $this->session->set_flashdata('warning', "NIK Sudah pernah digunakan");
            redirect('siswa/daftar', 'refresh');
        } else {

            $this->db->insert('t_siswa', $data);
            $dataAkhir = $this->db->insert_id();

            $this->session->set_flashdata('success', "Berhasil membuat akun silakan masuk");
            redirect('siswa/masuk', 'refresh');

        }
    }

    public function success()
    {
        $data = array(
            'title' => 'sukses',
            'css' => 'register',
            'konten' => 'siswa/v_success' 
        );
        $this->load->view('templates/template', $data);
    }


    public function gantiPassword()
    {


        $data = array(
            'css' => 'register',
            'title' => $_SESSION['nama_user'],
            'konten' => 'siswa/v_password'
        );

        $this->load->view('templates/template', $data, FALSE);
    }

    public function aksiUpdatePassword()
    {
        $id = $_SESSION['id_user'];
        $custom = [
            'password' => $this->req->acak($_POST['password'])
        ];

        $data = $this->req->all($custom);

        if ($this->login->update($data, $id) == true) {
            $this->session->set_flashdata('success', "Berhasil Memperbarui Password");
            redirect('siswa/profil/pengaturan', 'refresh');
        } else {
            $this->session->set_flashdata('warning', "Terjadi kesalahan dalam mengubah data");
            redirect('siswa/profil/pengaturan', 'refresh');
        }

        
    }
}
