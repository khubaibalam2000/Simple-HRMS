<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $emp_id =  $_REQUEST['Employee_ID'];
        $t_allot = $_REQUEST['Total_Allotment'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO fuel (Employee_ID, Total_Allotment) VALUES ('$emp_id', '$t_allot')";
        if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
	} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
?>