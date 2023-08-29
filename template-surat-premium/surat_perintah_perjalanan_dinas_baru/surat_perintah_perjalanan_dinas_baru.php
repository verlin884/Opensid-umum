<script type="text/javascript">
	
	function jumlahPengikut(jmlPengikut){

		if(jmlPengikut==1){
			
			document.getElementById("anggota_i").disabled=false;
			document.getElementById("anggota_ii").disabled=true;
			document.getElementById("anggota_iii").disabled=true;
			document.getElementById("anggota_iv").disabled=true;
			document.getElementById("anggota_v").disabled=true;
			document.getElementById("anggota_vi").disabled=true;

		}else if(jmlPengikut==2){
			document.getElementById("anggota_i").disabled=false;
			document.getElementById("anggota_ii").disabled=false;
			document.getElementById("anggota_iii").disabled=true;
			document.getElementById("anggota_iv").disabled=true;
			document.getElementById("anggota_v").disabled=true;
			document.getElementById("anggota_vi").disabled=true;

		}else if(jmlPengikut==3){
			document.getElementById("anggota_i").disabled=false;
			document.getElementById("anggota_ii").disabled=false;
			document.getElementById("anggota_iii").disabled=false;
			document.getElementById("anggota_iv").disabled=true;
			document.getElementById("anggota_v").disabled=true;
			document.getElementById("anggota_vi").disabled=true;

		}else if(jmlPengikut==4){
			document.getElementById("anggota_i").disabled=false;
			document.getElementById("anggota_ii").disabled=false;
			document.getElementById("anggota_iii").disabled=false;
			document.getElementById("anggota_iv").disabled=false;
			document.getElementById("anggota_v").disabled=true;
			document.getElementById("anggota_vi").disabled=true;

		}else if(jmlPengikut==5){
			document.getElementById("anggota_i").disabled=false;
			document.getElementById("anggota_ii").disabled=false;
			document.getElementById("anggota_iii").disabled=false;
			document.getElementById("anggota_iv").disabled=false;
			document.getElementById("anggota_v").disabled=false;
			document.getElementById("anggota_vi").disabled=true;

		}else if(jmlPengikut==6){
			document.getElementById("anggota_i").disabled=false;
			document.getElementById("anggota_ii").disabled=false;
			document.getElementById("anggota_iii").disabled=false;
			document.getElementById("anggota_iv").disabled=false;
			document.getElementById("anggota_v").disabled=false;
			document.getElementById("anggota_vi").disabled=false;

		}else{

			document.getElementById("anggota_i").disabled=true;
			document.getElementById("anggota_ii").disabled=true;
			document.getElementById("anggota_iii").disabled=true;
			document.getElementById("anggota_iv").disabled=true;
			document.getElementById("anggota_v").disabled=true;
			document.getElementById("anggota_vi").disabled=true;
		}

		ambilNilaiBiayaDinas();

	}

	function ambilNilaiBiayaDinas(){

		biayaDinas = document.getElementById("biaya").value;
		biayaDinas = (biayaDinas===""?0:biayaDinas);

		kalkulasiBiayaDinas(biayaDinas);
	}

	function kalkulasiBiayaDinas(biayaDinas){

		const formatter = new Intl.NumberFormat('id-ID');

		var jumlPengikut = document.getElementById("jml_ikut").value;
		var tOrang=parseInt(jumlPengikut)+1;

		var tgl_mulai = document.getElementById("tgl_mulai").value;
		var tgl_akhir = document.getElementById("tgl_akhir").value;

		var totalHari = selisihTanggal(tgl_mulai,tgl_akhir) +1;
		var totalBiaya = tOrang * biayaDinas * totalHari;
		var totalOrangHari = biayaDinas*totalHari;

		document.getElementById("jml_hari").value= totalHari;
		document.getElementById("tot_per_hari").value=formatter.format(totalOrangHari);
		document.getElementById("biaya_").value=formatter.format(biayaDinas);

		switch(parseInt(jumlPengikut)){
			case 0:
				document.getElementById("jml_hari_i").value= '';
				document.getElementById("tot_per_hari_i").value="";
				document.getElementById("biaya_i").value="";
				
				document.getElementById("jml_hari_ii").value= "";
				document.getElementById("tot_per_hari_ii").value="";
				document.getElementById("biaya_ii").value="";

				document.getElementById("jml_hari_iii").value= "";
				document.getElementById("tot_per_hari_iii").value="";
				document.getElementById("biaya_iii").value="";

				document.getElementById("jml_hari_iv").value= "";
				document.getElementById("tot_per_hari_iv").value="";
				document.getElementById("biaya_iv").value="";
				
				document.getElementById("jml_hari_v").value= "";
				document.getElementById("tot_per_hari_v").value="";
				document.getElementById("biaya_v").value="";

				document.getElementById("jml_hari_vi").value= "";
				document.getElementById("tot_per_hari_vi").value="";
				document.getElementById("biaya_vi").value="";
				break;

			case 1:
				document.getElementById("jml_hari_i").value= totalHari;
				document.getElementById("tot_per_hari_i").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_i").value=formatter.format(biayaDinas);
				
				document.getElementById("jml_hari_ii").value= "";
				document.getElementById("tot_per_hari_ii").value="";
				document.getElementById("biaya_ii").value="";

				document.getElementById("jml_hari_iii").value= "";
				document.getElementById("tot_per_hari_iii").value="";
				document.getElementById("biaya_iii").value="";

				document.getElementById("jml_hari_iv").value= "";
				document.getElementById("tot_per_hari_iv").value="";
				document.getElementById("biaya_iv").value="";
				
				document.getElementById("jml_hari_v").value= "";
				document.getElementById("tot_per_hari_v").value="";
				document.getElementById("biaya_v").value="";

				document.getElementById("jml_hari_vi").value= "";
				document.getElementById("tot_per_hari_vi").value="";
				document.getElementById("biaya_vi").value="";
				break;
				
			case 2:
				document.getElementById("jml_hari_i").value= totalHari;
				document.getElementById("tot_per_hari_i").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_i").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_ii").value= totalHari;
				document.getElementById("tot_per_hari_ii").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_ii").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_iii").value= "";
				document.getElementById("tot_per_hari_iii").value="";
				document.getElementById("biaya_iii").value="";

				document.getElementById("jml_hari_iv").value= "";
				document.getElementById("tot_per_hari_iv").value="";
				document.getElementById("biaya_iv").value="";
				
				document.getElementById("jml_hari_v").value= "";
				document.getElementById("tot_per_hari_v").value="";
				document.getElementById("biaya_v").value="";

				document.getElementById("jml_hari_vi").value= "";
				document.getElementById("tot_per_hari_vi").value="";
				document.getElementById("biaya_vi").value="";
				break;

			case 3:
				document.getElementById("jml_hari_i").value= totalHari;
				document.getElementById("tot_per_hari_i").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_i").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_ii").value= totalHari;
				document.getElementById("tot_per_hari_ii").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_ii").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_iii").value= totalHari;
				document.getElementById("tot_per_hari_iii").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_iii").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_iv").value= "";
				document.getElementById("tot_per_hari_iv").value="";
				document.getElementById("biaya_iv").value="";
				
				document.getElementById("jml_hari_v").value= "";
				document.getElementById("tot_per_hari_v").value="";
				document.getElementById("biaya_v").value="";

				document.getElementById("jml_hari_vi").value= "";
				document.getElementById("tot_per_hari_vi").value="";
				document.getElementById("biaya_vi").value="";

				break;

			case 4:
				document.getElementById("jml_hari_i").value= totalHari;
				document.getElementById("tot_per_hari_i").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_i").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_ii").value= totalHari;
				document.getElementById("tot_per_hari_ii").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_ii").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_iii").value= totalHari;
				document.getElementById("tot_per_hari_iii").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_iii").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_iv").value= totalHari;
				document.getElementById("tot_per_hari_iv").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_iv").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_v").value= "";
				document.getElementById("tot_per_hari_v").value="";
				document.getElementById("biaya_v").value="";

				document.getElementById("jml_hari_vi").value= "";
				document.getElementById("tot_per_hari_vi").value="";
				document.getElementById("biaya_vi").value="";

				break;

			case 5:
				document.getElementById("jml_hari_i").value= totalHari;
				document.getElementById("tot_per_hari_i").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_i").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_ii").value= totalHari;
				document.getElementById("tot_per_hari_ii").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_ii").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_iii").value= totalHari;
				document.getElementById("tot_per_hari_iii").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_iii").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_iv").value= totalHari;
				document.getElementById("tot_per_hari_iv").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_iv").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_v").value= totalHari;
				document.getElementById("tot_per_hari_v").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_v").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_vi").value= "";
				document.getElementById("tot_per_hari_vi").value="";
				document.getElementById("biaya_vi").value="";

				break;

			case 6:
				document.getElementById("jml_hari_i").value= totalHari;
				document.getElementById("tot_per_hari_i").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_i").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_ii").value= totalHari;
				document.getElementById("tot_per_hari_ii").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_ii").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_iii").value= totalHari;
				document.getElementById("tot_per_hari_iii").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_iii").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_iv").value= totalHari;
				document.getElementById("tot_per_hari_iv").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_iv").value=formatter.format(biayaDinas);
				
				document.getElementById("jml_hari_v").value= totalHari;
				document.getElementById("tot_per_hari_v").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_v").value=formatter.format(biayaDinas);

				document.getElementById("jml_hari_vi").value= totalHari;
				document.getElementById("tot_per_hari_vi").value=formatter.format(totalOrangHari);
				document.getElementById("biaya_vi").value=formatter.format(biayaDinas);
				break;
		}

		document.getElementById("total_biaya").value=formatter.format(totalBiaya);
		document.getElementById("label_total_biaya").value=formatter.format(totalBiaya);
	}

	function selisihTanggal(date1, date2){

		var date_1 = date1.split("-");
		var date_2 = date2.split("-");
		
		var the_date_1 = date_1[1] + '/' + date_1[0] + '/' + date_1[2];
		var the_date_2 = date_2[1] + '/' + date_2[0] + '/' +date_2[2];

		dt1 = new Date(the_date_1);
		dt2 = new Date(the_date_2);

		return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
	}

