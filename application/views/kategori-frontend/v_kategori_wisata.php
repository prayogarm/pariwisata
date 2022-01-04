<section class="s-content">

    <div class="row masonry-wrap">
        <div class="masonry">
            <?php foreach ($destinasi as $key => $value) { ?>
            <article class="masonry__brick entry format-standard" data-aos="fade-up">      
                <div class="entry__thumb">
                    <a href="<?= base_url('home/detail_wisata/' . $value->id_destinasi) ?>" class="entry__thumb-link">
                        <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="" >
                    </a>
                </div>
    
                <div class="entry__text">
                    <div class="entry__header">
                        <h1 class="entry__title">
                            <a href="<?= base_url('home/detail_wisata/' . $value->id_destinasi) ?>"><?= $value->nama_destinasi?></a>
                        </h1>
                        <div class="entry__date">
                            <a href="single-standard.html"><?= $value->lokasi?></a>
                        </div>                                                    
                    </div>

                    <div class="entry__meta">
                        <a href="category.html">Kategori : <?= $value->nama_kategori?></a> 
                    </div>
                </div>
            </article> <!-- end article -->

    <?php } ?>

        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->

    <div class="row">
        <div class="col-full">
            <nav class="pgn">
                <ul>
                    <li><a class="pgn__prev" href="#0">Prev</a></li>
                    <li><a class="pgn__num" href="#0">1</a></li>
                    <li><span class="pgn__num current">2</span></li>
                    <li><a class="pgn__num" href="#0">3</a></li>
                    <li><a class="pgn__num" href="#0">4</a></li>
                    <li><a class="pgn__num" href="#0">5</a></li>
                    <li><span class="pgn__num dots">…</span></li>
                    <li><a class="pgn__num" href="#0">8</a></li>
                    <li><a class="pgn__next" href="#0">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section> <!-- s-content -->