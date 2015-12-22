<?php
include "header.php";

$sambung = mysql_connect("localhost","root","") or die ("gagal konek ke server.");
mysql_select_db("penduduk") or die ("gagal membuka database.");
?>

<div id="main-content">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li><a href="#">Home</a><span class="divider">&raquo;</span></li>
      <li><a href="#">Library</a><span class="divider">&raquo;</span></li>
      <li class="active">Data</li>
    </ul>
    
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-block">
          <div class="widget-head">
            <h5>Data Table Penduduk</h5>
            <div class="widget-control pull-right">
              <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-plus"></i> Add New</a></li>
                <li><a href="#"><i class="icon-ok"></i> Bulk Approved</a></li>
                <li><a href="#"><i class="icon-minus-sign"></i> Bulk Remove</a></li>
              </ul>
            </div>
          </div>
          <div class="widget-content">
            <div class="widget-box">
              <table class="data-tbl-boxy table">
              <thead>
              <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Status Perkawinan</th>
                <th>Pekerjaan</th>
                <th>Kewarganegaraan</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>

<?php
$query = "select*from penduduk where status='Baru'";
$result = mysql_query($query,$sambung);
//$no=0;
while($buff = mysql_fetch_array($result)){
//$no++;
?>

        <tr>
        <td ><?php echo $buff['nik'];?></td>
        <td ><?php echo $buff['nama'];?></td>
        <td ><?php echo $buff['jenis_kelamin'];?></td>
        <td ><?php echo $buff['kp'];?>, <?php echo $buff['rt'];?>/<?php echo $buff['rw'];?>, <?php echo $buff['desa'];?>, <?php echo $buff['kecamatan'];?>, <?php echo $buff['kabupaten'];?>, <?php echo $buff['provinsi'];?>, <?php echo $buff['kd_pos'];?></td>
        <td ><?php echo $buff['agama'];?></td>
        <td ><?php echo $buff['status_perkawinan'];?></td>
        <td ><?php echo $buff['pekerjaan'];?></td>
        <td ><?php echo $buff['kewarganegaraan'];?></td>
        <td>
          <div>
            <a  title="Ubah" href="edit-penduduk.php?nik=<?php echo $buff['nik'];?>"><span class="black-icons pencil"></span></a> 
            <a  title="Hapus" href="hapus-penduduk.php?nik=<?php echo $buff['nik'];?>"><span class="black-icons trashcan"></span></a>
            
           </div>
<?php
}
mysql_close($sambung);
?>
              </tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
       
  </div>
</div>
<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/prettify.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/accordion.jquery.js"></script>
<script src="js/smart-wizard.jquery.js"></script>
<script src="js/vaidation.jquery.js"></script>
<script src="js/jquery-dynamic-form.js"></script>
<script src="js/fullcalendar.js"></script>
<script src="js/raty.jquery.js"></script>
<script src="js/jquery.noty.js"></script>
<script src="js/jquery.cleditor.min.js"></script>
<script src="js/data-table.jquery.js"></script>
<script src="js/TableTools.min.js"></script>
<script src="js/ColVis.min.js"></script>
<script src="js/plupload.full.js"></script>
<script src="js/elfinder/elfinder.min.js"></script>
<script src="js/chosen.jquery.js"></script>
<script src="js/uniform.jquery.js"></script>
<script src="js/jquery.tagsinput.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script src="js/check-all.jquery.js"></script>
<script src="js/inputmask.jquery.js"></script>
<script src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
<script src="js/plupupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/jquery.jqplot.min.js"></script>
<script src="js/chart/jqplot.highlighter.min.js"></script>
<script src="js/chart/jqplot.cursor.min.js"></script>
<script src="js/chart/jqplot.dateAxisRenderer.min.js"></script>
<script src="js/custom-script.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/ios-orientationchange-fix.js"></script>
</body>
</html>