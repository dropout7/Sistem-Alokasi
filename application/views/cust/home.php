<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
    <div class="box-header">
        <div class="col-md-3">
            <button class="form-control btn btn-warning" data-toggle="modal" data-target="#tambah-cust"><i class="glyphicon glyphicon-"></i> Tambah Data</button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="list-data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>IP Publik</th>
                    <th>Status</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody id="data-custo">

            </tbody>
        </table>
    </div>
</div>

<?php echo $modal_tambah_cust; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataCust', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
$data['judul'] = 'Cust';
$data['url'] = 'Cust/import';
echo show_my_modal('modals/modal_import', 'import-cust', $data);
?>