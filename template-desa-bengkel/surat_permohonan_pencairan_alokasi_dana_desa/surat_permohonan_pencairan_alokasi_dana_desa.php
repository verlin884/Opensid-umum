<style>
	.error {
		color: #dd4b39;
	}
</style>
<script type="text/javascript">
	function bulanLaporan(bulan) {

		switch (bulan) {

			case "Januari":
				document.getElementById("permintaan_ke").value = "I";

				break;

			case "Februari":
				document.getElementById("permintaan_ke").value = "II";
				break;

			case "Maret":
				document.getElementById("permintaan_ke").value = "III";
				break;

			case "April":
				document.getElementById("permintaan_ke").value = "IV";
				break;

			case "Mei":
				document.getElementById("permintaan_ke").value = "V";
				break;

			case "Juni":
				document.getElementById("permintaan_ke").value = "VI";
				break;

			case "Juli":
				document.getElementById("permintaan_ke").value = "VII";
				break;

			case "Agustus":
				document.getElementById("permintaan_ke").value = "VIII";
				break;

			case "September":
				document.getElementById("permintaan_ke").value = "IX";
				break;

			case "Oktober":
				document.getElementById("permintaan_ke").value = "X";
				break;

			case "November":
				document.getElementById("permintaan_ke").value = "XI";
				break;

			case "Desember":
				document.getElementById("permintaan_ke").value = "XII";
				break;
		}
	}
