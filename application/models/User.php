<?php
Class User extends CI_Model
{
	function login($username, $password)
	{
		$this->db->select('id, username, password');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

	public function get_user($id)
	{
	try{
			$sql = "SELECT username, fullname, picture, intro FROM users WHERE id = ?";
			$result = $this->db->query($sql,$id);
		}catch(Exception $e){
				echo "Unable to retrieve results";
				exit;
		}
		$user = $result->result();
		return $user[0];
	}
}
?>
