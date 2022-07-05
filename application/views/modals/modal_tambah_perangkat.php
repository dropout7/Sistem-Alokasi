<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg"></div>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Tambah Data Perangkat</h3>

    <form id="form-tambah-perangkat" method="POST">
        <div class="input-group form-control">
            <span class="input-group-addon" >
                <i class="glyphicon glyphicon-hdd"></i>
            </span>
            <input type="text" class="form-control" placeholder="Perangkat" name="nama" >
        </div>
        <div class="input-group form-control">
            <span class="input-group-addon">
                <i class="glyphicon glyphicon-globe"></i>
            </span>
            <input type="text" class="form-control" placeholder="IP" name="ip_address" >
        </div>
        <div class="input-group form-control">
            <span class="input-group-addon" >
                <i class="glyphicon glyphicon-tower"></i>
            </span>
          <select class=" form-control" name="bts" id="bts">
                <option value="====" selected>=== Site BTS (Tower) ===</option>
                <option value="Tanah Mas Site">Tanah Mas Site</option>
                <option value="Waikiki Site">Waikiki Site </option>
                <option value="Bukit Site">Bukit Site</option>
          </select>
        </div>
        <div class="input-group form-group">
            <span class="input-group-addon" >
                Detail <p>(SSID,Freq, dll)</p>
            </span>
            <textarea class="input-group form-control" name="detail" placeholder="SSID,Freq, dll" rows="4" cols="40" maxlength="400" >SSID : &#13;&#10;Frequency : &#13;&#10;Lainnya : </textarea>
        </div>
        <div class="input-group form-control">
        </div>
        <br><br>
        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="form-control btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
            </div>
        </div>
    </form>
</div>