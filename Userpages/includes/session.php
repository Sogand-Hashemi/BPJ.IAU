<?php

class Session{

    private $signed_in;
    public $user_id;

    function __construct()
    {
        session_start();
        $this->CheckLogin();
    }
    public function is_signed_in(){
        return $this->signed_in;
    }

    public function login($user){
        if ($user){
            $this->user_id=$_SESSION['user_id']= $user-> id;
            $this->signed_in=true;
        }

    }

    public function logout(){

        unset($_SESSION['user_id']);
        unset($this->user_id);

    }

    private function CheckLogin(){
        if(isset($_SESSION['user_id'])){
            $this->user_id=$_SESSION['user_id'];
            $this->signed_in=true;
        }else{
            unset($this->user_id);
        }
    }

}

$session = new Session();

?>