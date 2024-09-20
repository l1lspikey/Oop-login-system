<?php

class Signup extends Dbh {
protected function checkuser($uid, $email){
    $stmt = $this->connect()->prepare('SELECT users_id FROM users users_uid = ? OR users_email = ?;');
    //36:00
    if($stmt->execute(array())){

    }

}


}