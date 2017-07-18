<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function getPortfolio(){
		$portfolio = $this->db->query('SELECT * FROM portfolio ORDER BY sort_order');
		return $portfolio->result();
    }
	//
	// public function getItemsList($cCategory){
	// 	$products = $this->db->query("SELECT * FROM species WHERE category_id = $cCategory");
	// 	return $products->result();
  //   }
	//
	// public function getItem($cCategory){
	// 	$products = $this->db->query("SELECT * FROM species WHERE category_id = $cCategory");
	// 	return $products->result();
  //   }

}
