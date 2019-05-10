<?php
class Login_model extends CI_model
{
    public function __construct(){
        $this->load->database();
    }
    public function login($username, $password)
    {
        $query = $this->db->get_where('users', 
            array('username' => $username));
        if($query->num_rows() == 1)
        {
            $row=$query->row();
            if(password_verify(($password), $row->password))
            {
                $data=array('user_data'=>array(
                    'id_user'=>$row->id,
                    'name'=>$row->nombre,
                    'email'=>$row->correo,
                    'password'=>$row->password)
                );
                $this->session->set_userdata($data);
                return true;
            }
        }
        $this->session->unset_userdata('user_data');
        return false;
    }
}