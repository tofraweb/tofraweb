<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

  // public function __construct()
  // {
  //   parent::__construct();
  //   $this->load->model('catalog_model','',TRUE);
  // }

  public function index()
  {
      $this->load->view('inc/header');
      $this->load->view('frontpage_view', $data);
      $this->load->view('inc/footer');
  }

}

?>
