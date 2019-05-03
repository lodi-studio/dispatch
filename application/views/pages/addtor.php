<!-- add TOR Records -->
<form class="form-horizontal" action="<?php echo site_url('home/addTorRecords') ?>">
  <div class="form-group">
    <label class="control-label col-sm-2" for="encoder">Encoder</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bus_no" value="encoder1">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="bus_no">Bus No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bus_no">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="driver">Driver:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="driver">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="conductor">Conductor:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="conductor">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="tor_no">Tor No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tor_no">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="encode_date">Date:</label>
    <div class="col-sm-10">
      <div class='input-group date' id='encode_date'>
        <input type='text' class="form-control" />
        <span class="input-group-addon">
          <span class="fa fa-calendar"></span>
        </span>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="encode_time">Time:</label>
    <div class="col-sm-10">
      <div class='input-group date' id='encode_time'>
        <input type='text' class="form-control" />
        <span class="input-group-addon">
          <span class="fa fa-time"></span>
        </span>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
