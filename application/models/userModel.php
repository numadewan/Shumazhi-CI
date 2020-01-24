<?php 

class userModel extends CI_Model{ 
    function __construct() {  
        parent::__construct();
    } 
    
    public function register_user($data){      
         $this->db->insert('user', $data);
        
    }
}

?>