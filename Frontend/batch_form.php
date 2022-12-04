<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $prod_id =  $_REQUEST['Product_ID'];
        $stat = $_REQUEST['Status'];
        $rel_date = $_REQUEST['Release_Date'];
        $rod = $_REQUEST['Reason_Of_Defect'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO batch (Product_ID, Status, Release_Date, Reason_Of_Defect) VALUES ('$prod_id', '$stat', '$rel_date', '$rod')";
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