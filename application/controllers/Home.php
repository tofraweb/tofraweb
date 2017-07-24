<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('portfolio_model','',TRUE);
    $this->load->library('user_agent');
    $this->lang->load("frontpage",$this->session->userdata('site_lang'));
  }

  public function index()
  {
    	$data['portfolio'] = $this->portfolio_model->getPortfolio();
      $data['lang'] = $this->session->userdata('site_lang');
      $data['is_mobile'] = $this->agent->is_mobile();
      if($data['lang'] != "he") {
        $this->load->view('header', $data);
        if(!$data['is_mobile']){
          $this->load->view('slider_he', $data);
        }
        $this->load->view('frontpage_view_he', $data);
        $this->load->view('footer_he');
      }else{
        $this->load->view('header_he', $data);
        if(!$data['is_mobile']){
          $this->load->view('slider_he', $data);
        }
        $this->load->view('frontpage_view_he', $data);
        $this->load->view('footer_he');
      }

  }

}

?>
