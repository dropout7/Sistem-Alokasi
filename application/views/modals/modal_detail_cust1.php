<div class="col-md-offset-2 col-md-7 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-"></i> Detail Customer</h3>
  <div class="box box-body">
    <div class="col-md-offset-1 col-md-10 col-md-offset-12 well">
      <form id="form-update-cust" method="POST">
        <input type="hidden" name="id" value="<?php echo $cust->id; ?>">
        <div class="input-group form-control">
          <p>Nama</p>
          <input type="text" class="form-control" name="nama" placeholder="Customer" aria-describedby="sizing-addon2" value="<?php echo $cust->nama; ?>">
        </div>
        <div class="input-group form-control">
          <p>IP Publik</p>
          <input type="text" class="form-control" name="ip_publik" aria-describedby="sizing-addon2" value="<?php echo $cust->ip_publik; ?>" placeholder="IP Publik">
        </div>
        <div class="input-group form-control">
          <select class="form-control" name="status" id="status">
            <?php if($cust->status == "Aktif"){ ?>
              <option selected value="Aktif">Active </option>
              <option value="OFF">Unactive </option>    
            <?php }else{ ?>
              <option value="Aktif">Active </option>  
              <option selected value="OFF">Unactive </option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
        </div>
        <div class="input-group form-control">
          <span class="input-group-addon" id="sizing-addon2">
            <p>Detail</p>
          <button class="btn-xs btn-flat" onclick="myCopy()"><i class="glyphicon glyphicon-copy"></i></button>
          </span>
          <textarea class="input-group form-control" id="myDetail" name="detail" placeholder="Deskripsi, contoh : SSID , Frequensi, dsj" rows="4" cols="auto" maxlength="100"><?php echo $cust->detail; ?></textarea>
        </div>
        <br>
        <br>
        <div class="form-group">
          <div class="col-md-5">
            <button type="submit" class="form-control btn btn-success"> <i class="glyphicon glyphicon-repeat"></i> Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="text-right">
    <button class="btn btn-danger" data-dismiss="modal"> Close</button>
  </div>
</div>
<script>
function myCopy() {
  /* Get the text field */
  var copyText = document.getElementById("myDetail");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
}
</script>