<?php 

include($_SERVER['DOCUMENT_ROOT'].'/task/func/testcontroller.php');

$tbvalues = $control->slectData();

if(isset($_GET['delete']))
    {
      $control->deleteData($_GET['delete']);

    }
if(isset($_GET['export']))
    {
      $control->exportExcel();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Test</title>
</head>
<body class="">
  <h1 class="text-center">Record Lists</h1>
  <div class="container">
  <?php echo isset($_GET['message']) ?
    '<div class="alert alert-success" id="message" role="alert">'.
    $_GET['message'].'</div>' : ''; 
    ?>

    <div class="row">
  <div class="col-sm-12"> Go To ->
  <a class="btn btn-warning btn-sm mb-2" href="./add.php" role="button">ADD DETAILS</a> <a class="btn btn-primary btn-sm mb-2" href="../index.html" role="button">Home</a> <a class="btn btn-secondary btn-sm mb-2" href="./records.php?export=1" role="button">Export Excel</a>

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Dob</th>
      <th scope="col">Address 1</th>
      <th scope="col">Address 2</th>
      <th scope="col">Country</th>
      <th scope="col">State</th>
      <th scope="col">City</th>
      <th scope="col">Pincode</th>
      <th scope="col">Comments</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
while($row = mysqli_fetch_assoc($tbvalues)) {
?>
  <tr>
      <td><?php echo $row['firstname']; ?></td>
      <td><?php echo $row['lastname']; ?></td>
      <td><?php echo $row['dob']; ?></td>
      <td><?php echo $row['address1']; ?></td>
      <td><?php echo $row['address2']; ?></td>
      <td><?php echo $row['country']; ?></td>
      <td><?php echo $row['state']; ?></td>
      <td><?php echo $row['city']; ?></td>
      <td><?php echo $row['pincode']; ?></td>
      <td><?php echo $row['comments']; ?></td>
      <td class="d-flex">
      <a href="./edit.php?edit=<?php echo $row['id'] ?>" class="btn btn-info">EDIT</a>

<a href="./records.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">DELETE</a></td>
    </tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
<script src="../assets/js/custom_test.js"></script>

 </body>
</html>