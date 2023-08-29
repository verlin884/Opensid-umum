<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Berita Acara Pengukuhan</h1>
		<ol class="breadcrumb tdk-permohonan tdk-periksa">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Berita Acara Pengukuhan</li>
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
						
						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat')?>">
							
							<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>

							<div class="form-group">
								<label for="tanggal_pengukuhan"  class="col-sm-3 control-label">Tanggal Pengukuhan</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_mulai" class="form-control input-sm required" name="tanggal_pengukuhan" type="text"/>
									</div>
								</div>
								
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Nama Kelompok</label>
								<div class="col-sm-8">
									<input name="keterangan" class="form-control input-sm required" placeholder="Sanggar Tari Bali Desa Bengkel" />
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Alamat Kelompok</label>
								<div class="col-sm-8">
									<input name="alamat_kelompok" class="form-control input-sm required" placeholder="Masukan nama banjar" />
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Tujuan Pengukuhan</label>
								<div class="col-sm-8">
									<textarea name="tujuan_dikukuhkan" class="form-control input-sm required" placeholder="Melestarikan Seni Budaya Bali di Desa Bengkel"></textarea>
								</div>
							</div>
							
							<div class="form-group" >
								<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>STRUKTUR ORGANISASI</strong></label>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Ketua</label>
								<div class="col-sm-8">
									<input name="ketua" class="form-control input-sm required" placeholder="Nama Ketua Kelompok" />
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Skretaris</label>
								<div class="col-sm-8">
									<input name="sekretaris" class="form-control input-sm required" placeholder="Nama Sekretaris Kelompok" />
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Bendahara</label>
								<div class="col-sm-8">
									<input name="bendahara" class="form-control input-sm required" placeholder="Nama Bendahara Kelompok" />
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Anggota</label>
								<div class="col-sm-8">
									<input name="anggota_1" class="form-control input-sm required" placeholder="Nama Anggota Kelompok" />
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Anggota</label>
								<div class="col-sm-8">
									<input name="anggota_2" class="form-control input-sm" placeholder="Nama Anggota Kelompok" />
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Anggota</label>
								<div class="col-sm-8">
									<input name="anggota_3" class="form-control input-sm" placeholder="Nama Anggota Kelompok" />
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Anggota</label>
								<div class="col-sm-8">
									<input name="anggota_4" class="form-control input-sm" placeholder="Nama Anggota Kelompok" />
								</div>
							</div>

							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Anggota</label>
								<div class="col-sm-8">
									<input name="anggota_5" class="form-control input-sm" placeholder="Nama Anggota Kelompok" />
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Anggota</label>
								<div class="col-sm-8">
									<input name="anggota_6" class="form-control input-sm" placeholder="Nama Anggota Kelompok" />
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Anggota</label>
								<div class="col-sm-8">
									<input name="anggota_7" class="form-control input-sm" placeholder="Nama Anggota Kelompok" />
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Anggota</label>
								<div class="col-sm-8">
									<input name="anggota_8" class="form-control input-sm" placeholder="Nama Anggota Kelompok" />
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Anggota</label>
								<div class="col-sm-8">
									<input name="anggota_9" class="form-control input-sm" placeholder="Nama Anggota Kelompok" />
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Anggota</label>
								<div class="col-sm-8">
									<input name="anggota_10" class="form-control input-sm" placeholder="Nama Anggota Kelompok" />
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
