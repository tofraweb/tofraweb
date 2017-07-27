<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Email extends CI_Controller {
  public $language = " ";
  public function __construct()
  {
    parent::__construct();
    $this->load->library('email');
    $this->load->helper('email');
    $this->load->helper('url');
  }

  public function index()
  {
      $this->load->view('header');
      $this->load->view('frontpage_view', $data);
      $this->load->view('footer');
  }

  public function send_mail() {
    //$this->session->set_userdata('site_lang', $language);
    $this->language = $this->session->userdata('site_lang');
    //$data['lang'] = $this->session->userdata('site_lang');
    if($this->language != "he" && $this->language != NULL) {
      $lang = "";
    }else{
      $lang = "_he";
    }
    // $EMAIL = $this->input->post('email');
    // var_dump($data['lang']);
    // exit;
    if (!isset($_POST)){
      //redirect if no parameter e-mail
      redirect(base_url());
    };

    //read parameters from $_POST using input class
    $email = $this->input->post('email',true);
    $name = $this->input->post('name',true);
    $subject = 'נושא הפנייה';
    $message = $this->input->post('message',true);

    // check is email addrress valid or no
    if (valid_email($email)){
      // compose email
      $this->email->from($email , $name);
      $this->email->to('tofraweb@gmail.com');
      $this->email->subject($subject);
      $this->email->message($message);

      // try send mail ant if not able print debug
      if ( ! $this->email->send())
      {
        $data['mail_not_sent'] = $this->email->print_debugger();
        $data['lang'] = $this->language;
        //var_dump($data['mail_error']); exit;
        $this->load->view('header'.$lang, $data);
        $this->load->view('email_message_view', $data);
        $this->load->view('footer'.$lang);

      } else {
         // successfull message
        $data['mail_success'] ="success";
        $data['lang'] = $this->language;
        $this->load->view('header'.$lang, $data);
        $this->load->view('email_message_view', $data);
        $this->load->view('footer'.$lang);
      }
    } else {

      $data['mail_not_correct'] = $email;
      $data['lang'] = $this->language;

      $this->load->view('header'.$lang, $data);
      $this->load->view('email_message_view', $data);
      $this->load->view('footer'.$lang);
    }

  }


}

?>
