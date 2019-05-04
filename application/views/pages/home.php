<!-- TOR Records Content -->
<div class="container">
  <br>
  <div class="col-lg-12 margin-tb">
    <div class="text-left">
      <h3 class="font-weight-bold">TOR Records</h3>
    </div>
    <div class="text-right">
      <a class="btn btn-success" href="<?php echo site_url('Home/addTorPage') ?>">Add TOR</a>
    </div>
  </div>
  <br>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Bus #</th>
        <th>Driver</th>
        <th>Conductor</th>
        <th>TOR #</th>
        <th>Date</th>
        <th>Time</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($records as $row) {?>
        <tr>
          <td><?php echo $row->bus_no;?></td>
          <td><?php echo $row->driver;?></td>
          <td><?php echo $row->conductor;?></td>
          <td><?php echo $row->tor_no;?></td>
          <td><?php echo $row->encode_date;?></td>
          <td><?php echo $row->encode_time;?></td>
          <td><form method="DELETE" action="<?php echo base_url();?>">
            <a class="btn btn-outline-warning" href="#">
              <i class="fa fa-fw fa-edit"></i>
            </a>

            <a class="btn btn-outline-danger" href="#">
              <i class="fa fa-fw fa-trash"></i>
            </a>
          </form>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
