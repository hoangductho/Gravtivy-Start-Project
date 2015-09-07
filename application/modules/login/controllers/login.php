<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login-view');		
	}

	public function dangnhap()
	{
		$a = $this->input->post('submit');
		if (isset($a)) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');

			$query = $this->db->query( "SELECT * FROM hs WHERE username = '$username' AND password = '$password' AND email = '$email' ");


			if(preg_match("/^[a-zA-Z0-9]+$/",$username) && preg_match("/^[a-zA-Z0-9]+$/",$password) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
				if ($query->num_rows() > 0 ) {
					echo "Bạn đã đăng nhập thành công";
				} else {
					echo "Đăng nhập thất bại";
				}
			}else {
				echo "Tài khoản không hợp lệ";
			}
		}
	}

}

/* End of file login.php */
/* Location: ./application/modules/login/controllers/login.php */