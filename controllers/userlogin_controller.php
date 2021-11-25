<?php


class userlogin_controller extends sql_controller
{

    public function __construct()
    {
        $this->connect_db();
    }

    public function getuser($username) : user {
        $found_user = new user();
        $result = $this->read("user",["id","name","password"],"name",$username);
        if(!is_null($result) && $result->num_rows>0) {
            // user is found
            $row = $result->fetch_object();
            $found_user->id = $row->id;
            $found_user->name = $row->name;
            $found_user->password = $row->password;
        }
        return $found_user;
    }

}