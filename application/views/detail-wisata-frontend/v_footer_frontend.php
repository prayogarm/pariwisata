<footer class="s-footer">
    <div class="row">
        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>
    </div>    
</footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->

    <script src="<?= base_url() ?>template/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>template/js/plugins.js"></script>
    <script src="<?= base_url() ?>template/js/main.js"></script>

<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500,0).slideUp(500,function() {
      $(this).remove();   
    });  
  }, 3000)
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
    
</script>

</body>

</html>