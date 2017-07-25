<?php

class userss_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();

        $this->table = "userss"; // veritabanında table getirme ve tanımlama
    }

    public function get_all($where = array(), $order_by = "id ASC", $select = '*', $limit=array()) // veri tabanındaki bütün kayıtları getir
    {
        $this->db->select($select)
            ->from($this->table)
            ->where($where);

        if (!empty($order_by))
            $this->db->order_by($order_by);

        if (!empty($limit))
            $this->db->limit($limit["count"],$limit["start"]);

        $results = $this->db->get()->result();

        return $results;
    }

    public  function get($where=array()) // veri tabanındaki tek bir kayıtı getir
    {
        $row = $this
            ->db
            ->where($where)
            ->get($this->table)
            ->row();
        return $row;
    }

    public function update($where=array(), $data=array()) // veri tabanındaki tabloyu güncelleme
    {
        $update = $this
            ->db
            ->where($where)
            ->update($this->table, $data);
        return $update;
    }

    public function delete($where=array()) // veri tabanındaki tabloyu silme
    {
        $delete = $this->db
            ->where($where)
            ->delete($this->table);
        return $delete;
    }

    public function add($data=array()) // veri tabanına tablo ekleme
    {
        $insert = $this
            ->db
            ->insert($this->table, $data);
        return $insert;
    }


    public function update_reset_key($reset_key)
    {
        $email = $this->input->post('email');
        $this->db->where('email',$email);
        $data = array('reset_password_key' => $reset_key);
        $this->db->update('userss',$data);
        if ($this->db->affected_rows()>0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

    }

    public function reset_password()
    {
        $reset_password = $this->input->post('reset_key');
        $password       = $this->input->post('password');

        $this->db->where('reset_password_key', $reset_password);
        $viewData = array('password'=> md5($password));
        $this->db->update('userss',$viewData);
        return ($this->db->affected_rows()>0)?TRUE:FALSE;
        
    }
}

?>