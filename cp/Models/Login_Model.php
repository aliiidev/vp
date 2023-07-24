<?php

class Login_Model extends Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function submit_index($data_sybmit)
	{
			$user = $data_sybmit['username'];
			$pass = $data_sybmit['password'];
            $query = $this->db->prepare("select * from setting where adminuser='".$user."' and adminpassword='".$pass."'");
            $query->execute();
            $queryCount = $query->rowCount();
            if ($queryCount > 0) {

				//echo "<br>welcome";
                echo "ggg";
                $_SESSION["username"] = $user;
				header("location: index");
			}
			else
			{
				//echo "<br>Invalid Username Or Password";
				header("location: login");
			}

	}
}
