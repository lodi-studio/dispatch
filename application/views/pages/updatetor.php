<!-- add TOR Records -->
<br>
<div class="container">
  <div class="row">
    <div class="col">
      <?php echo validation_errors(); ?>
      <h3 class="font-weight-bold">Update TOR</h3>
      <form method="post" action="<?php echo base_url('home/update/'. $item->tor_no);?>">
          <div class="form-group row">
            <label for="encoder" class="col-sm-2 col-form-label col-form-label-sm">Encoder:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control form-control=sm" name="encoder" value="<?php echo $item->encoder; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="bus_no" class="col-sm-2 col-form-label col-form-label-sm">Bus Number:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control form-control=sm" name="bus_no" value="<?php echo $item->bus_no;  ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="driver" class="col-sm-2 col-form-label col-form-label-sm">Driver:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control form-control-sm" name="driver" value="<?php echo $item->driver;  ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="conductor" class="col-sm-2 col-form-label col-form-label-sm">Conductor:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control form-control-sm" name="conductor" value="<?php echo $item->conductor;  ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="tor_no" class="col-sm-2 col-form-label col-form-label-sm">TOR Number</label>
            <div class="col-sm-5">
              <input type="text" class="form-control form-control-sm" name="tor_no" value="<?php echo $item->tor_no;  ?>">
            </div>
          </div>
          <div class="form-group row">
            <div class="text-right col-sm-7">
              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              <a href="<?php echo site_url()?>home/view" class="btn btn-danger btn-sm" type="button">Cancel</a>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
