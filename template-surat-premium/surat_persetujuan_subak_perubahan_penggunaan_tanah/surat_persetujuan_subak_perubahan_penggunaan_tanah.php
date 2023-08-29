<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<?php $this->load->view("surat/form/breadcrumb.php"); ?>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border tdk-permohonan tdk-periksa">
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
								<label for="jabatan"  class="col-sm-3 control-label">Nama Subak</label>
								<div class="col-sm-8">
									<input  id="subak" class="form-control input-sm required" placeholder="Subak Bengkel" name="nama_subak" />
								</div>
							</div>


							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Nama Pekaseh</label>
								<div class="col-sm-8">
									<input type="text" name="nama_pekaseh" class="form-control input-sm required" placeholder="Nama Pekaseh" />
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan"  class="col-sm-3 control-label">Jabatan</label>
								<div class="col-sm-8">
									<input  id="jabatan" class="form-control input-sm required" placeholder="Pekaseh" name="jabatan_pekaseh" />
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan"  class="col-sm-3 control-label">Banjar Dinas Lokasi Tanah</label>
								<div class="col-sm-8">
									<input  id="lokasi" class="form-control input-sm required" placeholder="Subak Bengkel" name="lokasi_tanah" />
								</div>
							</div>

							<div class="form-group">
								<label for="no_sertifikat"  class="col-sm-3 control-label">Nomor Sertifikat</label>
								<div class="col-sm-8">
									<input  id="no_sertifikat" class="form-control input-sm required" placeholder="22.02.02.04.2.02320" name="no_sertifikat" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_sertifikat"  class="col-sm-3 control-label">Nama Pemilik Sertifikat</label>
								<div class="col-sm-8">
									<input  id="nama_sertifikat" class="form-control input-sm required" placeholder="Nama Pemilik Sertifikat" name="nama_sertifikat" />
								</div>
							</div>

							<div class="form-group">
								<label for="luas_tanah"  class="col-sm-3 control-label">Luas Tanah</label>
								<div class="col-sm-2">
									<input  id="luas_tanah" class="form-control input-sm required" placeholder="200" name="luas_tanah" />
								</div>
								<div class="col-sm-6">M2</div>
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
