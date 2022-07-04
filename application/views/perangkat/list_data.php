<?php
$no = 1;
foreach ($dataPerangkat as $prg) {
?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $prg->nama; ?></td>
        <td><?php echo $prg->ip_address; ?></td>
        <td><?php echo $prg->bts; ?></td>
        <td class="text-center" style="min-width:230px;">
            <button class="btn btn-danger konfirmasiHapus-Perangkat" data-id="<?php echo $prg->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
            <button class="btn btn-info detail-dataPerangkat" data-id="<?php echo $prg->id; ?>"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
        </td>
    </tr>
<?php
    $no++;
}
?>