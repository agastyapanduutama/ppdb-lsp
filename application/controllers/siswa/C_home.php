<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_siswa', 'siswa');
        
    }
    
    
    public function index()
    {
        
    }

    public function profil()
    {
        $isi = $this->db->get_where('t_siswa', ['id' => $_SESSION['id_user']])->row();
        $agama = $this->db->get('t_agama')->result();
        $jurusan = $this->db->get('t_jurusan')->result();

        $data = array(
            'title' => "Profil Siswa " . $_SESSION['nama_user']  , 
            'konten' => 'siswa/v_profil',
            'data' => $isi,
            'agama' => $agama,
            'jurusan' => $jurusan,
            'css' => 'step',
        );

        $this->load->view('templates/template', $data, FALSE);
        
    }

    public function aksiEdit($id)
    {

        if (empty($_FILES['foto']['name'])) {
            $siswa = $this->db->get_where('t_siswa', [$this->req->encKey('id') => $id])->row();
        } else {
            $siswa = $this->db->get_where('t_siswa', [$this->req->encKey('id') => $id])->row();
            if ($siswa->foto != '') {
                unlink('assets/upload/siswa/' . $siswa->foto);
            }
        }


        $config = [
            'path' => './assets/upload/siswa/',
            'file' => 'foto',
            'encrypt' => false,
            'type' => 'img',
        ];

        $data = $this->req->upload_form($config);
        // $this->req->print($config);

        // $data = $this->req->all(['id' => false]);
        if ($this->siswa->update($data, $id) == true) {
            $this->session->set_flashdata('success', "Berhasil memperbarui data  Untuk melihat pembaruan silakan masuk ulang akun anda");
            redirect('siswa/profil', 'refresh');
        } else {
            $this->session->set_flashdata('warning', "Gagal memperbarui data ");
            redirect('siswa/profil', 'refresh');
        }

        echo $this->db->last_query();
    }

}

/* End of file C_home.php */
