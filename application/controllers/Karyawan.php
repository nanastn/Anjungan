<?php
class Karyawan extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('M_karyawan');
}
	function index(){
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		
	$data ['karyawan'] = $this->M_karyawan->tampil_data('karyawan')->result();
	$this->load->view('karyawan/v_karyawan',$data);
    $this->load->view('template/footer');
	}
	function tambah(){
		$this->load->view('template/header');   
    $this->load->view('template/navbar');
	$this->load->view('karyawan/v_tambahkaryawan');
	}
	
	function tambah_aksi(){
		$id_karyawan = $this->input->post('id_karyawan');
		$nik = $this->input->post('nik');
		$nama_karyawan = $this->input->post('nama_karyawan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$level = $this->input->post('level');

		$data = array(
		'id_karyawan' => $id_karyawan,
		'nik' => $nik,
		'nama_karyawan' => $nama_karyawan,
		'jenis_kelamin' => $jenis_kelamin,
		'alamat' => $alamat,
        'level' => $level

		);
		$this->M_karyawan->input_data($data,'karyawan'); 
		redirect('karyawan');
		}
		function hapus($id_karyawan){
			$where = array('id_karyawan' => $id_karyawan);
			$this->M_karyawan->hapus_data($where,'karyawan');
			redirect('Karyawan');
			}
		function edit($id_karyawan){
				$where = array('id_karyawan' => $id_karyawan);
				$data['karyawan'] = $this->M_karyawan->edit_data($where,'karyawan')->result();
				$this->load->view('karyawan/v_editkaryawan',$data);
				}
		function update(){
            $id_karyawan = $this->input->post('id_karyawan');
            $nik = $this->input->post('nik');
            $nama_karyawan = $this->input->post('nama_karyawan');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $level = $this->input->post('level');
			
            $data = array(
                'id_karyawan' => $id_karyawan,
                'nik' => $nik,
                'nama_karyawan' => $nama_karyawan,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat,
                'level' => $level
						);
					$where = array(
					'id_karyawan' => $id_karyawan
					);
					$this->M_karyawan->update_data($where,$data,'karyawan');
					redirect('Karyawan');
					}
	}
