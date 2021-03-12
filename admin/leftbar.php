<div id="sidebar" class="sidebar responsive ace-save-state">
  <ul class="nav nav-list">
      <?php
                                if ($_SESSION['islevel'] == "admin"){
                                    ?>
    <li <?php if ($page=='dashboard') {echo $active;}?>>
        <a href="adminmainapp.php?unit=dashboard">
        <i class="menu-icon fa fa-home"></i>
        <span class="menu-text"> Dashboard </span>
      </a>

      <b class="arrow"></b>
    </li>

    <li><a href='../mainapp.php?unit=home_unit' target="_blank"><i class="menu-icon fa fa-globe"></i><span class="menu-text"> Lihat Website </span></a>
      <b class="arrow"></b>
    </li>
        
   
	 <!-- kategori -->
    <li  <?php if ($page=='kategori_unit' or $page=='videoiklan_unit' or $page=='komentar_unit' or $page=='komentarblog_unit' or $page=='slider_unit') {echo $open;}?>>
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-tags"></i>
        <span class="menu-text"> Master </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li <?php if ($page=='kategori_unit' && $act1=='datagrid') {echo $active;}?>>
          <a href="adminmainapp.php?unit=kategori_unit&act=datagrid"><i class="menu-icon fa fa-caret-right"></i>Data Kategori</a>
          <b class="arrow"></b>
        </li>
		
         <li <?php if ($page=='komentar_unit' && $act1=='datagrid') {echo $active;}?>>
          <a href="adminmainapp.php?unit=komentar_unit&act=datagrid"><i class="menu-icon fa fa-caret-right"></i> Data Komen Tanaman </a>
          <b class="arrow"></b>
        </li>
        <li <?php if ($page=='komentarblog_unit' && $act1=='datagrid') {echo $active;}?>>
          <a href="adminmainapp.php?unit=komentarblog_unit&act=datagrid"><i class="menu-icon fa fa-caret-right"></i>Data Komen Informasi</a>
          <b class="arrow"></b>
        </li>
		<li <?php if ($page=='videoiklan_unit' && $act1=='update') {echo $active;}?>>
          <a href="adminmainapp.php?unit=videoiklan_unit&act=update&kd_biografi=1"><i class="menu-icon fa fa-caret-right"></i>Data Biografi</a>
          <b class="arrow"></b>
        </li>
		  <li <?php if ($page=='slider_unit' && $act1=='update') {echo $active;}?>>
          <a href="adminmainapp.php?unit=slider_unit&act=update&kd_kontak=1"><i class="menu-icon fa fa-caret-right"></i>Data Kontak</a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
	
     <!-- produk -->

    <li <?php if ($page=='produk_unit' or $page=='produk_unita' or $page=='blog_unit' or $page=='subkategori_unit' ) {echo $open;}?>>
        <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-shopping-cart"></i>
        <span class="menu-text"> Transaksi </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
          <li <?php if ($page=='subkategori_unit' && $act1=='datagrid') {echo $active;}?>>
          <a href="adminmainapp.php?unit=subkategori_unit&act=datagrid"><i class="menu-icon fa fa-caret-right"></i>Data Jenis</a>
          <b class="arrow"></b>
        </li>
		
        <li <?php if ($page =='produk_unit' && $act1 =='datagrid' ) {echo $active;}?>>         
            <a href="adminmainapp.php?unit=produk_unit&act=datagrid"><i class="menu-icon fa fa-caret-right"></i>Data Tanaman</a>
          <b class="arrow"></b>
        </li>
         <li <?php if ($page =='produk_unita' && $act1 =='datagrid' ) {echo $active;}?>>         
            <a href="adminmainapp.php?unit=produk_unita&act=datagrid"><i class="menu-icon fa fa-caret-right"></i>Persetujuan Harga</a>
          <b class="arrow"></b>
        </li>
         <li <?php if ($page=='blog_unit' && $act1=='datagrid') {echo $active;}?>>
          <a href="adminmainapp.php?unit=blog_unit&act=datagrid"><i class="menu-icon fa fa-caret-right"></i>Data Informasi</a>
          <b class="arrow"></b>
        </li>
		
      </ul>
    </li>

  
    <!-- youtube -->
  
    <li <?php if ($page=='youtube_unit') {echo $open;}?>>
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-book"></i>
        <span class="menu-text"> Laporan </span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li <?php if ($page=='youtube_unit' && $act1=='datagrid') {echo $active;}?>>
          <a target="_blank" href="adminmainapp.php?unit=l_kategori"><i class="menu-icon fa fa-caret-right"></i>Data Kategori</a>
          <b class="arrow"></b>
        </li> 
		<li <?php if ($page=='youtube_unit' && $act1=='datagrid') {echo $active;}?>>
          <a target="_blank" href="adminmainapp.php?unit=l_komen_tam"><i class="menu-icon fa fa-caret-right"></i>Data Komen Tanaman</a>
          <b class="arrow"></b>
        </li>
		<li <?php if ($page=='youtube_unit' && $act1=='datagrid') {echo $active;}?>>
          <a target="_blank" href="adminmainapp.php?unit=l_komen_info"><i class="menu-icon fa fa-caret-right"></i>Data Komen Informasi</a>
          <b class="arrow"></b>
        </li>
		<li <?php if ($page=='youtube_unit' && $act1=='datagrid') {echo $active;}?>>
          <a target="_blank" href="adminmainapp.php?unit=l_jenis"><i class="menu-icon fa fa-caret-right"></i>Data Jenis</a>
          <b class="arrow"></b>
		  <li <?php if ($page=='youtube_unit' && $act1=='datagrid') {echo $active;}?>>
          <a target="_blank" href="adminmainapp.php?unit=l_tanaman"><i class="menu-icon fa fa-caret-right"></i>Data Tanaman</a>
          <b class="arrow"></b>
        </li>
		<li <?php if ($page=='youtube_unit' && $act1=='datagrid') {echo $active;}?>>
          <a target="_blank" href="adminmainapp.php?unit=l_informasi"><i class="menu-icon fa fa-caret-right"></i>Data Informasi</a>
          <b class="arrow"></b>
        </li>
        </li>
      </ul>
    </li>
    
    <!-- Use -->
    <li <?php if ($page=='user_unit') {echo $open;}?>>
      <a href="adminmainapp.php?unit=user_unit&act=update&userid=1" >
        <i class="menu-icon fa fa-user"></i>
        <span class="menu-text"> Pengaturan Admin </span>
        
      </a>
      <b class="arrow"></b>
     
    </li>
    
      <li <?php if ($page=='user_unita') {echo $open;}?>>
      <a href="adminmainapp.php?unit=user_unita&act=datagrid" >
        <i class="menu-icon fa fa-user"></i>
        <span class="menu-text">Data Petani </span>
        
      </a>
      <b class="arrow"></b>
     
    </li>

    <?php
                                }
                                else {
                                     ?>
<li <?php if ($page=='dashboard') {echo $active;}?>>
        <a href="adminmainapp.php?unit=dashboard">
        <i class="menu-icon fa fa-home"></i>
        <span class="menu-text"> Dashboard </span>
      </a>

      <b class="arrow"></b>
    </li>
    
   
    
    <li <?php if ($page=='produk_unitwa') {echo $active;}?>>
        <a href="adminmainapp.php?unit=produk_unitwa&act=datagrid">
        <i class="menu-icon fa fa-home"></i>
        <span class="menu-text"> Pengajuan Harga </span>
      </a>

      <b class="arrow"></b>
    </li>
    
     <li <?php if ($page=='produk_unitbb') {echo $active;}?>>
        <a href="adminmainapp.php?unit=produk_unitbb&act=datagrid">
        <i class="menu-icon fa fa-home"></i>
        <span class="menu-text"> Status </span>
      </a>

      <b class="arrow"></b>
    </li>

   
    

     <?php
                                }
                                ?>
        <!-- logout -->
    <li>
        <a href="logout.php">
        <i class="menu-icon fa fa-power-off"></i>
        <span class="menu-text"> Logout </span>
      </a>

      <b class="arrow"></b>
    </li>
  </ul><!-- /.nav-list -->

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>
