<?php
include("koneksi.php");

$no_kk = $_POST['no_kk'];
$nama_kk = $_POST['nama_kk'];
$kp = $_POST['kp'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kd_pos = $_POST['kd_pos'];
$kabupaten = $_POST['kabupaten'];
$provinsi = $_POST['provinsi'];
$telpon = $_POST['telpon'];
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

$query = mysql_query("UPDATE daerah_asal set no_kk='$no_kk',nama_kk='$nama_kk',kp='$kp',rt='$rt',rw-'$rw',desa='$desa',kecamatan='$kecamatan',kd_pos='$kd_pos',kabupaten='$kabupaten',provinsi='$provinsi',telpon='$telpon',no_ap='$no_ap',t_kp='$t_kp',t_rt='$t_rt',t_rw='$t_rw',t_desa='$t_desa',t_kecamatan='$t_kecamatan',t_kd_pos='$t_kd_pos',t_kabupaten='$t_kabupaten',t_provinsi='$t_provinsi',t_telpon='$t_telpon',no_kp='$no_kp',no_jp='$no_jp',no_sktp='$no_sktp',no_skp='$no_skp' where no_kk='$no_kk')");
$sql = mysql_query($query);
header("Location: table-pindah-penduduk.php");
if (mysql_query($query)) {
    include ("#alertSucces");

}
?>