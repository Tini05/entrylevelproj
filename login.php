<?php
require('config.php');

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT username,password,email,picture,points,products,id FROM users WHERE username=:username";

    $prep=$con->prepare($sql);
    $prep->bindParam(':username',$username);
    $prep->execute();

    $data=$prep->fetch();

    if($data == false){
        echo "User with username you've typed is not found!!!";
    }
    else if(password_verify($password,$data['password'])){

        $_SESSION['username']=$data['username'];
        $_SESSION['password']=$data['password'];
        $_SESSION['email']=$data['email'];
        $_SESSION['picture']=$data['picture'];
        $_SESSION['points']=$data['points'];
        $_SESSION['products']=$data['products'];
        $_SESSION['id']=$data['id'];

        header("Location: main/index.php");
    }
    else{
        echo " Fail! Password or Username is incorrect";
    }
}
?>