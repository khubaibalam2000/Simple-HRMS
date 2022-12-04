<?php include('header.php') ?>
<?php 
$con=new mysqli("localhost", "root", "", "BMS");
$result=$con->query("SELECT * FROM `employees`");
?>
<title> Employees Record </title>
<body>
<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Employee</button>
</div> 

<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Update</button>
</div> 

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Employee ID</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Basic Salary</th>
      <th scope="col">Gross Salary</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Department ID</th>
      <th scope="col">Designation</th>
      <th scope="col">Email Address</th>
    </tr>
  </thead>
  <tbody>
  
    <?php 
      if (is_array($result) || is_object($result)){
        foreach ($result as $value){
    ?>
        <tr>
          <td><?php echo $value['Employee_ID']; ?> </td>
          <td><?php echo $value['Name']; ?> </td>
          <td><?php echo $value['Basic_Salary']; ?> </td>
          <td><?php echo $value['Gross_Salary']; ?> </td>
          <td><?php echo $value['Phone_Number']; ?> </td>
          <td><?php echo $value['Department_ID']; ?> </td>
          <td><?php echo $value['Designation']; ?> </td>
          <td><?php echo $value['Email']; ?> </td>
          <!-- <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Update</button></td> -->
          
          <td> <a href="emp_remove.php?Employee_ID=<?php echo $value['Employee_ID']; ?>"> <button type="button" class="btn btn-secondary">Delete</a></button> </td>
          
          </tr>  
    <?php
        }
      }
      
    ?>
    
  </tbody>
</table>

<!-- update -->
<!-- update -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="emp_update.php" method="post">
        <div class="form-group">
            <input type="text" name="Employee_ID" class="form-control" placeholder="Enter Employee ID">
          </div>
          <div class="form-group">
            <input type="text" name="Name" class="form-control" placeholder="Enter Employee Name">
          </div>
          <div class="form-group">
          <input type="text" name="Department_ID" class="form-control" placeholder="Enter Department ID">
          </div>
          <div class="form-group">
          <input type="text" name="Basic_Salary" class="form-control" placeholder="Enter Basic Salary">
          </div>
          <div class="form-group">
          <input type="text" name="Gross_Salary" class="form-control" placeholder="Enter Gross Salary">
          </div>
          <div class="form-group">
          <input type="text" name="Email" class="form-control" placeholder="Enter Email Address">
          </div>
          <div class="form-group">
          <input type="text" name="Phone_Number" class="form-control" placeholder="Enter Phone Number">
          </div>
          <div class="form-group">
          <input type="text" name="Designation" class="form-control" placeholder="Enter Designation">
          </div>
          <div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          
        </form>
      </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <!-- <input type="submit" value="Submit"> -->
          </div>
        </div>
      </div>
    </div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="emp_form.php" method="post">
          <div class="form-group">
            <input type="text" name="Name" class="form-control" placeholder="Enter Employee Name">
          </div>
          <div class="form-group">
          <input type="text" name="Department_ID" class="form-control" placeholder="Enter Department ID">
          </div>
          <div class="form-group">
          <input type="text" name="Basic_Salary" class="form-control" placeholder="Enter Basic Salary">
          </div>
          <div class="form-group">
          <input type="text" name="Gross_Salary" class="form-control" placeholder="Enter Gross Salary">
          </div>
          <div class="form-group">
          <input type="text" name="Email" class="form-control" placeholder="Enter Email Address">
          </div>
          <div class="form-group">
          <input type="text" name="Phone_Number" class="form-control" placeholder="Enter Phone Number">
          </div>
          <div class="form-group">
          <input type="text" name="Designation" class="form-control" placeholder="Enter Designation">
          </div>
          <div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          
        </form>
      </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <!-- <input type="submit" value="Submit"> -->
          </div>
        </div>
      </div>
    </div>
        

</body>
<!-- JS code -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
</script>
<script>
  //show modal
  $(document).ready(function() {
     $("#MyModal").modal();
     $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').focus();
     });
  });


</script>
