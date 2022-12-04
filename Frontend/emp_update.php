<?php
        $conn = mysqli_connect("localhost", "root", "", "BMS");
        $emp_id = $_REQUEST['Employee_ID'];
        $emp_name = $_REQUEST['Name'];
        $b_s = $_REQUEST['Basic_Salary'];
        $g_s = $_REQUEST['Gross_Salary'];
        $ph_num = $_REQUEST['Phone_Number'];
        $dept_id = $_REQUEST['Department_ID'];
        $desg = $_REQUEST['Designation'];
        $email = $_REQUEST['Email'];

        // Performing insert query execution
        // here our table name is college
        //NAME ACTING AS A COMMAND, WHAT TO DO?
        //Update Query
        $sql = "UPDATE employees SET Name = '$emp_name', Basic_Salary = '$b_s', Gross_Salary = '$g_s', Phone_Number = '$ph_num', Department_ID = '$dept_id', Designation = '$desg', Email = '$email' WHERE Employee_ID = '$emp_id'";//INVERTED COMMA AIN GAE $variable PAE KAY NAHI TEST KARO. 
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