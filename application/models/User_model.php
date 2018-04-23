<?php

    class User_model extends CI_Model {

        public function register_user ($user) {
            $this->db->insert('user', $user);
        }

        public function login_user ($email, $pass) {

            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('user_email', $email);
            $this->db->where('user_password', $pass);

            //$query = $this->db->get();
            //$query->row_array();
            //print_r($query);
            
            if ($query = $this->db->get()) {
            
                $query->row_array();
                return $query;
            }
            else {
            
                return false;
            }
        }

        public function email_check($email){
 
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('user_email',$email);
            $query=$this->db->get();
           
            if ($query->num_rows() > 0) {
              return false;
            }
            else {
              return true;
            }
           
          }

    }



?>