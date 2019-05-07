<!-- TOR Records Content -->
<div class="container">
  <br>
  <div class="col-lg-12 margin-tb">
    <div class="row" >
      <div class="col">
        <h3 class="font-weight-bold">TOR Records</h3>
      </div>
      <div class="col text-right">
        <a class="btn btn-success" href="<?php echo site_url('home/add_tor_page') ?>">Add TOR</a>
      </div>
    </div>
  </div>
  <br>
  <div class="col-lg-12 margin-tb">
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
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <a class="btn btn-warning btn-sm" href="#">
                  <i class="fa fa-fw fa-edit"></i>
                </a>

                <a class="btn  btn-danger btn-sm" href="<?php echo base_url() . "/Home/deleteTorId/" . $row->tor_no; ?>">
                  <i class="fa fa-fw fa-trash"></i>
                </a>
              </div>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
