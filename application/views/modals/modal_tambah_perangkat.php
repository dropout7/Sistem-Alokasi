<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Tambah Data Perangkat</h3>

    <form id="form-tambah-perangkat" method="POST">
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Perangkat" name="nama" aria-describedby="sizing-addon2">
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                <i class="glyphicon glyphicon-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="IP" name="ip_address" aria-describedby="sizing-addon2">
        </div>
        <div class="input-group form-group">
          <select name="bts" id="bts">
                <option value="====" selected>==pilih BTS==</option>
                <option value="tnmas">Tanah Mas </option>
                <option value="wai">Ngesrep </option>
                <option value="bukit">Bukit </option>
          </select>
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon" id="sizing-addon2">
                Detail (SSID,Freq, dll)
            </span>
        </div>
        <div class="input-group">
          <textarea name="detail" placeholder="SSID,Freq, dll" rows="4" cols="40" maxlength="100"></textarea>
        </div>
        <br><br>
        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
            </div>
        </div>
    </form>
</div>