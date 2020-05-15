<?php
class userService
{
    protected $username;    
    protected $password; 
    protected $dataUser; 
    protected $getRole;  

    public function __construct($username, $password)
    {
        $this->_dataUser = [ 
            (object) [
                'username'  => "admin",
                'password'  => "admin",
            ]
        ];
       $this->username = $username; 
       $this->password = $password; 
    }

    public function login()
    {
        $user = $this->checkCredentials(); 
        if($user) {
            return $get_data = $user->username;
        } else {
            return false;
        }
    }

    protected function checkCredentials()
    {
        foreach($this->_dataUser as $key => $value) {
            if($value->username == $this->username && $value->password == $this->password) {
                return $value;
            }
        }
        return false;
    }
}
?>
