<?php include('header.php') ?>
<?php 
$con=new mysqli("localhost", "root", "", "BMS");
$result=$con->query("SELECT * FROM `department`");
?>
<title> Departments </title>
<body>
<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Department</button>
</div> 

<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Update</button>
</div> 

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Department ID</th>
      <th scope="col">Department Name</th>
      <th scope="col">Head</th>
    </tr>
  </thead>
  <tbody>
  
    <?php 
      if (is_array($result) || is_object($result)){
        foreach ($result as $value){
    ?>
        <tr>
          <td><?php echo $value['Department_ID']; ?> </td>
          <td><?php echo $value['Department_Name']; ?> </td>
          <td><?php echo $value['Head']; ?> </td>
          <!-- <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Update</button></td> -->
          
          <td> <a href="dep_remove.php?Department_ID=<?php echo $value['Department_ID']; ?>"> <button type="button" class="btn btn-secondary">Delete</a></button> </td>
          </tr>  
    <?php    
        }
      }
    ?>
    
  </tbody>
</table>

<!-- update -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="dep_update.php" method="post">
        <div class="form-group">
          <input type="text" name="Department_ID" class="form-control" placeholder="Enter Department ID">
          </div>
          <div class="form-group">
          <input type="text" name="Department_Name" class="form-control" placeholder="Enter Department Name">
          </div>
          <div class="form-group">
          <input type="text" name="Head" class="form-control" placeholder="Enter Department Head's Name">
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="dep_form.php" method="post">
          <div class="form-group">
          <input type="text" name="Department_Name" class="form-control" placeholder="Enter Department Name">
          </div>
          <div class="form-group">
          <input type="text" name="Head" class="form-control" placeholder="Enter Department Head's Name">
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
  $(document).ready(function() {
     $("#MyModal").modal();
     $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').focus();
     });
  });
</script>
