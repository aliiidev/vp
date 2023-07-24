<?php
include_once("Models/Login_Model.php");

class Login extends Controller
{
	public function __construct()
	{
		parent::__construct();
        $this->model = new Login_Model();
        $this->index();
	}
    public function index()
    {
        session_start();
        $this->login_user();
        $this->view->Render("Login/index");
    }
    function login_user(){
        if (isset($_POST['submit']))
        {
            $username = htmlentities($_POST['username']);
            $password = htmlentities($_POST['password']);

            $data_sybmit = array(
                'username' =>$username,
                'password' => $password
            );
            //shell_exec("bash adduser " . $username . " " . $password);
            $this->model->submit_index($data_sybmit);
            //header('location: users');


        }

    }


}