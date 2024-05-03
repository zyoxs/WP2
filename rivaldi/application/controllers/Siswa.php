<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index() {
		$this->load->view('formSiswa');
	}

	public function cetak() {
		$data = [
			'nama' => $this->input->post('nama'),
			'nis' => $this->input->post('nis'),
			'kelas' => $this->input->post('kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'alamat' => $this->input->post('alamat'),
			'gender' => $this->input->post('gender'),
			'agama' => $this->input->post('agama'),
		];

		$this->load->view('cetakSiswa', $data);
	}
}
