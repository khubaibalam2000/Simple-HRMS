<?php include('header.php') ?>
<?php 
$con=new mysqli("localhost", "root", "", "BMS");
$result=$con->query("SELECT * FROM `batch`");
?>
<title> Batches Information </title>
<body>
<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Batch</button>
</div> 
<div style="text-align:right; width:100%; padding:1%;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Update</button>
</div>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Batch ID</th>
      <th scope="col">Product ID</th>
      <th scope="col">Status</th>
      <th scope="col">Release Date</th>
      <th scope="col">Reason of Defect</th>
    </tr>
  </thead>
  <tbody>
  
    <?php 
      if (is_array($result) || is_object($result)){
        foreach ($result as $value){
    ?>
        <tr>
          <td><?php echo $value['Batch_ID']; ?> </td>
          <td><?php echo $value['Product_ID']; ?> </td>
          <td><?php echo $value['Status']; ?> </td>
          <td><?php echo $value['Release_Date']; ?> </td>
          <td><?php echo $value['Reason_Of_Defect']; ?> </td>
          <!-- <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Update</button></td> -->
          
          <td> <a href="batch_remove.php?Batch_ID=<?php echo $value['Batch_ID']; ?>"> <button type="button" class="btn btn-secondary">Delete</a></button> </td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Batch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="batch_update.php" method="post">
        <div class="form-group">
          <input type="text" name="Batch_ID" class="form-control" placeholder="Enter Batch ID">
          </div>

          <div class="form-group">
          <input type="text" name="Product_ID" class="form-control" placeholder="Enter Product ID">
          </div>
          <div class="form-group">
          <!-- <input type="text" name="Status" class="form-control" placeholder="Enter Batch Status"> -->
          <select name="Status">
              <option value="Released">Released</option>
              <option value="Defected">Defected</option>
              <option value="Pending">Pending</option>
              <option value="Returned">Returned</option>
          </select>
        </div>
          <div class="form-group">
          <input type="date" name="Release_Date" class="form-control" placeholder="Enter Release Date">
          </div>
          <div class="form-group">
          <input type="text" name="Reason_Of_Defect" class="form-control" placeholder="Enter Reason of Defect (optional)">
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Batch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="batch_form.php" method="post">
          <div class="form-group">
          <input type="text" name="Product_ID" class="form-control" placeholder="Enter Product ID">
          </div>
          <div class="form-group">
          <!-- <input type="text" name="Status" class="form-control" placeholder="Enter Batch Status"> -->
          <select name="Status">
              <option value="Released">Released</option>
              <option value="Defected">Defected</option>
              <option value="Pending">Pending</option>
              <option value="Returned">Returned</option>
          </select>
        </div>
          <div class="form-group">
          <input type="date" name="Release_Date" class="form-control" placeholder="Enter Release Date">
          </div>
          <div class="form-group">
          <input type="text" name="Reason_Of_Defect" class="form-control" placeholder="Enter Reason of Defect (optional)">
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
