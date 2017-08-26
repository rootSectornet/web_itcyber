  <?php 
 foreach ($artikel->result() as $row) {
   $id = $row->id_artikel;
   $judul = $row->judul;
   $gambar = $row->gambar;
   $author = $row->nama;
   $tags = $row->tag;
   $tanggal = $row->tanggal;
   $isi = $row->isi;
 }
  ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Artikel   
        <a href="<?php echo base_url(); ?>Itcyb3r/news/tambah_artikel.cpp" class="btn btn-success btn-waves" title="Tambah"><i class="fa fa-plus-square fa-fw"></i> Tambah</a><!-- Modal -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>Itcyb3r/backend.cpp"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Artikel</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2><?= $judul;?></h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="row">
              
              <div class="col-md-12">
               <img src="<?php echo base_url(); ?>assets/backend/image/artikel/<?= $gambar?>">
              </div>
              <div class="col-md-1">
                <span class="label label-default"><i class="fa fa-calendar-o fa-fw"></i> <?= $tanggal;?></span>
              </div>
              <div class="col-md-1">
                <span class="label label-default"><i class="fa fa-user fa-fw"></i> <?= $author;?></span>
              </div>
              <div class="col-md-1">
                <span class="label label-default"><i class="fa fa-tag fa-fw"></i> <?= $tags;?></span>
              </div><br><br><br><br><br>

            </div>
            <div class="clearfix">
              
            </div>
              <div class="row">
                <br><br><br>
              <div class="col-md-12">
                <?= $isi;?>
              </div>
              </div>
              <div class="col-md-2">
                <a href="<?php echo base_url(); ?>Itcyb3r/news/" class="btn btn-danger btn-waves" data-toggle="tooltip" data-placement="top" title="Kembali">Kembali</a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->