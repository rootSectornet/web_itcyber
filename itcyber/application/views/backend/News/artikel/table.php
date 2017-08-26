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
              <?php echo $this->session->flashdata('sukses_artikel'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>Author</th>
                  <th>Tag</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                  <?php foreach ($artikel->result() as $row): ?>
                    <tr>
                      <td><?= $i++;?></td>
                      <td><?= $row->judul;?></td>
                      <td><?= $row->tanggal;?></td>
                      <td><?= $row->author;?></td>
                      <td><?= $row->tag;?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>Itcyb3r/news/publish_artikel/<?= $row->id_artikel?>.cpp" class="btn btn-success btn-waves" title="Publish" data-toggle="tooltip" data-placement="top" ><i class="fa  fa-check-square fa-fw"></i> </a>
                        <a href="<?php echo base_url(); ?>Itcyb3r/news/detail_artikel/<?= $row->id_artikel?>.cpp" class="btn btn-info btn-waves" title="Lihat" data-toggle="tooltip" data-placement="top" ><i class="fa  fa-eye fa-fw"></i> </a>
                        <a href="<?php echo base_url(); ?>Itcyb3r/news/edit_artikel/<?= $row->id_artikel?>.cpp" class="btn btn-warning btn-waves" title="Edit" data-toggle="tooltip" data-placement="top" ><i class="fa fa-pencil fa-fw"></i> </a>
                        <a href="<?php echo base_url(); ?>Itcyb3r/news/delete_artikel/<?= $row->id_artikel?>.cpp" onclick="return ConfirmDialog()" class="btn btn-danger btn-waves" title="Hapus" data-toggle="tooltip" data-placement="top" ><i class="fa fa-trash fa-fw"></i> </a>

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