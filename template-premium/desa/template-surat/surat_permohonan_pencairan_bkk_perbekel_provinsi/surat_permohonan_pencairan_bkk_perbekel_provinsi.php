<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Pencairan BKK Tambahan Penghasilan Perbekel</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Pencairan BKK Tambahan Penghasilan Perbekel</li>
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
										<input title="Pilih Tanggal" id="tgl_mulai" class="form-control input-sm required" name="tanggal_surat" type="text"  />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="lampiran"  class="col-sm-3 control-label">Lampiran</label>
								<div class="col-sm-8">
									<input type="text" name="lampiran" class="form-control input-sm required" placeholder="1 Gabung" />
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Prihal</label>
								<div class="col-sm-8">
									<textarea name="keperluan" class="form-control input-sm required" placeholder="Mohon Pencairan BKK">Mohon Pencairan BKK Tambahan Penghasilan Kepada Perbekel Triwulan .... Tahun ...</textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="keterangan"  class="col-sm-3 control-label">Keterangan</label>
								<div class="col-sm-8">
									<textarea  id="keterangan" class="form-control input-sm required" placeholder="Mohon Pencairan BKK Tambahan Penghasilan Kepada Perbekel Triwulan .... Tahun ..." name="keterangan">Tambahan Penghasilan Kepada Perbekel Triwulan .... Tahun ...</textarea>
								</div>
							</div>

							

							<div class="form-group">
								<label for="nama_sekdes"  class="col-sm-3 control-label">Nama Sekdes</label>
								<div class="col-sm-3">
									<input id="nama_sekdes" class="form-control input-sm" name="nama_sekdes" type="text" placeholder="Nama Sekdes" value="I Wayan Sulawa" />
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
