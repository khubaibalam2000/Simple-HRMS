<?php include('header.php') ?>
<?php 
$con=new mysqli("localhost", "root", "", "BMS");
$result=$con->query("SELECT * FROM `fuel`");
?>
<title> Fuel Allotment Information </title>
<body>
<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Fuel Allotment</button>
</div> 
<div style="text-align:right; width:100%; padding:1%;">

  <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Update</button></td>
  </div>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Card ID</th>
      <th scope="col">Employee ID</th>
      <th scope="col">Total Allotment</th>
      <th scope="col">Remaining Allotment</th>
    </tr>
  </thead>
  <tbody>
  
    <?php 
      if (is_array($result) || is_object($result)){
        foreach ($result as $value){
    ?>
        <tr>
          <td><?php echo $value['Card_ID']; ?> </td>
          <td><?php echo $value['Employee_ID']; ?> </td>
          <td><?php echo $value['Total_Allotment']; ?> </td>
          <td><?php echo $value['Remaining_Allotment']; ?> </td>
          <!-- <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Update</button></td> -->
          
          <!-- <td> <a href="fuel_update.php?Card_ID=<?php echo $value['Card_ID'];?>"> <button type="button" class="btn btn-secondary" data-target="#exampleModal2">Update</a></button> </td> -->
          <td> <a href="fuel_remove.php?Card_ID=<?php echo $value['Card_ID'];?>"> <button type="button" class="btn btn-secondary">Delete</a></button> </td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Fuel Allotment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="fuel_update.php" method="post">
        <div class="form-group">
          <input type="text" name="Card_ID" class="form-control" placeholder="Enter Card ID">
        </div>
        
        <div class="form-group">
          <input type="text" name="Total_Allotment" class="form-control" placeholder="Enter Total Allotment">
        </div>

          <div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          
        </form>
      </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
        

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Fuel Allotment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="fuel_form.php" method="post">
          <div class="form-group">
          <input type="text" name="Employee_ID" class="form-control" placeholder="Enter Employee ID">
          </div>
          <div class="form-group">
          <input type="text" name="Total_Allotment" class="form-control" placeholder="Enter Total Allotment">
        </div>

          <div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          
        </form>
      </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
