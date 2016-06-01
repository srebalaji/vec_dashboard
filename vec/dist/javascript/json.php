

<?php

    //Create Database connection

   $db = mysql_connect("128.199.194.1","root","vasi_gogo");

    if (!$db) {

        die('Could not connect to db: ' . mysql_error());

    }

    mysql_select_db("truck",$db); 
    $result = mysql_query("SELECT distinct devices.DeviceID, devicelog.lat, devicelog.lon, drivers.DriverID as Driverid, drivers.DriverName as DriverName, VehicleNo,drivers.VehicleTypeID, bookings.BookingStatusID, drivers.ContactNo, drivers.DriverStatusID, (select BookingID from bookings where DriverID = drivers.DriverID and bookings.BookingStatusID in (3,4,5) and bookings.VehicleTypeID = drivers.VehicleTypeID) as OrderID FROM drivers INNER JOIN driverdevices ON drivers.DriverID = driverdevices.DriverID INNER JOIN devices ON driverdevices.DeviceID = devices.DeviceID INNER JOIN devicelog on devicelog.DeviceID = devices.DeviceID left Join bookings on bookings.DriverID = drivers.DriverID and bookings.VehicleTypeID = drivers.VehicleTypeID and bookings.BookingStatusID in (3,4,5)", $db); 


    $json_response = array();

    while ($row = mysql_fetch_array($result)) {
        $row_array['lat'] = $row['lat'];
        $row_array['lng'] = $row['lon'];
       $row_array['content'] = "Name:$row[DriverName]"."<br>Order Id:$row[OrderID]".
       "<br>Mobile Number:$row[ContactNo]"."<br>Vehicle Number:$row[VehicleNo]";
  //$row_array['type'] = $row['DriverStatusID'];
       $row_array['type'] = $row['DriverStatusID'].$row['BookingStatusID'];
                array_push($json_response,$row_array);
} 
echo json_encode($json_response);
?>
