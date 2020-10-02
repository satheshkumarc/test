<?php

include($_SERVER['DOCUMENT_ROOT'].'/task/func/testcontroller.php');
if(isset($_GET['edit']))
{
  $tv = $control->editData($_GET['edit']);
}
if(isset($_POST['test_update']))
{
  $update = $control->updateData($_GET['edit'], $_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

  <title>EDIT</title>
</head>
<body>
<div class="container">
<h1 class="text-center mb-2 mt-2">UPDATE USER DETAILS</h1>
  <div class="row">

  <div class="col-sm-3"></div>
    <div class="col-sm-6">
  
  <?php 
include($_SERVER['DOCUMENT_ROOT'].'/task/views/form.php');

?>
</div>
<div class="col-sm-3"></div>

</div>
</div>
<script>
$(document).ready(function () {
  $( "#test_submit" ).replaceWith( '<button class="btn btn-success" type="submit" id="test_update" name="test_update">Update</button>' );

});
</script>
<script src="../assets/js/custom_test.js"></script>
</body>
</html>