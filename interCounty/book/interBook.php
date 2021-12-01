<?php

require_once '../../db/db_con.php';
    $fullnames =  $_REQUEST['fullnames'];
        $idpassport = $_REQUEST['idPass'];
       
        $adult = $_REQUEST['adult'];
        $children = $_REQUEST['children'];
        $ticket_numbers= $adult+$children;
        $coachType =  $_REQUEST['coach'];
          
        // Performing insert query execution
        // here our table name is bookings
        $sql = "INSERT INTO bookings  VALUES ('$fullnames', 
            '$idpassport','$ticket_numbers','$coachType'";

            // // INSERT INTO `bookings` (`pass_name`, 
            // `pass_IDPASS`, `ticket_numbers`, 
            // `ticket_type`, 
            // `train_from`, `train_to`, `time_dept`, `time_arr`, `day_travel`) VALUES ( 'Karanja Kim', '43434343', '5', 'VIP', 'Mombasa', 'Nairobi', '08:00:00.875000', '14:00:00.596000', '2021-12-10')


 $rs = mysqli_query($connection, $sql);
if($rs)
{
	echo "Records Inserted";
}

else
{
	echo $ticket_numbers,$coachType;
	
}


















?>