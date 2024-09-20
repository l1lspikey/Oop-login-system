<?php 



class SingupContr {
    //properties inside the class
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    //Data from the user : public function __construc($uid, $pwd, $pwdRepeat, $email)
    public function __construc($uid, $pwd, $pwdRepeat, $email){
        //this->properties
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;

    }

    //Basic error handling
    private function emptyInput() {
        $result = false;

        if(empty($this->uid) ||empty($this->pwd)  || empty($this->pwdRepeat) || empty($this->email)){
            $result = false;

        }else{
            $result =true;
        }
        return $result;
    }

    private function invalidUid() {

            $result = false;
            if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
            {
                $result = false;
            }
            else
            {
                $result = true;
            }
            return $result;
        }



        private function invalidEmail() {
            $result = false;
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            {
            $result = false;
            }
            else
            {
            $result = true;
            }
            return $result;
        }

        private function pwdMatch(){

            $result = false;
            if($this->pwd !== $this->pwdRepeat)
            {    
                $result = false;
            }
            else
            {
                $result = true;
            } 
            return $result;
        }
}