<div class="col-md-8 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-"></i> Detail Perangkat</h3>

  <div class="box box-body">
    <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
      <form id="form-update-perangkat" method="POST">
        <input type="hidden" name="id" value="<?php echo $perangkat->id; ?>">
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            Perangkat
          </span>
          <input type="text" class="form-control" name="nama" aria-describedby="sizing-addon2" value="<?php echo $perangkat->nama; ?>">
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            IP Address
          </span>
          <input type="text" class="form-control" name="ip_address" aria-describedby="sizing-addon2" value="<?php echo $perangkat->ip_address; ?>">
        </div>
        <div class="input-group form-group">
          <select name="bts" id="bts">
                <option value="====" selected>==pilih BTS==</option>
                <option value="tnmas">Tanah Mas </option>
                <option value="wai">Ngesrep </option>
                <option value="bukit">Bukit </option>
          </select>
        </div>
        <div class="form-group">
          <span class="input-group-addon" id="sizing-addon2">
            Detail
          </span>
        </div>
        <div class="input-group">
          <textarea name="detail" placeholder="SSID,Freq, dll"><?php echo $perangkat->detail; ?></textarea>
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