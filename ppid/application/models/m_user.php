<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_user extends CI_Model implements iCrud{

	public function __construct()
	{
		parent::__construct();		
	}

	public function commit(){
		$data = array(
				'title' => 'My title' ,
				'name' => 'My Name' ,
				'date' => 'My date'
		);
		
		if($this->input->post('id') != "")
			$this->db->insert('user', $data);
		else 
			$this->db->update('user', $data);
	}
	
	public function read(){
		/* $sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";
		$this->db->query($sql, array(3, 'live', 'Rick')); */
		
		$query = $this->db->get_where('user', array('id' => $id));
	}
	
	public function delete(){
		/* $sql = "DELETE FROM some_table WHERE id = ? ";
		$this->db->query($sql, array(3, 'live', 'Rick')); */
		$query = $this->db->delete('user', array('id' => $id));
	}
	
}
