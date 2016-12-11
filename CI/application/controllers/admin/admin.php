<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/8/20
 * Time: 9:05
 */

class Admin extends MY_Controller
{
    public function index(){
        $this->load->view('admin/index');
    }

    public function right(){
        $this->load->view('admin/right');
    }
    
    public function change(){
        $this->load->view('admin/change_passwd');
    }

    /**
     * 密码修改验证
     */
    public function change_passwd(){
        $this->load->model('admin_model', 'admin');
        
        $username = $this->session->userdata('username');
        $userdata = $this->admin->check($username);
        $pwd = $this->input->post('passwd');

        if ($userdata[0]['pwd'] != $pwd) error('原始密码不正确');
        $pwdf = $this->input->post('passwdF');
        $pwds = $this->input->post('passwdS');

        if ($pwdf != $pwds) error('两次输入密码不一致');
        $uid = $this->session->userdata('uid');

        $data = [
            'pwd'=> $pwdf
        ];
        
        $this->admin->change_passwd($uid, $data);
        success('admin/admin/change');
    }
   
}