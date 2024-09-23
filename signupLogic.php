<?php
include_once('config.php');

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $tempPass=$_POST['password'];
    $defaultPicture="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Breezeicons-actions-22-im-user.svg/1200px-Breezeicons-actions-22-im-user.svg.png";
    $products=serialize(array());
    $password=password_hash($tempPass, PASSWORD_DEFAULT);
    
    $sqlcheck="SELECT email,password,username,picture,products FROM users WHERE username=:username";

    $prepcheck=$con->prepare($sqlcheck);
    $prepcheck->bindParam(':username',$username);
    $prepcheck->execute();
    
    $data=$prepcheck->fetch();

    if($data == false){
        $sql="INSERT INTO users(username,email,password,picture,products) 
        VALUES(:username,:email,:password,:picture,:products)";
    
        $prep=$con->prepare($sql);
        $prep->bindParam(':username',$username);
        $prep->bindParam(':email',$email);
        $prep->bindParam(':password',$password);
        $prep->bindParam(':picture',$defaultPicture);
        $prep->bindParam(':products',$products);
    
        $prep->execute();
        header("Location: login/index.html");
    }
    else{
        echo " Fail - An Account already exists with that username!";
    }  
}

?>