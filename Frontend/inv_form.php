<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $prod_name =  $_REQUEST['Product_Name'];
        $mon_sales = $_REQUEST['Month_Sales'];
        $war_loc = $_REQUEST['Warehouse_Location'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO inventory (Product_Name, Month_Sales, Warehouse_Location) VALUES ('$prod_name', '$mon_sales', '$war_loc')";
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