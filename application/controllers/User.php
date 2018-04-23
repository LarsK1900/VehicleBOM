<?php

    class User extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('user_model');
            $this->load->library('session');
        }

        public function index() {
            $this->load->view('register.php');
        }

        public function register_user () {

            $user = array(
                        'user_email' => $this->input->post('user_email'),
                        'user_password' => $this->input->post('user_password')
            );
            print_r($user);

            $email_check = $this->user_model->email_check($user['user_email']);

            if ($email_check) {
                $this->user_model->register_user($user);
                $this->session->set_flashdata('success_msg', 'Registered successfully. Now login to your account');
                redirect('user/login');
            }
            else {
                $this->session->set_flashdata('error_msg', 'Error occured, Try again');
                redirect('user/login');
            }
        }

        public function login_view () {
            $this->load->view('login.php');
        }

        public function login_user () {

            $user_login = array(
                'user_email'=>$this->input->post('user_email'),
                'user_password'=>$this->input->post('user_password')
            );
            
            print_r($user_login);
           
            $data = $this->user_model->login_user($user_login['user_email'], $user_login['user_password']);

                if($data)
                {
                  $this->session->set_userdata('idUser',$data->row('idUser'));   
                  $this->session->set_userdata('user_email',$data->row('user_email'));
           

                        
                echo '<pre>';
                var_dump($_SESSION);
                echo '</pre>';

                $this->user_profile();

                  //$this->load->view('user_profile.hp');
                  //redirect('user/profile');
           
                }
                else{
                  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
                  $this->load->view('login.php');
                  //redirect('user/login');
                }
        }
        
        function user_profile () {
            $this->load->view('profile.php');
        }

        public function user_logout () {
            $this->session->session_destroy();
            redirect('user/login', 'refresh');
        }
    }

?>