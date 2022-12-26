<?php
class Agenda extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('M_agenda');
}
	function index(){
	$this->load->view('agenda/v_agenda');
	$data ['agenda'] = $this->M_agenda->tampil_data()->result();
	$this->load->view('agenda/v_agenda',$data);
	}
	function tambah(){
	$data ['agenda'] = $this->M_agenda->tampil_data()->result();
	$this->load->view('agenda/v_inputagenda',$data);
	}
	
	function tambah_agenda(){
		$id_agenda = $this->input->post('id_agenda');
		$hari = $this->input->post('hari');
		$tgl = $this->input->post('tgl');
		$agenda = $this->input->post('agenda');
		$jam = $this->input->post('jam');
		$keterangan = $this->input->post('keterangan');

		$data = array(
		'id_agenda' => $id_agenda,
		'hari' => $hari,
		'tgl' => $tgl,
		'agenda' => $agenda,
		'jam' => $jam,
		'keterangan' => $keterangan

		);
		$this->M_agenda->input_data($data,'agenda'); 
		redirect('Agenda');
		}
		function hapus($id_agenda){
			$where = array('id_agenda' => $id_agenda);
			$this->M_agenda->hapus_data($where,'agenda');
			redirect('Agenda');
			}
		function edit($id_agenda){
				$where = array('id_agenda' => $id_agenda);
				$data['agenda'] = $this->M_agenda->edit_data($where,'agenda')->result();
				$this->load->view('Agenda/v_editagenda',$data);
				}
		function update(){
					$id_agenda = $this->input->post('id_agenda');
					$hari = $this->input->post('hari');
					$tgl = $this->input->post('tgl');
					$agenda = $this->input->post('agenda');
					$jam = $this->input->post('jam');
					$keterangan = $this->input->post('keterangan');
			
					$data = array(
						'id_agenda' => $id_agenda,
						'hari' => $hari,
						'tgl' => $tgl,
						'agenda' => $agenda,
						'jam' => $jam,
						'keterangan' => $keterangan
						);
					$where = array(
					'id_agenda' => $id_agenda
					);
					$this->M_agenda->update_data($where,$data,'agenda');
					redirect('Agenda');
					}
	}
