<?php 
   class user_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($data) { 
         if ($this->db->insert("user", $data)) { 
            return true; 
         } 
      } 
   
      public function delete($user_id) { 
         if ($this->db->delete("user", "user_id = ".$user_no)) { 
            return true; 
         } 
      } 
   
      public function update($data,$old_user_id) { 
         $this->db->set($data); 
         $this->db->where("user_id", $old_user_id); 
         $this->db->update("user", $data); 
      } 
   } 
?> 