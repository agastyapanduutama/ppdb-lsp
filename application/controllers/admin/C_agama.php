  <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class C_agama extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            //cek login
            if ($this->session->userdata($this->session->userdata('username')) != '') {
                redirect(base_url());
            }

            $this->load->model('admin/M_agama', 'agama');
        }

        public function list()
        {
            $data = array(
                'title'  => 'Data Agama',
                'menu'   => 'agama',
                'script' => 'agama',
                'konten' => 'admin/agama/list'
            );

            $this->load->view('admin/templates/template', $data, FALSE);
        }


        function getagama()
        {
            echo json_encode($this->agama->data_agama());
        }


        function data()
        {
            error_reporting(0);
            $list = $this->agama->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $field) {
                $idNa = $this->req->acak($field->id);
                // $idNa = $field->id;


                $button = "
                <button class='btn btn-danger btn-sm' id='delete' data-id='$idNa' title='Hapus Data'><i class='fas fa-trash-alt'></i></button>
                <button class='btn btn-warning btn-sm' id='edit' data-id='$idNa' title='Edit Data'><i class='fas fa-pencil-alt'></i></button>";

                $no++;
                $row = array();
                $row[] = $no;
                $row[] = $field->nama_agama;
                $row[] = $button;
                $data[] = $row;
            }

            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->agama->count_all(),
                "recordsFiltered" => $this->agama->count_filtered(),
                "data" => $data,
            );
            echo json_encode($output);
        }

        function get($id)
        {
            $data = $this->agama->get($id);
            foreach ($data as $key => $value) {
                if (strtolower($key) == 'id') {
                    $data->$key = $this->req->acak($value);
                }
            }
            echo json_encode($data);
        }

        function insert()
        {
            $data = $this->req->all();
            if ($this->agama->insert($data) == true) {
                $msg = array(
                    'status' => 'ok',
                    'msg' => 'Berhasil menambahkan data !'
                );
            } else {
                $msg = array(
                    'status' => 'fail',
                    'msg' => 'Gagal menambahkan data !'
                );
            }
            echo json_encode($msg);
        }

        function set($id, $action)
        {
            if ($action == 'on') {
                if ($this->agama->update(['status' => '1'], $this->req->id($id)) == true) {
                    $msg = array(
                        'status' => 'ok',
                        'msg' => 'Berhasil Mengaktifkan Akun !'
                    );
                } else {
                    $msg = array(
                        'status' => 'fail',
                        'msg' => 'Gagal menambahkan data !'
                    );
                }
                echo json_encode($msg);
            } elseif ($action == 'off') {
                if ($this->agama->update(['status' => '0'], $this->req->id($id)) == true) {
                    $msg = array(
                        'status' => 'ok',
                        'msg' => 'Berhasil Me-nonaktifkan Akun !'
                    );
                } else {
                    $msg = array(
                        'status' => 'fail',
                        'msg' => 'Gagal Me-nonaktifkan data !'
                    );
                }
                echo json_encode($msg);
            } elseif ($action == 'reset') {
                if ($this->agama->update(['password' => $this->req->acak('123')], $this->req->id($id)) == true) {
                    $msg = array(
                        'status' => 'ok',
                        'msg' => 'Berhasil Me-reset Akun !'
                    );
                } else {
                    $msg = array(
                        'status' => 'fail',
                        'msg' => 'Gagal Me-reset data !'
                    );
                }
                echo json_encode($msg);
            }
        }


        function update()
        {

            // $this->req->print($_POST);

            $id = $this->input->post('id');
            $data = $this->req->all(['id' => false]);
            if ($this->agama->update($data, $this->req->id($id)) == true) {
                $msg = array(
                    'status' => 'ok',
                    'msg' => 'Berhasil mengubah data !'
                );
            } else {
                $msg = array(
                    'status' => 'fail',
                    'msg' => 'Gagal mengubah data !'
                );
            }
            // echo $this->db->last_query();
            echo json_encode($msg);
        }

        function delete($id)
        {
            if ($this->agama->delete($this->req->id($id)) == true) {
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
    }
