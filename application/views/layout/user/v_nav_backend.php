<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="#"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    <li> 
      <a href="<?= base_url('destinasi') ?>" class="<?php if ($this->uri->segment(1) == 'destinasi') {echo "active";} ?>"><i class="icon icon-inbox"></i>
        <span>Destinasi</span>
      </a>
    </li>

    <li class="submenu">
      <a href="<?= base_url('kategori') ?>">
        <i class="icon icon-th-list"></i>
        <span>Kategori</span>
        <span class="label label-important">3</span>
      </a>

      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="#"><i class="icon icon-pencil"></i> <span>Laporan</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
