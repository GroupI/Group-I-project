<?php include "CRUD.php";?>
<?php
$user=new CRUD("users");
if(isset($_POST['submit'])) {
    $user->update($_POST['username'], $_POST['password'], $_POST['id']);
} ?>


<?php include "includes/header.php"?>
<div class="container">
<div class="col-sm-6">
<h1 class="text-center">Settings</h1>        
<form action="http://127.0.0.1/project/sql/login_update.php" method="post">
        <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control">        
        </div>
            <div class="form-group">
               <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
    <div class="form-group">
        <label for="id">ID</label>
        <input type="id" name="id" class="form-control">
    </div>
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
        </form>  
    </div>
<?php include "includes/footer.php"?>

