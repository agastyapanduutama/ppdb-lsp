<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata($this->session->userdata('logged_in')) != '') {
            redirect(base_url());
        }

        $this->load->model('admin/M_siswa', 'siswa');
        
    }

    public function index()
    {

        $siswa = $this->siswa->data_siswa();

        $data = array(
            'totalsiswa'   => $this->db->get('t_siswa')->num_rows(),
            'listsiswa'    => $siswa,
            'script'        => 'siswa',
            'title'         => 'Dashboard PSB',
            'konten'        => 'admin/dashboard'
        );

        $this->load->view('admin/templates/template', $data, FALSE);
    }
    
}

/* End of file C_home.php */
