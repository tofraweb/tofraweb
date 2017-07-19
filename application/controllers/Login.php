<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('user','',TRUE);
  }

  function index()
  {
      $data['section'] = null;
      $this->load->view('admin/login_view');
    //  $this->load->view('footer');
  }


  public function verifyLogin(){
      //This method will have the credentials validation
      $this->load->library('form_validation');

      $this->form_validation->set_rules('username', 'Username', 'min_length[4]|max_length[8]|required');
      $this->form_validation->set_rules('password', 'Password', 'required|callback_check_database');

      if($this->form_validation->run() == FALSE)
      {
          //Field validation failed.  User redirected to login page
          $val_errors = array(
              'errors' => validation_errors()
          );
          $this->session->set_flashdata($val_errors);
          $data['section'] = null;
          $this->load->view('admin/login_view');
      }
      else
      {
          //Go to private area
          redirect('admin', 'refresh');
      }

  }


  function check_database($password)
  {
    //Field validation succeeded.  Validate against database
    $username = $this->input->post('username');

    //query the database
    $result = $this->user->login($username, $password);
    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
          'id' => $row->id,
          'username' => $row->username
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('admin', 'refresh');
  }
}
