<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    
    <li>
      <a href="<?= base_url('admin') ?>">
        <i class="icon icon-home"></i> 
        <span>Dashboard</span>
      </a> 
    </li>

    <li class="<?php if ($this->uri->segment(1) == 'destinasi') {echo "active";} ?>">
      <a href="<?= base_url('destinasi') ?>">
        <i class="icon icon-inbox"></i>
        <span>Destinasi</span>
      </a>
    </li>

    <li>
      <a href="<?= base_url('kategori') ?>">
        <i class="icon icon-th-list"></i> 
        <span>Kategori</span>
      </a> 
    </li>

    <li>
      <a href="<?= base_url('laporan') ?>">
        <i class="icon icon-pencil"></i>
        <span>Laporan</span>
      </a>
    </li>

  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a class="current">Destinasi</a>
    </div>
  </div>
<!--End-breadcrumbs-->
