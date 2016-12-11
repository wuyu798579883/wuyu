<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/8/21
 * Time: 13:03
 */

class Admin_model extends CI_Model{
    public function check($username){
        $userdata = $this->db->get_where('user', array('username'=> $username))->result_array();
        return $userdata;
        
    }

    public function change_passwd($uid, $data){
       $this->db->update('user',$data, array('uid'=> $uid));
    }
}