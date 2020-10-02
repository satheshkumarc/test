<?php

include($_SERVER['DOCUMENT_ROOT'].'/task/db/countries.php');

?>
<form method="POST">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="fname">First name</label>
      <input type="text" class="form-control" id="fname" id="fname" name="fname" value="<?php echo isset($tv['firstname']) ? $tv['firstname'] : ''; ?>"><span class="text-danger">*</span>
    </div>
    <div class="col-md-6 mb-3">
      <label for="lname">Last name</label>
      <input type="text" class="form-control" id="lname" name="lname" value="<?php echo isset($tv['lastname']) ? $tv['lastname'] : ''; ?>"><span class="text-danger">*</span>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="dob">Dob</label>
      <input type="date" class="form-control" id="dob" name="dob" value="<?php echo isset($tv['dob']) ? $tv['dob'] : ''; ?>"><span class="text-danger">*</span>
    </div>
    <div class="col-md-6 mb-3">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="address1">Address 1</label>
      <textarea type="text" class="form-control" id="address1" name="address1"> <?php echo isset($tv['address1']) ? $tv['address1'] : ''; ?></textarea><span class="text-danger">*</span>
    </div>
    <div class="col-md-6 mb-3">
      <label for="address2">Address 2</label>
      <textarea type="text" class="form-control" id="address2" name="address2"> <?php echo isset($tv['address2']) ? $tv['address2'] : ''; ?></textarea>
      <span class="text-danger">*</span>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" name="city" value="<?php echo isset($tv['city']) ? $tv['city'] : ''; ?>"><span class="text-danger">*</span>
    </div>
    <div class="col-md-3 mb-3">
      <label for="state">State</label>
      <input type="text" class="form-control" id="state" name="state" value="<?php echo isset($tv['state']) ? $tv['state'] : ''; ?>"><span class="text-danger">*</span>
    </div>
    <div class="col-md-3 mb-3">
      <label for="pincode">Pincode</label>
      <input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo isset($tv['pincode']) ? $tv['pincode'] : ''; ?>"><span class="text-danger">*</span>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
	<label for="state">Country</label>
      <select class="custom-select" id="country" name="country">
        <option <?php echo isset($tv['country']) ? 'selected': ''; ?> value="<?php echo isset($tv['country']) ? $tv['country'] : ''; ?>"><?php echo isset($tv['country']) ? $tv['country']: 'choose';?></option>

<?php foreach($countries as $key=>$value): ?>
        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
<?php endforeach; ?>

      </select>
      <span class="text-danger">*</span>
    </div>
    <div class="col-md-3 mb-3">
    </div>
    <div class="col-md-3 mb-3">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="comments">Comments</label>
      <textarea type="text" class="form-control" id="comments" name="comments"> <?php echo isset($tv['comments']) ? $tv['comments'] : ''; ?></textarea>
      <span class="text-danger" style="display:none">*</span>
    </div>
  </div>

  <button class="btn btn-primary" type="submit" id="test_submit" name="test_submit">Submit form</button>
</form>
