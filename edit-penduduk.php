<?php
include ("header.php");

$sambung = mysql_connect("localhost", "root", "") or die("Gagal Koneksi Ke Server");
mysql_select_db("penduduk") or die("Gagal Membuka Database");
//$edit = mysql_query("select * from mhs where nim='$_GET[nim]'");
//$r_edit = mysql_fetch_array($edit);
$nik = $_GET['nik'];
$query = "SELECT * from penduduk where nik='$nik'";
$result = mysql_query($query, $sambung)or die("Gagal Melakukan Query");
$buff = mysql_fetch_array($result);
mysql_close($sambung);

?>

<div id="main-content">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li><a href="#">Home</a><span class="divider">&raquo;</span></li>
      <li><a href="#">Library</a><span class="divider">&raquo;</span></li>
      <li class="active">Data</li>
    </ul>
    <div class="row-fluid">
      <div class="span7">
        <div class="nonboxy-widget">
          <div class="widget-head">
            <h5> Masukkan Data Penduduk</h5>
          </div>
          <div class="widget-content">
            <div class="widget-box">
              <form class="form-horizontal well" method="post" action="update-penduduk.php" role="form">
                <fieldset>
                  <div class="control-group">
                    <label class="control-label" for="input501">NIK</label>
                    <div class="controls">
                      <input type="text" name="nik" class="span8" id="nik" value="<?php echo $buff['nik'];?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="input501">Nama</label>
                    <div class="controls">
                      <input type="text" name="nama" class="span8" id="nama" value="<?php echo $buff['nama'];?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="input501">Tempat Tanggal Lahir</label>
                    <div class="controls">
                      <input type="text" name="tempat_tgl_lahir" class="span8" id="tempat_tgl_lahir" value="<?php echo $buff['tempat_tgl_lahir'];?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="input501">Jenis Kelamin</label>
                    <div class="controls">
                      <input type="text" name="jenis_kelamin" class="span8" id="jenis_kelamin" value="<?php echo $buff['jenis_kelamin'];?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="input501">Alamat</label>
                    <div class="controls">
                      <input type="text" name="alamat" class="span8" id="alamat" value="<?php echo $buff['alamat'];?>">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="input501">Agama</label>
                    <div class="controls">
                      <input type="text" name="agama" class="span8" id="agama" value="<?php echo $buff['agama'];?>">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="input501">Status Perkawinan</label>
                    <div class="controls">
                      <input type="text" name="status_perkawinan" class="span8" id="status_perkawinan" value="<?php echo $buff['status_perkawinan'];?>">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="input501">Pekerjaan</label>
                    <div class="controls">
                      <input type="text" name="pekerjaan" class="span8" id="pekerjaan" value="<?php echo $buff['pekerjaan'];?>">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="input501">Kewarganegaraan</label>
                    <div class="controls">
                      <input type="text" name="kewarganegaraan" class="span8" id="kewarganegaraan" value="<?php echo $buff['kewarganegaraan'];?>">
                    </div>
                  </div>
              
                  <div class="form-actions">
                    <input type="submit" class="btn btn-info" value="Save changes">
                    <button class="btn btn-warning">Cancel</button>
                  </div>
                </fieldset>
              </form>
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
<script src="js/jquery.ui.touch-punch.js"></script>
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
<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/respond.min.js"></script>
<script src="js/ios-orientationchange-fix.js"></script>
</body>
</html>