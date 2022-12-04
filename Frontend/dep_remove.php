<?php
$conn = mysqli_connect("localhost", "root", "", "BMS");
if(!$conn){
    echo "Error in connection";
}
$Department_ID = $_REQUEST['Department_ID'];

$del = mysqli_query($conn, "DELETE FROM department WHERE Department_ID = $Department_ID");
echo $del;
if($del){
    mysqli_close($conn); // Close connection
    header("dep.php"); // redirects to all records page
    exit;
}
else
{
    echo $Department_ID;
    echo("Error description: " . mysqli_error($conn));
}
?>