<!-- TODO: Pindahkan ke external css -->
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
							<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>

							<div class="form-group">
								<label for="nama_lembaga"  class="col-sm-3 control-label">Nama Lembaga</label>
								<div class="col-sm-8">
									<input name="nama_lembaga" class="form-control input-sm required" placeholder="Nama Lembaga" />
								</div>
							</div>
							<div class="form-group">
								<label for="alamat_lembaga"  class="col-sm-3 control-label">Alamat Lembaga (Jalan / Banjar)</label>
								<div class="col-sm-8">
									<input  id="alamat_lembaga" class="form-control input-sm required" placeholder="Jalan Raya Bengkel No. 201, Banjar Bengkel Gede" name="alamat_lembaga" />
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
