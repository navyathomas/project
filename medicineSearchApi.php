<?php
if (isset($_POST['nm'])){
    
    
    $a=$_POST['nm'];
    $r=array();
    
    $servername="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="pharmacy";
    
    $con=new mysqli($servername,$dbusername,$dbpassword,$dbname);
    $query="SELECT  `company`, `expirydate`, `price`, `quantity` FROM `medicine` WHERE medicinename='$a'";
    $result=$con->query($query);
    
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            $r=$row;
    }
    echo json_encode($r);
    }
 else {
     echo "Invalid medicinename";
 }
 
    }


?>

