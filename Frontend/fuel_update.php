<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $card_id = $_REQUEST['Card_ID'];
        $t_a = $_REQUEST['Total_Allotment'];

        // Performing insert query execution
        // here our table name is college
        $sql = "UPDATE fuel SET Total_Allotment = '$t_a' WHERE Card_ID = '$card_id'";//INVERTED COMMA AIN GAE $variable PAE KAY NAHI TEST KARO. 
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