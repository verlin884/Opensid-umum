<style>
	.error {
		color: #dd4b39;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Keterangan</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Keterangan</li>
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
								<label for="keperluan"  class="col-sm-3 control-label">Prihal</label>
								<div class="col-sm-8">
									<textarea name="keperluan" class="form-control input-sm required" placeholder="Prihal">Permohonan Transfer</textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="keterangan"  class="col-sm-3 control-label">Keterangan</label>
								<div class="col-sm-8">
									<textarea  id="keterangan" class="form-control input-sm required" placeholder="Keterangan Pemotongan" name="keterangan">Mentransfer Iuran JKN-KIS 1% Bagi Kepala Desa dan Perangkat Desa ke rekening BPJS</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="norek_penerima"  class="col-sm-3 control-label">Nomor Rekening Desa</label>
								<div class="col-sm-3">
									<input id="norek_penerima" class="form-control input-sm" name="norek_desa" type="text" placeholder="0240106000012" value="0240106000012" />
								</div>
							</div>


							<div class="form-group">
								<label for="jumlah_potong"  class="col-sm-3 control-label">Jumlah Pemotongan</label>
								<div class="col-sm-3">
									<input id="jumlah_potong" class="form-control input-sm" name="jumlah_potong" type="text" placeholder="257500" value="257500" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_bendahara"  class="col-sm-3 control-label">Nama Bendahara</label>
								<div class="col-sm-3">
									<input id="nama_bendahara" class="form-control input-sm" name="nama_bendahara" type="text" placeholder="Nama Bendahara" value="I Made Wawan Arya Muliyawan, SE." />
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
