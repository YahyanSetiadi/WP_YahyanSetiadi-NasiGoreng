<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pesanan_model');
    }

    public function index() {
        $data['menu'] = $this->Pesanan_model->get_pesanan();
        $this->load->view('overview', $data);
    }

    public function tampil() {
        $data['pesanan'] = $this->Pesanan_model->get_pesanan();
        $this->load->view('tampil', $data);
    }

    public function tambah_pesanan() {
        $data = array(
            'jenis' => $this->input->post('jenis'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah')
        );

        $this->Pesanan_model->tambah_pesanan($data);
        redirect('welcome'); // Mengarahkan ke method tampil() setelah menambah pesanan
    }
	
	public function edit_pesanan($id) {
        $data['pesanan'] = $this->Pesanan_model->get_pesanan_by_id($id);
        $this->load->view('edit', $data);
    }

	public function update_pesanan($id) {
		$data = array(
			'jenis' => $this->input->post('jenis'),
			'harga' => $this->input->post('harga'),
			'jumlah' => $this->input->post('jumlah')
		);
	
		// Menghitung total
		$data['total'] = $data['harga'] * $data['jumlah'];
	
		$this->Pesanan_model->update_pesanan($id, $data);
		redirect('welcome/tampil');
	}

    public function hapus_pesanan($id) {
        $this->Pesanan_model->hapus_pesanan($id);
        redirect('welcome');
    }
}
