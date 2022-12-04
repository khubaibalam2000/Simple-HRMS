<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $name =  $_REQUEST['Name'];
        $dep_id = $_REQUEST['Department_ID'];
        $bas_salary =  $_REQUEST['Basic_Salary'];
        $gros_salary = $_REQUEST['Gross_Salary'];
        $email = $_REQUEST['Email'];
        $phone =  $_REQUEST['Phone_Number'];
        $designation = $_REQUEST['Designation'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO employees (Name, Department_ID, Basic_Salary, Gross_Salary, Email, Phone_Number, Designation) VALUES ('$name', '$dep_id','$bas_salary','$gros_salary','$email', '$phone', '$designation')";
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