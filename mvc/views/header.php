<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" href="<?php echo URL?>public/css/default.css"/>
    <script type="text/javascript" src="<?php echo URL?>public/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URL?>public/js/custom.js"></script>
    <?php
    if(isset($this->js))
    {
        foreach ($this->js as $js) {
            echo '<script type="text/javascript"src="' . URL .'views/'. $js . '"></script>';
        }
    }
    ?>
</head>

<?php Session::init()?>
</html>
<div id="header">
    <br />
    <?php if(Session::get('loggedIn')==false): ?>
        <a href="<?php echo URL?>index">Index</a>
        <a href="<?php echo URL?>register">Register</a>
    <?php endif; ?>
    <?php if(Session::get('loggedIn')==true): ?>
        <a href="<?php echo URL?>dashboard">Dashboard</a>
        <a href="<?php echo URL?>dashboard">Settings</a>
        <a href="<?php echo URL?>ToDoList">ToDo List</a>
        <a href="<?php echo URL?>dashboard/logout">Logout</a>
    <?php else: ?>
    <a href="<?php echo URL?>login">Login</a>
    <?php endif; ?>
</div>
<div id="content">