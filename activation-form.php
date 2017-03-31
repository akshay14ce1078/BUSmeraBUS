<?php
include_once 'includes/functions.php';
include_once 'includes/db_connect.php';

if($_SERVER["REQUEST_METHOD"] == "GET"){
     $id=$_GET["id"];
     $result=$conn->query("select email from login_attemp where id=".$id);
     if($row=$result->fetch_assoc())
     if($conn->query("update login_record set account_state=0 where email='".$row['email']."'")){
          echo "<H3>ACCOUNT UNLOCKED WAIT YOU WILL BE REDIRECTED TO LOGIN PAGE";
          header('refresh:3;http://busmerabus.comxa.com/login.php');
     }
     else{
          echo "<H3>ACCOUNT CANNOT BE UNLOCKED.CONTACT SITE MANAGER WAIT YOU WILL BE REDIRECTED TO LOGIN PAGE";
          header('refresh:4;http://busmerabus.comxa.com/login.php');    
     }
}


?>