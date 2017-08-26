 <?php 
 foreach ($artikel->result() as $row) {
   $id = $row->id_artikel;
   $judul = $row->judul;
   $gambar = $row->gambar;
   $author = $row->author;
   $tags = $row->id_tag;
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
        <li class=""><a href="<?php echo base_url(); ?>Itcyb3r/news.cpp">Artikel</a></li>
        <li class="active">Edit Articel</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              Edit Artikel
              <?php echo $this->session->flashdata('sukses_artikel'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php $atributes = array('role' => 'form');
                  echo form_open_multipart('',$atributes); 
              ?>

                <div class="form-group">
                  <label class=" control-label">Image : </label>
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail">
                      <img src="<?php echo base_url(); ?>assets/backend/image/artikel/<?= $gambar?>">
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail">
                    </div>
                      <div class="col-sm-4 control-label">
                        <span class="btn btn-info btn-file">
                        <span class="fileupload-new">
                          <i class="fa fa-picture-o"></i> Select image
                        </span>
                        <span class="fileupload-exists">
                          <i class="fa fa-picture-o"></i> Change
                        </span>
                        <input type="file" name='foto'>
                          <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload"><i class="fa fa-times"></i> Remove
                          </a>
                        </span>
                      </div>
                  </div>
                </div><br><br>
                  <div class="form-group">
                    <label for="nama">Judul :</label>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Artikel*" required value="<?= $judul;?>">
                  </div>
                  <div class="form-group">
                    <label for="tag">TAG : </label>
                    <select class="form-control" name="tag" id="tag" required>
                      <option value="<?= $tags;?>"> Pilih Tag *</option>
                      <?php foreach ($tag->result() as $r): ?>
                        <option value="<?= $r->id_tag;?>"><?= $r->tag;?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="text" class="control-label">Text : </label>
                    <textarea name="text" rows="30"><?= $isi;?></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-info btn-waves" title="Simpan" data-toggle="tooltip" data-placement="top" > Simpan </button>
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
<script src="<?php echo base_url();?>assets/backend/tinymce/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url();?>assets/backend/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/backend/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/backend/tinymce/js/tinymce/plugins/wordcount/plugin.js"></script>
<script src="<?php echo base_url();?>assets/backend/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>

<script>
  tinymce.init({
    selector: "textarea",
    fontsize_formats:"8pt 9pt 10pt 11pt 12pt 13pt 14pt 16pt 18pt 20pt 26pt 36pt",
    theme: "modern",
    plugins: [
      "advlist autolink link  image lists charmap print preview hr anchor pagebreak spellchecker toc",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime  nonbreaking",
      "save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern codesample"
    ],
    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,

    toolbar: "insertfile undo redo pastetext| styleselect | fontselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table codesample",

    image_advtab: true,
    image_caption: true,
    style_formats: [
      {title: 'Bold text', format: 'h1'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    template_replace_values : {
      username : "Jack Black"
    },

    template_preview_replace_values : {
      username : "Preview user name"
    },

    link_class_list: [
      {title: 'Example 1', value: 'example1'},
      {title: 'Example 2', value: 'example2'}
    ],

    image_class_list: [
      {title: 'Example 1', value: 'example1'},
      {title: 'Example 2', value: 'example2'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],

    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

    spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

  if (!window.console) {
    window.console = {
      log: function() {
        tinymce.$('<div></div>').text(tinymce.grep(arguments).join(' ')).appendTo(document.body);
      }
    };
  }
</script>