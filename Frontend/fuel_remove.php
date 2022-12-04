<?php
$conn = mysqli_connect("localhost", "root", "", "BMS");
if(!$conn){
    echo "Error in connection";
}
$card_id = $_REQUEST['Card_ID'];

$del = mysqli_query($conn, "DELETE FROM fuel WHERE Card_ID = $card_id");
echo $del;
if($del){
    mysqli_close($conn); // Close connection
    header("fuel.php"); // redirects to all records page
    exit;
}
else
{
    echo $card_id;
    echo("Error description: " . mysqli_error($conn));
}
?>