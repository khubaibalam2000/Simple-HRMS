<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $batch = $_REQUEST['Batch_ID'];
        $stat = $_REQUEST['Status'];
        $rod = $_REQUEST['Reason_Of_Defect'];
          
        // Performing insert query execution
        // here our table name is college
        //STATUS BEING RECOGNIZED AS SYNTAX. TEST IF ISSUE THEN CHANGE NAME
        $sql = "UPDATE batch SET Status = '$stat', Reason_Of_Defect = '$rod' WHERE Batch_ID = '$batch'";//INVERTED COMMA AIN GAE $variable PAE KAY NAHI TEST KARO
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