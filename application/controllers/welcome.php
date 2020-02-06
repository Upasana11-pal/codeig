<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function auth()
	{
		$username=$this->input->post("email");
		//echo $username;
		$password=$this->input->post("password");
		//echo $password;
		
		$this->load->model("auth");
		$result=$this->auth->getauth()->row();
		if(($username==$result->username) && ($password==$result->password)){
			echo "matched";
			redirect(base_url()."index.php/welcome/registration/success/".$username);
		}
		else{
			//echo "not matched";
			redirect(base_url()."index.php/welcome/index/fail");
		}
		
		
	}
	public function registration()
	{
		$this->load->model('auth');
		$data['rty']=$this->auth->alldata();
		$this->load->view('registration',$data);
	}
public function savevalue(){
	$name=$this->input->post("name");
	//echo "$name";
	$fname=$this->input->post("fname");
	//echo "$fname";
	$mobile=$this->input->post("mobile");
	//echo "$mobile";
	$data=array(
			"name" => $name,
	         "fname" => $fname,
	         "mobile" => $mobile,
			"date" => date("y-m-d")
	);
	
	$this->load->model("auth");
	$this->auth->insertdata($data);
	
}


	
	}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */