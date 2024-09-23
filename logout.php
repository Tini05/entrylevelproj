<?php

include_once('config.php');

if(isset($_POST['logout'])){
    $id=$_GET['id'];

    session_destroy();
    header('Location: login/index.html');
};
