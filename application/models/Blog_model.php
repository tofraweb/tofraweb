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

  public function all_post_categories(){

   try{
       $sql = "SELECT * FROM categories ORDER BY name_he ASC ";
       $result = $this->db->query($sql);
     }catch(Exception $e){
         echo "Unable to retrieve results";
         exit;
     }
     $categories = $result->result();
     return $categories;
  }


  public function categories_by_post_id($id){

   try{
       $sql = "SELECT post_categories.category_id, categories.name_he
              FROM post_categories
              JOIN categories ON post_categories.category_id = categories.id
              WHERE post_id = ? ";
       $result = $this->db->query($sql, $id);
     }catch(Exception $e){
         echo "Unable to retrieve results";
         exit;
     }
     $categories = $result->result();
     return $categories;
  }

  public function get_posts_by_category($id){

   try{
       $sql = "SELECT post_categories.post_id, posts.title_he
              FROM post_categories
              JOIN posts ON post_categories.post_id = posts.id
              WHERE category_id = ? ";
       $result = $this->db->query($sql, $id);
     }catch(Exception $e){
         echo "Unable to retrieve results";
         exit;
     }
     $posts = $result->result();
     return $posts;
  }

  public function get_posts_by_id_array($arr){
    $in = join(',', $arr);

    if(count($arr) > 0){
      try{
          $sql = "SELECT * FROM posts WHERE id IN ($in)";
          $result = $this->db->query($sql);
        }catch(Exception $e){
            echo "Unable to retrieve results";
            exit;
        }
        $posts = $result->result();
        return $posts;
    } else{
      return null;
    }


   try{
       $sql = "SELECT post_categories.post_id, posts.title_he
              FROM post_categories
              JOIN posts ON post_categories.post_id = posts.id
              WHERE category_id = ? ";
       $result = $this->db->query($sql, $id);
     }catch(Exception $e){
         echo "Unable to retrieve results";
         exit;
     }
     $posts = $result->result();
     return $posts;
  }

}
