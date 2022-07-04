<div class="col-md-offset-1 col-md-10 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Customer</h3>
  <div class="box box-body">
    <div class="col-md-offset-1 col-md-10 col-md-offset-12 well">
        <form id="form-tambah-cust" method="POST">
            <input type="hidden" name="id" value="">
                <div class="input-group form-group">
                    <p>Nama</p>
                <input type="text" class="form-control" name="nama" placeholder="Customer" aria-describedby="sizing-addon2" value="">
            </div>
                <div class="input-group form-group">
                    <p>IP Publik</p>
                <input type="text" class="form-control" name="ip_publik" aria-describedby="sizing-addon2" value="" placeholder="IP Publik">
            </div>
            <div class="input-group form-group">
            <select name="status" id="status">
                    <option value="====" selected>==Status==</option>
                    <option value="Aktif">Active </option>
                    <option value="OFF">Unactive </option>
            </select>
            </div>
            <div class="form-group">
            <span class="input-group-addon" id="sizing-addon2">
                Detail
            </span>
            </div>
            <div class="input-group form-group">
            <textarea name="detail" placeholder="Deskripsi, contoh : SSID , Frequensi, dsj" rows="auto" cols="auto" maxlength="100"></textarea>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="form-control btn btn-warning"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
                </div>
            </div>
        </form>
     </div>
    </div>
</div>