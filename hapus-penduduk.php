<?php
include ("koneksi.php");
mysql_query("DELETE from penduduk WHERE nik='$_GET[nik]'");
header("Location: table-penduduk.php");
?>