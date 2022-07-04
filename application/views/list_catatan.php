<?php
$no = 1;
foreach ($dataCatatan as $ctt) {
?>
    <tr>
        <td><?php echo $ctt->judul; ?></td>
        <td><?php echo $ctt->detail; ?></td>
        <td class="text-center" style="min-width:230px;">
            <button class="btn btn-info detail-dataCatatan" data-id="<?php echo $ctt->id; ?>"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
        </td>
    </tr>
<?php
    $no++;
}
?>