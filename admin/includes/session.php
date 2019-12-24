<?php

class Session{

    private $signed_in;
    public $user_id;

    function __construct()
    {
        session_start();
    }
    public function is_signed_in(){
        return $this->signed_in;
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