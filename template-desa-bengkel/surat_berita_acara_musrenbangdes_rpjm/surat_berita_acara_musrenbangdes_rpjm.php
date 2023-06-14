<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Berita Acara Musrenbangdes RPJMDes</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Berita Acara Musrenbangdes RPJMDes</li>
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
								<label for="tahun_rpjm"  class="col-sm-3 control-label">Tahun RPJMDes</label>
								<div class="col-sm-8">
									<input type="text" name="tahun_rpjm" class="form-control input-sm required" placeholder="2019-2025" />
								</div>
							</div>

							<div class="form-group">
								<label for="hari_rpjm"  class="col-sm-3 control-label">Hari</label>
								<div class="col-sm-8">
									<input type="text" name="hari_rpjm" class="form-control input-sm required" placeholder="Nama Hari" />
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal_rpjm"  class="col-sm-3 control-label">Tanggal RPJMDes</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_mulai" class="form-control input-sm required" name="tanggal_rpjm" type="text"/>
									</div>
								</div>
								
							</div>

							<div class="form-group">
								<label for="jam_rpjm"  class="col-sm-3 control-label">Pukul</label>
								<div class="col-sm-8">
									<input type="text" name="jam_rpjm" class="form-control input-sm required" placeholder="00:00 WITA" />
								</div>
							</div>

							<div class="form-group">
								<label for="tempat"  class="col-sm-3 control-label">Tempat</label>
								<div class="col-sm-8">
									<input type="text" name="tempat" class="form-control input-sm required" placeholder="Gedung Serba Guna Desa Bengkel" />
								</div>
							</div>

							
							<div class="form-group">
								<label for="notulen_musren"  class="col-sm-3 control-label">Nama Notulen</label>
								<div class="col-sm-8">
									<input type="text" name="notulen_musren" class="form-control input-sm required" placeholder="Nama Notulen" />
								</div>
							</div>

							<div class="form-group">
								<label for="jbt_notulen"  class="col-sm-3 control-label">Jabatan Notulen</label>
								<div class="col-sm-8">
									<input type="text" name="jbt_notulen" class="form-control input-sm " placeholder="Jabatan Notulen" />
								</div>
							</div>

							<div class="form-group">
								<label for="narasumber"  class="col-sm-3 control-label">Nama Narasumber</label>
								<div class="col-sm-8">
									<input type="text" name="narasumber" class="form-control input-sm " placeholder="Nama Narasumber" />
								</div>
							</div>

							<div class="form-group">
								<label for="jbt_narasumber"  class="col-sm-3 control-label">Jabatan Narasumber</label>
								<div class="col-sm-8">
									<input type="text" name="jbt_narasumber" class="form-control input-sm " placeholder="Jabatan Narasumber" />
								</div>
							</div>

							<div class="form-group">
								<label for="ketua_bpd"  class="col-sm-3 control-label">Nama Ketua BPD</label>
								<div class="col-sm-8">
									<input type="text" name="ketua_bpd" class="form-control input-sm " placeholder="Nama Ketua BPD" />
								</div>
							</div>

							<div class="form-group">
								<label for="wakil_masya"  class="col-sm-3 control-label">Nama Wakil Masyarakat</label>
								<div class="col-sm-8">
									<input type="text" name="wakil_masya" class="form-control input-sm " placeholder="Nama Wakil Masyarakat" />
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
