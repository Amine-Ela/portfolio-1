<h2>Edit About Section</h2>
<?php
if (isset($_GET['msg'])) {

  if ($_GET['msg'] == 'updated') {
?>
    <div class="alert alert-success text-center" role="alert">
      Successfully Updated !
    </div>
<?php
  }
}
?>
<form method="post" action="php/uabout.php">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="psubtitle">Subheading</label>
      <input type="text" name="psubtitle" value="<?= $data['subheading'] ?>" class="form-control" id="psubtitle" placeholder="Currently Working at Hedkey Pvt. Ltd.">
    </div>
  </div>
  <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>