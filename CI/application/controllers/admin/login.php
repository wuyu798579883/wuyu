<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/8/20
 * Time: 22:13
 */
class Login extends CI_Controller{
    public function index(){
        $this->load->view('admin/login');
    }

    public function code(){
        $config = array(
            'width'	=>	80,
            'height'=>	25,
            'codeLen'=>	1,
            'fontSize'=>16
        );
        $this->load->library('code', $config);

        $this->code->show();
    }
    
    public function login_in(){
        if (!isset($_SESSION)) {
            session_start();
        }
        $code = $this->input->post('captcha');
        if(strtoupper($code) != $_SESSION['code']) error('验证码错误');
        $pwd = $this->input->post('passwd');
        $username= $this->input->post('username');
        $this->load->model('admin_model', 'admin');

        $userdata = $this->admin->check($username);

        if(empty($userdata)|| $pwd != $userdata[0]['pwd']) error('用户名或密码不正确');
        
        $newData = [
            'username'=> $username,
            'uid'=> $userdata[0]['uid'],
            'login_time'=>time()
        ];

        $this->session->set_userdata($newData);

        success('admin/admin/index');
    }
    
    public function login_out(){
        $this->session->sess_destroy();
        success('admin/login/index');
    }
}