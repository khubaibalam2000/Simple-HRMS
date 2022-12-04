<?php
$conn = mysqli_connect("localhost", "root", "", "BMS");
if(!$conn){
    echo "Error in connection";
}
$Batch_ID = $_REQUEST['Batch_ID'];

$del = mysqli_query($conn, "DELETE FROM batch WHERE Batch_ID = $Batch_ID");
echo $del;
if($del){
    mysqli_close($conn); // Close connection
    header("batch.php"); // redirects to all records page
    exit;
}
else
{
    echo $Batch_ID;
    echo("Error description: " . mysqli_error($conn));
}
?>