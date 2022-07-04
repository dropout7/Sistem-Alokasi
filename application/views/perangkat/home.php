<div class="msg" style="display:none;">
    <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
    <div class="box-header">
        <div class="col-md-3">
            <button class="form-control btn btn-warning" data-toggle="modal" data-target="#tambah-perangkat"><i class="glyphicon "></i> Tambah Data</button>
        </div>
        <!-- <div class="col-md-3">
            <a href="<?php echo base_url('Perangkat/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
        </div>
        <div class="col-md-3">
            <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-kota"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
        </div> -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="list-data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Perangkat</th>
                    <th>IP Address</th>
                    <th>BTS</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody id="data-perangkat">

            </tbody>
        </table>
    </div>
</div>

<?php echo $modal_tambah_perangkat; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPerangkat', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
$data['judul'] = 'Perangkat';
$data['url'] = 'Perangkat/import';
echo show_my_modal('modals/modal_import', 'import-perangkat', $data);
?>