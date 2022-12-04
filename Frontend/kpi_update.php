<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $proj_id = $_REQUEST['Project_ID'];
        $dept_id = $_REQUEST['Department_ID'];
        $task = $_REQUEST['Task'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "UPDATE kpi SET Task = '$task' WHERE Project_ID = '$proj_id' AND Department_ID = '$dept_id'";//WILL I USE AND? INVERTED COMMA AIN GAE $variable PAE KAY NAHI TEST KARO. 
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