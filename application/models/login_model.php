<?php

class login_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();

        $this->table = "userss"; // veritabanında table getirme ve tanımlama
    }

   public function loginControl()
   {
       $this->db->where('username', $this->input->post('username'));
       $this->db->where('password', md5($this->input->post('password')));
       $query = $this->db->get('userss');

       if ($query->num_rows() == 1)
       {
           return true;
       }
       else
       {
           return false;
       }
   }

// Şifre Yenileme Başlangıç

}
?>