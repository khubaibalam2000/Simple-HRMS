<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $dept_id = $_REQUEST['Department_ID'];
        $dept_name = $_REQUEST['Department_Name'];
        $head = $_REQUEST['Head'];

        // Performing insert query execution
        // here our table name is college
        $sql = "UPDATE department SET Department_Name = '$dept_name', Head = '$head' WHERE Department_ID = '$dept_id'";//INVERTED COMMA AIN GAE $variable PAE KAY NAHI TEST KARO. 
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