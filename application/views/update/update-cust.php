<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
    <div class="box-header">
        <div class="col-md-2">
            <h3>Edit</h3>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="col-md-6">
            <div class="input-group form-group">
                <span class="input-group-addon" id="sizing-addon2">
                    <i class="glyphicon glyphicon-user"></i>
                </span>
                <input type="text" class="form-control" placeholder="Customer" name="nama" aria-describedby="sizing-addon2">
            </div>
            <div class="input-group form-group">
                <span class="input-group-addon" id="sizing-addon2">
                    <i class="glyphicon glyphicon-user"></i>
                </span>
                <input type="text" class="form-control" placeholder="IP" name="ip_address" aria-describedby="sizing-addon2">
            </div>
            <div class="input-group form-group">
                <span class="input-group-addon" id="sizing-addon2">
                    <i class="glyphicon glyphicon-user"></i>
                </span>
                <input type="text" class="form-control" placeholder="Detail" name="detail" aria-describedby="sizing-addon2">
            </div>
        </div>
    </div>
</div>

<?php
$data['judul'] = 'upCust';
?>