<?php

// require_once '../../db/db_con.php';

$link = mysqli_connect("localhost", "root", "", "swift_train");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    $fullnames =  $_REQUEST['fullnames'];
        $idpassport = $_REQUEST['idPass'];
       
        $adult = $_REQUEST['adult'];
        $children = $_REQUEST['children'];
        $ticket_numbers= $adult+$children;
        $coachType =  $_REQUEST['coach'];
          
        // Performing insert query execution
        // here our table name is bookings
        // $sql = "INSERT INTO bookings  VALUES ('$fullnames', 
        //     '$idpassport','$ticket_numbers','$coachType','Mombasa', 'Nairobi', '08:00:00.875000', '14:00:00.596000', '2021-12-10'";

$sql = " INSERT INTO `bookings` (`pass_name`, 
`pass_IDPASS`, `ticket_numbers`, 
`ticket_type`
) VALUES ( '$fullnames', '$idpassport', '$coachType', '$coachType')";

            


            if(mysqli_query($link, $sql)){
                echo "Records added successfully.";}

else
{
	echo $ticket_numbers,$coachType;
	
}


















?>