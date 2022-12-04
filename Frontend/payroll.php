<?php include('header.php') ?>

<?php 
$con=new mysqli("localhost", "root", "", "BMS");
$result=$con->query("SELECT Employee_ID, Gross_Salary FROM `employees`");

if (is_array($result) || is_object($result)){
  foreach($result as $value){
    $temp_id = $value['Employee_ID'];
    $temp_sal = $value['Gross_Salary'];
    $con->query("INSERT INTO payroll VALUES ('$temp_id', '$temp_sal')");
  }
}
?>
<title> Payroll </title>
<body>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Employee ID</th>
      <th scope="col">Monthly Salary</th>
    </tr>
  </thead>
  <tbody>
    
    <?php 
      $result2=$con->query("SELECT * FROM payroll inner join employees on Emp_ID = Employee_ID");
      if (is_array($result2) || is_object($result2)){
        foreach ($result2 as $value){
    ?>
        <tr>
          <td><?php echo $value['Emp_ID']; ?> </td>
          <td><?php echo $value['Month_Salary']; ?> </td>
          </tr>  
    <?php    
        }
      }
    ?>
    
  </tbody>
</table>
</body>

