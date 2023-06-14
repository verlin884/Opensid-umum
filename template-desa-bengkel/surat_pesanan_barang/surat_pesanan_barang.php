<style>
	.error {
		color: #dd4b39;
	}
</style>


<script type="text/javascript">

	function hitungTotalPerItem(indx){
		const formatter = new Intl.NumberFormat('id-ID',{ style: 'currency', currency: 'IDR' });
		var volume = document.getElementById("vol_"+indx).value;
		var harga = document.getElementById("harga_"+indx).value;
		var totalHarga = volume * harga;
		var gTotal=0;

		document.getElementById("total_"+indx).value=totalHarga;
		document.getElementById("dtotal_"+indx).value=formatter.format(totalHarga);

		for (i = 1; i <= 15; i++) {
			totalItem= document.getElementById("total_"+i).value;
			
			gTotal=gTotal+ parseInt(totalItem);
		}

		document.getElementById("gTotal").innerHTML=formatter.format(gTotal);
		document.getElementById("hgTotal").value=gTotal;

	}

	function metodeBayar(metode_bayar){

		if(metode_bayar=="Kas"){
			document.getElementById("nama_penerima").disabled=true;
			document.getElementById("nama_bank_penerima").disabled=true;
			document.getElementById("norek_penerima").disabled=true;
		}else{
			document.getElementById("nama_penerima").disabled=false;
			document.getElementById("nama_bank_penerima").disabled=false;
			document.getElementById("norek_penerima").disabled=false;
		}
	}
