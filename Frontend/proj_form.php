<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $proj_name =  $_REQUEST['Project_Name'];
        $proj_man_id =  $_REQUEST['Proj_Man_ID'];
        $date_start = $_REQUEST['Date_Started'];
        $date_end = $_REQUEST['Date_End'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO projects (Project_Name, Proj_Man_ID, Date_Started, Date_End) VALUES ('$proj_name', '$proj_man_id', '$date_start', '$date_end')";
        // mysqli_query($conn, "INSERT INTO employees  VALUES ('$name', '$dep_id','$bas_salary','$gros_salary','$email', '$phone', '$designation')");
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