 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Anggota   
            <?php if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1 ): ?>
              <?php if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3): ?>
                    <a href="<?php echo base_url(); ?>Itcyb3r/anggota/tambah_anggota" class="btn btn-success btn-waves" title="Tambah" data-toggle="tooltip" data-placement="right" ><i class="fa fa-plus-square fa-fw"></i> Tambah</a><!-- Modal -->
              <?php endif ?>
            <?php endif ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>Itcyb3r/backend.cpp"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Data Anggota</li>
        <li class="active">Anggota</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php echo $this->session->flashdata('anggota'); ?>
              <div class="form-group">
                <label>Pilih Angkatan</label>
                <select class="form-control select2" style="width: 100%;">\
                  <?php foreach ($angkatan->result() as $key): ?>
                    <option value="<?= $key->id_angkatan;?>"><?= $key->angkatan;?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID Anggota</th>
                    <th>Angkatan</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. Telp</th>
                    <th>Foto</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($anggota->result() as $row): ?>
                      <tr>
                        <td><?= $row->id_anggota;?></td>
                        <td><?= $row->angkatan;?></td>
                        <td><?= $row->nama;?></td>
                        <td><?= $row->email;?></td>
                        <td><?= $row->no_telp;?></td>
                        <td><img width="60px" height="60px" src="<?php echo base_url(); ?>assets/backend/image/anggota/<?= $row->foto;?>" class="img-circle" alt="User Image"></td>
                        <td>
                          <a href="" class="btn btn-info btn-waves " data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
                          <?php if ($this->session->userdata('status_active') == 1 && $this->session->userdata('status_jabatan') == 1 ): ?>
                            <?php if ($this->session->userdata('id_jabatan') == 1 OR $this->session->userdata('id_jabatan') == 2 OR $this->session->userdata('id_jabatan') == 3): ?>
                                  
                                        <a href="<?php echo base_url(); ?>Itcyb3r/anggota/edit_anggota/<?= $row->id_anggota;?>" class="btn btn-warning btn-waves " data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="<?php echo base_url() ?>Itcyb3r/anggota/delete_anggota/<?= $row->id_anggota;?>" class="btn btn-danger btn-waves " data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" onclick="return ConfirmDialog()"></i></a>
                            <?php endif ?>
                          <?php endif ?>
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