</script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Perintah Perjalanan Dinas</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Perintah Perjalanan Dinas</li>
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
							<div class="form-group">
								<label for="nomor"  class="col-sm-3 control-label">Nomor Surat</label>
								<div class="col-sm-8">
									<input  id="nomor" class="form-control input-sm required" type="text" placeholder="Nomor Surat" name="nomor" value="<?= $surat_terakhir['no_surat_berikutnya'];?>">
									<p class="help-block text-red small"><?= $surat_terakhir['ket_nomor']?><strong><?= $surat_terakhir['no_surat'];?></strong> (tgl: <?= $surat_terakhir['tanggal']?>)</p>
								</div>
							</div>
							<div class="form-group">
								<label for="pangkat_gol"  class="col-sm-3 control-label">Pangkat dan Golongan</label>
								<div class="col-sm-8">
									<input name="pangkat_gol" class="form-control input-sm required" placeholder="Pangkat dan Golongan"></input>
								</div>
							</div>
							<div class="form-group">
								<label for="jabatan1"  class="col-sm-3 control-label">Jabatan/Instansi</label>
								<div class="col-sm-8">
									<input name="jabatan1" class="form-control input-sm required" placeholder="Jabatan/Instansi"></input>
								</div>
							</div>
							<div class="form-group">
								<label for="biaya"  class="col-sm-3 control-label">Tingkat Biaya Perjalanan</label>
								<div class="col-sm-8">
									<input name="biaya" class="form-control input-sm required" placeholder="Tingkat Biaya Perjalanan"></input>
								</div>
							</div>
							<div class="form-group">
								<label for="keperluan"  class="col-sm-3 control-label">Maksud Perjalanan Dinas</label>
								<div class="col-sm-8">
									<textarea name="keperluan" class="form-control input-sm required" placeholder="Maksud Perjalanan Dinas"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="tujuan"  class="col-sm-3 control-label">Tempat Tujuan</label>
								<div class="col-sm-8">
									<input name="tujuan" class="form-control input-sm required" placeholder="Tempat Tujuan"></input>
								</div>
							</div>
							<div class="form-group">
								<label for="alat_angkut"  class="col-sm-3 control-label">Alat Angkut Yang Digunakan</label>
								<div class="col-sm-8">
									<input id="alat_angkut" class="form-control input-sm required" placeholder="Alat Angkut Yang Digunakan" name="alat_angkut"></input>
								</div>
							</div>

							<div class="form-group">
								<label for="jml_ikut"  class="col-sm-3 control-label">Jumlah Pengikut</label>
								<div class="col-sm-3">
									<select class="form-control required input-sm select2" id="jml_ikut" name="jml_ikut" style ="width:100%;" onchange="jumlahPengikut($(this).val())" >
										<option value="0">Tidak Ada</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_pengikut"  class="col-sm-3 control-label">Nama Pengikut</label>
								<div class="col-sm-4">
									<input  id="anggota_i" name="anggota_i" class="form-control input-sm " type="text" placeholder="Nama Pengikut I " disabled="true">
								</div>
								<div class="col-sm-4">
									<input  id="anggota_ii" name="anggota_ii" class="form-control input-sm " type="text" placeholder="Nama Pengikut II " disabled="true">
								</div>
							</div>
							<div class="form-group">
								<label for="nama_pengikut"  class="col-sm-3 control-label"></label>
								<div class="col-sm-4">
									<input  id="anggota_iii" name="anggota_iii" class="form-control input-sm " type="text" placeholder="Nama Pengikut III " disabled="true">
								</div>
								<div class="col-sm-4">
									<input  id="anggota_iv" name="anggota_iv" class="form-control input-sm " type="text" placeholder="Nama Pengikut IV " disabled="true">
								</div>
							</div>
							<div class="form-group">
								<label for="nama_pengikut"  class="col-sm-3 control-label"></label>
								<div class="col-sm-4">
									<input  id="anggota_v" name="anggota_v" class="form-control input-sm " type="text" placeholder="Nama Pengikut V " disabled="true">
								</div>
								<div class="col-sm-4">
									<input  id="anggota_vi" name="anggota_vi" class="form-control input-sm " type="text" placeholder="Nama Pengikut VI " disabled="true" >
								</div>
							</div>
							<div class="form-group">
								<label for="ket_lain"  class="col-sm-3 control-label">Keterangan Lain</label>
								<div class="col-sm-8">
									<textarea  id="ket_lain" class="form-control input-sm required" placeholder="Keterangan Lain" name="ket_lain"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="berlaku_dari"  class="col-sm-3 control-label">Tanggal Berangkat</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_mulai" class="form-control input-sm required" name="berlaku_dari" type="text" onblur="ambilNilaiBiayaDinas()" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="berlaku_sampai"class="col-sm-3 control-label">Tanggal Kembali</label>
								<div class="col-sm-3 col-lg-2">
									<div class="input-group input-group-sm date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input title="Pilih Tanggal" id="tgl_akhir" class="form-control input-sm required" name="berlaku_sampai" type="text" onblur="ambilNilaiBiayaDinas()" />
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="biaya"  class="col-sm-3 control-label">Biaya Per Orang/Hari (Rp)</label>
								<div class="col-sm-3">
									<input type="text" name="biaya" id="biaya" onkeyup="kalkulasiBiayaDinas($(this).val())" value="0" />
									
								</div>
								
							</div>

							<div class="form-group">
								<label for="labeltotalBiaya"  class="col-sm-3 control-label">Total Biaya</label>
								<div class="col-sm-3">
									<input type="text" name="label_total_biaya" id="label_total_biaya" disabled="true" />
								</div>
								
							</div>

							<div class="form-group">
								<label for="terbilang"  class="col-sm-3 control-label">Terbilang</label>
								<div class="col-sm-8">
									<textarea  id="terbilang" class="form-control input-sm required" placeholder="Contoh: Lima Puluh Ribu Rupiah" name="terbilang"></textarea>
								</div>
							</div>

							<div class="form-group">
								
								<div class="col-sm-8">
									<input type="text" name="jml_hari" id="jml_hari" hidden="true"  />
									<input type="text" name="tot_per_hari" id="tot_per_hari" hidden="true"  />
									<input type="text" name="biaya_" id="biaya_" hidden="true"  />

									<input type="text" name="jml_hari_i" id="jml_hari_i" hidden="true"  />
									<input type="text" name="tot_per_hari_i" id="tot_per_hari_i" hidden="true"  />
									<input type="text" name="biaya_i" id="biaya_i" hidden="true" />

									<input type="text" name="jml_hari_ii" id="jml_hari_ii" hidden="true" />
									<input type="text" name="tot_per_hari_ii" id="tot_per_hari_ii" hidden="true"  />
									<input type="text" name="biaya_ii" id="biaya_ii" hidden="true" />

									<input type="text" name="jml_hari_iii" id="jml_hari_iii" hidden="true"  />
									<input type="text" name="tot_per_hari_iii" id="tot_per_hari_iii" hidden="true"  />
									<input type="text" name="biaya_iii" id="biaya_iii" hidden="true" />

									<input type="text" name="jml_hari_iv" id="jml_hari_iv" hidden="true" />
									<input type="text" name="tot_per_hari_iv" id="tot_per_hari_iv" hidden="true"  />
									<input type="text" name="biaya_iv" id="biaya_iv" hidden="true" />

									<input type="text" name="jml_hari_v" id="jml_hari_v" hidden="true"  />
									<input type="text" name="tot_per_hari_v" id="tot_per_hari_v" hidden="true"  />
									<input type="text" name="biaya_v" id="biaya_v" hidden="true" />

									<input type="text" name="jml_hari_vi" id="jml_hari_vi" hidden="true"  />
									<input type="text" name="tot_per_hari_vi" id="tot_per_hari_vi" hidden="true" />
									<input type="text" name="biaya_vi" id="biaya_vi" hidden="true" />

									<input type="text" name="total_biaya" id="total_biaya" hidden="true"  />
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
