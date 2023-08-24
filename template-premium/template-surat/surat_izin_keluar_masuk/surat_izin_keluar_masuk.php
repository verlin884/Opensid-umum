<style>
	.error {
		color: #dd4b39;
	}
	</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Keterangan Izin Keluar Masuk</h1>
		<ol class="breadcrumb tdk-permohonan tdk-periksa">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Keterangan Izin Keluar Masuk</li>
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
							<?php include("donjo-app/views/surat/form/_cari_nik.php"); ?>
						</form>
						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat')?>">
							<div class="row jar_form">
								<label for="nomor" class="col-sm-3"></label>
								<div class="col-sm-8">
									<input class="required" type="hidden" name="nik" value="<?= $individu['id']?>">
								</div>
							</div>
							<?php if ($individu): ?>
								<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
							<?php	endif; ?>
							<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>
							<div class="form-group">
                            </div>
								<div class="form-group subtitle_head" id="checkbox">
								<label class="col-sm-3 control-label"><b>RIWAYAT BERKAITAN DENGAN COVID -19</B><br></label>
							</div>
							<div class="form-group">
								<label for="tanya1"  class="col-sm-5 control-label">A. Pernah Kontak Dengan Pasien COVID-19</label>
								<div class="col-sm-1"> 
									<input id="Ya" name="tanya1" type="radio" value="Ya"> Ya
								</div>
								<div class="col-sm-1">
									<input  id="Tidak" name="tanya1"  type="radio" value="Tidak"> Tidak
								</div>
							</div>
 							<div class="form-group">
								<label for="tanya2"  class="col-sm-5 control-label">B. Pernah Bepergian Ke Daerah / Negara Terpapar COVID-19</label>
								<div class="col-sm-1"> 
									<input id="Ya" name="tanya2" type="radio" value="Ya"> Ya
								</div>
								<div class="col-sm-1">
									<input  id="Tidak" name="tanya2"  type="radio" value="Tidak"> Tidak
								</div>
							</div>
							<div class="form-group">
								<label for="tanya3"  class="col-sm-5 control-label">C. Pernah Pepergian Ke Rumah Sakit</label>
								<div class="col-sm-1"> 
									<input id="Ya" name="tanya3" type="radio" value="Ya"> Ya
								</div>
								<div class="col-sm-1">
									<input  id="Tidak" name="tanya3"  type="radio" value="Tidak"> Tidak
								</div>
							</div>
 							<div class="form-group">
								<label for="tanya4"  class="col-sm-5 control-label">D. Pernah Menjalani Rapid Tes</label>
								<div class="col-sm-1"> 
									<input id="Ya" name="tanya4" type="radio" value="Ya"> Ya
								</div>
								<div class="col-sm-1">
									<input  id="Tidak" name="tanya4"  type="radio" value="Tidak"> Tidak
								</div>
							</div>
							<div class="form-group">
								<label for="tanya5" class="col-sm-5 control-label">E. Pernah Menjalani Swab Test</label>
								<div class="col-sm-1"> 
									<input id="Ya" name="tanya5" type="radio" value="Ya"> Ya
								</div>
								<div class="col-sm-1">
									<input  id="Tidak" name="tanya5"  type="radio" value="Tidak"> Tidak
								</div>
							</div>
 							<div class="form-group">
								<label for="tanya6"  class="col-sm-5 control-label">F. Berstatus ODP</label>
								<div class="col-sm-1"> 
									<input id="Ya" name="tanya6" type="radio" value="Ya"> Ya
								</div>
								<div class="col-sm-1">
									<input  id="Tidak" name="tanya6"  type="radio" value="Tidak"> Tidak
								</div>
							</div>
 							<div class="form-group">
								<label for="tanya7"  class="col-sm-5 control-label">G. Berstatus PDP</label>
								<div class="col-sm-1"> 
									<input id="Ya" name="tanya7" type="radio" value="Ya"> Ya
								</div>
								<div class="col-sm-1">
									<input  id="Tidak" name="tanya7"  type="radio" value="Tidak"> Tidak
								</div>
							</div>
							<div class="form-group">
								<label for="tanya8"  class="col-sm-5 control-label">H. Pernah Dirawat (Positif)</label>
								<div class="col-sm-1"> 
									<input id="Ya" name="tanya8" type="radio" value="Ya"> Ya
								</div>
								<div class="col-sm-1">
									<input  id="Tidak" name="tanya8"  type="radio" value="Tidak"> Tidak
								</div>
							</div>
							<div class="form-group subtitle_head" id="keterangan lain">
							<label class="col-sm-3 control-label"><b>KETERANGAN LAIN</b><br></label>
							</div>
								<div class="form-group">
									<label for="Sifat"  class="col-sm-3 control-label"> Sifat dan Hal Surat</label>
									<div class="col-sm-4">
										<input name="sifat" class="form-control input-sm required" placeholder="Penting"> 
									</div>
								 	<div class="col-sm-4">
										<input name="hal" class="form-control input-sm required" placeholder="Izin">
									</div>
						        </div>
								
								<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label"> Keperluan / Tujuan Kedatangan</label>
									<div class="col-sm-8">
									<textarea name="keperluan" class="form-control input-sm required" placeholder="Tujuan Kedatangan"></textarea>
									</div>
								</div>

								<div class="form-group">
									<label for="provinsi_tujuan"  class="col-sm-3 control-label">Tujuan</label>
									<div class="col-sm-8">
									<textarea name="provinsi_tujuan" class="form-control input-sm required" placeholder="Provinsi DKI Jakarta"></textarea>
									</div>
								</div>

								<div class="form-group">
								<label for="nomor_hp"  class="col-sm-3 control-label">Nomor HP</label>
								<div class="col-sm-8">
								<input name="nomor_hp" class="form-control input-sm number required" placeholder="Nomor HP"> 
								</div>
                                </div>

                                <div class="form-group subtitle_head" id="keluarga_yang_ikut">
									<label class="col-sm-3 control-label"><b>KELUARGA YANG IKUT SERTA</b><br></label>
							 	</div>
							 	<div class="form-group">
									<label for="nama_pengikut_1"  class="col-sm-3 control-label">1. Nama / Umur</label>
									<div class="col-sm-4">
										<input name="nama_pengikut_1" class="form-control input-sm" placeholder="1. Nama Pengikut"> 
									</div>
								 	<div class="col-sm-4">
										<input name="umur_pengikut_1" class="form-control input-sm" placeholder="1. Umur Pengikut">
									</div>
						        </div>

						        <div class="form-group">
						        	<label for="nama_pengikut_2"  class="col-sm-3 control-label">2. Nama / Umur</label>
									<div class="col-sm-4">
										<input name="nama_pengikut_2" class="form-control input-sm" placeholder="2. Nama Pengikut"> 
									</div>
								 	<div class="col-sm-4">
										<input name="umur_pengikut_2" class="form-control input-sm" placeholder="2. Umur Pengikut">
									</div>
								</div>

								<div class="form-group">
						        	<label for="nama_pengikut_3"  class="col-sm-3 control-label">3. Nama / Umur</label>
									<div class="col-sm-4">
										<input name="nama_pengikut_3" class="form-control input-sm" placeholder="3. Nama Pengikut"> 
									</div>
								 	<div class="col-sm-4">
										<input name="umur_pengikut_3" class="form-control input-sm" placeholder="3. Umur Pengikut">
									</div>
								</div>

								<div class="form-group">
						        	<label for="nama_pengikut_3"  class="col-sm-3 control-label">4. Nama / Umur</label>
									<div class="col-sm-4">
										<input name="nama_pengikut_4" class="form-control input-sm" placeholder="4. Nama Pengikut"> 
									</div>
								 	<div class="col-sm-4">
										<input name="umur_pengikut_4" class="form-control input-sm" placeholder="4. Umur Pengikut">
									</div>
								</div>

							   <div class="form-group subtitle_head" id="penandatangan">
								<label class="col-sm-3 control-label"><b>PENANDA TANGAN</b><br></label>
							 	</div>
                           <?php include("donjo-app/views/surat/form/_pamong.php"); ?>
						</form>
						</div>
						</div>
					 </div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
			 </div>
	</section>
</div>