<?php
$no = 1;
foreach ($dataCust as $cst) {
?>
    <tr align="center">
        <td><?php echo $no; ?></td>
        <td><?php echo $cst->nama; ?></td>
        <td>
            <?php echo $cst->ip_publik; ?>
        </td>
        <td><?php
            if ($cst->status == 'Aktif') {
            ?>
                <button class="btn btn-xs btn-success" data-id="<?php echo $cst->id; ?>" disabled><?php echo $cst->status; ?></button>
            <?php } else {
            ?>
                <button class="btn btn-xs btn-danger" data-id="<?php echo $cst->id; ?>" disabled><?php echo $cst->status; ?></button>
            <?php } ?>
        </td>
        <td class="text-center" style="min-width:230px;">
            <button class="btn btn-danger konfirmasiHapus-cust" data-id="<?php echo $cst->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> </button>
            <button class="btn btn-info detail-dataCust" data-id="<?php echo $cst->id; ?>"><i class="glyphicon glyphicon-info-sign"></i> </button>
        </td>

    </tr>
<?php
    $no++;
}
?>

