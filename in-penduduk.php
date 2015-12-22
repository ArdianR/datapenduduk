<?php
include("koneksi.php");

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_tgl_lahir = $_POST['tempat_tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kp = $_POST['kp'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kd_pos = $_POST['kd_pos'];
$kabupaten = $_POST['kabupaten'];
$provinsi = $_POST['provinsi'];
$agama = $_POST['agama'];
$status_perkawinan = $_POST['status_perkawinan'];
$pekerjaan = $_POST['pekerjaan'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$status = 'Baru';

$query = mysql_query("INSERT into penduduk values ('$nik','$nama','$tempat_tgl_lahir','$jenis_kelamin','$kp','$rt','$rw','$desa','$kecamatan','$kd_pos','$kabupaten','$provinsi','$agama','$status_perkawinan','$pekerjaan','$kewarganegaraan', '$status')");
$sql = mysql_query($query);
header("Location: table-data-datang.php");
if (mysql_query($query)) {
    include ("#alertSucces");

}
?>