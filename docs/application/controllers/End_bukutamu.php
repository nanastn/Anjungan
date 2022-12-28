<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class End_bukutamu extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_bukutamu');

}
    function index(){

        $this->load->view('backend/header');
        $this->load->view('backend/wrapper');
        $this->load->view('backend/navbar');
        // $this->load->view('backend/wrapper');
        // $this->load->view('backend/navbar');

        $data['buku_tamu'] = $this->M_bukutamu->tampil_data('buku_tamu')->result();
		$this->load->view('Bukutamu/v_bukutamu',$data);
		$this->load->view('backend/footer');
}

function tambah_tamu(){
    $this->load->view('backend/header');   
    $this->load->view('backend/wrapper');
    $this->load->view('backend/navbar');
    $this->load->view('Bukutamu/v_tambahbuku.php');	
    $this->load->view('template/footer');
}

function tambah_aksi(){
    $nama_tamu = $this->input->post('nama_tamu');
    $instansi = $this->input->post('instansi');
    $alamat_instansi = $this->input->post('alamat_instansi');
    $tujuan_tamu = $this->input->post('tujuan_tamu');
    $tgl_bertamu = $this->input->post('tgl_bertamu');
    $keterangan = $this->input->post('keterangan');
    $data = array(
        'nama_tamu' => $nama_tamu,
        'instansi' => $instansi,
        'alamat_instansi' => $alamat_instansi,
        'tujuan_tamu' => $tujuan_tamu,
        'tgl_bertamu' => $tgl_bertamu,
        'keterangan' => $keterangan);
        // insert data ke database
    $this->M_bukutamu->insert_data($data,'buku_tamu');
        // mengalihkan halaman ke halaman data bukutamu
    redirect(base_url().'End_bukutamu');
}
function edit_tamu($id_tamu){
    $this->load->view('backend/header');
    $this->load->view('backend/wrapper');
    $this->load->view('backend/navbar');
    $where = array('id_tamu' => $id_tamu);
    // mengambil data dari database sesuai id
    $data['buku_tamu'] = $this->M_bukutamu->edit_data($where,'buku_tamu')->result();
    $this->load->view('Bukutamu/v_editbukutamu',$data);
    $this->load->view('backend/footer');
}
function update(){
    $nama_tamu = $this->input->post('nama_tamu');
    $instansi = $this->input->post('instansi');
    $alamat_instansi = $this->input->post('alamat_instansi');
    $tujuan_tamu = $this->input->post('tujuan_tamu');
    $tgl_bertamu = $this->input->post('tgl_bertamu');
    $keterangan = $this->input->post('keterangan');
    $data = array(
        'nama_tamu' => $nama_tamu,
        'instansi' => $instansi,
        'alamat_instansi' => $alamat_instansi,
        'tujuan_tamu' => $tujuan_tamu,
        'tgl_bertamu' => $tgl_bertamu,
        'keterangan' => $keterangan);
    $where = array(
        'id_tamu' => $id_tamu);
    $this->M_bukutamu->update_data($where,$data,'buku_tamu');
    redirect('End_bukutamu');
}
function hapus($id_tamu){
    $where = array(
    'id_tamu' => $id_tamu);
// menghapus data anggota dari database sesuai id
    $this->M_bukutamu->delete_data($where,'buku_tamu');
// mengalihkan halaman ke halaman data anggota
    redirect(base_url().'End_bukutamu');
}

}