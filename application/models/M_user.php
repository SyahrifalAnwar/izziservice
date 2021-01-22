<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_user extends CI_Model {
              

	public function register_user($data_user, $data_karyawan)
	{
		 $this->db->set($data_user);
		$q = $this->db->insert('user', $data_user);
		$this->db->set($data_karyawan);
		$r = $this->db->insert('karyawan', $data_karyawan);
		return $r;
	}


}