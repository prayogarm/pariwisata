<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">
        
        <div class="s-content__header col-full">
            <h1 class="s-content__header-title"><?= $destinasi->nama_destinasi ?></h1>
                <ul class="s-content__header-meta">
                    <li class="date">Lokasi : <a><?= $destinasi->lokasi ?></a></li>
                    <li class="cat">
                        Kategori : 
                        <a><?= $destinasi->nama_kategori ?></a>
                    </li>
                </ul>
        </div> <!-- end s-content__header -->

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <img src="<?= base_url('assets/gambar/' . $destinasi->gambar) ?>" alt="" width="100%" >
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">
            <p><?= $destinasi->deskripsi ?></p>
        </div> <!-- end s-content__main -->
    </article>

    <div class="row">
        <div class="s-content__media col-full">
            <h3>Lihat Lokasi Wisata</h3>
            <div id="map-wrap">
                <div id="mapid" style="width: 960px; height: 420px;"></div>
            </div> 
        </div> <!-- end s-content__media -->
    </div>
</section> <!-- s-content -->



