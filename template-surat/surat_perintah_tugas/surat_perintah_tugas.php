<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Perintah Tugas</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Perintah Tugas</li>
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
								<label for="dasar_hukum"  class="col-sm-3 control-label">Dasar Hukum / Keterangan</label>
								<div class="col-sm-8">
									<textarea name="dasar_hukum" class="form-control input-sm required" placeholder="Dasar Hukum / Keterangan">Peraturan Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi Nomor 6 Tahun 2020 tentang Perubahan atas Peraturan Menteri Desa Pembangunan Daerah Tertinggal dan Transmigrasi Nomor 11 Tahun 2019 tentang Prioritas Penggunaan Dana Desa Tahun 2020</textarea>
								</div>
							</div>
							
							
							<div class="form-group">
								<label for="nama_1"  class="col-sm-3 control-label">Nama 1 / Jabatan 1</label>

								<div class="col-sm-4">
									<input type="text" name="nama_1" class="form-control input-sm required" placeholder="Nama" />
								</div>
								<div class="col-sm-4">
									<input type="text" name="jabatan_1" class="form-control input-sm required" placeholder="Jabatan" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_2"  class="col-sm-3 control-label">Nama 2 / Jabatan 2</label>
								
								<div class="col-sm-4">
									<input type="text" name="nama_2" class="form-control input-sm" placeholder="Nama" />
								</div>
								<div class="col-sm-4">
									<input type="text" name="jabatan_2" class="form-control input-sm" placeholder="Jabatan" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_3"  class="col-sm-3 control-label">Nama 3 / Jabatan 3</label>
								
								<div class="col-sm-4">
									<input type="text" name="nama_3" class="form-control input-sm " placeholder="Nama" />
								</div>
								<div class="col-sm-4">
									<input type="text" name="jabatan_3" class="form-control input-sm " placeholder="Jabatan" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_4"  class="col-sm-3 control-label">Nama 4 / Jabatan 4</label>
								
								<div class="col-sm-4">
									<input type="text" name="nama_4" class="form-control input-sm " placeholder="Nama" />
								</div>
								<div class="col-sm-4">
									<input type="text" name="jabatan_4" class="form-control input-sm " placeholder="Jabatan" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_5"  class="col-sm-3 control-label">Nama 5 / Jabatan 5</label>
								
								<div class="col-sm-4">
									<input type="text" name="nama_5" class="form-control input-sm " placeholder="Nama" />
								</div>
								<div class="col-sm-4">
									<input type="text" name="jabatan_5" class="form-control input-sm " placeholder="Jabatan" />
								</div>
							</div>

							

							<div class="form-group">
								<label for="perintah_tugas"  class="col-sm-3 control-label">Perintah Tugas</label>
								<div class="col-sm-8">
									<textarea  id="perintah_tugas" class="form-control input-sm required" name="perintah_tugas" placeholder="Perintah Tugas Untuk">Untuk melakukan pendataan Keluarga Miskin Calon Penerima Bantuan Langsung Tunai ( BLT)-Dana Desa,pada :</textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="tanggal"  class="col-sm-3 control-label">Tanggal</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_mulai" class="form-control input-sm required" name="tgl_mulai" type="text"/>
									</div>
								</div>
								<div class="col-sm-1 col-lg-1">	
									sampai dengan
								</div>
								<div class="col-sm-3 col-lg-2">	
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_akhir" class="form-control input-sm required" name="tgl_akhir" type="text"/>
									</div>
								</div>
								
							</div>


							<div class="form-group">
								<label for="keterangan"  class="col-sm-3 control-label">Tujuan</label>
								<div class="col-sm-8">
									<input type="text" name="keterangan" class="form-control input-sm required" placeholder="Tujuan Untuk" />
								</div>
							</div>

							<div class="form-group">
								<label for="tgl_surat"  class="col-sm-3 control-label">Tanggal Surat</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_1" class="form-control input-sm required" name="tanggal_surat" type="text"/>
									</div>
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