</script>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Pesanan / Order</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Pesanan / Order</li>
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
						<form action="" id="main" name="main" method="POST" class="form-horizontal">
							<div class="form-group">
								<label for="nik"  class="col-sm-3 control-label">NIK / Nama Pelaksana Kegiatan</label>
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
								<label for="berlaku_dari"  class="col-sm-3 control-label">Tanggal Pemesanan</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_mulai" class="form-control input-sm required" name="berlaku_dari" type="text"  />
									</div>
								</div>
								
							</div>

							<div class="form-group">
								<label for="berlaku_sampai"  class="col-sm-3 control-label">Tanggal Pengiriman</label>
								
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_akhir" class="form-control input-sm required" name="berlaku_sampai" type="text"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_1"  class="col-sm-3 control-label">Barang Pesanan</label>
								
								<div class="col-sm-3">
									<input id="nama_barang_1" class="form-control input-sm required" name="nama_barang_1" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_1" class="form-control input-sm required" name="vol_1" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('1');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_1" class="form-control input-sm required" name="satuan_1" type="text" placeholder="Satuan" />
								</div>
								<div class="col-sm-1">
									<input id="harga_1" class="form-control input-sm required" name="harga_1" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('1');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_1"  name="total_1" type="text" placeholder="Total" value="0" hidden="true" />
									<input id="dtotal_1" class="form-control input-sm" style="text-align: right;" name="dtotal_1" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_2"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_2" class="form-control input-sm" name="nama_barang_2" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_2" class="form-control input-sm" name="vol_2" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('2');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_2" class="form-control input-sm" name="satuan_2" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_2" class="form-control input-sm" name="harga_2" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('2');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_2" hidden="true" name="total_2" type="text" placeholder="Total" value="0" />
									<input id="dtotal_2" class="form-control input-sm" style="text-align: right;" name="dtotal_2" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_3"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_3" class="form-control input-sm" name="nama_barang_3" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_3" class="form-control input-sm" name="vol_3" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('3');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_3" class="form-control input-sm" name="satuan_3" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_3" class="form-control input-sm" name="harga_3" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('3');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_3" hidden="true" name="total_3" type="text" placeholder="Total" value="0" />
									<input id="dtotal_3" class="form-control input-sm" style="text-align: right;" name="dtotal_3" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_4"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_4" class="form-control input-sm" name="nama_barang_4" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_4" class="form-control input-sm" name="vol_4" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('4');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_4" class="form-control input-sm" name="satuan_4" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_4" class="form-control input-sm" name="harga_4" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('4');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_4" hidden="true" name="total_4" type="text" placeholder="Total" value="0" />
									<input id="dtotal_4" class="form-control input-sm" style="text-align: right;" name="dtotal_4" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_5"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_5" class="form-control input-sm" name="nama_barang_5" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_5" class="form-control input-sm" name="vol_5" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('5');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_5" class="form-control input-sm" name="satuan_5" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_5" class="form-control input-sm" name="harga_5" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('5');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_5" hidden="true" name="total_5" type="text" placeholder="Total" value="0" />
									<input id="dtotal_5" class="form-control input-sm" style="text-align: right;" name="dtotal_5" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_6"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_6" class="form-control input-sm" name="nama_barang_6" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_6" class="form-control input-sm" name="vol_6" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('6');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_6" class="form-control input-sm" name="satuan_6" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_6" class="form-control input-sm" name="harga_6" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('6');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_6" hidden="true" name="total_6" type="text" placeholder="Total" value="0" />
									<input id="dtotal_6" class="form-control input-sm" style="text-align: right;" name="dtotal_6" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_7"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_7" class="form-control input-sm" name="nama_barang_7" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_7" class="form-control input-sm" name="vol_7" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('7');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_7" class="form-control input-sm" name="satuan_7" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_7" class="form-control input-sm" name="harga_7" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('7');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_7" hidden="true" name="total_7" type="text" placeholder="Total" value="0" />
									<input id="dtotal_7" class="form-control input-sm" style="text-align: right;" name="dtotal_7" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_8"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_8" class="form-control input-sm" name="nama_barang_8" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_8" class="form-control input-sm" name="vol_8" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('8');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_8" class="form-control input-sm" name="satuan_8" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_8" class="form-control input-sm" name="harga_8" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('8');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_8" hidden="true" name="total_8" type="text" placeholder="Total" value="0" />
									<input id="dtotal_8" class="form-control input-sm" style="text-align: right;" name="dtotal_8" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_9"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_9" class="form-control input-sm" name="nama_barang_9" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_9" class="form-control input-sm" name="vol_9" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('9');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_9" class="form-control input-sm" name="satuan_9" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_9" class="form-control input-sm" name="harga_9" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('9');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_9" hidden="true" name="total_9" type="text" placeholder="Total" value="0" />
									<input id="dtotal_9" class="form-control input-sm" style="text-align: right;" name="dtotal_9" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_10"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_10" class="form-control input-sm" name="nama_barang_10" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_10" class="form-control input-sm" name="vol_10" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('10');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_10" class="form-control input-sm" name="satuan_10" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_10" class="form-control input-sm" name="harga_10" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('10');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_10"  name="total_10" type="text" placeholder="Total" value="0" hidden="true" />
									<input id="dtotal_10" class="form-control input-sm" style="text-align: right;" name="dtotal_10" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_11"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_11" class="form-control input-sm" name="nama_barang_11" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_11" class="form-control input-sm" name="vol_11" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('11');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_11" class="form-control input-sm" name="satuan_11" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_11" class="form-control input-sm" name="harga_11" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('11');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_11"  name="total_11" type="text" placeholder="Total" value="0" hidden="true" />
									<input id="dtotal_11" class="form-control input-sm" style="text-align: right;" name="dtotal_11" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_12"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_12" class="form-control input-sm" name="nama_barang_12" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_12" class="form-control input-sm" name="vol_12" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('12');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_12" class="form-control input-sm" name="satuan_12" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_12" class="form-control input-sm" name="harga_12" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('12');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_12"  name="total_12" type="text" placeholder="Total" value="0" hidden="true" />
									<input id="dtotal_12" class="form-control input-sm" style="text-align: right;" name="dtotal_12" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_13"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_13" class="form-control input-sm" name="nama_barang_13" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_13" class="form-control input-sm" name="vol_13" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('13');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_13" class="form-control input-sm" name="satuan_13" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_13" class="form-control input-sm" name="harga_13" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('13');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_13"  name="total_13" type="text" placeholder="Total" value="0" hidden="true" />
									<input id="dtotal_13" class="form-control input-sm" style="text-align: right;" name="dtotal_13" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_14"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_14" class="form-control input-sm" name="nama_barang_14" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_14" class="form-control input-sm" name="vol_14" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('14');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_14" class="form-control input-sm" name="satuan_14" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_14" class="form-control input-sm" name="harga_14" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('14');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_14"  name="total_14" type="text" placeholder="Total" value="0" hidden="true" />
									<input id="dtotal_14" class="form-control input-sm" style="text-align: right;" name="dtotal_14" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>

							<div class="form-group">
								<label for="nama_barang_15"  class="col-sm-3 control-label"></label>
								<div class="col-sm-3">
									<input id="nama_barang_15" class="form-control input-sm" name="nama_barang_15" type="text" placeholder="Nama Barang" />
								</div>
								<div class="col-sm-1">
									<input id="vol_15" class="form-control input-sm" name="vol_15" type="text" placeholder="Volume" onkeyup="hitungTotalPerItem('15');" value="" />
								</div>
								<div class="col-sm-1">
									<input id="satuan_15" class="form-control input-sm" name="satuan_15" type="text" placeholder="Satuan"  />
								</div>
								<div class="col-sm-1">
									<input id="harga_15" class="form-control input-sm" style="text-align: right;" name="harga_15" type="text" placeholder="Harga" onkeyup="hitungTotalPerItem('15');" value="" />
								</div>
								<div class="col-sm-2">
									<input id="total_15"  name="total_15" type="text" placeholder="Total" value="0" hidden="true" />
									<input id="dtotal_15" class="form-control input-sm" style="text-align: right;" name="dtotal_15" type="text" placeholder="Total" value="0" disabled="true" />
								</div>
							</div>


							<div class="form-group">
								<label class="col-sm-3 control-label"></label>
								<label class="col-sm-8 control-label" style="text-align: right;font-size: 14px;" id="gTotal">Rp. 0</label>
								<input id="hgTotal"  name="gTotal" type="text"  value="0" hidden="true" />
								
							</div>

							<div class="form-group">
								<label for="keterangan"  class="col-sm-3 control-label">Dasar Pesanan (Kode Kegiatan)</label>
								<div class="col-sm-8">
									<textarea  id="keterangan" class="form-control input-sm required" placeholder="Dasar Pesanan" name="keterangan"></textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="metode_bayar"  class="col-sm-3 control-label">Cara Bayar</label>
								<div class="col-sm-3">
									<select class="form-control required input-sm select2" id="metode_bayar" name="metode_bayar" onchange="metodeBayar($(this).val())" >
										<option value="Transfer" selected="true">Transfer</option>
										<option value="Kas">Kas</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								
								<label for="nama_penerima"  class="col-sm-3 control-label">Nama Penerima</label>
								<div class="col-sm-3">
									<input id="nama_penerima" class="form-control input-sm" name="nama_penerima" type="text" placeholder="Nama Penerima" />
								</div>
							</div>
							<div class="form-group">
								<label for="nama_bank_penerima"  class="col-sm-3 control-label">Nama Bank Penerima</label>
								<div class="col-sm-3">
									<input id="nama_bank_penerima" class="form-control input-sm" name="nama_bank_penerima" type="text" placeholder="Nama Bank Penerima" />
								</div>
							</div>
							<div class="form-group">
								<label for="norek_penerima"  class="col-sm-3 control-label">Nomor Rekening Penerima</label>
								<div class="col-sm-3">
									<input id="norek_penerima" class="form-control input-sm" name="norek_penerima" type="text" placeholder="Rekening Penerima" />
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
