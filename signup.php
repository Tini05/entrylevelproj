<?php require 'header.php' ?>

    <form class="form-signin" method="POST" action="signupLogic.php">
<h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

<input type="text" id="username" name="username" class="form-control" 
placeholder="Username" required autofocus>

<input type="text" id="fullname" name="fullname" class="form-control" 
placeholder="Full Name" required>

<input type="email" id="inputEmail"  name="email" class="form-control" placeholder="Email address"
required>
<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
required>

<button class="btn btn-lg btn-success btn-block" type="submit" name="submit">Sign up</button>
<small>If you already have an account. Login <a href="login.php">here</a></small>
    </form>
    
<?php require 'footer.php' ?>