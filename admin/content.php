<?php
error_reporting(E_ALL^(E_NOTICE | E_WARNING));
$unit = $_GET['unit'];
if($unit == "produk_unit") {
    require_once 'unit/produk_unit.php';
}
else if($unit == "produk_unita") {
    require_once 'unit/produk_unita.php';
}
else if($unit == "produk_unitp") {
    require_once 'unit/produk_unitp.php';
}
else if($unit == "produk_unitwa") {
    require_once 'unit/produk_unitwa.php';
}
else if($unit == "produk_unitbb") {
    require_once 'unit/produk_unitbb.php';
}
else if($unit == "dashboard") {
    require_once 'unit/dashboard.php';
}
else if($unit == "slider_unit") {
    require_once 'unit/slider_unit.php';
}
else if($unit == "kategori_unit") {
    require_once 'unit/kategori_unit.php';
}
else if($unit == "brand_unit") {
    require_once 'unit/brand_unit.php';
}
else if($unit == "subkategori_unit") {
    require_once 'unit/subkategori_unit.php';
}
else if($unit == "blog_unit") {
    require_once 'unit/blog_unit.php';
}
else if($unit == "komentar_unit") {
    require_once 'unit/komentar_unit.php';
}
else if($unit == "komentarblog_unit") {
    require_once 'unit/komentarblog_unit.php';
}
else if($unit == "youtube_unit") {
    require_once 'unit/youtube_unit.php';
}
else if($unit == "videoiklan_unit") {
    require_once 'unit/videoiklan_unit.php';
}
else if($unit == "user_unit") {   
    require_once 'unit/user_unit.php';
}
else if($unit == "user_unita") {   
    require_once 'unit/user_unita.php';
}
else if($unit == "kriran_unit") {   
    require_once 'unit/kriran_unit.php';
}
else if($unit == "gf_unit") {   
    require_once 'unit/gf_unit.php';
}
else if($unit == "l_kategori") {   
    require_once 'unit/l_kategori.php';
}
else if($unit == "l_komen_tam") {   
    require_once 'unit/l_komen_tam.php';
}
else if($unit == "l_komen_info") {   
    require_once 'unit/l_komen_info.php';
}
else if($unit == "l_jenis") {   
    require_once 'unit/l_jenis.php';
}
else if($unit == "l_tanaman") {   
    require_once 'unit/l_tanaman.php';
}
else if($unit == "l_informasi") {   
    require_once 'unit/l_informasi.php';
}
