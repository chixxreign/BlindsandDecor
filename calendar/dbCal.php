<?php
   
    $custid = $_GET["custid"];
    $custaddress = $_GET["custaddress"];
    $schedDate = $_GET["schedDate"];
    $fromTime = $_GET["fromTime"]. ":00";
    $toTime = $_GET["toTime"] . ":00";
    $today = date("Y/m/d");

   

    $con = mysqli_connect("localhost", "root", "", "adamarc") or die("cannot connect to db!");
    $id = uniqid();

    $query = "select * from visitation where customer_id = ".$custid;
    $res = mysqli_query($con, $query);
    if (mysqli_num_rows($res) <= 0)
    {
    
        $query = "INSERT INTO `visitation`(`visitation_id`, `customer_id`, `address`, `date_today`, `scheduled_date`, `from_time`, `to_time`, `status`) VALUES ('$id',$custid, '$custaddress','$today', '$schedDate','$fromTime', '$toTime', 'unavailable')";
    
        $res = mysqli_query($con, $query);
        echo "Added Visitation!";
        
    }
    else
    {
        echo "You already have an appointment!";   
    }

    
    
    
?>
