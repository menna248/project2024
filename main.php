
<?php

$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['mail'];


if (isset($_POST['btntest']))
{
  $host="localhost";
  $user="root";
  $passward="";
  $db="mydb";
    
  $conn= mysqli_connect( $host,$user,$passward,$db);
  
    $insert="insert into Students values('$Firstname','$lastname','$id')";
    
    $mysqli_query($conn,$insert);
    
    if($conn){
        
        echo("<h1 style='coloe:blue';>your registeration is done! </h1>")
    }
    else{
        echo("<h1 style='coloe:red';>your registeration is failed ! </h1>")

    }
}



?>
