<?php
include_once('config.php');

if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $picture=$_POST['picture'];

    $sqlcheck="SELECT email,password,username,picture FROM users WHERE username=:username";

    $prepcheck=$con->prepare($sqlcheck);
    $prepcheck->bindParam(':username',$username);
    $prepcheck->execute();
    
    $data=$prepcheck->fetch();

    if($data == false){
        if(password_verify($password,$data['password'])){
            print("No password change!");
        }
        else{
            $password=password_hash($password, PASSWORD_DEFAULT);
        }
        
        if(empty($username) || empty($picture) || empty($email) || empty($password)){
            echo "Please fill all fields!";
        }
        else{

            $sql="UPDATE users SET username=:username, picture=:picture, email=:email,
            password=:password WHERE id=:id";

            $updatesql=$con->prepare($sql);
            $updatesql->bindParam(':id',$id);
            $updatesql->bindParam(':username', $username);
            $updatesql->bindParam(':picture', $picture);
            $updatesql->bindParam(':email', $email);
            $updatesql->bindParam(':password', $password);

            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            $_SESSION['email']=$email;
            $_SESSION['picture']=$picture;

            $updatesql->execute();
            header('Location: main/index.php');
        }
    }
    else{
        echo " Fail - An Account already exists with that username!";
    };
};
?>

