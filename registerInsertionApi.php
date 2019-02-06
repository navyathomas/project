<?php
if(isset($_POST['nm'])){
    $a=$_POST['nm'];
    $b=$_POST['mb'];
    $c=$_POST['em'];
    $d=$_POST['usr'];
    $e=$_POST['pass'];
    $r=array();
    
    
    $servername="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="pharmacy";
    
    $con=new mysqli($servername,$dbusername,$dbpassword,$dbname);
    $query="INSERT INTO `users`(`name`, `mobile`, `emailid`, `username`, `password`) VALUES ('$a',$b,'$c','$d','$e')";
    $result=$con->query($query);
    
    if($result===TRUE){
        $r['status']="successfully inserted";
    }
 else {
    $r['status']="error";    
    }
    echo json_encode($r);
}

?>
