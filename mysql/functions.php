<?php include "db.php";?>
<?php

function createRows(){
global $connection;
if(isset($_POST['submit'])){
$username =$_POST['username'];
$password =$_POST['password'];
    
    $query="INSERT INTO users(username,password)";
    $query .="VALUES('$username','$password')";
    $result= mysqli_query($connection,$query);
    if(!$result){
       die("Query FAIELD".mysqli_error()); 
    }else{
        echo"Registration successful";
    }
}
}
    $query="SELECT * FROM users";
  
    $result= mysqli_query($connection,$query);
    if(!$result){
       die("Query FAIELD".mysqli_error()); 
    }


function readRows(){
global $connection;
$query="SELECT * FROM users";
$result= mysqli_query($connection,$query);
    if(!$result){
       die("Query FAIELD".mysqli_error()); 
    }
     while($row=mysqli_fetch_assoc($result)){
            print_r($row);
        }
}

function showAllData(){
    global $connection;
   $query="SELECT * FROM users";
  
    $result= mysqli_query($connection,$query);
    if(!$result){
       die("Query FAIELD".mysqli_error()); 
    }
  while($row=mysqli_fetch_assoc($result)){
                $id=$row['ID'];
                echo "<option value='$id'>$id</option>";
            }
}
function UpdateTable(){
    if(isset($_POST['submit'])){
    global $connection;
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    
    $query="UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";
    $result=mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAIELD".mysqli_error($connection));
    }else{
        echo"Settings successful";
    }
    }
}

function deleteRows(){
    if(isset($_POST['submit'])){
    global $connection;
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    
    $query="DELETE FROM users ";
    $query .= "WHERE id = $id ";
    $result=mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAIELD".mysqli_error($connection));
    }else{
        echo"Deleting successful";
    }
    }
}