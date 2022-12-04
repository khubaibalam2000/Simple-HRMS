<?php
$conn = mysqli_connect("localhost", "root", "", "BMS");
if(!$conn){
    echo "Error in connection";
}
$Product_ID = $_REQUEST['Product_ID'];

$del = mysqli_query($conn, "DELETE FROM inventory WHERE Product_ID = $Product_ID");
echo $del;
if($del){
    mysqli_close($conn); // Close connection
    header("inv.php"); // redirects to all records page
    exit;
}
else
{
    echo $Employee_ID;
    echo("Error description: " . mysqli_error($conn));
}
?>