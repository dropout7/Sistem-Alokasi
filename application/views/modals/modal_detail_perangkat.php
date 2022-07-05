<div class="col-md-8 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-"></i> Detail Perangkat</h3>

  <div class="box box-body">
    <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
      <form id="form-update-perangkat" method="POST">
        <input type="hidden" name="id" value="<?php echo $perangkat->id; ?>">
        <div class="input-group form-control">
          <span class="input-group-addon" id="sizing-addon2">
            Perangkat
          </span>
          <input type="text" class="form-control" name="nama" aria-describedby="sizing-addon2" value="<?php echo $perangkat->nama; ?>">
          <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-hdd"></i>
          </span>
        </div>
        <div class="input-group form-control">
          <span class="input-group-addon" id="sizing-addon2">
            IP Address
          </span>
          <input type="text" class="form-control" name="ip_address" aria-describedby="sizing-addon2" value="<?php echo $perangkat->ip_address; ?>">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-globe"></i>
            </span>
        </div>
        <div class="input-group form-control">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-tower"></i>
            </span>
          <select class="input-group form-control" name="bts" id="bts">
          <option value="====" selected>=== Site BTS (Tower) ===</option>
            <?php
              if($perangkat->bts == "Tanah Mas Site"){?>    
                <option selected value="Tanah Mas Site">Tanah Mas </option>
                <option value="GOR Site">GOR Site </option>
                <option value="Bukit Site">Bukit </option>
              <?php }elseif($perangkat->bts == "GOR Site"){?>
                <option value="Tanah Mas Site">Tanah Mas </option>
                <option selected value="GOR Site">GOR Site </option>
                <option value="Bukit Site">Bukit </option>
              <?php }else{ ?>
                <option value="Tanah Mas Site">Tanah Mas </option>
                <option value="GOR Site">GOR Site </option>
                <option selected value="Bukit Site">Bukit </option>
              <?php }?>
          </select>
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                Detail <p>(SSID,Freq, dll)</p>
                <button class="btn-xs btn-flat" onclick="myCopy()"><i class="glyphicon glyphicon-copy"></i></button>
            </span>
            <textarea id="myDetail" class="input-group form-control" name="detail" placeholder="SSID,Freq, dll" rows="4" cols="40" maxlength="100" ><?php echo $perangkat->detail; ?></textarea>
        </div>
        <br>
        <div class="form-group">
          <div class="col-md-5">
            <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-repeat"></i> Update</button>
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