<?php
include ("koneksi.php");
mysql_query("DELETE from daerah_asal WHERE no_kk='$_GET[no_kk]'");
header("Location: table-pindah-penduduk.php");
?>