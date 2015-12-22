<?php
include("koneksi.php");

$no_kk = $_POST['no_kk'];
$nik = $_POST['nik'];
$no_ap = $_POST['no_ap'];
$t_kp = $_POST['t_kp'];
$t_rt = $_POST['t_rt'];
$t_rw = $_POST['t_rw'];
$t_desa = $_POST['t_desa'];
$t_kecamatan = $_POST['t_kecamatan'];
$t_kd_pos = $_POST['t_kd_pos'];
$t_kabupaten = $_POST['t_kabupaten'];
$t_provinsi = $_POST['t_provinsi'];
$t_telpon = $_POST['t_telpon'];
$no_kp = $_POST['no_kp'];
$no_jp = $_POST['no_jp'];
$no_sktp = $_POST['no_sktp'];
$no_skp = $_POST['no_skp'];

$query = mysql_query("INSERT into daerah_asal values ('$no_kk','$nik','$no_ap','$t_kp','$t_rt','$t_rw','$t_desa','$t_kecamatan','$t_kd_pos','$t_kabupaten','$t_provinsi','$t_telpon','$no_kp','$no_jp','$no_sktp','$no_skp')");
$sql = mysql_query($query);

$query2 = mysql_query("UPDATE penduduk set  status='Pindah' where nik='$nik'");
$sq2 = mysql_query($query2);

header("Location: table-pindah-penduduk.php");
if (mysql_query($query)) {
    include ("#alertSucces");

}
?>