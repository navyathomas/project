<?php
if(isset($_POST['nm'])){
    $a=$_POST['comp'];
    $b=$_POST['exp'];
    $c=$_POST['prc'];
    $d=$_POST['quan'];
    $e=$_POST['nm'];
    $r=array();
    
    
    $servername="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="pharmacy";
    
    $con=new mysqli($servername,$dbusername,$dbpassword,$dbname);
    $query="UPDATE `medicine` SET `company`='$a',`expirydate`='$b',`price`=$c,`quantity`=$d WHERE `medicinename`='$e'";
    $result=$con->query($query);
    if($result===TRUE){
        $r['status']="successfully edited";
    }
 else {
    $r['status']="error";    
    }
    echo json_encode($r);
    
    
}

?>

