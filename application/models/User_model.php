<?php
class User_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function login(){
                $this->db->where("email" , $this->input->post("username"));
                $this->db->where("password" , md5($this->input->post("password")));
                $this->db->join("role_user b" , "a.userCode=b.userCode");
                $db = $this->db->get("user a");
                 return $db->row();
        }
}