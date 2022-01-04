<!--Footer-part-->

<!--end-Footer-part-->

<script src="<?= base_url() ?>template-admin/js/excanvas.min.js"></script> 
<script src="<?= base_url() ?>template-admin/js/jquery.min.js"></script> 
<script src="<?= base_url() ?>template-admin/js/jquery.ui.custom.js"></script> 
<script src="<?= base_url() ?>template-admin/js/bootstrap.min.js"></script> 
<script src="<?= base_url() ?>template-admin/js/jquery.flot.min.js"></script> 
<script src="<?= base_url() ?>template-admin/js/jquery.flot.resize.min.js"></script> 
<script src="<?= base_url() ?>template-admin/js/jquery.peity.min.js"></script> 
<script src="<?= base_url() ?>template-admin/js/fullcalendar.min.js"></script> 
<script src="<?= base_url() ?>template-admin/js/matrix.js"></script> 
<script src="<?= base_url() ?>template-admin/js/matrix.dashboard.js"></script> 
<script src="<?= base_url() ?>template-admin/js/jquery.gritter.min.js"></script> 
<script src="<?= base_url() ?>template-admin/js/matrix.interface.js"></script> 
<script src="<?= base_url() ?>template-admin/js/matrix.chat.js"></script> 
<script src="<?= base_url() ?>template-admin/js/jquery.validate.js"></script> 
<script src="<?= base_url() ?>template-admin/js/matrix.form_validation.js"></script> 
<script src="<?= base_url() ?>template-admin/js/jquery.wizard.js"></script> 
<script src="<?= base_url() ?>template-admin/js/jquery.uniform.js"></script> 
<script src="<?= base_url() ?>template-admin/js/select2.min.js"></script> 
<script src="<?= base_url() ?>template-admin/js/matrix.popover.js"></script> 
<script src="<?= base_url() ?>template-admin/js/jquery.dataTables.min.js"></script> 
<script src="<?= base_url() ?>template-admin/js/matrix.tables.js"></script> 
<script src="<?= base_url() ?>template-admin/js/matrix.charts.js"></script>
<script src="<?= base_url() ?>template-admin/js/jquery.flot.pie.min.js"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }
// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500,0).slideUp(500,function() {
      $(this).remove();   
    });  
  }, 3000)
</script>

<!--Turning-series-chart-js-->
<script src="<?= base_url() ?>template-admin/js/matrix.dashboard.js"></script>

<!-- Maps Lifelet -->
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
