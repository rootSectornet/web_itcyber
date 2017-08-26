 <?php foreach ($anggota->result() as $rows):
   $id = $rows->id_anggota;
   $nama = $rows->nama;
   $email = $rows->email;
   $id_angkatan = $rows->id_angkatan;
   $id_jabatan = $rows->id_jabatan;
   $st_aktif = $rows->status_active;
   $st_jabatan = $rows->status_jabatan;
   $alamat = $rows->alamat;
   $telp = $rows->no_telp;
   $tgl_lahir = $rows->tgl_lahir;
   $jk = $rows->jenis_kelamin;
   $keahlian = $rows->keahlian;
   $pekerjaan = $rows->pekerjaan;
   $active = "";
 endforeach ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Anggota   
        <a href="<?php echo base_url(); ?>Itcyb3r/anggota/tambah_anggota" class="btn btn-success btn-waves" title="Tambah" data-toggle="tooltip" data-placement="right" ><i class="fa fa-plus-square fa-fw"></i> Tambah</a><!-- Modal -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>Itcyb3r/backend.cpp"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Data Anggota</li>
        <li class=""><a href="<?php echo base_url(); ?>Itcyb3r/anggota/anggota">Anggota</a></li>
        <li class="active">Edit Data Anggota</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              Edit Data Anggota
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php $atributes = array('role' => 'form');
                  echo form_open_multipart('',$atributes); 
              ?>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id">ID Anggota :</label>
                    <input type="text" name="id" id="id" class="form-control" placeholder="ID Anggota*" required value="<?= $id;?>">
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama*" required value="<?= $nama;?>">
                  </div>
                  <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required value="<?= $email;?>">
                  </div>
                  <div class="form-group">
                    <label for="telp">NO. Telp : </label>
                    <input type="text" name="telp" id="telp" class="form-control" placeholder="NO. Telp*" required value="<?= $telp;?>">
                  </div>
                  <div class="form-group">
                    <label for="jk">Jenis Kelamin : </label>
                    <select class="form-control select2"  style="width: 100%;" id="jk" name="jk" required>
                      <option value="<?= $jk;?>"><?= $jk;?></option>
                      <option value="Laki - Laki">Laki - Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat : </label>
                    <textarea class="form-control" rows="3" placeholder="Alamat*" name="alamat"><?= $alamat;?></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal Lahir : </label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="tgl_lahir" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="<?= $tgl_lahir;?>">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <label for="angkatan">Angkatan : </label>
                    <select class="form-control" name="angkatan" id="angkatan" required>
                      <option> Pilih Angkatan *</option>
                      <?php foreach ($angkatan->result() as $r): ?>
                        <?php if ($r->id_angkatan == $id_angkatan): ?>
                          <option value="<?= $r->id_angkatan;?>" selected="selected"><?= $r->angkatan;?></option>
                        <?php endif ?>
                        <option value="<?= $r->id_angkatan;?>"><?= $r->angkatan;?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan : </label>
                    <select class="form-control" name="jabatan" id="jabatan" required>
                      <option>Pilih Jabatan*</option>
                      <?php foreach ($jabatan->result() as $row): ?>
                        <?php if ($row->id_jabatan == $id_jabatan): ?>
                            <option value="<?= $row->id_jabatan;?>" selected="selected"><?= $row->jabatan;?></option>
                        <?php endif ?>
                        <option value="<?= $row->id_jabatan;?>"><?= $row->jabatan;?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="keahlian">Keahlian : </label>
                    <input type="text" name="keahlian" id="keahlian" required placeholder="Keahlian*" class="form-control" value="<?= $keahlian;?>">
                  </div>
                  <div class="form-group">
                    <label for="pekerjaan">Pekerjaan : </label>
                    <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan*" required class="form-control" value="<?= $pekerjaan;?>">
                  </div>
                  <div class="form-group">
                    <label>Status Jabatan : </label>
                    <?php if ($st_jabatan == 1): ?>
                      <div class="col-md-12">
                        <input type="radio" name="st_jabatan" class="flat-red" value="1" checked>
                          &nbsp;&nbsp;Masih Menjabat
                      </div>
                      <div class="col-md-12">
                        <input type="radio" name="st_jabatan" class="flat-red" value="0">
                          &nbsp;&nbsp;Sudah Tidak Menjabat
                      </div>
                    <?php endif ?>
                    <?php if ($st_jabatan == 0): ?>
                      <div class="col-md-12">
                        <input type="radio" name="st_jabatan" class="flat-red" value="1">
                          &nbsp;&nbsp;Masih Menjabat
                      </div>
                      <div class="col-md-12">
                        <input type="radio" name="st_jabatan" class="flat-red" value="0" checked>
                          &nbsp;&nbsp;Sudah Tidak Menjabat
                      </div>
                    <?php endif ?>
                  </div><br><br>
                  <div class="form-group">
                    <label>Status Aktif : </label>
                    <?php if ($st_aktif == 1): ?>
                      <div class="col-md-12">
                        <input type="radio" name="st_aktif" class="flat-red" value="1" checked>
                          &nbsp;&nbsp;Masih Aktif Di IT Cyber
                      </div>
                      <div class="col-md-12">
                        <input type="radio" name="st_aktif" class="flat-red" value="0">
                          &nbsp;&nbsp;Sudah Tidak Aktif Di IT Cyber
                      </div>
                    <?php endif ?>
                    <?php if ($st_aktif == 0): ?>
                      <div class="col-md-12">
                        <input type="radio" name="st_aktif" class="flat-red" value="1">
                          &nbsp;&nbsp;Masih Aktif Di IT Cyber
                      </div>
                      <div class="col-md-12">
                        <input type="radio" name="st_aktif" class="flat-red" value="0" checked>
                          &nbsp;&nbsp;Sudah Tidak Aktif Di IT Cyber
                      </div>
                    <?php endif ?>
                  </div>
                  <div class="form-group">
                    <label for="foto">Upload Foto : </label>
                    <input type="file" name="foto"  id="foto">
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