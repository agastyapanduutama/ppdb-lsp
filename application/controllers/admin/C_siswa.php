  <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class C_siswa extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            //cek login
            if ($this->session->userdata($this->session->userdata('username')) != '') {
                redirect(base_url());
            }

            $this->load->model('admin/M_siswa', 'siswa');
        }

        public function list()
        {
            $data = array(
                'title'  => 'Data Siswa',
                'menu'   => 'siswa',
                'script' => 'siswa',
                'konten' => 'admin/siswa/list'
            );

            $this->load->view('admin/templates/template', $data, FALSE);
        }


        function data()
        {
            error_reporting(0);
            $list = $this->siswa->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
                $idNa = $this->req->acak($field->id);
                // $idNa = $field->id;

                $urlEdit = base_url('admin/siswa/edit/'.$idNa);

                $button = "
                <button class='btn btn-danger btn-sm' id='delete' data-id='$idNa' title='Hapus Data'><i class='fas fa-trash-alt'></i></button>
                <a href='$urlEdit' class='btn btn-warning btn-sm' title='Edit Data'><i class='fas fa-pencil-alt'></i></a>";
                
                if ($field->status == '1') {
                    $status =  "<span style='color:green'>Diterima</span>";
                }elseif($field->status == '2'){
                    $status =  "<span style='color:blue'>Cadangan</span>";
                }elseif($field->status == '3'){
                    $status =  "Tidak Diterima";
                }else{
                    $status =  "<span style='color:red'>Belum di Konfirmasi</span>";
                }

                $no++;
                $row = array();
                $row[] = $no;
                $row[] = $field->nama_siswa;
                $row[] = $field->nama_jurusan;
                $row[] = $field->nik;
                $row[] = $field->nisn;
                $row[] = $field->no_hp;
                $row[] = $status;
                $row[] = $button;
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->siswa->count_all(),
                "recordsFiltered" => $this->siswa->count_filtered(),
                "data" => $data,
            );
            echo json_encode($output);

            // echo $this->db->last_query();
            
        }

        function get($id)
        {
            $data = $this->siswa->get($id);
            foreach ($data as $key => $value) {
                if (strtolower($key) == 'id') {
                    $data->$key = $this->req->acak($value);
                }
            }
            echo json_encode($data);
        }

        public function tambahData()
        {
            $agama = $this->db->get('t_agama')->result();
            $jurusan = $this->db->get('t_jurusan')->result();

            $data = array(
                'title' => "Tambah Data siswa",
                'agama' => $agama,
                'jurusan' => $jurusan,
                'konten' => 'admin/siswa/add'
            );

            $this->load->view('admin/templates/template', $data, FALSE);
        }

        public function aksiTambah()
        {

            // $this->req->print($_FILES);

            $custom = [
                'tanggal_dibuat' => date('Y-m-d'),
            ];

            $config = [
                'path' => './assets/upload/siswa/',
                'file' => 'foto',
                'encrypt' => true,
                'type' => 'img',
                'customInput' => $custom,
            ];

            $data = $this->req->upload_form($config);

            if ($this->siswa->insert($data) == true) {
                $this->session->set_flashdata('success', "Berhasil Menyimpan Tempat siswa");
                redirect('admin/siswa', 'refresh');
            } else {
                $this->session->set_flashdata('warning', "Terjadi kesalahan dalam Menyimpan data");
                redirect('admin/siswa', 'refresh');
            }
        }

        public function editData($id)
        {
            $isi = $this->db->get_where('t_siswa', [$this->req->encKey('id') => $id])->row();
            $agama = $this->db->get('t_agama')->result();
            $jurusan = $this->db->get('t_jurusan')->result();


            $data = array(
                'title' => "Tambah Data siswa",
                'agama' => $agama,
                'jurusan' => $jurusan,
                'isi' => $isi,
                'konten' => 'admin/siswa/edit'
            );

            $this->load->view('admin/templates/template', $data, FALSE);
        }

        public function aksiEdit($id)
        {

            if (empty($_FILES['foto']['name'])) {
                $siswa = $this->db->get_where('t_siswa', [ $this->req->encKey('id') => $id])->row();
            } else {
                $siswa = $this->db->get_where('t_siswa', [ $this->req->encKey('id') => $id])->row();
                unlink('assets/upload/siswa/' . $siswa->foto);
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
                $this->session->set_flashdata('success', "Berhasil memperbarui Siswa");
                redirect('admin/siswa', 'refresh');
            } else {
                $this->session->set_flashdata('warning', "Gagal memperbarui Siswa");
                redirect('admin/siswa', 'refresh');
            }

            echo $this->db->last_query();
        }

        function delete($id)
        {
            if ($this->siswa->delete($this->req->id($id)) == true) {
                $msg = array(
                    'status' => 'ok',
                    'msg' => 'Berhasil menghapus data !'
                );
            } else {
                $msg = array(
                    'status' => 'fail',
                    'msg' => 'Gagal menghapus data !'
                );
            }
            echo json_encode($msg);
        }

        public function exportAll()
        {

            $siswa = $this->siswa->data_export();

            $data = array(
                'title' => 'export',
                'isi'  => $siswa
            );

            $this->load->view('admin/siswa/export', $data, FALSE);
        }
    }
