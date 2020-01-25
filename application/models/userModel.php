<?php 

class userModel extends CI_Model{ 
    function __construct() {  
        parent::__construct();
    } 
    
    public function register_user($data){      
        return $this->db->insert('user', $data);   
    }

    public function check_login($email, $password) {
        //query the table 'users' and get the result count
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        return $query->num_rows();
    }
}

?>