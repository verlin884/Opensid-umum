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
						<form id="main" name="main" method="POST" class="form-horizontal">
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
								<label for="jenis_usaha"  class="col-sm-3 control-label">Jenis Usaha</label>
								<div class="col-sm-3">
									<select name="jenis_usaha" class="form-control input-sm required">
										<option value="Pertanian">Pertanian</option>
										<option value="Usaha Mikro">Usaha Mikro</option>
										<option value="Perikanan">Perikanan</option>
										<option value="Pelayanan Umum">Pelayanan Umum</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="jenis_kegiatan"  class="col-sm-3 control-label">Jenis Kegiatan</label>
								<div class="col-sm-8">
									<input type="text" id="jenis_kegiatan" class="form-control input-sm required" placeholder="Jenis Kegiatan (Traktor Bajak Sawah)" name="jenis_kegiatan">
								</div>
							</div>
							<div class="form-group">
								<label for="jenis_alat"  class="col-sm-3 control-label">Jenis Alat</label>
								<div class="col-sm-8">
									<input type="text" id="jenis_alat" class="form-control input-sm required" placeholder="Traktor" name="jenis_alat">
								</div>
							</div>
							<div class="form-group">
								<label for="jumlah_alat"  class="col-sm-3 control-label">Jumlah Alat</label>
								<div class="col-sm-8">
									<input type="text" id="jumlah_alat" class="form-control input-sm required" placeholder="1" name="jumlah_alat">
								</div>
							</div>
							<div class="form-group">
								<label for="fungsi_alat"  class="col-sm-3 control-label">Fungsi Alat</label>
								<div class="col-sm-8">
									<input type="text" id="fungsi_alat" class="form-control input-sm required" placeholder="Bajak Sawah" name="fungsi_alat">
								</div>
							</div>
							<div class="form-group">
								<label for="jenis_bbm"  class="col-sm-3 control-label">Kebutuhan Jenis BBM</label>
								<div class="col-sm-3">
									<select name="jenis_bbm" class="form-control input-sm required">
										<option value="Solar">Solar</option>
										<option value="Premium">Premium</option>
										<option value="Pertalite">Pertalite</option>
										<option value="Pertamax">Pertamax</option>
										<option value="Dexlite">Dexlite</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="jam_oprasional"  class="col-sm-3 control-label">Jam atau Hari Oprasional</label>
								<div class="col-sm-8">
									<input type="text" id="jam_oprasional" class="form-control input-sm required" placeholder="8 Jam / Hari" name="jam_oprasional">
								</div>
							</div>
							<div class="form-group">
								<label for="jumlah_liter"  class="col-sm-3 control-label">Konsumsi BBM Per Minggu</label>
								<div class="col-sm-2">
									<input type="text" id="jumlah_liter" class="form-control input-sm required" placeholder="50" name="jumlah_liter"> 
								</div>
								<div class="col-sm-4">Liter per minggu</div>
							</div>
							<div class="form-group">
								<label for="konsumsi_per_bulan"  class="col-sm-3 control-label">Konsumsi BBM Per Bulan</label>
								<div class="col-sm-2">
									<input type="text" id="konsumsi_per_bulan" class="form-control input-sm required" placeholder="200" name="konsumsi_per_bulan"> 
								</div>
								<div class="col-sm-4">Liter per bulan</div>
							</div>

							<div class="form-group">
								<label for="lembaga_penyalur"  class="col-sm-3 control-label">Tempat Pengambilan</label>
								<div class="col-sm-3">
									<select name="lembaga_penyalur" class="form-control input-sm required">
										<option value="SPBU">SPBU</option>
										<option value="APMS">APMS</option>
										<option value="SPDN">SPDN</option>
										<option value="SPBN">SPBN</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="nomor_lembaga_penyalur"  class="col-sm-3 control-label">Nomor Lembaga Penyalur (SPBU/APMS/SPDN/SPBN)</label>
								<div class="col-sm-2">
									<input type="text" id="nomor_lembaga_penyalur" class="form-control input-sm required" placeholder="Misal: 54.821.02" name="nomor_lembaga_penyalur"> 
								</div>
							</div>

							<div class="form-group">
								<label for="alamat_lembaga_penyalur"  class="col-sm-3 control-label">Alamat Lembaga Penyalur (SPBU/APMS/SPDN/SPBN)</label>
								<div class="col-sm-8">
									<input type="text" id="alamat_lembaga_penyalur" class="form-control input-sm required" placeholder="Jalan Ahmad Yani No 112, Kecamatan Kediri, Kabupaten Tabanan" name="alamat_lembaga_penyalur"> 
								</div>
							</div>

							<?php include("donjo-app/views/surat/form/tgl_berlaku.php"); ?>
							<?php include("donjo-app/views/surat/form/_pamong.php"); ?>
						</form>
					</div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
			</div>
		</div>
	</section>
</div>
