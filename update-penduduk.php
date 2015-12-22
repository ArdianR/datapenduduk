<?php
include("koneksi.php");

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_tgl_lahir = $_POST['tempat_tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$status_perkawinan = $_POST['status_perkawinan'];
$pekerjaan = $_POST['pekerjaan'];
$kewarganegaraan = $_POST['kewarganegaraan'];


$query = mysql_query("UPDATE penduduk set nik='$nik', nama='$nama', tempat_tgl_lahir='$tempat_tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', agama='$agama', status_perkawinan='$status_perkawinan', pekerjaan='$pekerjaan', kewarganegaraan='$kewarganegaraan' where nik='$nik')");
$sql = mysql_query($query);
header("Location: table-penduduk.php");
if (mysql_query($query)) {
    include ("#alertSucces");

}
?>