<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("BidangStudi", 'base_model');
	}

	public function index()
	{
		$this->load->view('basepage', 
			array(
				'main_view' => 'tables/basetable', 
				'data' => $this->base_model->generateTable()
				)
			);
		
	}

	public function table($table){
		if($this->input->post('submit') === 'submit'){
			$data = array(
				'bidang_kode' => $this->input->post('kode'),
				'bidang_nama' => $this->input->post('nama')
				);

			if($this->base_model->insert($data)){
				redirect(base_url());
			}
		}
		$this->load->view('basepage', array('main_view' => 'forms/'.$table));
	}

	public function delete($table, $arg){
		if($this->base_model->delete(array('bidang_kode' => $arg))){
			redirect(base_url());
		}
	}
}

/* End of file indxe.php */
/* Location: ./application/controllers/indxe.php */