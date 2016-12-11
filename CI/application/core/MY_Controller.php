<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/8/21
 * Time: 13:45
 */

class MY_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        
        $username = $this->session->userdata['username'];
        if(!$username) {
            redirect('admin/login/index');
        }
    }
}