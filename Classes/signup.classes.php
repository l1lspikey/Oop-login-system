<?php
//database related stuff 
//run querys
// writing code inside the database 
class Signup extends Dbh {

protected function checkuser($uid, $email){
    $stmt = $this->connect()->prepare('SELECT users_id FROM users WHERE users_uid = ? OR users_email = ?;');

    if(!$stmt->execute(array($uid, $email))){
        $stmt = null; 
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    
    if (!$stmt->rowCount() > 0){
        $resultCheck = false;

    } else{
        $resultCheck = true;
    }
    
    return $resultCheck;
}


} 