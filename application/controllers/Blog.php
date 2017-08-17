<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Blog extends CI_Controller {
  public $language = "he";

  public function __construct()
  {
    parent::__construct();
    $this->load->library('user_agent');
    $this->load->model('blog_model','',TRUE);
    $this->lang->load("frontpage",$this->session->userdata('site_lang'));
    $this->language = $this->session->userdata('site_lang');
  }

  public function index()
  {

      $all_posts = $this->blog_model->get_all_posts();
      $all_categories = $this->blog_model->all_post_categories();


      $data['posts'] = $all_posts;
      $data['all_categories'] = $all_categories;
      $data['lang'] = $this->language;
      $data['is_mobile'] = $this->agent->is_mobile();

      if($this->language != "he" && $this->language != NULL) {
        $this->load->view('header', $data);
        $this->load->view('blog_view', $data);
        $this->load->view('footer');
      }else{
        $this->load->view('header_he', $data);
        $this->load->view('blog_view_he', $data);
        $this->load->view('footer_he');
      }

  }

  public function blog_item($id)
  {
      $post = $this->blog_model->get_post($id);
      $all_posts = $this->blog_model->get_all_posts();
      $categories = $this->categories_by_post($id);
      $all_categories = $this->blog_model->all_post_categories();
    //  $author = $this->user->get_user($post->author);
      // var_dump($author);
      // exit;
      $session_data = $this->session->userdata('logged_in');
      $data['post'] = $post;
      $data['all_posts'] = $all_posts;
      $data['author'] = $author;
      $data['logged_in'] = $session_data;
      $data['categories'] = $categories;
      $data['all_categories'] = $all_categories;
      $this->load->view('header_he', $data);
      $this->load->view('blog_item_view_he', $data);
      $this->load->view('footer_he');
  }

  public function categories_by_post($id)
  {
      $categories = $this->blog_model->categories_by_post_id($id);
      return $categories;
  }

  public function posts_by_category($id)
  {
      $posts = $this->blog_model->get_posts_by_category($id);
      $post_array = array();
      foreach ($posts as $post) {
        $post_array[] = $post->post_id;
      }
      $posts = $this->blog_model->get_posts_by_id_array($post_array);
      // echo "<pre>";
      // var_dump($posts);
      // echo "</pre>";
      // exit;
      $all_categories = $this->blog_model->all_post_categories();


      $data['posts'] = $posts;
      $data['all_categories'] = $all_categories;
      $data['lang'] = $this->language;
      $data['is_mobile'] = $this->agent->is_mobile();

      if($this->language != "he" && $this->language != NULL) {
        $this->load->view('header', $data);
        $this->load->view('blog_view', $data);
        $this->load->view('footer');
      }else{
        $this->load->view('header_he', $data);
        $this->load->view('blog_view_he', $data);
        $this->load->view('footer_he');
      }

  }

}

?>
