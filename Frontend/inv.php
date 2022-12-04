<?php include('header.php') ?>
<?php 
$con=new mysqli("localhost", "root", "", "BMS");
$result=$con->query("SELECT * FROM `inventory`");
?>
<title> Products Inventory </title>
<body>
<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Product</button>
</div> 
<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Update</button>
</div> 

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Monthly Sales</th>
      <th scope="col">Warehouse Location</th>
    </tr>
  </thead>
  <tbody>
  
    <?php 
      if (is_array($result) || is_object($result)){
        foreach ($result as $value){
    ?>
        <tr>
          <td><?php echo $value['Product_ID']; ?> </td>
          <td><?php echo $value['Product_Name']; ?> </td>
          <td><?php echo $value['Month_Sales']; ?> </td>
          <td><?php echo $value['Warehouse_Location']; ?> </td>
          <!-- <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Update</button></td> -->
          
          <td> <a href="inv_remove.php?Product_ID=<?php echo $value['Product_ID']; ?>"> <button type="button" class="btn btn-secondary">Delete</a></button> </td>
          </tr>  
    <?php    
        }
      }
    ?>
    
  </tbody>
</table>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="inv_update.php" method="post">
        <div class="form-group">
          <input type="text" name="Product_ID" class="form-control" placeholder="Enter Product ID">
          </div>
          <div class="form-group">
          <input type="text" name="Product_Name" class="form-control" placeholder="Enter Product Name">
          </div>
          <div class="form-group">
          <input type="text" name="Month_Sales" class="form-control" placeholder="Enter Monthly Sales">
          </div>
          <div class="form-group">
          <input type="text" name="Warehouse_Location" class="form-control" placeholder="Enter Warehouse Location">
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="inv_form.php" method="post">
          <div class="form-group">
          <input type="text" name="Product_Name" class="form-control" placeholder="Enter Product Name">
          </div>
          <div class="form-group">
          <input type="text" name="Month_Sales" class="form-control" placeholder="Enter Monthly Sales">
          </div>
          <div class="form-group">
          <input type="text" name="Warehouse_Location" class="form-control" placeholder="Enter Warehouse Location">
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
