<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $proj_id = $_REQUEST['Project_ID'];
        $proj_name = $_REQUEST['Project_Name'];
        $proj_man_id = $_REQUEST['Proj_Man_ID'];
        $date_end = $_REQUEST['Date_End'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "UPDATE projects SET Project_Name = '$proj_name', Proj_Man_ID = '$proj_man_id', Date_End = '$date_end' WHERE Project_ID = '$proj_id'";//INVERTED COMMA AIN GAE $variable PAE KAY NAHI TEST KARO
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