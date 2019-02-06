<?php

if(isset($_POST['usr'])){
    

$r=array();

$b=$_POST['usr'];
$p=$_POST['pass'];


$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="pharmacy";

$con=new mysqli($servername,$dbusername,$dbpassword,$dbname);
$query="SELECT  `password` FROM `users` WHERE username='$b'";
$result=$con->query($query);

if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        $pass=$row['password'];
    }
    if($p==$pass)
    {
     $r['status']="true";   
    }
    else{
        $r['status']="false";   
    }
    echo json_encode($r);
}
 else {
 echo "error";    
}}
    



?>

