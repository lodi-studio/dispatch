<!-- add TOR Records -->
<br>
<div class="container">
<form action="<?php echo site_url('home/addTorRecords') ?>">
  <fieldset disabled>
    <div class="form-group row">
      <label for="encoder" class="col-sm-2 col-form-label col-form-label-sm">Encoder</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control-sm" id="encoder" placeholder="Encoder">
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <label for="bus_no" class="col-sm-2 col-form-label col-form-label-sm">Bus Number</label>
    <div class="col-sm-5">
      <input type="text" class="form-control form-control-sm" id="bus_no" placeholder="Bus Number">
    </div>
  </div>
  <div class="form-group row">
    <label for="driver" class="col-sm-2 col-form-label col-form-label-sm">Driver</label>
    <div class="col-sm-5">
      <input type="text" class="form-control form-control-sm" id="driver" placeholder="Driver">
    </div>
  </div>
  <div class="form-group row">
    <label for="conductor" class="col-sm-2 col-form-label col-form-label-sm">Conductor</label>
    <div class="col-sm-5">
      <input type="text" class="form-control form-control-sm" id="conductor" placeholder="Conductor">
    </div>
  </div>
  <div class="form-group row">
    <label for="tor_no" class="col-sm-2 col-form-label col-form-label-sm">TOR Number</label>
    <div class="col-sm-5">
      <input type="text" class="form-control form-control-sm" id="tor_no" placeholder="TOR Number">
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
