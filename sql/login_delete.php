<?php include "CRUD.php";?>
<?php
$user=new CRUD("users");
if(isset($_POST['submit'])){
    $user->delete($_POST['id']);
}
?>

<?php include "includes/header.php"?>
<div class="container">
    <div class="col-sm-6">
        <h2 class="text-center">Delete</h2>
        <form action="http://127.0.0.1/project/sql/login_delete.php" method="post">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="id" name="id" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
    </div>
    <?php include "includes/footer.php"?>

