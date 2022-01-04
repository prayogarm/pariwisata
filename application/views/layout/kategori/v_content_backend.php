<div class="accordion-group widget-box">
  <div class="accordion-heading">
    <div class="widget-title"> 
      <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> 
        <span class="icon">
          <button data-toggle="modal" href="#add" class="btn btn-mini icon-plus"> Add</button></span>
        <h5>Kategori Wisata</h5>
      </a> 
    </div>
  </div>
      
      <div class="widget-content ">
        <?php 
          if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success">
              <button class="close" data-dismiss="alert">×</button>
              <strong>Success! </strong>';
            echo $this->session->flashdata('pesan');
            echo '</div>';
          }
        ?>        
        <table class="table table-boardered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody class="table table-boarder">
              <?php $no = 1;
              foreach ($kategori as $key => $value) { ?>

              <tr>
                <th><?= $no++; ?></th>
                <th><?= $value->nama_kategori; ?></th>
                <th>
                  <button class="btn btn-warning" data-toggle="modal" href="#edit<?= $value->id_kategori ?>">
                    <i class="icon icon-edit"></i> </button>
                  <button class="btn btn-danger" data-toggle="modal" href="#delete<?= $value->id_kategori ?>">
                    <i class="icon icon-trash"></i> </button>
                </th>
              </tr>

              <?php } ?>
            </tbody>    
        </table>
      </div>
</div>

<!-- Modal Tambah -->
    <div id="add" class="modal hide">
        <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button">×</button>
          <h3>Add Kategori</h3>
        </div>
        
        <div class="modal-body">  
          <?php
            echo form_open('kategori/add');
          ?>

            <div class="control-group span5">
              <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" class="span5" placeholder="Ketik nama kategori disini..." required>
            </div>
        </div>
        
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button> 
          <button type="button" class="btn" data-dismiss="modal">Cancel</button>
        </div>
          <?php
            echo form_close();
          ?> 
    </div>



<!-- Modal Edit -->
    <?php foreach ($kategori as $key => $value) { ?>
    <div id="edit<?= $value->id_kategori ?>" class="modal hide">
        <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button">×</button>
          <h3>Edit Kategori</h3>
        </div>
        
        <div class="modal-body">  
          <?php
            echo form_open('kategori/edit/'. $value->id_kategori);
          ?>

            <div class="control-group span5">
              <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" value="<?= $value->nama_kategori ?>" class="span5" placeholder="Ketik untuk edit nama kategori disini..." required>
            </div>
        </div>
        
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button> 
          <button type="button" class="btn" data-dismiss="modal">Cancel</button>
        </div>
          <?php
            echo form_close();
          ?> 
    </div>
    <?php } ?>


<!-- Modal Delete -->
    <?php foreach ($kategori as $key => $value) { ?>
    <div id="delete<?= $value->id_kategori ?>" class="modal hide">
        <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button">×</button>
          <h2> Delete <?= $value->nama_kategori ?>  </h2>
        </div>
        
        <div class="modal-body">  
          
          <h5 >Apakah Anda Yakin Menghapus Data Ini...?</h5>
            
        </div>
        
        <div class="modal-footer">
          <a href="<?= base_url('kategori/delete/' . $value->id_kategori) ?>" class="btn btn-primary">Delete</a> 
          <button type="button" class="btn" data-dismiss="modal">Cancel</button>
        </div> 
    </div>
    <?php } ?>