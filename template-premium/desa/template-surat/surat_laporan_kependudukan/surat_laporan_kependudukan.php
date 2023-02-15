<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Keterangan</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Keterangan</li>
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
							
							
							<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Jenis Laporan</label>
								<div class="col-sm-8">
									<select class="form-control required input-sm select2" id="keperluan" name="keperluan" style ="width:100%;" onchange="formAction('main')">
										<option value="">--  Pilih Jenis Laporan --</option>
										<option value="Perubahan Penduduk"> Perubahan Data Penduduk</option>
										<option value="Rekapitulasi Jumlah Penduduk berdasarkan Agama, Suku dan Ras">Rekapitulasi Jumlah Penduduk berdasarkan Agama, Suku dan Ras</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="bulan"  class="col-sm-3 control-label">Laporan Bulan</label>
								<div class="col-sm-8">
									<select class="form-control required input-sm select2" id="bulan" name="bulan" style ="width:100%;" onchange="formAction('main')">
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
