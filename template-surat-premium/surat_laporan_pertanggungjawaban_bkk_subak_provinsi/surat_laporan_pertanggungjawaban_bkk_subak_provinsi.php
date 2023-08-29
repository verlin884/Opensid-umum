<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Laporan Pertanggungjawaban BKK Provinsi untuk Kepala Desa</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Laporan Pertanggungjawaban BKK Provinsi untuk Kepala Desa</li>
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
								<label for="alamat_perbekel"  class="col-sm-3 control-label">Alamat Perbekel</label>
								<div class="col-sm-8">
									<input name="alamat_perbekel" class="form-control input-sm required" placeholder="Br. Bengkel Gede" value="" />
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
									<textarea name="keperluan" class="form-control input-sm required" placeholder="Laporan Pertanggungjawaban Belanja Bantuan Keuangan Khusus (BKK) kepada Kabupaten / Kota">Laporan Pertanggungjawaban Belanja Bantuan Keuangan Khusus (BKK) Kepada Desa
								   </textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="keterangan"  class="col-sm-3 control-label">Keterangan</label>
								<div class="col-sm-8">
									<textarea  id="keterangan" class="form-control input-sm required" placeholder="Pertanggungjawaban BKK Subak" name="keterangan">Laporan Pertanggungjawaban Belanja Bantuan Keuangan Khusus (BKK) Kepada Desa</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="nilai"  class="col-sm-3 control-label">Nilai Anggaran</label>
								<div class="col-sm-8">
									<input name="nilai" class="form-control input-sm required" placeholder="50.000.000,00" value="50.000.000,00" />
								</div>
							</div>

							<div class="form-group">
								<label for="nilai"  class="col-sm-3 control-label">Terbilang</label>
								<div class="col-sm-8">
									<input name="terbilang" class="form-control input-sm required" placeholder="Limah Puluh Juta Rupiah" value="Lima Puluh Juta Rupiah" />
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
