<?php
$conn = mysqli_connect("localhost", "root", "", "BMS");
if(!$conn){
    echo "Error in connection";
}
$Employee_ID = $_REQUEST['Employee_ID'];

$del = mysqli_query($conn, "DELETE FROM employees WHERE Employee_ID = $Employee_ID");
echo $del;
if($del){
    mysqli_close($conn); // Close connection
    header("emp.php"); // redirects to all records page
    exit;
}
else
{
    echo $Employee_ID;
    echo("Error description: " . mysqli_error($conn));
}
?>