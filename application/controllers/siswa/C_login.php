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

        
        $user = $this->input->post('email');
        $pass = $this->input->post('password');
        $where = array(
            'email' => $user,
            'password' => $this->req->acak($pass)
        );

        if ($this->login->cek($where) == true) {
            $userData = $this->login->getData();
            if ($userData->status == 1) {
                $session = array(
                    'id_user'   => $userData->id,
                    'nama_user'  => $userData->nama_pengguna,
                    'email'     => $userData->email,
                    'logged_in' => true,
                );
                // var_dump($session);
                $this->session->set_userdata($session);
                redirect('siswa/profil', 'refresh');
            } else {

                // $this->req->print($_POST);
                $this->session->set_flashdata('warning', "Akun belum di aktivasi silakan Periksa Email anda");
                redirect('siswa/masuk', 'refresh');
            }
        } else {
            $this->session->set_flashdata('warning', "Email atau Password mungkin Salah");
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
        $cekEmail = $this->db->get_where('t_pengguna', ['email' => $data['email']])->num_rows();

        if ($cekEmail > 0) {
            $this->session->set_flashdata('warning', "Email Sudah pernah digunakan");
            redirect('siswa/daftar', 'refresh');
        } else {

            $this->db->insert('t_pengguna', $data);
            $dataAkhir = $this->db->insert_id();

            $this->session->set_flashdata('success', "Anda Berhasil daftar silakan isi data dibawah ini");
            redirect('siswa/daftar', 'refresh');

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
}
