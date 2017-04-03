<?php include "CRUD.php";?>
<?php
$user=new CRUD("users");
if(isset($_POST['submit'])){
    $user->create($_POST['username'],$_POST['password']);
}
?>

<?php include "includes/header.php"?> 
<div class="container">
    <div class="col-sm-6">
       <h1 class="text-center">Register</h1>
        <form action="http://127.0.0.1/project/sql/login_create.php" method="post">
            <div class="form-group">
               <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
                
            </div>
            
            <div class="form-group">
               <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="byn btn-primary" type="submit" name="submit" value="Submit">
        </form>
        
        
    </div>
    
<?php include "includes/footer.php"?>