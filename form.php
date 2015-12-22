<?php
include ("header.php");
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
						<h5> Masukkan Data Pindah</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<form class="form-horizontal well">
								<fieldset>
									<div class="control-group">
                    <label class="control-label" for="typehead">Nomor Karut Keluarga</label>
                    <div class="controls">
                      <input type="text" class="span8" data-provide="typeahead">
                    </div>
                  </div>
									<div class="control-group">
										<label class="control-label" for="typehead">Nama Kepala Keluarga</label>
										<div class="controls">
											<input type="text" class="span8" data-provide="typeahead" >
										</div>
									</div>
                  <div class="control-group">
                    <label class="control-label" for="typehead">Alamat</label>
                    <div class="controls">
                      <input type="text" placeholder="Kampung" class="span3">
                      <input type="text" placeholder="RT" class="span2">
                      <input type="text" placeholder="RW" class="span2">
                      <input type="text" placeholder="Desa/Kelurahan" class="span3">
                      <input type="text" placeholder="Kecamatan" class="span3">
                      <input type="text" placeholder="Kode Pos" class="span3">
                      <input type="text" placeholder="Kab/Kota" class="span3">
                      <input type="text" placeholder="Provinsi" class="span3">
                      <input type="text" placeholder="No Telpon" class="span4">
                    </div>
                  </div>
									
                  <div class="control-group">
                    <label class="control-label">Alasan Pindah</label>
                    <div class="controls">
                      <select data-placeholder="Alasan Pindah" id="selectError2" name="no_ap" data-rel="chosen">
                        option value=""></option>
                        <?php
                                            include "koneksi.php";
                                            $query = "SELECT * from alasan_pindah";
                                            $result = mysql_query($query);
                                            while($data = mysql_fetch_array($result)){
                                            ?>
                                            <option value="<?php echo $data['no_ap'] ?>"><?php echo $data['no_ap'] ?> | <?php echo $data['keterangan'] ?></option>
                                            <?php
                                         }
                                         ?>
                      </select>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="typehead">Alamat Tujuan Pindah</label>
                    <div class="controls">
                      <input type="text" placeholder="Kampung" class="span3">
                      <input type="text" placeholder="RT" class="span2">
                      <input type="text" placeholder="RW" class="span2">
                      <input type="text" placeholder="Desa/Kelurahan" class="span3">
                      <input type="text" placeholder="Kecamatan" class="span3">
                      <input type="text" placeholder="Kode Pos" class="span3">
                      <input type="text" placeholder="Kab/Kota" class="span3">
                      <input type="text" placeholder="Provinsi" class="span3">
                      <input type="text" placeholder="No Telpon" class="span4">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Klasifikasi Pindah</label>
                    <div class="controls">
                      <select data-placeholder="Alasan Pindah" id="selectError2" name="no_kp" data-rel="chosen">
                        option value=""></option>
                        <?php
                                            include "koneksi.php";
                                            $query = "SELECT * from klasifikasi_pindah";
                                            $result = mysql_query($query);
                                            while($data = mysql_fetch_array($result)){
                                            ?>
                                            <option value="<?php echo $data['no_kp'] ?>"><?php echo $data['no_kp'] ?> | <?php echo $data['keterangan'] ?></option>
                                            <?php
                                         }
                                         ?>
                      </select>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Jenis Kepindah</label>
                    <div class="controls">
                      <select data-placeholder="Alasan Pindah" id="selectError2" name="no_jp" data-rel="chosen">
                        option value=""></option>
                        <?php
                                            include "koneksi.php";
                                            $query = "SELECT * from jenis_kepindahan";
                                            $result = mysql_query($query);
                                            while($data = mysql_fetch_array($result)){
                                            ?>
                                            <option value="<?php echo $data['no_jp'] ?>"><?php echo $data['no_jp'] ?> | <?php echo $data['keterangan'] ?></option>
                                            <?php
                                         }
                                         ?>
                      </select>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Status Nomor KK Bagi Yang Tidak Pindah </label>
                    <div class="controls">
                      <select data-placeholder="Alasan Pindah" id="selectError2" name="no_sktp" data-rel="chosen">
                        option value=""></option>
                        <?php
                                            include "koneksi.php";
                                            $query = "SELECT * from stat_kk_tdk_pindah";
                                            $result = mysql_query($query);
                                            while($data = mysql_fetch_array($result)){
                                            ?>
                                            <option value="<?php echo $data['no_sktp'] ?>"><?php echo $data['no_sktp'] ?> | <?php echo $data['keterangan'] ?></option>
                                            <?php
                                         }
                                         ?>
                      </select>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Status Nomor KK Bagi Yang Pindah</label>
                    <div class="controls">
                      <select data-placeholder="Alasan Pindah" id="selectError2" name="no_skp" data-rel="chosen">
                        option value=""></option>
                        <?php
                                            include "koneksi.php";
                                            $query = "SELECT * from stat_kk_pindah";
                                            $result = mysql_query($query);
                                            while($data = mysql_fetch_array($result)){
                                            ?>
                                            <option value="<?php echo $data['no_skp'] ?>"><?php echo $data['no_skp'] ?> | <?php echo $data['keterangan'] ?></option>
                                            <?php
                                         }
                                         ?>
                      </select>
                    </div>
                  </div>
									
									<div class="form-actions">
										<button type="submit" class="btn btn-info">Save changes</button>
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