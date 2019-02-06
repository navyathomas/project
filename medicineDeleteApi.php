<?php

if(isset($_POST['nm'])){
    $a=$_POST['nm'];
   
    $r=array();
    
    $servername="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="pharmacy";
    
    $con=new mysqli($servername,$dbusername,$dbpassword,$dbname);
    $query="DELETE FROM `medicine` WHERE medicinename='$a'";
    $result=$con->query($query);
    
    if($result===TRUE){
        $r['status']="successfully deleted";
    }
 else {
    $r['status']="error";    
    }
    echo json_encode($r);
}
?>

