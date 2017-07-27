<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Blog_model extends CI_Model
{

  public function get_all_posts(){

   try{
       $sql = "SELECT * FROM posts ORDER BY post_date DESC";
       $result = $this->db->query($sql);
     }catch(Exception $e){
         echo "Unable to retrieve results";
         exit;
     }
     $posts = $result->result();
     return $posts;
  }

  public function get_post($id){

   try{
       $sql = "SELECT * FROM posts WHERE id = ? ";
       $result = $this->db->query($sql,$id);
     }catch(Exception $e){
         echo "Unable to retrieve results";
         exit;
     }
     $post = $result->result();
     return $post[0];
  }

}
