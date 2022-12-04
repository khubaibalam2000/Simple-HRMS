<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $dep_name =  $_REQUEST['Department_Name'];
        $head = $_REQUEST['Head'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO department (Department_Name, Head) VALUES ('$dep_name', '$head')";
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