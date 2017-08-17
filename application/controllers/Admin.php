<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('grocery_CRUD');

	}

	public function index()
	{
		//$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		if($this->session->userdata('logged_in')){
			$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		} else {
			$this->load->view('/admin/login_view');
		}

	}

	public function _example_output($output = null, $title = 'Data', $subtitle = 'management')
	{
		if(!$this->session->userdata('logged_in')){
			redirect('admin', 'refresh');
		}
		$_SESSION['title'] = $title;
		$_SESSION['subtitle'] = $subtitle;
		$session_data = $this->session->userdata('logged_in');
		$_SESSION['username'] = $session_data['username'];
		$this->load->view('admin/header.php',(array)$output);
		$this->load->view('admin/dynamic_content_view.php',(array)$output);
		$this->load->view('admin/footer.php');
	}


	public function customers()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output, 'Customer');
	}

	public function users()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output, 'User');
	}

	public function categories()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output, 'Categories');
	}


	public function portfolio_management()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('portfolio');
			$crud->set_subject('Portfolio');
			$crud->required_fields('customer_id');
			$crud->columns('name_he','image_main','mockup', 'link_title','customer_id');
			$crud->set_relation('customer_id','customers','name_he');
			$crud->set_field_upload('image_main','assets/img/portfolio');
			$crud->set_field_upload('image_1','assets/img/portfolio');
			$crud->set_field_upload('image_2','assets/img/portfolio');
			$crud->set_field_upload('mockup','assets/mockup');

			$crud->callback_after_upload(array($this,'resize_img_after_upload'));

			$output = $crud->render();

			$this->_example_output($output, 'Portfolio');

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function posts()
	{

		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('posts');
			$crud->set_subject('Post');
			$crud->set_relation('author','users','fullname');
			$crud->set_relation_n_n('category', 'post_categories', 'categories', 'post_id', 'category_id', 'name_he');
			$crud->set_field_upload('picture','assets/img/blog');
			$crud->callback_after_upload(array($this,'resize_img_after_upload'));

			$output = $crud->render();

			$this->_example_output($output, 'Post', 'management');

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}


 /*DB related scripts*/
	public function update_species_pictures()
	{
		$this->load->model('gallery_model','',TRUE);
		$premium_pictures = $this->gallery_model->get_premium_pictures();
		// var_dump($premium_pictures);
		// exit;
		foreach($premium_pictures as $picture){
			// var_dump($picture->species_id);
			// exit;
			$this->gallery_model->insert_premium_pictures($picture->species_id,$picture->filename);
		}
		redirect('admin', 'refresh');
	}

}
