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
              <?php echo $this->session->flashdata('file'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama File</th>
                    <th>Link</th>
                    <th>Kategori</th>
                    <th>Jenis</th>
                    <th>Description</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  <?php foreach ($file->result() as $row): ?>
                    <tr>
                      <td><?= $i++;?></td>
                      <td><?= $row->file;?></td>
                      <td><?= $row->link;?></td>
                      <td><?= $row->kategori;?></td>
                      <td><?= $row->jenis;?></td>
                      <td><?= $row->description;?></td>
                      <td>
                          <a  href="<?php echo base_url(); ?>Itcyb3r/file/edit_file/<?= $row->id_file;?>" class="btn btn-danger btn-waves" data-toggle="tooltip" data-placement="top" title="Edit !"><i class="fa fa-trash fa-fw"></i></a>
                          <a  href="<?php echo base_url(); ?>Itcyb3r/file/delete_jenis/<?= $row->id_jenis;?>" class="btn btn-danger btn-waves" data-toggle="tooltip" data-placement="top" title="Delete !" onclick="return ConfirmDialog()" ><i class="fa fa-trash fa-fw"></i></a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
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
<script type="text/javascript">

function ConfirmDialog() {
  var x=confirm("Apakah anda yakin ingin menghapus data ini?")
  if (x) {
    return true;
  } else {
    return false;
  }
}
</script>