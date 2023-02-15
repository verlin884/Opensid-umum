<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Pakta Integritas BKK Subak</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Pakta Integritas BKK Subak</li>
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
								<label for="keperluan"  class="col-sm-3 control-label">Tanggal Surat</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_1" class="form-control input-sm required" name="tanggal_surat" type="text"  />
									</div>
								</div>
							</div>
							
						
							
							<div class="form-group">
								<label for="keterangan"  class="col-sm-3 control-label">Nama Kegiatan</label>
								<div class="col-sm-8">
									<textarea  id="keterangan" class="form-control input-sm required" placeholder="Pencairan Dana BKK" name="keterangan">Bantuan Keuangan Khusus (BKK) Kepada Desa untuk Subak dan Subak Abian di Provinsi Bali </textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="nilai_belanja"  class="col-sm-3 control-label">Nilai Belanja: </label>
								<div class="col-sm-3">
									<input type="text"  id="nilai_belanja" class="rupiah form-control input-sm required" placeholder="Nilai Belanja" name="nilai_belanja" value="Rp. 50.000.000" />
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
