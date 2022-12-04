<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $proj_id =  $_REQUEST['Project_ID'];
        $dept_id = $_REQUEST['Department_ID'];
        $task = $_REQUEST['Task'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO kpi (Project_ID, Department_ID, Task) VALUES ('$proj_id', '$dept_id', '$task')";
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