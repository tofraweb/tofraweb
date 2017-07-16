<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function __construct(){

		parent::__construct();

			$this->load->model('portfolio_model');
		//	$this->load->library('grocery_CRUD');

	}

	public function index(){
    $this->load->view('inc/header');
    $this->load->view('bootstrap/frontpage_view');
		$this->load->view('inc/footer');

	}


	public function getPortfolio($category){

    $this->load->view('inc/header');
		$data['portfolio'] = $this->portfolio_model->getPortfolio();
		$data['category'] = $category;
		$this->load->view('bootstrap/species_view', $data, $category);
    $this->load->view('inc/footer');

	}


}
