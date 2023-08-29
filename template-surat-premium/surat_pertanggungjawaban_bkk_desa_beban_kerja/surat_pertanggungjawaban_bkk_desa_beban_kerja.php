<style>
	.error {
		color: #dd4b39;
	}
</style>
<script type="text/javascript">

	function periodeTriwulan(triwulan){
		switch(triwulan){
			case "I (Pertama)":
				document.getElementById("durasi_bulan").value="Januari - Maret";
				document.getElementById("permintaan_ke").value="I";
				break;

			case "II (Kedua)":
				document.getElementById("durasi_bulan").value="April - Juni";
				document.getElementById("permintaan_ke").value="II";
				break;

			case "III (Ketiga)":
				document.getElementById("durasi_bulan").value="Juli - September";
				document.getElementById("permintaan_ke").value="III";
				break;

			case "IV (Keempat)":
				document.getElementById("durasi_bulan").value="Oktober - Desember";
				document.getElementById("permintaan_ke").value="IV";
				break;
		}
	}

</script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Pertanggungjawaban BKK Desa untuk Beban Kerja</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Pertanggungjawaban BKK Desa untuk Beban Kerja</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?=site_url("surat")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Wilayah">
							<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
						</a>
					</div>
					<div class="box-body">
						
						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat')?>">
							<?php if ($individu): ?>
								<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
							<?php	endif; ?>
							
							<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>

							<div class="form-group">
								<label for="bulan"  class="col-sm-3 control-label">Laporan Triwulan Ke</label>
								<div class="col-sm-3">
									<select class="form-control required input-sm select2" id="bulan" name="bulan" style ="width:100%;" onchange="periodeTriwulan($(this).val())">
										<option value="">--  Pilih Triwulan --</option>
										<option value="I (Pertama)"> I (Pertama)</option>
										<option value="II (Kedua)"> II (Kedua)</option>
										<option value="III (Ketiga)"> III (Ketiga)</option>
										<option value="IV (Keempat)"> IV (Keempat)</option>
									</select>
								</div>

								<div class="col-sm-3">
									<input type="text" name="durasi_bulan" hidden="true" id="durasi_bulan" />
								</div>
								<div class="col-sm-3">
									<input type="text" name="permintaan_ke" hidden="true" id="permintaan_ke" />
								</div>
							</div>

							
							<div class="form-group">
								<label for="tanggal_laporan"  class="col-sm-3 control-label">Tanggal Surat</label>
								<div class="col-sm-3 col-lg-2">
									<select class="form-control required input-sm select2" id="tanggal_laporan" name="tanggal_laporan" style ="width:100%;" onchange="formAction('main')">
										<option value="">--  Pilih Tanggal --</option>
										<option value="1"> 1 </option>
										<option value="2"> 2 </option>
										<option value="3"> 3 </option>
										<option value="4"> 4 </option>
										<option value="5"> 5 </option>
										<option value="6"> 6</option>
										<option value="7"> 7</option>
										<option value="8"> 8</option>
										<option value="9"> 9</option>
										<option value="10"> 10</option>
										<option value="11"> 11</option>
										<option value="12"> 12</option>
										<option value="13"> 13 </option>
										<option value="14"> 14 </option>
										<option value="15"> 15 </option>
										<option value="16"> 16</option>
										<option value="17"> 17 </option>
										<option value="18"> 18</option>
										<option value="19"> 19</option>
										<option value="20"> 20</option>
										<option value="21"> 21</option>
										<option value="22"> 22</option>
										<option value="23"> 23</option>
										<option value="24"> 24</option>
										<option value="25"> 25</option>
										<option value="26"> 26</option>
										<option value="27"> 27</option>
										<option value="28"> 28</option>
										<option value="29"> 29</option>
										<option value="30"> 30</option>
										<option value="31"> 31</option>
									</select>
								</div>
								<div class="col-sm-3 col-lg-2">
									<select class="form-control required input-sm select2" id="bulan_laporan" name="bulan_laporan" style ="width:100%;" onchange="formAction('main')">
										<option value="">--  Pilih Bulan --</option>
										<option value="Januari"> Januari</option>
										<option value="Februari"> Februari</option>
										<option value="Maret"> Maret</option>
										<option value="April"> April</option>
										<option value="Mei"> Mei</option>
										<option value="Juni"> Juni</option>
										<option value="Juli"> Juli</option>
										<option value="Agustus"> Agustus</option>
										<option value="September"> September</option>
										<option value="Oktober"> Oktober</option>
										<option value="November"> November</option>
										<option value="Desember"> Desember</option>
									</select>
								</div>
								<div class="col-sm-3 col-lg-2">
									Tahun <?php echo date("yy"); ?>
								</div>
							</div>

							

							<div class="form-group">
								<label for="nilai"  class="col-sm-3 control-label">Nilai Pertangungjawaban</label>
								<div class="col-sm-2">
									<input name="nilai" class="rupiah form-control input-sm required" placeholder="29.700.000,00" value="" />
								</div>
							</div>
							<div class="form-group">
								<label for="terbilang"  class="col-sm-3 control-label">Terbilang</label>
								<div class="col-sm-8">
									<textarea  id="terbilang" class="form-control input-sm required" placeholder="Dua Puluh Sembilan Juta Tujuh Ratus Ribu Rupiah" name="terbilang"></textarea>
								</div>
							</div>

							
							<div class="form-group">
								<label for="bendahara"  class="col-sm-3 control-label">Nama Bendahara</label>
								<div class="col-sm-8">
									<input name="nama_bendahara" class="form-control input-sm required" placeholder="" value="I MADE WAWAN ARYA MULIYAWAN, SE." />
								</div>
							</div>

							<?php include("donjo-app/views/surat/form/_pamong.php"); ?>
						</form>
					</div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
			</div>
		</div>
	</section>
</div>
