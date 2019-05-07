<!-- add TOR Records -->
<br>
<div class="container">
  <?php echo validation_errors(); ?>
  <form method="post" action="<?php echo base_url('home/form_validation')?>">
    <div class="form-group row">
      <label for="encoder" class="col-sm-2 col-form-label col-form-label-sm">Encoder</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-sm" name="encoder" value="bullet.dev">
      </div>
    </div>
    <div class="form-group row">
      <label for="bus_no" class="col-sm-2 col-form-label col-form-label-sm">Bus Number</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-sm" name="bus_no">
      </div>
    </div>
    <div class="form-group row">
      <label for="driver" class="col-sm-2 col-form-label col-form-label-sm">Driver</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-sm" name="driver">
      </div>
    </div>
    <div class="form-group row">
      <label for="conductor" class="col-sm-2 col-form-label col-form-label-sm">Conductor</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-sm" name="conductor">
      </div>
    </div>
    <div class="form-group row">
      <label for="tor_no" class="col-sm-2 col-form-label col-form-label-sm">TOR Number</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-sm" name="tor_no">
      </div>
    </div>
    <div class="form-group row">
      <div class="text-right col-sm-7">
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="<?php echo site_url()?>home/view">Cancel</button>
      </div>
    </div>
  </form>
</div>
