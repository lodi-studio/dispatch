<!-- TOR Records Content -->
<div class="container">
  <br>
  <div class="col-lg-12 margin-tb">
    <div class="row" >
      <div class="col">
        <h3 class="font-weight-bold">TOR Records</h3>
      </div>
      <div class="col text-right">
        <a class="btn btn-success" href="<?php echo site_url('tor/view/'. $page='AddTor') ?>">Add TOR</a>
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
        foreach ($data as $d) {?>
          <tr>
            <td><?php echo $d->bus_no;?></td>
            <td><?php echo $d->driver;?></td>
            <td><?php echo $d->conductor;?></td>
            <td><?php echo $d->tor_no;?></td>
            <td><?php echo $d->encode_date;?></td>
            <td><?php echo $d->encode_time;?></td>
            <td><form method="DELETE" action="<?php echo base_url() . "/tor/delete_tor/" . $d->tor_no; ?>">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <a class="btn btn-warning btn-sm" href="<?php echo base_url('tor/edit_tor/'.$d->tor_no) ?>">
                  <i class="fa fa-fw fa-edit"></i>
                </a>

                <button type="submit" class="btn  btn-danger btn-sm">
                  <i class="fa fa-fw fa-trash"></i>
                </button>
              </div>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
