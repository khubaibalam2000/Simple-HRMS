<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $prod_id = $_REQUEST['Product_ID'];
        $prod_name = $_REQUEST['Product_Name'];
        $month_sales = $_REQUEST['Month_Sales'];
        $ware_loc = $_REQUEST['Warehouse_Location'];
       
        // Performing insert query execution
        // here our table name is college
        $sql = "UPDATE inventory SET Product_Name = '$prod_name', Month_Sales = '$month_sales', Warehouse_Location = '$ware_loc' WHERE Product_ID = '$prod_id'";//INVERTED COMMA AIN GAE $variable PAE KAY NAHI TEST KARO. 
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