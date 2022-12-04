<?php include('header.php') ?>
<?php 
$con=new mysqli("localhost", "root", "", "BMS");
$result=$con->query("SELECT * FROM `projects`");
?>
<title> Projects Record </title>
<body>
<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Project</button>
</div> 

<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Update</button>
</div> 

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Project ID</th>
      <th scope="col">Project Name</th>
      <th scope="col">Project Manager ID</th>
      <th scope="col">Date Started</th>
      <th scope="col">Date End</th>
    </tr>
  </thead>
  <tbody>
  
    <?php 
      if (is_array($result) || is_object($result)){
        foreach ($result as $value){
    ?>
        <tr>
        <td><?php echo $value['Project_ID']; ?> </td>
          <td><?php echo $value['Project_Name']; ?> </td>
          <td><?php echo $value['Proj_Man_ID']; ?> </td>
          <td><?php echo $value['Date_Started']; ?> </td>
          <td><?php echo $value['Date_End']; ?> </td>
          <!-- <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Update</button></td> -->
          
          <td> <a href="project_remove.php?Project_ID=<?php echo $value['Project_ID']; ?>"> <button type="button" class="btn btn-secondary">Delete</a></button> </td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="proj_update.php" method="post">
        <div class="form-group">
          <input type="text" name="Project_ID" class="form-control" placeholder="Enter Project ID">
          </div>
          <div class="form-group">
          <input type="text" name="Project_Name" class="form-control" placeholder="Enter Project Name">
          </div>
          <div class="form-group">
          <input type="text" name="Proj_Man_ID" class="form-control" placeholder="Project Manager ID">
          </div>
          <div class="form-group">
          <input type="date" name="Date_Started" class="form-control" placeholder="Enter Date Started">
          </div>
          <div class="form-group">
          <input type="date" name="Date_End" class="form-control" placeholder="Enter Expected End Date">
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
        <form action="proj_form.php" method="post">
          <div class="form-group">
          <input type="text" name="Project_Name" class="form-control" placeholder="Enter Project Name">
          </div>
          <div class="form-group">
          <input type="text" name="Proj_Man_ID" class="form-control" placeholder="Project Manager ID">
          </div>
          <div class="form-group">
          <input type="date" name="Date_Started" class="form-control" placeholder="Enter Date Started">
          </div>
          <div class="form-group">
          <input type="date" name="Date_End" class="form-control" placeholder="Enter Expected End Date">
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
