<script language="javascript" type="text/javascript">

	$(document).ready(function()
	{
	  $('#reset_form').on('click', function()
	  {
	  	$('#nomor').val('');
	  	$('#calon_pria').val('2');
	  	$('#calon_wanita').val('2');
	  });
	});

	function calon_wanita_asal(asal)
	{
		$('#calon_wanita').val(asal);
		if (asal == 1)
		{
			$('.wanita_desa').show();
			$('.wanita_luar_desa').hide();
			// Mungkin bug di jquery? Terpaksa hapus class radio button
			$('#label_calon_wanita_2').removeClass('active');
		}
		else
		{
			$('.wanita_desa').hide();
			$('.wanita_luar_desa').show();
		 	$('#id_wanita').val('*'); // Hapus $id_wanita
			submit_form_ambil_data();
		}
	}

	function calon_pria_asal(asal)
	{
		$('#calon_pria').val(asal);
		if (asal == 1)
		{
			$('.pria_desa').show();
			$('.pria_luar_desa').hide();
			// Mungkin bug di jquery? Terpaksa hapus class radio button
			$('#label_calon_pria_2').removeClass('active');
		}
		else
		{
			$('.pria_desa').hide();
			$('.pria_luar_desa').show();
			$('#id_pria').val('*'); // Hapus $id_pria
			submit_form_ambil_data();
		}
	}

	function submit_form_ambil_data()
	{
		$('input').removeClass('required');
		$('select').removeClass('required');
		$('#'+'validasi').attr('action','')
		$('#'+'validasi').attr('target','')
		$('#'+'validasi').submit();
	}

	function istri_dulu(status)
	{
		// Untuk calon pria luar desa pilihan 'duda'
		if (status.toUpperCase() == 'duda'.toUpperCase())
		{
			$('.istri_dulu').show();
			$('.istri_dulu').attr('disabled', false);
		}
		else
		{
			$('.istri_dulu').hide();
			$('.istri_dulu').attr('disabled', true);
		}
	}

	function status_beristri(status)
	{
		
		if (status.toUpperCase() != 'belum kawin'.toUpperCase())
		{
			$('#beristri').show();
		}
		else
		{
			$('#beristri').hide();
		}
	}

	function cerai_mati(status)
	{
		// Untuk calon wanita luar desa pilihan hanya 'perawan' atau 'janda'
		if (status.toUpperCase() != 'belum kawin'.toUpperCase())
		{
			$('#bersuami').show();
			//$('.suami_dulu').attr('disabled', false);
		}
		else
		{
			$('#bersuami').hide();
			//$('.suami_dulu').attr('disabled', true);
		}
	}

