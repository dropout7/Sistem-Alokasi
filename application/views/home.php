<!-- Scroll Note -->
<style>
  div.ex1 {
    /* background-color: lightblue; */
    width: auto;
    height: 300px;
    overflow: scroll;
  }
</style>

<!--- Tanggal dan Waktu -->
<?php 
  $timestamp = date('Y-m-d G:i:s');
  $zona = 'Asia/Jakarta';
  $dt = new DateTime("now", new DateTimeZone($zona));
  $timestamp = $dt->format('Y-m-d G:i:s');
?>
<div class="row">
  <div class="col-lg-4 col-xs-3">
    <div class="small-box bg-maroon">
      <div class="inner">
        <h3><?php echo $jml_perangkat; ?></h3>

        <p>Jumlah Perangkat</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-briefcase"></i>
      </div>
      <a href="<?php echo base_url('Perangkat') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-4 col-xs-3">
    <div class="small-box bg-orange">
      <div class="inner">
        <h3><?php echo $jml_cust; ?></h3>

        <p>Jumlah Customer</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-briefcase-outline"></i>
      </div>
      <a href="<?php echo base_url('Customer') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-4 col-xs-3">
    <div class="small-box bg-blue">
      <div class="inner">
        <h3>3</h3>

        <p>BTS</p>
      </div>
      <div class="icon">
        <i class="ion ion-cloud"></i>
      </div>
      <a href="<?php echo base_url('') ?>" class="small-box-footer" class="dropdown-toggle" data-toggle="modal" data-target="#tambah-perangkat">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 col-xs-4">
    <div class="box box-warning">
      <div class="box-header with-border">
        <i class="fa fa-"></i>
        <h3 class="box-title">Input Catatan / Note<small><br><?php echo $timestamp;?></small></h3>
      </div>
      <div class="box-body">
        <form id="form-tambah-catatan" action="<?php echo base_url('Catatan/prosesTambah') ?>" method="POST">
          <div class="col-lg-12">
            <input type="text" class="form-control" name="judul" value="" placeholder="Judul Note"><br>
            <input type="hidden" class="form-control" name="waktu" value="<?php echo $timestamp;?>" >
            <textarea name="detail" placeholder="Detail Catatan" rows="5" cols="auto" maxlength="200"></textarea>
            <br>
            
            <br>
            <div class="col-md-6">
              <button type="submit" class="form-control btn btn-warning"> <i class="glyphicon glyphicon-"></i> Post >></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-7 col-xs-6">
    <div class="box box-danger">
      <div class="box-header with-border">
        <i class="fa fa-briefcase"></i>
        <h3 class="box-title">Catatan Terbaru </h3>
      </div>
      <div class="box-body">
        <div class="ex1">
          <?php
              foreach ($dataCatatanNotif as $ctt)
               {
            ?>
          <div class="box box-warning">
            <div class="box-header with-border">
              <i class="fa fa-"></i>
              <h3 class="box-title"><b><?php echo $ctt->judul;?>  |  </b><small> <?php echo $ctt->waktu; ?></small></h3>
              <div class="box-tools pull-right">
                <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>  -->
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <div class="box-body">
                <?php echo $ctt->detail; ?>
              </div>
            </div>
          </div>
          <?php
            }
            ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
<div class="col-lg-6 col-xs-6">
    <div class="box">
      <div class="box-header with-border">
        <i class="fa fa-"></i>
        <h3 class="box-title">List Catatan<small><br></small></h3>
        <div class="box-tools pull-right">
          <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>  -->
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          <table id="list-data" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <!-- <th>#</th> -->
                      <th>Judul</th>
                      <th>Detail</th>
                      <th style="text-align: center;">.</th>
                  </tr>
              </thead>
              <tbody >
              <?php
                $no = 1;
                foreach ($dataCatatan as $catat) {
                ?>
                    <tr>
                        <!-- <td><?php echo $no; ?></td> -->
                        <td><?php echo $catat->judul; ?><small>
                          <p style="color:grey"><?php echo $catat->waktu; ?></p></small>
                          <?php
                            $stt = $catat->status;
                            if ($stt != '1'){?>
                              <input type="checkbox" value="" disabled>
                          <?php } else {?>
                              <input type="checkbox" value="" checked disabled>
                          <?php }?>
                        </td>
                        <td><?php echo $catat->detail; ?></td>
                        <td>
                          <?php echo anchor('Catatan/delete/'.$catat->id,'Delete'); ?>
                          <?php
                            $stt = $catat->status;
                            if ($stt != '1'){
                              echo anchor('Catatan/tambah_status/'.$catat->id,'Finish');
                            }else{
                              echo anchor('Catatan/update_status/'.$catat->id,'Unfinish');
                            }?>
                            <!-- <?php echo anchor('Catatan/tambah_status/'.$catat->id,'Selesai'); ?> -->
                        </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
              </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="col-lg-5 col-xs-4">
    <div class="box">
      <div class="box-header with-border">
        <i class="fa fa-"></i>
        <h3 class="box-title">List Customers<small><br></small></h3>
        <div class="box-tools pull-right">
          <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>  -->
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          <table id="list-data" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>IP Publik</th>
                  </tr>
              </thead>
              <tbody >
              <?php
                $no = 1;
                foreach ($dataCustLit as $cust) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $cust->nama; ?></td>
                        <td><?php echo $cust->ip_publik; ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
                <tr>
                  <td><a href="<?php echo base_url('Cust') ?>">More..</a></td>
                </tr>
              </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="col-lg-5 col-xs-4">
    <div class="box">
      <div class="box-header with-border">
        <i class="fa fa-"></i>
        <h3 class="box-title">List Perangkat<small><br></small></h3>
        <div class="box-tools pull-right">
          <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>  -->
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
          <table id="list-data" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>IP Address</th>
                  </tr>
              </thead>
              <tbody >
              <?php
                $no = 1;
                foreach ($dataPerangkatLit as $prg) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $prg->nama; ?></td>
                        <td><?php echo $prg->ip_address; ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
                <tr>
                  <td><a href="<?php echo base_url('Perangkat') ?>">More..</a></td>
                </tr>
              </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