</script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Keterangan</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat') ?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Permohonan Alokasi Dana Desa</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?= site_url("surat") ?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Wilayah">
							<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
						</a>
					</div>
					<div class="box-body">

						<form id="validasi" action="<?= $form_action ?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat') ?>">
							<?php if ($individu) : ?>
								<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
							<?php endif; ?>

							<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>

							<div class="form-group">
								<label for="bulan" class="col-sm-3 control-label">Laporan Bulan</label>
								<div class="col-sm-8">
									<select class="form-control required input-sm select2" id="bulan" name="bulan" style="width:100%;" onchange="bulanLaporan($(this).val())">
										<option value="">-- Pilih Bulan --</option>
										<option value="Januari">Januari</option>
										<option value="Februari">Februari</option>
										<option value="Maret">Maret</option>
										<option value="April">April</option>
										<option value="Mei">Mei</option>
										<option value="Juni">Juni</option>
										<option value="Juli">Juli</option>
										<option value="Agustus">Agustus</option>
										<option value="September">September</option>
										<option value="Oktober">Oktober</option>
										<option value="November">November</option>
										<option value="Desember">Desember</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal_laporan" class="col-sm-3 control-label">Tanggal Surat</label>
								<div class="col-sm-3 col-lg-2">
									<select class="form-control required input-sm select2" id="tanggal_laporan" name="tanggal_laporan" style="width:100%;" onchange="formAction('main')">
										<option value="">-- Pilih Tanggal --</option>
										<option value="1"> 1 </option>
										<option value="2"> 2 </option>
										<option value="3"> 3 </option>
										<option value="4"> 4 </option>
										<option value="5"> 5 </option>
										<option value="6"> 6</option>
										<option value="7"> 7</option>
										<option value="8"> 8</option>
										<option value="9"> 9</option>
										<option value="10"> 10</option>
										<option value="11"> 11</option>
										<option value="12"> 12</option>
										<option value="13"> 13 </option>
										<option value="14"> 14 </option>
										<option value="15"> 15 </option>
										<option value="16"> 16</option>
										<option value="17"> 17 </option>
										<option value="18"> 18</option>
										<option value="19"> 19</option>
										<option value="20"> 20</option>
										<option value="21"> 21</option>
										<option value="22"> 22</option>
										<option value="23"> 23</option>
										<option value="24"> 24</option>
										<option value="25"> 25</option>
										<option value="26"> 26</option>
										<option value="27"> 27</option>
										<option value="28"> 28</option>
										<option value="29"> 29</option>
										<option value="30"> 30</option>
										<option value="31"> 31</option>
									</select>
								</div>
								<div class="col-sm-3 col-lg-2">
									<select class="form-control required input-sm select2" id="bulan_laporan" name="bulan_laporan" style="width:100%;" onchange="formAction('main')">
										<option value="">-- Pilih Bulan --</option>
										<option value="Januari"> Januari</option>
										<option value="Februari"> Februari</option>
										<option value="Maret"> Maret</option>
										<option value="April"> April</option>
										<option value="Mei"> Mei</option>
										<option value="Juni"> Juni</option>
										<option value="Juli"> Juli</option>
										<option value="Agustus"> Agustus</option>
										<option value="September"> September</option>
										<option value="Oktober"> Oktober</option>
										<option value="November"> November</option>
										<option value="Desember"> Desember</option>
									</select>
								</div>

								<div class="col-sm-3 col-lg-2">
									Tahun <?php echo date("yy"); ?>
									<input type="text" hidden="true" name="permintaan_ke" id="permintaan_ke" />
								</div>
							</div>

							<div class="form-group">
								<label for="nomor_skpkd" class="col-sm-3 control-label">Nomor Surat Edaran Bakeuda Tabanan</label>
								<div class="col-sm-8">
									<input name="nomor_skpkd" class="form-control input-sm required" placeholder="900/00003/SKPKD/2020" value="900/00003/SKPKD/2020" />
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal_skpkd" class="col-sm-3 control-label">Tanggal Surat Edaran Bakeuda Tabanan</label>
								<div class="col-sm-8">
									<input name="tanggal_skpkd" class="form-control input-sm required" placeholder="15 Januari 2020" value="15 Januari 2020" />
								</div>
							</div>

							<div class="form-group">
								<label for="kode_kwitansi" class="col-sm-3 control-label">Kode Kwitansi</label>
								<div class="col-sm-8">
									<input name="kode_kwitansi" class="form-control input-sm required" placeholder="BK/LS/4.04.01.02/00.00/..." value="BK/LS/4.04.01.02/00.00/..." />
								</div>
							</div>

							<div class="form-group">
								<label for="nomor_rekening" class="col-sm-3 control-label">Kode Rekening</label>
								<div class="col-sm-8">
									<input name="nomor_rekening" class="form-control input-sm required" placeholder="5.02.02.2.04.5.4.02.05.01.0001/02/..." value="5.02.02.2.04.5.4.02.05.01.0001/02/..." />
								</div>
							</div>

							<div class="form-group">
								<label for="nilai" class="col-sm-3 control-label">Nilai Permintaan Pencairan</label>
								<div class="col-sm-8">
									<input name="nilai" class="form-control input-sm required" placeholder="57.432.000,00" value="57.432.000,00" />
								</div>
							</div>
							<div class="form-group">
								<label for="terbilang" class="col-sm-3 control-label">Terbilang</label>
								<div class="col-sm-8">
									<textarea id="terbilang" class="form-control input-sm required" placeholder="Lima Puluh Tujuh Juta Empat Ratus Tiga Puluh Dua Ribu  Rupiah" name="terbilang">Lima Puluh Tujuh Juta Empat Ratus Tiga Puluh Dua Ribu Rupiah</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal_penetapan_perdes" class="col-sm-3 control-label">Tanggal Penetapan Perdes</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_1" class="form-control input-sm required" name="tanggal_penetapan_perdes" type="text" value="31-12-2019" />
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="nomor _penetapan_perdes" class="col-sm-3 control-label">Nomor Penetapan Perdes</label>
								<div class="col-sm-8">
									<input name="nomor_penetapan_perdes" class="form-control input-sm required" placeholder="08 TAHUN 2022" value="08 TAHUN 2022" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_pptk" class="col-sm-3 control-label">Nama Pejabat Pelaksana Teknis Kegiatan</label>
								<div class="col-sm-8">
									<input name="nama_pptk" class="form-control input-sm required" placeholder="NI LUH KETUT RAI PUSPITA DEWI,SE.M.Si" value="NI LUH KETUT RAI PUSPITA DEWI,SE.M.Si" />
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan_pptk" class="col-sm-3 control-label">Jabatan Pejabat Pelaksana Teknis Kegiatan</label>
								<div class="col-sm-8">
									<input name="jabatan_pptk" class="form-control input-sm required" placeholder="Penata Tk.I" value="Penata Tk.I" />
								</div>
							</div>

							<div class="form-group">
								<label for="nip_pptk" class="col-sm-3 control-label">NIP Pejabat Pelaksana Teknis Kegiatan</label>
								<div class="col-sm-8">
									<input name="nip_pptk" class="form-control input-sm required" placeholder="19840816 200212 2 004" value="19840816 200212 2 004" />
								</div>
							</div>


							<div class="form-group">
								<label for="nama_pengguna_anggaran" class="col-sm-3 control-label">Nama Pejabat Pengguna Anggaran</label>
								<div class="col-sm-8">
									<input name="nama_pengguna_anggaran" class="form-control input-sm required" placeholder="DEWA AYU SRI BUDIARTI, SE" value="DEWA AYU SRI BUDIARTI, SE" />
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan_pengguna_anggaran" class="col-sm-3 control-label">Jabatan Pengguna Anggaran</label>
								<div class="col-sm-8">
									<input name="jabatan_pengguna_anggaran" class="form-control input-sm required" placeholder="PEMBINA UTAMA MUDA" value="PEMBINA UTAMA MUDA" />
								</div>
							</div>

							<div class="form-group">
								<label for="nip_pengguna_anggaran" class="col-sm-3 control-label">NIP Pejabat Pengguna Anggaran</label>
								<div class="col-sm-8">
									<input name="nip_pengguna_anggaran" class="form-control input-sm required" placeholder="19640422 198903 2 012" value="19640422 198903 2 012" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_bendahara_bakeuda" class="col-sm-3 control-label">Nama Bendahara Bakeuda</label>
								<div class="col-sm-8">
									<input name="nama_bendahara_bakeuda" class="form-control input-sm required" placeholder="NI KETUT SARIATI" value="NI KETUT SARIATI" />
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan_bendahara_bakeuda" class="col-sm-3 control-label">Jabatan Bendahara Bakeuda</label>
								<div class="col-sm-8">
									<input name="jabatan_bendahara_bakeuda" class="form-control input-sm required" placeholder="PENATA" value="PENATA" />
								</div>
							</div>

							<div class="form-group">
								<label for="nip_bendahara_bakeuda" class="col-sm-3 control-label">NIP Bendahara Bakeuda</label>
								<div class="col-sm-8">
									<input name="nip_bendahara_bakeuda" class="form-control input-sm required" placeholder="19700306 199303 2 008" value="19700306 199303 2 008" />
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