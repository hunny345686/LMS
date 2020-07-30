<?php 
 class Lms_modal extends CI_Model
 {
 	public function select_data($tbl_name,$field,$data ='',$war='')
 	{

 		if($war != '')
 		{
 			$this->db->where($war);
 		}
 		$q = $this->db->select($field)->from($tbl_name)->get();
 		return $q->result_array();
 	}

 	public function databaseop($tbl_name,$mode,$data,$wdata='')
 	{
 		if($mode=="insert")
 		{
 			return $this->db->insert($tbl_name,$data);
 		}
 		elseif ($mode =="delete") 
 		{
 			$this->db->where($wdata);
 			return $this->db->delete($tbl_name);
 		}
 		elseif ($mode=="update") 
 		{
 			$this->db->where($wdata);
 			return $this->db->update($tbl_name,$data);
 		}
 	}


 }


 ?>