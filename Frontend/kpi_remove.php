<?php
$conn = mysqli_connect("localhost", "root", "", "BMS");
if(!$conn){
    echo "Error in connection";
}
$Proj_ID = $_REQUEST['Project_ID'];
$Dept_ID = $_REQUEST['Department_ID'];

$del = mysqli_query($conn, "DELETE FROM kpi WHERE Project_ID = $Proj_ID AND Department_ID = $Dept_ID");//AND ASAY HE AYE GA?
echo $del;
if($del){
    mysqli_close($conn); // Close connection
    header("kpi.php"); // redirects to all records page
    exit;
}
else
{
    echo $Proj_ID;
    echo $Dept_ID;
    echo("Error description: " . mysqli_error($conn));
}
?>