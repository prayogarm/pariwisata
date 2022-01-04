<nav class="header__nav-wrap">
    <h2 class="header__nav-heading h6">Site Navigation</h2>
        <ul class="header__nav">
            <li class="current">
                <a href="<?= base_url () ?>" title="">Home</a>
            </li>

            <?php $kategori = $this->m_home->get_all_data_kategori(); ?>
            <li class="has-children"><a href="#0" title="">Kategori Wisata</a>
                <ul class="sub-menu">
                    <?php foreach ($kategori as $key => $value) { ?>
                        <li><a href="<?= base_url('home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a></li>
                    <?php } ?>
                    
                </ul>
            </li>

            <li><a href="<?= base_url('home/print_informasi') ?>" title="">Cetak Informasi</a></li>
            <li><a href="<?= base_url('home/registrasi') ?>" title="">Daftar</a></li>
        </ul> <!-- end header__nav -->
            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
</nav> <!-- end header__nav-wrap -->


</div> <!-- header-content -->
</header> <!-- header -->
</div> <!-- end s-pageheader -->