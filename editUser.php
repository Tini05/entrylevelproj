<?php
require ('config.php');
if(empty($_SESSION['email'])){
    header('Location: login.php');
}
$id=$_GET['id'];
$sql="SELECT * FROM users WHERE id=:id LIMIT 1";
$prep=$con->prepare($sql);
$prep->bindParam(':id', $id);
$prep->execute();
$data=$prep->fetch();

?>

<?php
 require('header.php')
?>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Welcome: <?= $_SESSION['email'] ?></a>
<ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
        <a class="nav-link" href="logout.php">Sign out</a>
    </li>
</ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">
                            <span data-feather="home"></span>
                            Dashboard<span class="sr-only">(current)</span>
                        </a>
                    </li>
<li class="nav-item">
    <a class="nav-link" href="users.php">
    <span data-feather="users"></span>
    Users
    </a>   
</li>
<li class="nav-item">
    <a class="nav-link" href="#">
    <span data-feather="file"></span>
    Projects
    </a>  
</li>

                </ul>
            </div>
        </nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-wrap 
align-items-center pb-2 mb-2 border-bottom">
<h1 class="h2">Edit User</h1></div>

<form class="form-signin" method="POST" action="updateLogic.php">
<input type="hidden" id="id" value="<?=$data['id']; ?>" name="id">

<input type="text" id="username" value="<?=$data['username']; ?>" name="username"
class="form-control" placeholder="Username" required autofocus>

<input type="text" id="fullname" value="<?=$data['fullname']; ?>" name="fullname"
class="form-control" placeholder="Full Name" required autofocus>

<input type="text" id="email" value="<?=$data['email']; ?>" name="email"
class="form-control" placeholder="Email" required autofocus>

<input type="text" id="password" name="password"
class="form-control" placeholder="Password" required autofocus>

<button class="btn btn-lg btn-success btn-block" name="update" type="submit">
    Update
</button>
</form>
</main>

    </div>
</div>

<?php require('footer.php') ?>