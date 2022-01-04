<div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">

        <li class="bg_lb span4"> <a href="destinasi"> <i class="icon-inbox"></i>
            <span class="label label-success"><?= $total_destinasi ?></span> Destinasi </a> </li>
        
        <li class="bg_lg span4"> <a href="kategori"> <i class="icon-th-list"></i>
            Kategori </a> </li>

        <li class="bg_lo span2"> <a href="laporan"> <i class="icon-pencil"></i>
            Laporan </a> </li>
      </ul>
    </div>
</div>


<div class="container-fluid">
    <div class="row-fluid">
      <div class="span5">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-adjust"></i> </span>
            <h5>Data Pie Kategori</h5>
          </div>
          <div class="widget-content">
            <img src="assets/gambar/grafik-pie.png" width="100%">
          </div>
        </div>
      </div>

      <div class="span7">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-globe"></i> </span>
            <h5>Denah Wisata</h5>
          </div>
          <div class="widget-content">
            <div class="bars" id="map-wrap">

                <div id="mapid" style="width: 590px; height: 300px;"></div>

            </div>
          </div>
        </div>
      </div>

    </div>
</div>
