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
<<<<<<< HEAD
            $this->form_validation->set_message('is_unique', 'Email already exists.');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]'); 
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]'); 
=======
            $this->form_validation->set_rules('email', 'Email', 'required'); 
            $this->form_validation->set_rules('password', 'Password', 'required'); 
>>>>>>> 1446bb4bea392b0409eca587309c98d46cc91d75
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            
		    //if form validation true
            if ($this->form_validation->run() == TRUE) {
<<<<<<< HEAD
                // echo"here";
=======
                echo"here";
>>>>>>> 1446bb4bea392b0409eca587309c98d46cc91d75
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
<<<<<<< HEAD
                    $this->session->set_flashdata('msg', 'Registration successful!'); 
                    redirect(base_url() . 'login'); 
                }else{ 
                    $this->session->set_flashdata('msg', 'Sorry something went wrong!'); 
                    redirect(base_url() . 'home');                }
            }else{ 
                // echo"no";
                // echo $_POST['first_name'];
                $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'home');
                //$data['error_msg'] = 'Please fill all the mandatory fields.'; 
            }
        }  
        // else{
        //     echo"no data";
        // }
    }
        
    public function login(){
        if (isset($_POST['login'])) 
        {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE)
        {
 
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
        

            $login_check = $this->register_u->check_login($email, $password);
            //if the result is query result is 1 then valid user
        if ($login_check) {
            //if yes then set the session 'loggin_in' as true
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('msg', "Login successful!");
            
            redirect(base_url().'product');
        } else {
            //if no then set the session 'logged_in' as false
            $this->session->set_userdata('logged_in', false);
            
            //and redirect to login page with flashdata invalid msg
            $this->session->set_flashdata('msg', 'Invalid username or password');
            redirect(base_url().'login');            
        }
            } 
        }
    }
}
	

=======
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
>>>>>>> 1446bb4bea392b0409eca587309c98d46cc91d75
?>