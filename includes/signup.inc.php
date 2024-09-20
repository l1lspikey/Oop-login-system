<?php 

if (isset($_POST['submit'])){

     //Obteniendo los datos
     $uid = $_POST['uid'];
     $pwd = $_POST['pwd'];
     $pwdRepeat = $_POST['pwdrepeat'];
     $email = $_POST['email'];


     //Instanciando la clase SingupContr
     include "../Classes/signup.classes.php";
     include "../Classes/signup.classes.php";
     
     
     $signup = new SingupContr($uid, $pwd, $pwdRepeat, $email);


     //Running error handlers and user signup
     

     //Volviendo a la pagina principal 

}