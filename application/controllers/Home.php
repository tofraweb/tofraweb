<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
  public $language = "he";

  public function __construct()
  {
    parent::__construct();
    $this->load->model('portfolio_model','',TRUE);
    $this->load->library('user_agent');
    $this->lang->load("frontpage",$this->session->userdata('site_lang'));
    $this->language = $this->session->userdata('site_lang');
  }

  public function index()
  {
    	$data['portfolio'] = $this->portfolio_model->getPortfolio();
      $data['lang'] = $this->language;
      $data['is_mobile'] = $this->agent->is_mobile();
      if($this->language != "he" && $this->language != NULL) {
        $this->load->view('header', $data);
        if(!$data['is_mobile']){
          $this->load->view('slider', $data);
        }
        $this->load->view('frontpage_view', $data);
        $this->load->view('footer');
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
