<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Email extends CI_Controller {

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
    // $EMAIL = $this->input->post('email');

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
        $data['message'] ="Email not sent \n".$this->email->print_debugger();
        $this->load->view('header');
        $this->load->view('message',$data);
        $this->load->view('footer');

      }
         // successfull message
        $data['message'] ="Email was successfully sent to $email";

        $this->load->view('header');
        $this->load->view('message',$data);
        $this->load->view('footer');
    } else {

      $data['message'] ="Email address ($email) is not correct. Please <a href=".base_url().">try again</a>";

      $this->load->view('header');
      $this->load->view('message',$data);
      $this->load->view('footer');
    }

  }

}

?>
