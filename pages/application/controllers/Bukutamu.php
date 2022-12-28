<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bukutamu extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_bukutamu');

}
    function index(){

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        // $this->load->view('template/wrapper');
        // $this->load->view('template/navbar');

        $data['buku_tamu'] = $this->M_bukutamu->tampil_data('buku_tamu')->result();
		$this->load->view('Bukutamu/v_frontend.php',$data);
		$this->load->view('template/footer');
}
}