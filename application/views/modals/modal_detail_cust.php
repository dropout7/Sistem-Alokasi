<div class="col-md-12 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-"></i> Detail Customer</h3>

  <div class="box box-body">
    <div class="col-md-offset-1 col-md-5 col-md-offset-1 well">
      <input type="hidden" name="id" value="<?php echo $cust->id; ?>">
      <div class="form-group">
        <label>Customer</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $cust->nama; ?>" disabled>
      </div>
      <div class="form-group">
        <label>IP Publik</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $cust->ip_publik; ?>" disabled>
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $cust->ip_publik; ?>" disabled>
      </div>
    </div>
    <div class="col-md-offset-1 col-md-5 col-md-offset-1 well">
      <input type="hidden" name="id" value="<?php echo $cust->id; ?>">
      <div class="form-group">
        <label>Status</label>
        <p>
          <?php
          if ($cust->status == 'Aktif') {
          ?>
            <button class="btn btn-s btn-success" data-id="<?php echo $cust->id; ?>" disabled><?php echo $cust->status; ?></button>
          <?php } else {
          ?>
            <button class="btn btn-s btn-danger" data-id="<?php echo $cust->id; ?>" disabled><?php echo $cust->status; ?></button>
          <?php } ?>
      </div>
      <div class="form-group">
        <label>Access Point (AP)</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $cust->ip_publik; ?>" disabled>
      </div>
      <div class="form-group">
        <label>Frequency</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $cust->ip_publik; ?>" disabled>
      </div>
    </div>
    <div class="col-md-offset-1 col-md-11 well">
      <div class="form-group">
        <label>Info Dokumentasi</label>
        <center>
          <p><img src="<?php echo base_url('upload/11.jpg'); ?>" alt="Girl in a jacket" width="400" height="auto"></p>
          <img src="data:image/jpeg;base64,'.base64_encode( $inter['img'] ).'" />
        </center>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Detail lain</label>
            <textarea name="detail" disabled class="form-control" rows="3"><?php echo $cust->detail; ?></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-right">
    <a class="btn btn-primary" href="<?php echo base_url('Update/upcust'); ?>"> <i class="glyphicon glyphicon-repeat"></i> Update</a>
    <button class="btn btn-danger" data-dismiss="modal"> Close</button>
  </div>
</div>