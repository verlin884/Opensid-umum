<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Keterangan</h1>
		<ol class="breadcrumb tdk-permohonan tdk-periksa">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Keterangan</li>
		</ol>
	</section>
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
						<form action="" id="main" name="main" method="POST" class="form-horizontal">
							<div class="form-group">
								<label for="nik"  class="col-sm-3 control-label">NIK / Nama</label>
								<div class="col-sm-6 col-lg-4">
									<select class="form-control required input-sm select2" id="nik" name="nik" style ="width:100%;" onchange="formAction('main')">
										<option value="">--  Cari NIK / Nama Penduduk --</option>
										<?php foreach ($penduduk as $data): ?>
											<option value="<?= $data['id']?>" <?php if ($individu['nik']==$data['nik']): ?>selected<?php endif; ?>>NIK : <?= $data['nik']." - ".$data['nama']?></option>
										<?php endforeach;?>
									</select>
								</div>
							</div>
						</form>
						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat')?>">
							<?php if ($individu): ?>
								<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
							<?php	endif; ?>
							<div class="row jar_form">
								<label for="nomor" class="col-sm-3"></label>
								<div class="col-sm-8">
									<input class="required" type="hidden" name="nik" value="<?= $individu['id']?>">
								</div>
							</div>
							<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>
							
							<div class="form-group">
								<label for="pernyataan"  class="col-sm-3 control-label">Pernyataan</label>
								<div class="col-sm-8">
									Menyatakan memang benar bahwa:
									<textarea  id="pernyataan" class="form-control input-sm required" placeholder="Menyatakan memang benar bahwa" name="pernyataan" rows="10"></textarea>
									<input name="keterangan" type="hidden" class="form-control input-sm" value="Surat Pernyataan" />
								</div>
							</div>
							

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Nama Mengetahui Selain Perbekel</label>
								<div class="col-sm-8">
									<input name="nama_mengetahui_2" class="form-control input-sm" placeholder="Nama" />
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Jabatan Mengetahui Selain Perbekel</label>
								<div class="col-sm-8">
									<input name="mengetahui_2" class="form-control input-sm" placeholder="Jabatan" />
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
