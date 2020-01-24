<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
    parent::__construct();
    //$this->load->library('form_validation');
    $this->load->model('userModel', 'register_u'); 
	// $this->load->database();
	// $this->load->helper('url');
	}

	public function register()
	{
        //action when register clicked
        if (isset($_POST['register']))
		{
            $this->form_validation->set_rules('first_name', 'First Name', 'required'); 
            $this->form_validation->set_rules('last_name', 'Last Name', 'required'); 
            $this->form_validation->set_rules('company_name', 'Company Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required'); 
            $this->form_validation->set_rules('password', 'Password', 'required'); 
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            
		    //if form validation true
            if ($this->form_validation->run() == TRUE) {
                echo"here";
                $data=array(
                    'first_name'=>$this->input->post('first_name'),
                    // echo $_POST['first_name'];
                    'last_name'=>$this->input->post('last_name'),
                    'company_name'=>$this->input->post('company_name'),
                    'email'=>$this->input->post('email'),
                    'password'=>md5($this->input->post('password')),
                    'phone'=>$this->input->post('phone')
                );
                // print_r($data);
                // echo $_POST['first_name'];
                $insert = $this->register_u->register_user($data);
                if($insert == TRUE){ 
                    $this->session->set_flashdata('success_msg', 'Your account registration has been successful. Please login to your account.'); 
                    redirect("User/register","refresh"); 
                }else{ 
                    $data['error_msg'] = 'Some problems occured, please try again.'; 
                }
            }else{ 
                echo"no";
                echo $_POST['first_name'];
                $this->session->set_flashdata('errors', validation_errors());
                //$data['error_msg'] = 'Please fill all the mandatory fields.'; 
            }
        }  else{
            echo"no data";
        }
                /*$email=$this->input->post['email'];

            # check user credential 
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('email',$email);
            $query= $this->db->get();

        #if user exist
            if ($query->num_rows() == 1) {

                $this->session->set_flashdata('error_msg',"Username or Email already exists");
   $this->load->view('home');
                
            }else{
        //add user to database
                $data=array(
                    'first_name'=>$this->input->post['first_name'],
                    'last_name'=>$this->input->post['last_name'],
                    'company_name'=>$this->input->post['company_name'],
                    'email'=>$this->input->post['email'],
                    'password'=>md5($this->input->post['password']),
                    'phone'=>$this->input->post['icon_telephone']
                );
                $this->userModel->register_user($data);
                $this->session->set_flashdata('success_msg',"Registration successful!!");
                redirect("User/register","refresh");
            }*/
        
    
           // redirect("User/register","refresh");
    }
			
	
}
?>