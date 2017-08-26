 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori File Download   
                            <button type="button" class="btn btn-success btn-waves" title="Tambah"  data-toggle="modal" data-target="#tambah"><i class="fa fa-plus-square fa-fw"></i> Tambah</button><!-- Modal -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>Itcyb3r/backend.cpp"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kategori</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('sukses_kategori'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Kategori</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($kategori->result() as $row): ?>
                      <tr>
                        <td><?= $i++;?></td>
                        <td><?= $row->kategori;?></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-waves" title="Edit"  data-toggle="modal" data-target="#edit<?= $i;?>"><i class="fa fa-pencil"></i></button><!-- Modal -->
                              <div class="modal fade" id="edit<?= $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Kategori</h4>
                                    </div>
                                      <?php $atributes = array('role' => 'form');
                                          echo form_open('Itcyb3r/file/edit_kategori',$atributes); 
                                      ?>
                                        <div class="modal-body">
                                            <div class="box-body">
                                              <div class="form-group">
                                                <label for="kategori">Kategori : </label>
                                                    <input type="text" class="form-control" required name="kategori" id="kategori" value="<?= $row->kategori;?>">
                                              </div>
                                              <input type="hidden" name="id" value="<?= $row->id_kategori;?>" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                      <?php echo form_close(); ?>
                                  </div>
                                </div>
                              </div>
                            <a  href="<?php echo base_url(); ?>Itcyb3r/file/delete_kategori/<?= $row->id_kategori;?>" class="btn btn-danger btn-waves" data-toggle="tooltip" data-placement="top" title="Delete !" onclick="return ConfirmDialog()" ><i class="fa fa-trash fa-fw"></i></a>
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
  <!-- Modal tambah-->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah Kategori</h4>
          </div>
            <?php echo form_open('Itcyb3r/file/tambah_kategori'); ?>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="kategori">Kategori : </label>
                        <input type="text" class="form-control" required name="kategori" id="kategori" >
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
            <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  <!-- end modal tambah --> 
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