
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

    public function index()
    {
        
        // Data Covid
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/indonesia/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $out =  json_decode($output);
        foreach ($out as $key => $value) {
            $positif =  $value->positif;
            $sembuh =  $value->sembuh;
            $meninggal =  $value->meninggal;
            $dirawat =  $value->dirawat;
        }

        $data = array(
            'css' => 'home',
            'menu' => 'beranda',
            'positif' => $positif,
            'sembuh' => $sembuh,
            'meninggal' => $meninggal,
            'dirawat' => $dirawat,
            'title' => "Beranda Aplikasi",
            'konten' => 'v_home',
        );

        $this->load->view('templates/template', $data, FALSE);
    }

}

/* End of file C_home.php */
