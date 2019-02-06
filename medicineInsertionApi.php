<?php
if(isset($_POST['nm'])){
    $a=$_POST['nm'];
    $b=$_POST['comp'];
    $c=$_POST['exp'];
    $d=$_POST['prce'];
    $e=$_POST['quan'];
    $r=array();
    
    $servername="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="pharmacy";
    
    $con=new mysqli($servername,$dbusername,$dbpassword,$dbname);
    $query="INSERT INTO `medicine`(`medicinename`, `company`, `expirydate`, `price`, `quantity`) VALUES ('$a','$b','$c',$d,$e)";
    $result=$con->query($query);
    
    if($result===TRUE){
        $r['status']="successfully added";
    }
 else {
    $r['status']="error";    
    }
    echo json_encode($r);
}

?>

