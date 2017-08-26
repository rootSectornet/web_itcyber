 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data File download   
        <a href="<?php echo base_url(); ?>Itcyb3r/file/tambah_file" class="btn btn-success btn-waves" title="Tambah" data-toggle="tooltip" data-placement="right" ><i class="fa fa-plus-square fa-fw"></i> Tambah</a><!-- Modal -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>Itcyb3r/backend.cpp"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Data File download</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              Tambah File Download
              <?php echo $this->session->flashdata('file'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php $atributes = array('role' => 'form');
                  echo form_open_multipart('',$atributes); 
              ?>
                <div class="col-md-6 col-md-offset-3">
                  <div class="form-group">
                    <label for="nama">Nama File : </label>
                    <input type="text" name="nama" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <a href="<?php echo base_url(); ?>Itcyb3r/anggota/anggota" class="btn btn-danger btn-waves" data-toggle="tooltip" data-placement="top" title="Kembali"><i class="fa fa-hand-o-left fa-fw"></i> Kembali</a>
                  <button type="submit" name="submit" class="btn btn-info btn-waves" data-toggle="tooltip" data-placement="top" title="Simpan"><i class="fa  fa-check-circle-o fa-fw"></i> Simpan</button>
                </div>
              <?php echo form_close(); ?>
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