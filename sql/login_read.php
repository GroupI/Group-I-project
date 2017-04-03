<?php include "CRUD.php";?>
<?php include "includes/header.php"?>
<div class="container">
    <div class="col-sm-6">
        <pre>
        <?php
        $user=new CRUD("users");
        $user->read();
        ?>
       </pre>

    </div>
    <?php include "includes/footer.php"?>

