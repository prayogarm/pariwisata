<footer class="s-footer">

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>Sistem Informasi Pariwisata Kota Padang</span> 
                        <span><a href="https://colorlib.com/">Fellicia</a></span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->
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

</body>

</html>