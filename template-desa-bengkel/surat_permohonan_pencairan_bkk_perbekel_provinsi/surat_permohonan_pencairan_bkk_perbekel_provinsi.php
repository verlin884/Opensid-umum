<style>
	.error {
		color: #dd4b39;
	}
</style>
<script type="text/javascript">
	function anggaranSatu() {
		$harga = document.getElementById("harga_satuan_1").value;
		$volume = document.getElementById("volume_1").value;
		if ($harga && $volume) {
			$total = $harga * $volume;
			document.getElementById("total_11").value = $total;

			$total = formatRupiahNew($total);
			document.getElementById("total_1").value = $total;
		} else {
			document.getElementById("total_1").value = '';
			document.getElementById("total_11").value = '';
		}
		grandTotal()
	}

	function anggaranDua() {
		$harga = document.getElementById("harga_satuan_2").value;
		$volume = document.getElementById("volume_2").value;
		if ($harga && $volume) {
			$total = $harga * $volume;
			document.getElementById("total_21").value = $total;

			$total = formatRupiahNew($total);
			document.getElementById("total_2").value = $total;
		} else {
			document.getElementById("total_21").value = '';
			document.getElementById("total_2").value = '';
		}
		grandTotal()
	}

	function anggaranTiga() {
		$harga = document.getElementById("harga_satuan_3").value;
		$volume = document.getElementById("volume_3").value;
		if ($harga && $volume) {
			$total = $harga * $volume;
			document.getElementById("total_31").value = $total;

			$total = formatRupiahNew($total);
			document.getElementById("total_3").value = $total;
		} else {
			document.getElementById("total_31").value = '';
			document.getElementById("total_3").value = '';
		}
		grandTotal()
	}

	function anggaranEmpat() {
		$harga = document.getElementById("harga_satuan_4").value;
		$volume = document.getElementById("volume_4").value;
		if ($harga && $volume) {
			$total = $harga * $volume;
			document.getElementById("total_41").value = $total;

			$total = formatRupiahNew($total);
			document.getElementById("total_4").value = $total;
		} else {
			document.getElementById("total_4").value = '';
			document.getElementById("total_41").value = '';
		}
		grandTotal()
	}

	function anggaranLima() {
		$harga = document.getElementById("harga_satuan_5").value;
		$volume = document.getElementById("volume_5").value;
		if ($harga && $volume) {
			$total = $harga * $volume;
			document.getElementById("total_51").value = $total;

			$total = formatRupiahNew($total);
			document.getElementById("total_5").value = $total;
		} else {
			document.getElementById("total_5").value = '';
			document.getElementById("total_51").value = '';
		}
		grandTotal()
	}

	function grandTotal() {
		$total1 = document.getElementById("total_11").value;
		$total2 = document.getElementById("total_21").value;
		$total3 = document.getElementById("total_31").value;
		$total4 = document.getElementById("total_41").value;
		$total5 = document.getElementById("total_51").value;
		$grandtotal = $total1 + $total2 + $total3 + $total4 + $total5;
		$grandtotal = formatRupiahNew($grandtotal);
		document.getElementById("grandtotal").value = $grandtotal;
	}

	function formatRupiahNew(angka, prefix, nol_sen = true) {
		prefix = 'Rp';
		var number_string = angka.toString(),
			split = number_string.split(','),
			sisa = split[0].length % 3,
			rupiah = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + (nol_sen ? '' : ',' + split[1]) : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
</script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Pencairan BKK Tambahan Penghasilan Perbekel</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat') ?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Pencairan BKK Tambahan Penghasilan Perbekel</li>
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


							<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>
							<div class="form-group">
								<label for="keperluan" class="col-sm-3 control-label">Tanggal Surat</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_mulai" class="form-control input-sm required" name="tanggal_surat" type="text" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="lampiran" class="col-sm-3 control-label">Lampiran</label>
								<div class="col-sm-8">
									<input type="text" name="lampiran" class="form-control input-sm required" placeholder="1 Gabung" />
								</div>
							</div>
							<div class="form-group">
								<label for="triwulan" class="col-sm-3 control-label">Triwulan</label>
								<div class="col-sm-8">
									<input type="text" name="triwulan" class="form-control input-sm required" placeholder="Triwulan .... Tahun ..." value="Triwulan .... Tahun ..." />
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan" class="col-sm-3 control-label">Prihal</label>
								<div class="col-sm-8">
									<textarea name="keperluan" class="form-control input-sm required" placeholder="Mohon Pencairan BKK">Mohon Pencairan BKK Tambahan Penghasilan Kepada Perbekel </textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
								<div class="col-sm-8">
									<textarea id="keterangan" class="form-control input-sm required" placeholder="Mohon Pencairan BKK Tambahan Penghasilan Kepada Perbekel " name="keterangan">Tambahan Penghasilan Kepada Perbekel </textarea>
								</div>
							</div>
							<!-- <hr>

							<div class="anggaran_biaya_container">
								<div class="form-group">
									<label for="keterangan_satu" class="col-sm-3 control-label">Rencana Anggaran Biaya I</label>
									<div class="col-sm-8">
										<input type="text" name="keterangan_satu" class="col-md-4 form-control input-sm " placeholder="Uraian" />
									</div>
								</div>
								<div class="form-group">
									<label for="tempat_lahir_pelapor" class="col-sm-3 control-label"></label>
									<div class="col-sm-3 col-lg-4">
										<input type="number" id="harga_satuan_1" name="harga_satuan_1" class="col-sm-3 col-lg-4 form-control input-sm " onchange="anggaranSatu()" placeholder="Harga Satuan" />
									</div>
									<div class="col-sm-3 col-lg-2">
										<input type="number" id="volume_1" name="volume_1" class="col-sm-3 col-lg-2 form-control input-sm " onchange="anggaranSatu()" placeholder="Volume" />
									</div>
									<div class="col-sm-2">
										<input type="text" name="total_1" id="total_1" class="col-sm-2 form-control input-sm " placeholder="Total" readonly />
										<input type="text" name="total_11" id="total_11" class="col-sm-2 form-control input-sm hidden" placeholder="Total" readonly />
									</div>
								</div>
							</div>
							<div class="anggaran_biaya_container">
								<div class="form-group">
									<label for="keterangan_2" class="col-sm-3 control-label">Rencana Anggaran Biaya II</label>
									<div class="col-sm-8">
										<input type="text" name="keterangan_2" class="col-md-4 form-control input-sm " placeholder="Uraian" />
									</div>
								</div>
								<div class="form-group">
									<label for="tempat_lahir_pelapor" class="col-sm-3 control-label"></label>
									<div class="col-sm-3 col-lg-4">
										<input type="number" id="harga_satuan_2" name="harga_satuan_2" onchange="anggaranDua()" class="col-sm-3 col-lg-4 form-control input-sm " placeholder="Harga Satuan" />
									</div>
									<div class="col-sm-3 col-lg-2">
										<input type="number" id="volume_2" name="volume_2" onchange="anggaranDua()" class="col-sm-3 col-lg-2 form-control input-sm " placeholder="Volume" />
									</div>
									<div class="col-sm-2">
										<input type="text" name="total_2" id="total_2" class="col-sm-2 form-control input-sm " placeholder="Total" readonly />
										<input type="text" name="total_21" id="total_21" class="col-sm-2 form-control input-sm hidden" placeholder="Total" readonly />
									</div>
								</div>
							</div>

							<div class="anggaran_biaya_container">
								<div class="form-group">
									<label for="keterangan_3" class="col-sm-3 control-label">Rencana Anggaran Biaya III</label>
									<div class="col-sm-8">
										<input type="text" name="keterangan_3" class="col-md-4 form-control input-sm " placeholder="Uraian" />
									</div>
								</div>
								<div class="form-group">
									<label for="tempat_lahir_pelapor" class="col-sm-3 control-label"></label>
									<div class="col-sm-3 col-lg-4">
										<input type="number" id="harga_satuan_3" name="harga_satuan_3" onchange="anggaranTiga()" class="col-sm-3 col-lg-4 form-control input-sm " placeholder="Harga Satuan" />
									</div>
									<div class="col-sm-3 col-lg-2">
										<input type="number" id="volume_3" name="volume_3" onchange="anggaranTiga()" class="col-sm-3 col-lg-2 form-control input-sm " placeholder="Volume" />
									</div>
									<div class="col-sm-2">
										<input type="text" name="total_3" id="total_3" class="col-sm-2 form-control input-sm " placeholder="Total" readonly />
										<input type="text" name="total_31" id="total_31" class="col-sm-2 form-control input-sm hidden" placeholder="Total" readonly />
									</div>
								</div>
							</div>

							<div class="anggaran_biaya_container">
								<div class="form-group">
									<label for="keterangan_4" class="col-sm-3 control-label">Rencana Anggaran Biaya IV</label>
									<div class="col-sm-8">
										<input type="text" name="keterangan_4" class="col-md-4 form-control input-sm " placeholder="Uraian" />
									</div>
								</div>
								<div class="form-group">
									<label for="tempat_lahir_pelapor" class="col-sm-3 control-label"></label>
									<div class="col-sm-3 col-lg-4">
										<input type="number" id="harga_satuan_4" name="harga_satuan_4" onchange="anggaranEmpat()" class="col-sm-3 col-lg-4 form-control input-sm " placeholder="Harga Satuan" />
									</div>
									<div class="col-sm-3 col-lg-2">
										<input type="number" id="volume_4" name="volume_4" onchange="anggaranEmpat()" class="col-sm-3 col-lg-2 form-control input-sm " placeholder="Volume" />
									</div>
									<div class="col-sm-2">
										<input type="text" name="total_4" id="total_4" class="col-sm-2 form-control input-sm " placeholder="Total" readonly />
										<input type="text" name="total_41" id="total_41" class="col-sm-2 form-control input-sm hidden" placeholder="Total" readonly />
									</div>
								</div>
							</div>

							<div class="anggaran_biaya_container">
								<div class="form-group">
									<label for="keterangan_5" class="col-sm-3 control-label">Rencana Anggaran Biaya V</label>
									<div class="col-sm-8">
										<input type="text" name="keterangan_5" class="col-md-4 form-control input-sm " placeholder="Uraian" />
									</div>
								</div>
								<div class="form-group">
									<label for="tempat_lahir_pelapor" class="col-sm-3 control-label"></label>
									<div class="col-sm-3 col-lg-4">
										<input type="number" id="harga_satuan_5" name="harga_satuan_5" onchange="anggaranLima()" class="col-sm-3 col-lg-4 form-control input-sm " placeholder="Harga Satuan" />
									</div>
									<div class="col-sm-3 col-lg-2">
										<input type="number" id="volume_5" name="volume_5" onchange="anggaranLima()" class="col-sm-3 col-lg-2 form-control input-sm " placeholder="Volume" />
									</div>
									<div class="col-sm-2">
										<input type="text" name="total_5" id="total_5" class="col-sm-2 form-control input-sm " placeholder="Total" readonly />
										<input type="text" name="total_51" id="total_51" class="col-sm-2 form-control input-sm hidden" placeholder="Total" readonly />
									</div>
								</div>
							</div>
							<input type="text" name="grandtotal" id="grandtotal" class="col-sm-2 form-control input-sm hidden" placeholder="Total" readonly />
							<hr> -->

							<div class="form-group">
								<label for="nama_sekdes" class="col-sm-3 control-label">Nama Sekdes</label>
								<div class="col-sm-3">
									<input id="nama_sekdes" class="form-control input-sm" name="nama_sekdes" type="text" placeholder="Nama Sekdes" value="I Wayan Sulawa" />
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