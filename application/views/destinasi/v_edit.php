<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
      <h5>Form Edit Destinasi</h5>
    </div>

    <div class="widget-content">
      <?php 
      // Notifikasi Form Kosong
      echo validation_errors('<div class="alert alert-error">
              <button class="close" data-dismiss="alert">×</button>
              <strong>Error! ', '</strong> </div>');
      // Notifikasi Gagal Upload Gambar
      if (isset($error_upload)) {
        echo '<div class="alert alert-error">
              <button class="close" data-dismiss="alert">×</button>
              <strong>Error! ' . $error_upload . '</strong> </div>';
      }

      echo form_open_multipart('destinasi/edit/' . $destinasi->id_destinasi) ?>
            
            <div class="control-group">
              <label class="control-label">Nama Wisata</label>
              <div class="controls">
                <input name="nama_destinasi" class="span9" placeholder="Nama Destinasi" value="<?= $destinasi->nama_destinasi ?>">
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Lokasi Wisata</label>
              <div class="controls">
                <input name="lokasi" class="span9" placeholder="Lokasi Wisata" value="<?= $destinasi->lokasi ?>">
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Nama Kategori</label>
              <div class="controls">
                <select name="id_kategori" class="span9">
                  <option value="<?= $destinasi->id_kategori ?>"><?= $destinasi->nama_kategori ?></option>
                  <?php foreach ($kategori as $key => $value) { ?>
                    <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Deskripsi</label>
              <div class="controls">
                <textarea name="deskripsi" class="textarea_editor span9" rows="10" placeholder="Deskripsi Wisata ..." ><?= $destinasi->deskripsi ?></textarea>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Gambar</label>
              <div class="controls">
                <input type="file" name="gambar" class="span9">
              </div>
            </div>

            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="<?= base_url ('destinasi') ?>" class="btn btn-success">Kembali</a>
              </div>
            </div>

      <?php echo form_close() ?>
    </div>
</div>