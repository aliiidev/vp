<?php

class Edituser_Model extends Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function user($data_sybmit)
    {

        $query = $this->db->prepare("select * from users  WHERE username='".$data_sybmit['username']."'");
        $query->execute();
        $queryCount = $query->fetchAll();
        return $queryCount;
    }
    public function submit_update($data_sybmit)
    {
        $password=$data_sybmit['password'];
        $email=$data_sybmit['email'];
        $username=$data_sybmit['username'];
        $mobile=$data_sybmit['mobile'];
        $multiuser=$data_sybmit['multiuser'];
        $finishdate=$data_sybmit['finishdate'];
        $traffic=$data_sybmit['traffic'];
        $info=$data_sybmit['info'];
        $data = [
            'password'=>$password,
            'email' => $email,
            'mobile' => $mobile,
            'multiuser' => $multiuser,
            'finishdate' => $finishdate,
            'traffic' => $traffic,
            'info' => $info,
            'username' => $username
        ];

        $sql = "UPDATE users SET password=:password, email=:email,mobile=:mobile,multiuser=:multiuser,finishdate=:finishdate,traffic=:traffic,info=:info WHERE username=:username";

        $statement = $this->db->prepare($sql);

        if($statement->execute($data)) {
          shell_exec("sudo killall -u " . $username);
          shell_exec("bash Libs/sh/changepass ".$username." ".$password);
            header("Location: users");
        }
        //header("Location: users");
    }

}
