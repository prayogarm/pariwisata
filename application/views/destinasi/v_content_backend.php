<div class="accordion-group widget-box">
  <div class="accordion-heading">
    <div class="widget-title"> 
      <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> 
        <div class="icon">
          <a href="<?= base_url('destinasi/add') ?>" class="btn btn-mini icon-plus"> Add</a>
        </div>
        <h5>Data Wisata</h5>
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
                <th>Nama Wisata</th>
                <th>Lokasi Wisata</th>
                <th>Kategori Wisata</th>
                <th>Deskripsi Wisata</th>
                <th>Gambar</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody class="table table-boarder">
              <?php $no = 1;
              foreach ($destinasi as $key => $value) { ?>

              <tr>
                <th><?= $no++; ?></th>
                <th><?= $value->nama_destinasi; ?></th>
                <th><?= $value->lokasi; ?></th>
                <th><?= $value->nama_kategori; ?></th>
                <th><?= $value->deskripsi; ?></th>
                <th><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" width="250px"></th>
                

                <th>
                  <a href="<?= base_url ('destinasi/edit/' . $value->id_destinasi) ?>" class="btn btn-warning">
                    <i class="icon icon-edit"></i> </a>
                  <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_destinasi ?>">
                    <i class="icon icon-trash"></i>
                  </button>
                </th>
              </tr>

              <?php } ?>
            </tbody>    
        </table>
      </div>
</div>

<!-- Modal Delete -->
<?php foreach ($destinasi as $key => $value) { ?>
    <div id="delete<?= $value->id_destinasi ?>" class="modal hide">
        <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button">×</button>
          <h2> Delete <?= $value->nama_destinasi ?>  </h2>
        </div>
        
        <div class="modal-body">  
          
          <h5 >Apakah Anda Yakin Menghapus Data Ini...?</h5>
            
        </div>
        
        <div class="modal-footer">
          <a href="<?= base_url('destinasi/delete/' . $value->id_destinasi) ?>" class="btn btn-primary">Delete</a> 
          <button type="button" class="btn" data-dismiss="modal">Cancel</button>
        </div> 
    </div>
    <?php } ?>