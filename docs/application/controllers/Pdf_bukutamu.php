<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_bukutamu extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('M_bukutamu');
		$this->load->helper('url');
		}

    function index()
    {
        $data['buku_tamu'] = $this->M_bukutamu->tampil_data()->result();
        $this->load->library('pdf');
        $this->load->view('Bukutamu/v_bukutamu',$data);
        $html = $this->load->view('Bukutamu/pdf_bukutamu', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>