</script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Keterangan Untuk Nikah</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Keterangan Untuk Nikah</li>
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
							<input type="hidden" name="sex_pria" value="Laki-laki">
							<input type="hidden" name="sex_wanita" value="Perempuan">
							<div class="col-md-12">
								<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>
								<?php $jenis_pasangan = "Istri"; ?>
								<div class="form-group subtitle_head">
									<label class="col-sm-3 control-label" for="status">A. CALON PASANGAN PRIA</label>
									<div class="btn-group col-sm-8" data-toggle="buttons">
										<label for="calon_pria_1" class="btn btn-info btn-flat btn-sm col-sm-4 col-sm-4 col-md-4 col-lg-3 form-check-label <?php if (!empty($pria)): ?>active<?php endif ?>">
											<input id="calon_pria_1" type="radio"  name="calon_pria" class="form-check-input" type="radio" value="1" <?php if (!empty($pria)): ?>checked<?php endif; ?> autocomplete="off" onchange="calon_pria_asal(this.value);"> Warga Desa
										</label>
										<label for="calon_pria_2" class="btn btn-info btn-flat btn-sm col-sm-4 col-md-4 col-lg-3 form-check-label <?php if (empty($pria)): ?>active<?php endif; ?>">
											<input id="calon_pria_2" type="radio"  name="calon_pria" class="form-check-input" type="radio" value="2" <?php if (empty($pria)): ?>checked<?php endif; ?> autocomplete="off" onchange="calon_pria_asal(this.value);"> Warga Luar Desa
										</label>
									</div>
								</div>

								<div class="form-group pria_desa" <?php if (empty($pria)): ?>style="display: none;"<?php endif; ?>>
									<label for="pria_desa"  class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>A.1 DATA CALON PASANGAN PRIA WARGA DESA</strong></label>
								</div>

								<div class="form-group pria_desa" <?php if (empty($pria)): ?>style="display: none;"<?php endif; ?>>
									<input id="calon_pria" name="calon_pria" type="hidden" value=""/>

									<label for="pria_desa" class="col-sm-3 control-label" ><strong>NIK / Nama :</strong></label>
									<div class="col-sm-5">
										
										<select class="form-control  input-sm select2" id="id_pria" name="id_pria" style ="width:100%;" onchange="submit_form_ambil_data(this.id);">
											<option value="">--  Cari NIK / Nama--</option>
											<?php foreach ($laki as $data): ?>
												<option value="<?= $data['id']?>" <?php if ($pria['nik']==$data['nik']): ?>selected<?php endif; ?>>NIK :<?= $data['nik']." - ".$data['nama']?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
								<?php if ($pria): ?>
									<?php $individu = $pria;?>
									<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
								<?php	endif; ?>
								<?php if (empty($pria)): ?>
									<div class="form-group pria_luar_desa" >
										<label for="pria_luar_desa"  class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>A.1 DATA CALON PASANGAN PRIA LUAR DESA</strong></label>
									</div>
									<div class="form-group pria_luar_desa">
										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Nama Lengkap / NIK KTP / Nomor KK</strong></label>
										<div class="col-sm-5 col-lg-4">
											<input  name="nama_pria" class="form-control input-sm" type="text" placeholder="Nama Lengkap" value="<?= $_SESSION['post']['nama_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="nik_pria" class="form-control input-sm" type="text" placeholder="Nomor KTP" value="<?= $_SESSION['post']['nik_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kk_pria" class="form-control input-sm" type="text" placeholder="Nomor KK" value="<?= $_SESSION['post']['kk_pria']?>">
										</div>
									</div>
									<div class="form-group pria_luar_desa">
										<label for="tempatlahir_pria"  class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-5 col-lg-6">
											<input class="form-control input-sm" type="text" name="tempat_lahir_pria" id="tempatlahir_pria" placeholder="Tempat Lahir" value="<?= $_SESSION['post']['tempat_lahir_pria']?>" maxlength="25" >
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal"  class="form-control datepicker input-sm" name="tanggallahir_pria" type="text" placeholder="Tgl. Lahir" value="<?= $_SESSION['post']['tanggallahir_pria']?>"/>
											</div>
										</div>
									</div>
									<div class="form-group pria_luar_desa">
										<label for="tempatlahir_pria"  class="col-sm-3 control-label">Warganegara / Agama / Pekerjaan / Pendidikan</label>
										<div class="col-sm-2">
											<select class="form-control input-sm select2" name="warganegara_pria" id="wn_pria" style ="width:100%;">
												<option value="">-- Pilih warganegara --</option>
												<?php foreach ($warganegara as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['warganegara_pria']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>

										<div class="col-sm-2">
											<select class="form-control input-sm select2" name="agama_pria" id="agama_pria" style ="width:100%;">
												<option value="">-- Pilih Agama --</option>
												<?php foreach ($agama as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['agama_pria']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>

										<div class="col-sm-2">
											<select class="form-control input-sm select2" name="pekerjaan_pria" id="pekerjaan_pria" style ="width:100%;">
												<option value="">-- Pekerjaan --</option>
												<?php foreach ($pekerjaan as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['pekerjaan_pria']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>

										<div class="col-sm-2">
											<select class="form-control input-sm select2" name="pendidikan_pria" id="pendidikan_pria" style ="width:100%;">
												<option value="">-- Pendidikan --</option>
												<?php foreach ($pendidikan as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['pendidikan_pria']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>

									</div>

									<div class="form-group pria_luar_desa">
										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Tempat Tinggal</strong></label>
										<div class="col-sm-8 col-lg-6">
											<input  name="alamat_pria" maxlength="26" class="form-control input-sm" type="text" placeholder="Tempat Tinggal" value="<?= $_SESSION['post']['alamat_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-1">
											<input  name="rt_pria" class="form-control input-sm" type="text" placeholder="RT" value="<?= $_SESSION['post']['rt_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-1">
											<input  name="rw_pria" class="form-control input-sm" type="text" placeholder="RW" value="<?= $_SESSION['post']['rw_pria']?>">
										</div>
									</div>

									<div class="form-group pria_luar_desa">

										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Desa / Kecamatan / Kabupaten / Provinsi </strong></label>
										<div class="col-sm-3 col-lg-2">
											<input  name="desa_pria" class="form-control input-sm" type="text" placeholder="Desa" value="<?= $_SESSION['post']['desa_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kec_pria" class="form-control input-sm" type="text" placeholder="Kecamatan" value="<?= $_SESSION['post']['kec_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kab_pria" class="form-control input-sm" type="text" placeholder="Kabupaten" value="<?= $_SESSION['post']['kab_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="prov_pria" class="form-control input-sm" type="text" placeholder="Provinsi" value="<?= $_SESSION['post']['prov_pria']?>">
										</div>
									</div>

									<div id="anak_ke" class="form-group pria_luar_desa">
										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Anak ke</strong></label>
										<div class="col-sm-4">
											<input  name="anak_ke_pria" class="form-control input-sm" type="text" placeholder="Anak Keberapa" value="<?= $_SESSION['post']['anak_ke_pria']?>">
										</div>
									</div>

									<div class="form-group pria_luar_desa">
										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Status Perkawinan Sebelum Nikah</strong></label>
										<div class="col-sm-4">
											<select class="form-control input-sm select2 required" name="status_kawin_pria" id="status_kawin_pria" style ="width:100%;" onchange="status_beristri($(this).val())">
												<option value="">-- Pilih Status Kawin --</option>
												<?php foreach ($kode['status_kawin_pria'] as $data): ?>
													<option value="<?= $data?>" <?php if ($data==$_SESSION['post']['status_kawin_pria']): ?>selected<?php endif; ?>><?= ucwords($data)?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									<div id="beristri" class="form-group pria_luar_desa" style="display: none;">
										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Jika beristri, istri ke</strong></label>
										<div class="col-sm-4">
											<input  name="istri_ke" class="form-control input-sm" type="text" placeholder="Istri Keberapa" value="<?= $_SESSION['post']['istri_ke']?>">
										</div>
									</div>
								<?php endif; ?>
								<?php if ($pria): ?>
									<div class="form-group">
										<label for="status_kawin_pria" class="col-sm-3 control-label" ><strong>Jika pria, terangkan jejaka, duda atau beristri</strong></label>
										<div class="col-sm-4">
											<select class="form-control input-sm select2"  disabled="disabled" style ="width:100%;">
												<option value="">-- Pilih Status Kawin --</option>
												<?php foreach ($kode['status_kawin_pria'] as $data): ?>
													<option value="<?= $data?>" <?php if ($pria['status_kawin_pria']==$data): ?>selected<?php endif; ?>><?= ucwords($data)?></option>
												<?php endforeach;?>
											</select>
										</div>
										<p class="help-block">(Status kawin: <?= $pria['status_kawin']?>)</p>
										<input type="hidden" name="status_kawin_pria" id="status_kawin_pria" value="<?= $pria['status_kawin_pria']?>">
									</div>
									<?php if ($pria['status_kawin']=="KAWIN"): ?>
										<div class="form-group">
											<label for="istri_ke" class="col-sm-3 control-label" ><strong>Jika beristri, istri ke</strong></label>
											<div class="col-sm-4">
												<input name="istri_ke" class="form-control input-sm required" type="text" placeholder="Istri Keberapa" value="<?= $_SESSION['post']['istri_ke']?>">
											</div>
										</div>
									<?php endif; ?>
								<?php endif; ?>

								

								<?php if ($ayah_pria): ?>
									<div class="form-group" >
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="padding-top:10px;padding-bottom:10px"><strong>A.2 DATA AYAH PASANGAN PRIA</strong></label>
									</div>
									<div class="form-group">
										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Nama Lengkap</strong></label>
										<div class="col-sm-5">
											<input  class="form-control input-sm" type="text" placeholder="Nama Lengkap" value="<?= $ayah_pria['nama']?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="tempatlahir_pria"  class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-8">
											<input class="form-control input-sm" type="text" placeholder="Tempat Lahir" value="<?= $ayah_pria['tempatlahir']." / ".tgl_indo_out($ayah_pria['tanggallahir'])?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="tempatlahir_pria"  class="col-sm-3 control-label">Warganegara / Agama / Pekerjaan</label>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" placeholder="Warganegara" value="<?= $ayah_pria['wn']?>" disabled>
										</div>
										<div class="col-sm-3">
											<input class="form-control input-sm" type="text" placeholder="Agama" value="<?= $ayah_pria['agama']?>" disabled>
										</div>
										<div class="col-sm-3">
											<input class="form-control input-sm" type="text" placeholder="Pekerjaan" value="<?= $ayah_pria['pek']?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" ><strong>Tempat Tinggal</strong></label>
										<div class="col-sm-8">
											<input  class="form-control input-sm" type="text" placeholder="Tempat Tinggal" value="<?= $ayah_pria['alamat_wilayah']?>">
										</div>
									</div>
								<?php else: ?>
									<div class="form-group ayah_pria" >
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>A.2 DATA AYAH PASANGAN PRIA (Isi jika ayah bukan warga <?= strtolower($this->setting->sebutan_desa)?> ini)</strong></label>
									</div>
									<div class="form-group ayah_pria">
										<label class="col-sm-3 control-label" ><strong>Nama Lengkap</strong></label>
										<div class="col-sm-6">
											<input  name="nama_ayah_pria" class="form-control input-sm" type="text" placeholder="Nama Lengkap" value="<?= $_SESSION['post']['nama_ayah_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input name="nik_ayah_pria" class="form-control input-sm" type="text" placeholder="Nomor KTP Ayah Pria" value="<?= $_SESSION['post']['nik_ayah_pria']?>">
										</div>
									</div>
									<div class="form-group ayah_pria">
										<label class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-5 col-lg-6">
											<input class="form-control input-sm" maxlength="26" type="text" name="tempat_lahir_ayah_pria" id="tempat_lahir_ayah_pria" placeholder="Tempat Lahir" value="<?= $_SESSION['post']['tempat_lahir_ayah_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal"  class="form-control input-sm datepicker" name="tanggallahir_ayah_pria" type="text" placeholder="Tgl. Lahir" value="<?= $_SESSION['post']['tanggallahir_ayah_pria']?>"/>
											</div>
										</div>
									</div>
									<div class="form-group ayah_pria">
										<label class="col-sm-3 control-label">Agama / Pekerjaan</label>
										
										<div class="col-sm-3">
											<select class="form-control input-sm select2" name="agama_ayah_pria" id="agama_ayah_pria" style ="width:100%;">
												<option value="">-- Pilih Agama --</option>
												<?php foreach ($agama as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['agama_ayah_pria']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
										<div class="col-sm-3">
											<select class="form-control input-sm select2" name="pekerjaan_ayah_pria" id="pekerjaan_ayah_pria" style ="width:100%;">
												<option value="">-- Pekerjaan --</option>
												<?php foreach ($pekerjaan as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['pekerjaan_ayah_pria']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									<div class="form-group ayah_pria">
										<label class="col-sm-3 control-label" ><strong>Tempat Tinggal</strong></label>
										<div class="col-sm-6">
											<input  name="alamat_ayah_pria" maxlength="25" class="form-control input-sm" type="text" placeholder="Tempat Tinggal" value="<?= $_SESSION['post']['alamat_ayah_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-1">
											<input  name="rt_ayah_pria" class="form-control input-sm" type="text" placeholder="RT" value="<?= $_SESSION['post']['rt_ayah_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-1">
											<input  name="rw_ayah_pria" class="form-control input-sm" type="text" placeholder="RW" value="<?= $_SESSION['post']['rw_ayah_pria']?>">
										</div>
									</div>

									<div class="form-group pria_luar_desa">

										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Desa / Kecamatan / Kabupaten / Provinsi </strong></label>
										<div class="col-sm-3 col-lg-2">
											<input  name="desa_ayah_pria" class="form-control input-sm" type="text" placeholder="Desa" value="<?= $_SESSION['post']['desa_ayah_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kec_ayah_pria" class="form-control input-sm" type="text" placeholder="Kecamatan" value="<?= $_SESSION['post']['kec_ayah_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kab_ayah_pria" class="form-control input-sm" type="text" placeholder="Kabupaten" value="<?= $_SESSION['post']['kab_ayah_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="prov_ayah_pria" class="form-control input-sm" type="text" placeholder="Provinsi" value="<?= $_SESSION['post']['prov_ayah_pria']?>">
										</div>
									</div>

								<?php endif; ?>
								<?php if ($ibu_pria): ?>
									<div class="form-group" >
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="padding-top:10px;padding-bottom:10px"><strong>A.3 DATA IBU PASANGAN PRIA</strong></label>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" ><strong>Nama Lengkap</strong></label>
										<div class="col-sm-8">
											<input  class="form-control input-sm" type="text" placeholder="Nama Lengkap" value="<?= $ibu_pria['nama']?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="tempatlahir_pria"  class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-8">
											<input class="form-control input-sm" type="text" placeholder="Tempat Lahir" value="<?= $ibu_pria['tempatlahir']." / ".tgl_indo_out($ibu_pria['tanggallahir'])?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="tempatlahir_pria"  class="col-sm-3 control-label">Warganegara / Agama / Pekerjaan</label>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" placeholder="Warganegara" value="<?= $ibu_pria['wn']?>" disabled>
										</div>
										<div class="col-sm-3">
											<input class="form-control input-sm" type="text" placeholder="Agama" value="<?= $ibu_pria['agama']?>" disabled>
										</div>
										<div class="col-sm-3">
											<input class="form-control input-sm" type="text" placeholder="Pekerjaan" value="<?= $ibu_pria['pek']?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" ><strong>Tempat Tinggal</strong></label>
										<div class="col-sm-8">
											<input  class="form-control input-sm" type="text" placeholder="Tempat Tinggal" value="<?= $ibu_pria['alamat_wilayah']?>">
										</div>
									</div>
								<?php else: ?>
									<div class="form-group ibu_pria" >
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>A.3 DATA IBU PASANGAN PRIA (Isi jika ibu bukan warga <?= strtolower($this->setting->sebutan_desa)?> ini)</strong></label>
									</div>
									<div class="form-group ibu_pria">
										<label class="col-sm-3 control-label" ><strong>Nama Lengkap</strong></label>
										<div class="col-sm-3 col-lg-6">
											<input  name="nama_ibu_pria" class="form-control input-sm" type="text" placeholder="Nama Lengkap" value="<?= $_SESSION['post']['nama_ibu_pria']?>">
										</div>
										
										<div class="col-sm-3 col-lg-2">
											<input  name="nik_ibu_pria" class="form-control input-sm" type="text" placeholder="Nomor KTP Ibu Pria" value="<?= $_SESSION['post']['nik_ibu_pria']?>">
										</div>
									</div>
									<div class="form-group ibu_pria">
										<label class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-5 col-lg-6">
											<input class="form-control input-sm" type="text" name="tempat_lahir_ibu_pria" id="tempat_lahir_ibu_pria" placeholder="Tempat Lahir" value="<?= $_SESSION['post']['tempat_lahir_ibu_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal"  class="form-control input-sm datepicker" name="tanggallahir_ibu_pria" type="text" placeholder="Tgl. Lahir" value="<?= $_SESSION['post']['tanggallahir_ibu_pria']?>"/>
											</div>
										</div>
									</div>
									<div class="form-group ibu_pria">
										<label class="col-sm-3 control-label"> Agama / Pekerjaan</label>
										
										<div class="col-sm-3">
											<select class="form-control input-sm select2" name="agama_ibu_pria" id="agama_ibu_pria" style ="width:100%;">
												<option value="">-- Pilih Agama --</option>
												<?php foreach ($agama as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['agama_ibu_pria']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
										<div class="col-sm-3">
											<select class="form-control input-sm select2" name="pekerjaan_ibu_pria" id="pekerjaan_ibu_pria" style ="width:100%;">
												<option value="">-- Pekerjaan --</option>
												<?php foreach ($pekerjaan as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['pekerjaan_ibu_pria']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									<div class="form-group ibu_pria">
										<label class="col-sm-3 control-label" ><strong>Tempat Tinggal</strong></label>
										<div class="col-sm-8">
											<input name="alamat_ibu_pria" class="form-control input-sm" type="text" placeholder="Tempat Tinggal" value="<?= $_SESSION['post']['alamat_ibu_pria']?>">
										</div>
									</div>

									<div class="form-group ibu_pria">

										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Desa / Kecamatan / Kabupaten / Provinsi </strong></label>
										<div class="col-sm-3 col-lg-2">
											<input  name="desa_ibu_pria" class="form-control input-sm" type="text" placeholder="Desa" value="<?= $_SESSION['post']['desa_ibu_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kec_ibu_pria" class="form-control input-sm" type="text" placeholder="Kecamatan" value="<?= $_SESSION['post']['kec_ibu_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kab_ibu_pria" class="form-control input-sm" type="text" placeholder="Kabupaten" value="<?= $_SESSION['post']['kab_ibu_pria']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="prov_ibu_pria" class="form-control input-sm" type="text" placeholder="Provinsi" value="<?= $_SESSION['post']['prov_ibu_pria']?>">
										</div>
									</div>
								<?php endif; ?>

								

								<!-- CALON PASANGAN WANITA -->
								<?php $jenis_pasangan = "Suami"; ?>
								<div class="form-group subtitle_head">
									<label class="col-sm-3 control-label" for="status">B. CALON PASANGAN WANITA</label>
									<div class="btn-group col-sm-8" data-toggle="buttons">
										<label for="calon_wanita_1" class="btn btn-info btn-flat btn-sm col-sm-4 col-sm-4 col-md-4 col-lg-3 form-check-label <?php if (!empty($wanita)): ?>active<?php endif ?>">
											<input id="calon_wanita_1" type="radio"  name="calon_wanita" class="form-check-input" type="radio" value="1" <?php if (!empty($wanita)): ?>checked<?php endif; ?> autocomplete="off" onchange="calon_wanita_asal(this.value);"> Warga Desa
										</label>
										<label id="label_calon_wanita_2" for="calon_wanita_2" class="btn btn-info btn-flat btn-sm col-sm-4 col-md-4 col-lg-3 form-check-label <?php if (empty($wanita)): ?>active<?php endif; ?>">
											<input id="calon_wanita_2" type="radio"  name="calon_wanita" class="form-check-input" type="radio" value="2" <?php if (empty($wanita)): ?>checked<?php endif; ?> autocomplete="off" onchange="calon_wanita_asal(this.value);"> Warga Luar Desa
										</label>
									</div>
								</div>
								<div class="form-group wanita_desa" <?php if (empty($wanita)): ?>style="display: none;"<?php endif; ?>>
									<label for="wanita_desa" class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>B.1 DATA CALON PASANGAN WANITA WARGA DESA</strong></label>
								</div>
								<div class="form-group wanita_desa" <?php if (empty($wanita)): ?>style="display: none;"<?php endif; ?>>
									<label for="id_wanita" class="col-sm-3 control-label" ><strong>NIK / Nama :</strong></label>
									<div class="col-sm-5">
										<select class="form-control  input-sm select2" id="id_wanita" name="id_wanita" style ="width:100%;"  onchange="submit_form_ambil_data(this.id);">
											<option value="">--  Cari NIK / Nama--</option>
											<?php foreach ($perempuan as $data): ?>
												<option value="<?= $data['id']?>" <?php if ($wanita['nik']==$data['nik']): ?>selected<?php endif; ?>>NIK : <?= $data['nik']." - ".$data['nama']?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>
								<?php if ($wanita): ?>
									<?php if ($wanita): //bagian info setelah terpilih
										$individu = $wanita;
										include("donjo-app/views/surat/form/konfirmasi_pemohon.php");
									endif; ?>
									<div class="form-group">
										<label for="status_kawin_wanita" class="col-sm-3 control-label" ><strong>Status Sebelum Menikah</strong></label>
										<div class="col-sm-4">
											<select class="form-control input-sm select2 required" style ="width:100%;" disabled="disabled">
												<option value="">-- Pilih Status Kawin --</option>
												<?php foreach ($kode['status_kawin_wanita'] as $data): ?>
													<option value="<?= $data?>" <?php if ($wanita['status_kawin_wanita']==$data): ?>selected<?php endif; ?>><?= ucwords($data)?></option>
												<?php endforeach;?>
											</select>
										</div>
										<p class="help-block">(Status kawin: <?= $wanita['status_kawin']?>)</p>
										<input type="hidden" name="status_kawin_wanita" id="status_kawin_wanita" value="<?= $wanita['status_kawin_wanita']?>">
									</div>
								<?php endif; ?>
								<?php if (empty($wanita)): ?>
									<div class="form-group wanita_luar_desa" >
										<label for="wanita_luar_desa"  class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>B.1 DATA CALON PASANGAN WANITA LUAR DESA</strong></label>
									</div>
									<div class="form-group wanita_luar_desa">
										<label for="wanita_luar_desa" class="col-sm-3 control-label" ><strong>Nama Lengkap</strong></label>
										<div class="col-sm-5 col-lg-4">
											<input  name="nama_wanita" class="form-control input-sm" type="text" placeholder="Nama Lengkap" value="<?= $_SESSION['post']['nama_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="nik_wanita" class="form-control input-sm" type="text" placeholder="Nomor KTP" value="<?= $_SESSION['post']['nik_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kk_wanita" class="form-control input-sm" type="text" placeholder="Nomor KK" value="<?= $_SESSION['post']['kk_wanita']?>">
										</div>
									</div>
									<div class="form-group wanita_luar_desa">
										<label for="tempatlahir_wanita"  class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-5 col-lg-6">
											<input class="form-control input-sm" type="text" name="tempat_lahir_wanita" id="tempat_lahir_wanita" placeholder="Tempat Lahir" value="<?= $_SESSION['post']['tempat_lahir_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal"  class="form-control input-sm datepicker" name="tanggallahir_wanita" type="text" placeholder="Tgl. Lahir" value="<?= $_SESSION['post']['tanggallahir_wanita']?>"/>
											</div>
										</div>
									</div>
									<div class="form-group wanita_luar_desa">
										<label for="tempatlahir_wanita"  class="col-sm-3 control-label">Warganegara / Agama / Pekerjaan</label>
										<div class="col-sm-2">
											<select class="form-control input-sm select2" name="warganegara_wanita" id="wn_wanita" style ="width:100%;">
												<option value="">-- Pilih warganegara --</option>
												<?php foreach ($warganegara as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['warganegara_wanita']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
										<div class="col-sm-3">
											<select class="form-control input-sm select2" name="agama_wanita" id="agama_wanita" style ="width:100%;">
												<option value="">-- Pilih Agama --</option>
												<?php foreach ($agama as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['agama_wanita']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
										<div class="col-sm-3">
											<select class="form-control input-sm select2" name="pekerjaan_wanita" id="pekerjaan_wanita" style ="width:100%;">
												<option value="">-- Pekerjaan --</option>
												<?php foreach ($pekerjaan as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['pekerjaan_wanita']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									<div class="form-group wanita_luar_desa">
										<label for="wanita_luar_desa" class="col-sm-3 control-label" ><strong>Tempat Tinggal</strong></label>
										<div class="col-sm-8 col-lg-6">
											<input  name="alamat_wanita" maxlength="26" class="form-control input-sm" type="text" placeholder="Tempat Tinggal" value="<?= $_SESSION['post']['alamat_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-1">
											<input  name="rt_wanita" class="form-control input-sm" type="text" placeholder="RT" value="<?= $_SESSION['post']['rt_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-1">
											<input  name="rw_wanita" class="form-control input-sm" type="text" placeholder="RW" value="<?= $_SESSION['post']['rw_wanita']?>">
										</div>
									</div>

									<div class="form-group wanita_luar_desa">

										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Desa / Kecamatan / Kabupaten / Provinsi </strong></label>
										<div class="col-sm-3 col-lg-2">
											<input  name="desa_wanita" class="form-control input-sm" type="text" placeholder="Desa" value="<?= $_SESSION['post']['desa_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kec_wanita" class="form-control input-sm" type="text" placeholder="Kecamatan" value="<?= $_SESSION['post']['kec_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kab_wanita" class="form-control input-sm" type="text" placeholder="Kabupaten" value="<?= $_SESSION['post']['kab_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="prov_wanita" class="form-control input-sm" type="text" placeholder="Provinsi" value="<?= $_SESSION['post']['prov_wanita']?>">
										</div>
									</div>

									<div class="form-group wanita_luar_desa">
										<label for="wanita_luar_desa" class="col-sm-3 control-label" ><strong>Status Perkawinan Sebelum Nikah</strong></label>
										<div class="col-sm-4">
											<select class="form-control input-sm select2" name="status_kawin_wanita" id="status_kawin_wanita" onchange="cerai_mati($(this).val())" style ="width:100%;">
												<option value="">-- Pilih Status Kawin --</option>
												<?php foreach ($kode['status_kawin_wanita'] as $data): ?>
													<option value="<?= $data?>" <?php if ($data==$_SESSION['post']['status_kawin_wanita']): ?>selected<?php endif; ?>><?= ucwords($data)?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>

									<div id="bersuami" class="form-group pria_luar_desa" style="display: none;">
										<label for="pria_luar_desa" class="col-sm-3 control-label" ><strong>Pernikahan yang ke</strong></label>
										<div class="col-sm-4">
											<input  name="suami_ke" class="form-control input-sm" type="text" placeholder="Suami Keberapa" value="<?= $_SESSION['post']['suami_ke']?>">
										</div>
									</div>

								<?php endif; ?>
								<?php if ($ayah_wanita): ?>
									<div class="form-group" >
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>B.2 DATA AYAH PASANGAN WANITA</strong></label>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" ><strong>Nama Lengkap</strong></label>
										<div class="col-sm-8">
											<input  class="form-control input-sm" type="text" placeholder="Nama Lengkap" value="<?= $ayah_wanita['nama']?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="tempatlahir_pria"  class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-8">
											<input class="form-control input-sm" type="text" placeholder="Tempat Lahir" value="<?= $ayah_wanita['tempatlahir']." / ".tgl_indo_out($ayah_wanita['tanggallahir'])?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="tempatlahir_pria"  class="col-sm-3 control-label">Warganegara / Agama / Pekerjaan</label>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" placeholder="Warganegara" value="<?= $ayah_wanita['wn']?>" disabled>
										</div>
										<div class="col-sm-3">
											<input class="form-control input-sm" type="text" placeholder="Agama" value="<?= $ayah_wanita['agama']?>" disabled>
										</div>
										<div class="col-sm-3">
											<input class="form-control input-sm" type="text" placeholder="Pekerjaan" value="<?= $ayah_wanita['pek']?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" ><strong>Tempat Tinggal</strong></label>
										<div class="col-sm-8">
											<input  class="form-control input-sm" type="text" placeholder="Tempat Tinggal" value="<?= $ayah_wanita['alamat_wilayah']?>">
										</div>
									</div>
								<?php else: ?>
									<div class="form-group ayah_wanita" >
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>B.2 DATA AYAH PASANGAN WANITA (Isi jika ayah bukan warga <?= strtolower($this->setting->sebutan_desa)?> ini)</strong></label>
									</div>
									<div class="form-group ayah_wanita">
										<label class="col-sm-3 control-label" ><strong>Nama Lengkap</strong></label>
										<div class="col-sm-6">
											<input  name="nama_ayah_wanita" class="form-control input-sm" type="text" placeholder="Nama Lengkap" value="<?= $_SESSION['post']['nama_ayah_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input name="nik_ayah_wanita" class="form-control input-sm" type="text" placeholder="Nomor KTP Ayah Istri" value="<?= $_SESSION['post']['nik_ayah_wanita']?>">
										</div>
										
									</div>
									<div class="form-group ayah_wanita">
										<label class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-5 col-lg-6">
											<input class="form-control input-sm" type="text" name="tempat_lahir_ayah_wanita" id="tempat_lahir_ayah_wanita" placeholder="Tempat Lahir" value="<?= $_SESSION['post']['tempat_lahir_ayah_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal"  class="form-control input-sm datepicker" name="tanggallahir_ayah_wanita" type="text" placeholder="Tgl. Lahir" value="<?= $_SESSION['post']['tanggallahir_ayah_wanita']?>"/>
											</div>
										</div>
									</div>
									<div class="form-group ayah_wanita">
										<label class="col-sm-3 control-label">Warganegara / Agama / Pekerjaan</label>
										<div class="col-sm-2">
											<select class="form-control input-sm select2" name="warganegara_ayah_wanita" id="warganegara_ayah_wanita" style ="width:100%;">
												<option value="">-- Pilih warganegara --</option>
												<?php foreach ($warganegara as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['warganegara_ayah_wanita']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
										<div class="col-sm-3">
											<select class="form-control input-sm select2" name="agama_ayah_wanita" id="agama_ayah_wanita" style ="width:100%;">
												<option value="">-- Pilih Agama --</option>
												<?php foreach ($agama as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['agama_ayah_wanita']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
										<div class="col-sm-3">
											<select class="form-control input-sm select2" name="pekerjaan_ayah_wanita" id="pekerjaan_ayah_wanita" style ="width:100%;">
												<option value="">-- Pekerjaan --</option>
												<?php foreach ($pekerjaan as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['pekerjaan_ayah_wanita']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									<div class="form-group ayah_wanita">
										<label class="col-sm-3 control-label" ><strong>Tempat Tinggal</strong></label>
										<div class="col-sm-8 col-lg-6">
											<input  name="alamat_ayah_wanita" class="form-control input-sm" type="text" placeholder="Tempat Tinggal" value="<?= $_SESSION['post']['alamat_ayah_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-1">
											<input  name="rt_ayah_wanita" class="form-control input-sm" type="text" placeholder="RT" value="<?= $_SESSION['post']['rt_ayah_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-1">
											<input  name="rw_ayah_wanita" class="form-control input-sm" type="text" placeholder="RW" value="<?= $_SESSION['post']['rw_ayah_wanita']?>">
										</div>
									</div>
									<div class="form-group wanita_luar_desa">

										<label for="wanita_luar_desa" class="col-sm-3 control-label" ><strong>Desa / Kecamatan / Kabupaten / Provinsi </strong></label>
										<div class="col-sm-3 col-lg-2">
											<input  name="desa_ayah_wanita" class="form-control input-sm" type="text" placeholder="Desa" value="<?= $_SESSION['post']['desa_ayah_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kec_ayah_wanita" class="form-control input-sm" type="text" placeholder="Kecamatan" value="<?= $_SESSION['post']['kec_ayah_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kab_ayah_wanita" class="form-control input-sm" type="text" placeholder="Kabupaten" value="<?= $_SESSION['post']['kab_ayah_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="prov_ayah_wanita" class="form-control input-sm" type="text" placeholder="Provinsi" value="<?= $_SESSION['post']['prov_ayah_wanita']?>">
										</div>
									</div>
								<?php endif; ?>
								<?php if ($ibu_wanita): ?>
									<div class="form-group" >
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="padding-top:10px;padding-bottom:10px"><strong>B.3 DATA IBU PASANGAN WANITA</strong></label>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" ><strong>Nama Lengkap</strong></label>
										<div class="col-sm-8">
											<input  class="form-control input-sm" type="text" placeholder="Nama Lengkap" value="<?= $ibu_wanita['nama']?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="tempatlahir_wanita"  class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-8">
											<input class="form-control input-sm" type="text" placeholder="Tempat Lahir" value="<?= $ibu_wanita['tempatlahir']." / ".tgl_indo_out($ibu_pria['tanggallahir'])?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="tempatlahir_wanita"  class="col-sm-3 control-label">Warganegara / Agama / Pekerjaan</label>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" placeholder="Warganegara" value="<?= $ibu_wanita['wn']?>" disabled>
										</div>
										<div class="col-sm-3">
											<input class="form-control input-sm" type="text" placeholder="Agama" value="<?= $ibu_wanita['agama']?>" disabled>
										</div>
										<div class="col-sm-3">
											<input class="form-control input-sm" type="text" placeholder="Pekerjaan" value="<?= $ibu_wanita['pek']?>" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" ><strong>Tempat Tinggal</strong></label>
										<div class="col-sm-8">
											<input  class="form-control input-sm" type="text" placeholder="Tempat Tinggal" value="<?= $ibu_wanita['alamat_wilayah']?>">
										</div>
									</div>
								<?php else: ?>
									<div class="form-group ibu_wanita" >
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>B.3 DATA IBU PASANGAN WANITA (Isi jika ibu bukan warga <?= strtolower($this->setting->sebutan_desa)?> ini)</strong></label>
									</div>
									<div class="form-group ibu_wanita">
										<label class="col-sm-3 control-label" ><strong>Nama Lengkap</strong></label>
										<div class="col-sm-6">
											<input  name="nama_ibu_wanita" class="form-control input-sm" type="text" placeholder="Nama Lengkap" value="<?= $_SESSION['post']['nama_ibu_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="nik_ibu_wanita" class="form-control input-sm" type="text" placeholder="Nomor KTP Ibu Wanita" value="<?= $_SESSION['post']['nik_ibu_wanita']?>">
										</div>
									</div>
									<div class="form-group ibu_wanita">
										<label class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-5 col-lg-6">
											<input class="form-control input-sm" type="text" name="tempat_lahir_ibu_wanita" id="tempatlahir_ibu_wanita" placeholder="Tempat Lahir" value="<?= $_SESSION['post']['tempat_lahir_ibu_wanita']?>">
										</div>

										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal"  class="form-control input-sm datepicker" name="tanggallahir_ibu_wanita" type="text" placeholder="Tgl. Lahir" value="<?= $_SESSION['post']['tanggallahir_ibu_wanita']?>"/>
											</div>
										</div>
									</div>
									<div class="form-group ibu_wanita">
										<label class="col-sm-3 control-label">Warganegara / Agama / Pekerjaan</label>
										<div class="col-sm-2">
											<select class="form-control input-sm select2" name="warganegara_ibu_wanita" id="wn_ibu_wanita" style ="width:100%;">
												<option value="">-- Pilih warganegara --</option>
												<?php foreach ($warganegara as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['warganegara_ibu_wanita']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
										<div class="col-sm-3">
											<select class="form-control input-sm select2" name="agama_ibu_wanita" id="agama_ibu_wanita" style ="width:100%;">
												<option value="">-- Pilih Agama --</option>
												<?php foreach ($agama as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['agama_ibu_wanita']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
										<div class="col-sm-3">
											<select class="form-control input-sm select2" name="pekerjaan_ibu_wanita" id="pekerjaan_ibu_wanita" style ="width:100%;">
												<option value="">-- Pekerjaan --</option>
												<?php foreach ($pekerjaan as $data): ?>
													<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['pekerjaan_ibu_wanita']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									<div class="form-group ibu_wanita">
										<label class="col-sm-3 control-label" ><strong>Tempat Tinggal</strong></label>
										<div class="col-sm-8 col-lg-6">
											<input name="alamat_ibu_wanita" class="form-control input-sm" type="text" placeholder="Tempat Tinggal" value="<?= $_SESSION['post']['alamat_ibu_wanita']?>">
										</div>

										<div class="col-sm-3 col-lg-1">
											<input  name="rt_ibu_wanita" class="form-control input-sm" type="text" placeholder="RT" value="<?= $_SESSION['post']['rt_ibu_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-1">
											<input  name="rw_ibu_wanita" class="form-control input-sm" type="text" placeholder="RW" value="<?= $_SESSION['post']['rw_ibu_wanita']?>">
										</div>

									</div>

									<div class="form-group wanita_luar_desa">

										<label for="wanita_luar_desa" class="col-sm-3 control-label" ><strong>Desa / Kecamatan / Kabupaten / Provinsi </strong></label>
										<div class="col-sm-3 col-lg-2">
											<input  name="desa_ibu_wanita" class="form-control input-sm" type="text" placeholder="Desa" value="<?= $_SESSION['post']['desa_ibu_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kec_ibu_wanita" class="form-control input-sm" type="text" placeholder="Kecamatan" value="<?= $_SESSION['post']['kec_ibu_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="kab_ibu_wanita" class="form-control input-sm" type="text" placeholder="Kabupaten" value="<?= $_SESSION['post']['kab_ibu_wanita']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<input  name="prov_ibu_wanita" class="form-control input-sm" type="text" placeholder="Provinsi" value="<?= $_SESSION['post']['prov_ibu_wanita']?>">
										</div>
									</div>

								<?php endif; ?>
								
								<div class="form-group" >
									<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>C. SAKSI - SAKSI / ADAT </strong></label>
								</div>
								<div class="form-group saksi1">
									<label class="col-sm-3 control-label" ><strong>Nama Saksi I</strong></label>
									

									<div class="col-sm-6">

										<?php if(isset($saksi_1['nik'])): ?>
											<input id="saksi_1" name="saksi_1" type="hidden" value="<?= $saksi_1['nama']?>">
										<?php endif; ?>

										<select class="form-control  input-sm select2 required" id="id_saksi_1" name="id_saksi_1" style ="width:100%;"  onchange="submit_form_ambil_data(this.id);">
											<option value="">--  Cari NIK / Nama Saksi I / Banjar --</option>
											<?php foreach ($penduduk as $data): ?>
												<option value="<?= $data['id']?>" <?php if ($saksi_1['nik']==$data['nik']): ?>selected<?php endif; ?>>NIK : <?= $data['nik']." - ".$data['nama']." - ".$data['dusun']?></option>
											<?php endforeach;?>
										</select>
									</div>	

									<div class="col-sm-6">

									</div>
									
								</div>
								<div class="form-group saksi2">
									<label class="col-sm-3 control-label" ><strong>Nama Saksi II</strong></label>
									<div class="col-sm-6">

										<?php if(isset($saksi_2['nik'])): ?>
											<input id="saksi_2" name="saksi_2" type="hidden" value="<?= $saksi_2['nama']?>">
										<?php endif; ?>

										<select class="form-control  input-sm select2 required" id="id_saksi_2" name="id_saksi_2" style ="width:100%;"  onchange="submit_form_ambil_data(this.id);">
											<option value="">--  Cari NIK / Nama Saksi II / Banjar --</option>
											<?php foreach ($penduduk as $data): ?>
												<option value="<?= $data['id']?>" <?php if ($saksi_2['nik']==$data['nik']): ?>selected<?php endif; ?>>NIK : <?= $data['nik']." - ".$data['nama']." - ".$data['dusun']?></option>
											<?php endforeach;?>
										</select>
									</div>	
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Nama Kelian Adat</strong></label>
									<div class="col-sm-6">
										<?php if(isset($kelian_adat['nik'])): ?>
											<input id="nama_kelian_adat" name="nama_kelian_adat" type="hidden" value="<?= $kelian_adat['nama']?>">
										<?php endif; ?>

										<select class="form-control  input-sm select2" id="id_kelian_adat" name="id_kelian_adat" style ="width:100%;"  onchange="submit_form_ambil_data(this.id);">
											<option value="">--  Cari NIK / Nama Kelian Adat / Banjar --</option>
											<?php foreach ($penduduk as $data): ?>
												<option value="<?= $data['id']?>" <?php if ($kelian_adat['nik']==$data['nik']): ?>selected<?php endif; ?>>NIK : <?= $data['nik']." - ".$data['nama']." - ".$data['dusun']?></option>
											<?php endforeach;?>
										</select>
									</div>	
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Nama Banjar / Desa Adat</strong></label>
									<div class="col-sm-6">
										<input name="nama_banjar_adat" class="form-control input-sm" type="text" placeholder="Nama Banjar / Desa Adat" value="<?= $_SESSION['post']['nama_banjar_adat']?>">
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Pihak Purusa</strong></label>
									<div class="col-sm-6">
										<select class="form-control  input-sm select2 required" id="purusa" name="purusa" style ="width:100%;">
											<option value="LAKI" <?php if ( "LAKI" == $_SESSION['post']['purusa'] || empty($_SESSION['post']['purusa'])): ?> selected <?php endif; ?> >LAKI-LAKI</option>
											<option value="PEREMPUAN" <?php if ( "PEREMPUAN" == $_SESSION['post']['purusa']): ?> selected <?php endif; ?> >PEREMPUAN</option>
										</select>
									</div>
								</div>
								
								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Nama Pemangku / Pemuput Upacara</strong></label>
									<div class="col-sm-6">
										<input name="nama_rohaniawan" class="form-control input-sm" type="text" placeholder="Nama Pemangku / Pemuput Upacara" value="<?= $_SESSION['post']['nama_rohaniawan']?>">
									</div>
								</div>

								<div class="form-group" >
									<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>D. DATA PERNIKAHAN </strong></label>
								</div>
								<div class="form-group wali">
									<label class="col-sm-3 control-label">Hari, Tanggal, Jam Pernikahan</label>
									<div class="col-sm-3 col-lg-4">
										<input class="form-control input-sm required hari" type="text" name="hari_nikah" id="hari_nikah" readonly="readonly" placeholder="Hari Nikah" value="<?= $_SESSION['post']['hari_nikah']?>">
									</div>
									<div class="col-sm-3 col-lg-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal"  class="form-control input-sm datepicker data_hari required" name="tanggal_nikah" type="text" placeholder="Tgl. Nikah" value="<?=$_SESSION['post']['tanggal_nikah']?>"/>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
											<input class="form-control input-sm required" name="jam_nikah" id="jammenit_1" type="text" placeholder="Jam Nikah" value="<?= $_SESSION['post']['jam_nikah']?>"/>
										</div>
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label">Tanggal Melapor Pernikahan</label>
									<div class="col-sm-3 col-lg-4">
										<input class="form-control input-sm required hari" type="text" name="hari_melapor_nikah" id="hari_melapor_nikah" readonly="readonly" placeholder="Hari Melapor Nikah" value="<?= $_SESSION['post']['hari_melapor_nikah']?>">
									</div>
									<div class="col-sm-3 col-lg-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal"  class="form-control input-sm datepicker data_hari required" name="tanggal_melapor_nikah" type="text" placeholder="Tgl. Melapor Nikah" value="<?= $_SESSION['post']['tanggal_melapor_nikah']?>"/>
										</div>
									</div>
									
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Tempat</strong></label>
									<div class="col-sm-8">
										<input name="tempat_nikah" class="form-control input-sm required" type="text" placeholder="Tempat" value="<?= $_SESSION['post']['tempat_nikah']?>">
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Dinikahkan Secara Agama</strong></label>
									<div class="col-sm-3">
										<select class="form-control input-sm select2" name="agama_pernikahan" id="agama_pernikahan" style ="width:100%;">
											<option value="">-- Pilih Agama --</option>
											<?php foreach ($agama as $data): ?>
												<option value="<?= $data['nama']?>" <?php if ($data['nama']==$_SESSION['post']['agama_pernikahan']): ?> selected <?php endif; ?> ><?= $data['nama']?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Nama Badan Peradilan</strong></label>
									<div class="col-sm-8">
										<input name="nama_badan_peradilan" class="form-control input-sm" type="text" placeholder="Nama Badan Peradilan" value="<?= $_SESSION['post']['nama_badan_peradilan']?>">
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Nomor / Tanggal Putusan Penetapan Peradilan</strong></label>
									<div class="col-sm-6">
										<input name="nomor_putusan" class="form-control input-sm" type="text" placeholder="Nomor Putusan Penetapan Peradilan" value="<?= $_SESSION['post']['nomor_putusan']?>">
									</div>

									<div class="col-sm-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal"  class="form-control input-sm datepicker data_hari" name="tanggal_putusan" type="text" placeholder="Tgl. Putusan" value="<?= $_SESSION['post']['tanggal_putusan']?>"/>
										</div>
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Ijin Perwakilan bagi WNA / Nomor</strong></label>
									<div class="col-sm-6">
										<input name="nomor_perwakilan_wna" class="form-control input-sm" type="text" placeholder="Ijin Perwakilan bagi WNA / Nomor" value="<?= $_SESSION['post']['nomor_perwakilan_wna']?>">
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Jumlah Anak Yang Telah Diakui / Disahkan</strong></label>
									<div class="col-sm-1">
										<input name="anak_diakui" class="form-control input-sm" type="text" placeholder="Jumlah Anak" value="<?= $_SESSION['post']['anak_diakui']?>">
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label"><strong>Nama Anak / Nomor Akte / Tgl Akte</strong></label>
									<div class="col-sm-3">
										<input name="anak_diakui_1" class="form-control input-sm" type="text" placeholder="1. Nama Anak" value="<?= $_SESSION['post']['anak_diakui_1']?>">
									</div>
									<div class="col-sm-3">
										<input name="akte_anak_diakui_1" class="form-control input-sm" type="text" placeholder="1. Nomor Akte Anak" value="<?= $_SESSION['post']['akte_anak_diakui_1']?>">
									</div>

									<div class="col-sm-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal"  class="form-control input-sm datepicker data_hari" name="akte_anak_tanggal_1" type="text" placeholder="1. Tgl. Akte" value="<?= $_SESSION['post']['akte_anak_tanggal_1']?>"/>
										</div>
									</div>
								</div>
								
								<div class="form-group wali">
									<label class="col-sm-3 control-label"><strong>&nbsp;</strong></label>
									<div class="col-sm-3">
										<input name="anak_diakui_2" class="form-control input-sm" type="text" placeholder="2. Nama Anak" value="<?= $_SESSION['post']['anak_diakui_2']?>">
									</div>
									<div class="col-sm-3">
										<input name="akte_anak_diakui_2" class="form-control input-sm" type="text" placeholder="2. Nomor Akte Anak" value="<?= $_SESSION['post']['akte_anak_diakui_2']?>">
									</div>

									<div class="col-sm-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal"  class="form-control input-sm datepicker data_hari" name="akte_anak_tanggal_2" type="text" placeholder="2. Tgl. Akte" value="<?= $_SESSION['post']['akte_anak_tanggal_2']?>"/>
										</div>
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label"><strong>&nbsp;</strong></label>
									<div class="col-sm-3">
										<input name="anak_diakui_3" class="form-control input-sm" type="text" placeholder="3. Nama Anak" value="<?= $_SESSION['post']['anak_diakui_3']?>">
									</div>
									<div class="col-sm-3">
										<input name="akte_anak_diakui_3" class="form-control input-sm" type="text" placeholder="3. Nomor Akte Anak" value="<?= $_SESSION['post']['akte_anak_diakui_3']?>">
									</div>

									<div class="col-sm-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal"  class="form-control input-sm datepicker data_hari" name="akte_anak_tanggal_3" type="text" placeholder="3. Tgl. Akte" value="<?= $_SESSION['post']['akte_anak_tanggal_3']?>"/>
										</div>
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label"><strong>&nbsp;</strong></label>
									<div class="col-sm-3">
										<input name="anak_diakui_4" class="form-control input-sm" type="text" placeholder="4. Nama Anak" value="<?= $_SESSION['post']['anak_diakui_4']?>">
									</div>
									<div class="col-sm-3">
										<input name="akte_anak_diakui_4" class="form-control input-sm" type="text" placeholder="4. Nomor Akte Anak" value="<?= $_SESSION['post']['akte_anak_diakui_4']?>">
									</div>

									<div class="col-sm-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal"  class="form-control input-sm datepicker data_hari" name="akte_anak_tanggal_4" type="text" placeholder="4. Tgl. Akte" value="<?= $_SESSION['post']['akte_anak_tanggal_4']?>"/>
										</div>
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label"><strong>&nbsp;</strong></label>
									<div class="col-sm-3">
										<input name="anak_diakui_5" class="form-control input-sm" type="text" placeholder="5. Nama Anak" value="<?= $_SESSION['post']['anak_diakui_5']?>">
									</div>
									<div class="col-sm-3">
										<input name="akte_anak_diakui_5" class="form-control input-sm" type="text" placeholder="5. Nomor Akte Anak" value="<?= $_SESSION['post']['akte_anak_diakui_5']?>">
									</div>

									<div class="col-sm-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal"  class="form-control input-sm datepicker data_hari" name="akte_anak_tanggal_5" type="text" placeholder="5. Tgl. Akte" value="<?= $_SESSION['post']['akte_anak_tanggal_5']?>"/>
										</div>
									</div>
								</div>

								<div class="form-group wali">
									<label class="col-sm-3 control-label"><strong>&nbsp;</strong></label>
									<div class="col-sm-3">
										<input name="anak_diakui_6" class="form-control input-sm" type="text" placeholder="6. Nama Anak" value="<?= $_SESSION['post']['anak_diakui_6']?>">
									</div>
									<div class="col-sm-3">
										<input name="akte_anak_diakui_6" class="form-control input-sm" type="text" placeholder="6. Nomor Akte Anak" value="<?= $_SESSION['post']['akte_anak_diakui_6']?>">
									</div>

									<div class="col-sm-2">
										<div class="input-group input-group-sm date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input title="Pilih Tanggal"  class="form-control input-sm datepicker data_hari" name="akte_anak_tanggal_6" type="text" placeholder="6. Tgl. Akte" value="<?= $_SESSION['post']['akte_anak_tanggal_6']?>"/>
										</div>
									</div>
								</div>

								<div class="form-group" >
									<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>E. PENERIMA KUASA </strong></label>
								</div>


								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Nama Penerima Kuasa</strong></label>
									<div class="col-sm-6">
										<?php if(isset($penerima_kuasa['nik'])): ?>
											<input id="nama_penerima_kuasa" name="nama_penerima_kuasa" type="hidden" value="<?= $penerima_kuasa['nama']?>">
										<?php endif; ?>

										<select class="form-control  input-sm select2 required" id="id_penerima_kuasa" name="id_penerima_kuasa" style ="width:100%;"  onchange="submit_form_ambil_data(this.id);">
											<option value="">--  Cari NIK / Penerima Kuasa --</option>
											<?php foreach ($penduduk as $data): ?>
												<option value="<?= $data['id']?>" <?php if ($penerima_kuasa['nik']==$data['nik']): ?>selected<?php endif; ?>>NIK : <?= $data['nik']." - ".$data['nama']?></option>
											<?php endforeach;?>
										</select>
										
									</div>
									
								</div>
								<div class="form-group wali">
									<label class="col-sm-3 control-label" ><strong>Alamat Penerima Kuasa</strong></label>
									<div class="col-sm-6">
										<?php if(isset($penerima_kuasa['nik'])): ?>
											<input name="alamat_penerima_kuasa" class="form-control input-sm" type="text" disabled placeholder="Alamat Penerima Kuasa" value="<?=$penerima_kuasa['alamat']?>">
										<?php else: ?>	
											<input name="alamat_penerima_kuasa" class="form-control input-sm" type="text" disabled placeholder="Alamat Penerima Kuasa" value="">
										<?php endif; ?>
									</div>
								</div>

								

								<div class="form-group" >
									<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>F. PENANDA TANGAN </strong></label>
								</div>
								<?php include("donjo-app/views/surat/form/_pamong.php"); ?>
							</div>
						</form>
					</div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
				<div class='modal fade' id='dialog' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
					<div class='modal-dialog'>
						<div class='modal-content'>
							<div class='modal-header'>
								<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
								<h4 class='modal-title' id='myModalLabel'><i class='fa fa-text-width text-yellow'></i> Perhatian</h4>
							</div>
							<div class='modal-body btn-info'>
								Salah satu calon pasangan, pria atau wanita, harus warga desa.
							</div>
							<div class='modal-footer'>
								<button type="button" class="btn btn-social btn-flat btn-warning btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
