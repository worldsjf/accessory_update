<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

    public function checkLogin(){
        if(!$this->session->userdata('LoggedIn')){ // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
            redirect(base_url('/login'));
        }
    }

    public function index()
	{ 
        $this->checkLogin();  
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/navbar');
        $this->load->view('dashboard/index');
        $this->load->view('admin_template/footer');
	}

    public function logout(){
        $this->session->unset_userdata('LoggedIn');
        $this->session->set_flashdata('message', 'Logout Successfully');
        redirect(base_url('/login'));
    }

}