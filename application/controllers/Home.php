<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('portfolio_model','',TRUE);
  }

  public function index()
  {
    	$data['portfolio'] = $this->portfolio_model->getPortfolio();
      $this->load->view('header');
      $this->load->view('slider');
      $this->load->view('frontpage_view', $data);
      $this->load->view('footer');
  }

}

?>
