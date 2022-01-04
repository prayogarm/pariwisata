
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Invoice Print</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>templatelte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>templatelte/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Informasi Pariwisata Kota Padang
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsivee">
        <table class="table table-striped">
          <div id="mapid" style="width: 100%; height: 400px;"></div>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <img src="<?= base_url('assets/gambar/grafik-pie.png') ?>" alt="">
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Kategori Wisata di Kota Padang</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>Wisata Alam</th>
              <td>45.8%</td>
            </tr>
            <tr>
              <th>Wisata Agro</th>
              <td>8.3%</td>
            </tr>
            <tr>
              <th>Wisata Religius</th>
              <td>8.3%</td>
            </tr>
            <tr>
              <th>Wisata Kuliner</th>
              <td>8.3%</td>
            </tr>
            <tr>
              <th>Wisata Kuliner</th>
              <td>29.2%</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>

<script type="text/javascript">
    var mymap = L.map('mapid').setView([-0.9263421,100.3328906], 10);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(mymap);

    L.marker([-0.987906, 100.358283]).addTo(mymap)
    L.marker([-0.923397, 100.350822]).addTo(mymap)
    L.marker([-0.827277, 100.388588]).addTo(mymap)
    L.marker([-1.009896, 100.389960]).addTo(mymap)
    L.marker([-0.940555, 100.507376]).addTo(mymap)
    L.marker([-0.923391, 100.495017]).addTo(mymap)
    
</script>

</body>
</html>
