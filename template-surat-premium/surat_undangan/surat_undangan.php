<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Undangan</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Undangan</li>
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
								<label for="lampiran"  class="col-sm-3 control-label">Lampiran</label>
								<div class="col-sm-8">
									<input type="text" name="lampiran" class="form-control input-sm required" placeholder="1 Gabung" />
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Perihal</label>
								<div class="col-sm-8">
									<textarea name="keperluan" class="form-control input-sm required" placeholder="Undangan Rapat Koordinasi"></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<label for="kepada_1"  class="col-sm-3 control-label">Kepada 1</label>
								<div class="col-sm-8">
									<input type="text" name="kepada_1" class="form-control input-sm required" placeholder="1. Kepada 1" />
								</div>
							</div>

							<div class="form-group">
								<label for="kepada_2"  class="col-sm-3 control-label">Kepada 2</label>
								<div class="col-sm-8">
									<input type="text" name="kepada_2" class="form-control input-sm " placeholder="2. Kepada 2" />
								</div>
							</div>

							<div class="form-group">
								<label for="kepada_3"  class="col-sm-3 control-label">Kepada 3</label>
								<div class="col-sm-8">
									<input type="text" name="kepada_3" class="form-control input-sm " placeholder="3. Kepada 3" />
								</div>
							</div>

							<div class="form-group">
								<label for="kepada_4"  class="col-sm-3 control-label">Kepada 4</label>
								<div class="col-sm-8">
									<input type="text" name="kepada_4" class="form-control input-sm " placeholder="4. Kepada 4" />
								</div>
							</div>

							<div class="form-group">
								<label for="kepada_5"  class="col-sm-3 control-label">Kepada 5</label>
								<div class="col-sm-8">
									<input type="text" name="kepada_5" class="form-control input-sm " placeholder="5. Kepada 5" />
								</div>
							</div>

							<div class="form-group">
								<label for="kepada_6"  class="col-sm-3 control-label">Kepada 6</label>
								<div class="col-sm-8">
									<input type="text" name="kepada_6" class="form-control input-sm " placeholder="6. Kepada 6" />
								</div>
							</div>

							<div class="form-group">
								<label for="kepada_7"  class="col-sm-3 control-label">Kepada 7</label>
								<div class="col-sm-8">
									<input type="text" name="kepada_7" class="form-control input-sm " placeholder="7. Kepada 7" />
								</div>
							</div>

							<div class="form-group">
								<label for="kepada_8"  class="col-sm-3 control-label">Kepada 8</label>
								<div class="col-sm-8">
									<input type="text" name="kepada_8" class="form-control input-sm " placeholder="8. Kepada 8" />
								</div>
							</div>

							<div class="form-group">
								<label for="kepada_9"  class="col-sm-3 control-label">Kepada 9</label>
								<div class="col-sm-8">
									<input type="text" name="kepada_9" class="form-control input-sm " placeholder="9. Kepada 9" />
								</div>
							</div>

							<div class="form-group">
								<label for="kepada_10"  class="col-sm-3 control-label">Kepada 10</label>
								<div class="col-sm-8">
									<input type="text" name="kepada_10" class="form-control input-sm " placeholder="10. Kepada 10" />
								</div>
							</div>

							<div class="form-group">
								<label for="keterangan"  class="col-sm-3 control-label">Paragraf Pertama</label>
								<div class="col-sm-8">
									<textarea  id="keterangan" class="form-control input-sm required" placeholder="Sehubungan akan diadakannya peringatan hari Kesaktian Pancasila, maka kami ingin mengundang saudara dalam rangka Rapat Koordinasi yang akan dilaksanakan pada:" name="keterangan"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="tanggal"  class="col-sm-3 control-label">Tanggal</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_mulai" class="form-control input-sm required" name="tanggal" type="text"/>
									</div>
								</div>
								
							</div>

							<div class="form-group">
								<label for="pukul"  class="col-sm-3 control-label">Pukul</label>
								<div class="col-sm-8">
									<input type="text" name="pukul" class="form-control input-sm required" placeholder="00:00 WITA" />
								</div>
							</div>

							<div class="form-group">
								<label for="tempat"  class="col-sm-3 control-label">Tempat</label>
								<div class="col-sm-8">
									<input type="text" name="tempat" class="form-control input-sm required" placeholder="Gedung Serba Guna Desa Bengkel" />
								</div>
							</div>

							<div class="form-group">
								<label for="paragraf_2"  class="col-sm-3 control-label">Paragraf Kedua</label>
								<div class="col-sm-8">
									<textarea  id="paragraf_2" class="form-control input-sm required" placeholder="Kehadiran saudara dalam acara rapat koordinasi tersebut akan sangat menentukan kesuksesan acara Peringatan Hari Kesaktian Pancasila tersebut." name="paragraf_2"></textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="tembusan_1"  class="col-sm-3 control-label">Tembusan 1</label>
								<div class="col-sm-8">
									<input type="text" name="tembusan_1" class="form-control input-sm " placeholder="1. Bapak Camat Kediri" />
								</div>
							</div>

							<div class="form-group">
								<label for="tembusan_2"  class="col-sm-3 control-label">Tembusan 2</label>
								<div class="col-sm-8">
									<input type="text" name="tembusan_2" class="form-control input-sm " placeholder="2. KPMD Kecamatan Kediri" />
								</div>
							</div>

							<div class="form-group">
								<label for="tembusan_3"  class="col-sm-3 control-label">Tembusan 3</label>
								<div class="col-sm-8">
									<input type="text" name="tembusan_3" class="form-control input-sm " placeholder="3. Kawil Se-Desa Bengkel" />
								</div>
							</div>

							<div class="form-group">
								<label for="tembusan_4"  class="col-sm-3 control-label">Tembusan 4</label>
								<div class="col-sm-8">
									<input type="text" name="tembusan_4" class="form-control input-sm " placeholder="4. -" />
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
