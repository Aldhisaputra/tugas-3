<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['barang'] = $this->Barang_model->get_barang();
        $this->load->view('barang/list_barang', $data);
    }

    public function search_barang() {
        $keyword = $this->input->post('keyword');
        $data['barang'] = $this->Barang_model->search_data_barang($keyword);
        $this->load->view('barang/list_barang', $data);
    }
}
