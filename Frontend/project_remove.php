<?php
$conn = mysqli_connect("localhost", "root", "", "BMS");
if(!$conn){
    echo "Error in connection";
}
$Project_ID = $_REQUEST['Project_ID'];

$del = mysqli_query($conn, "DELETE FROM projects WHERE Project_ID = $Project_ID");
echo $del;
if($del){
    mysqli_close($conn); // Close connection
    header("project.php"); // redirects to all records page
    exit;
}
else
{
    echo $Employee_ID;
    echo("Error description: " . mysqli_error($conn));
}
?>