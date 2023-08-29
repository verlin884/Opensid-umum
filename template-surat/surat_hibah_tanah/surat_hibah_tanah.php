<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<script language="javascript" type="text/javascript">
  function ubah_pelaku(peran, asal)
	{
    $('#'+peran).val(asal);
    if (asal == 1)
		{
      $('.'+peran+'_desa').show();
      $('.'+peran+'_luar_desa').hide();
      // Mungkin bug di jquery? Terpaksa hapus class radio button
      $('#label_'+peran+'_2').removeClass('ui-state-active');
    }
		else
		{
      $('.'+peran+'_desa').hide();
      $('.'+peran+'_luar_desa').show();
			$('#nik').val(''); // Hapus id
      submit_form_ambil_data();
    }
    $('input[name=anchor').val(peran);
  }
  	function ubah_penerimahibahii(asal)
	{
		if (asal == 1)
		{
			$('.penerimahibahii_desa').show();
			$('.penerimahibahii_luar_desa').hide();
			$('input[name=anchor').val('a_penerimahibahii');
		}
		else
		{
			$('.penerimahibahii_desa').hide();
			$('.penerimahibahii_luar_desa').show();
			$('#id_penerimahibahii').val('*'); // Hapus $id_penerimahibahii
			submit_form_ambil_data('a_penerimahibahii');
		}
	}

  function ubah_saksi1(asal)
	{
    $('#saksi1').val(asal);
    if (asal == 1)
		{
      $('.saksi1_desa').show();
      $('.saksi1_luar_desa').hide();
      // Mungkin bug di jquery? Terpaksa hapus class radio button
      $('#label_saksi1_2').removeClass('active');
    }
		else
		{
      $('.saksi1_desa').hide();
			$('.saksi1_luar_desa').show();
			$('#id_saksi1').val(''); // Hapus id
			$('#id_saksi1_validasi').val('*'); // Hapus id
			submit_form_ambil_data();
    }
    $('input[name=anchor').val('saksi1');
  }


  function ubah_saksi2(asal)
	{
    $('#saksi2').val(asal);
    if (asal == 1)
		{
      $('.saksi2_desa').show();
      $('.saksi2_luar_desa').hide();
      // Mungkin bug di jquery? Terpaksa hapus class radio button
      $('#label_saksi2_2').removeClass('active');
    }
		else
		{
      $('.saksi2_desa').hide();
			$('.saksi2_luar_desa').show();
			$('#id_saksi2').val(''); // Hapus id
      $('#id_saksi2_validasi').val('*'); // Hapus id
      submit_form_ambil_data();
    }
    $('input[name=anchor').val('saksi2');
  }
  function submit_form_ambil_data()
	{
    $('input').removeClass('required');
    $('select').removeClass('required');
    $('#'+'validasi').attr('action','');
    $('#'+'validasi').attr('target','');
    $('#'+'validasi').submit();
    }
	$('document').ready(function()
	{
		/* pergi ke bagian halaman sesudah mengisi warga desa */
		setTimeout(function() {location.hash = "#" + $('input[name=anchor]').val();}, 500);
	});
</script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Pernyataan Hibah Tanah</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Pernyataan Hibah Tanah</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<input id="nik_validasi" name="nik" type="hidden" value="<?= $_SESSION['post']['nik']?>">
			<input id="id_pemohon_validasi" name="id_pemohon" type="hidden" value="">
			<input id="id_saksi1_validasi" name="id_saksi1" type="hidden" value="<?= $_SESSION['id_saksi1']?>"/>
			<input id="id_saksi2_validasi" name="id_saksi2" type="hidden" value="<?= $_SESSION['id_saksi2']?>"/>
			 
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?=site_url("surat")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Wilayah">
							<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
												 </a>
						 <a href="#" class="btn btn-social btn-flat btn-primary btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Lihat Info Isian Surat"  data-toggle="modal" data-target="#infoBox" data-title="Lihat Info Isian Surat">
						 	<i class="fa fa-info-circle"></i> Info Isian Surat
						</a>
					</div>

					<div class="box-body">

						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat')?>">
							<div class="col-md-12">

								<div class="form-group">
									<label for="nomor"  class="col-sm-3 control-label">Nomor Surat</label>
									<div class="col-sm-8">
										<input  id="nomor" class="form-control input-sm required" type="text" placeholder="Nomor Surat" name="nomor" value="<?= $_SESSION['post']['nomor']; ?>">
										<p class="help-block text-red small"><?= $surat_terakhir['ket_nomor']?><strong><?= $surat_terakhir['no_surat'];?></strong> (tgl: <?= $surat_terakhir['tanggal']?>)</p>
									</div>
							</div>	 
					</div>
					<div class="box-body">
						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-horizontal">
							<div class="col-md-12">
								<input id="nik_validasi" name="nik" type="hidden" value="<?= $_SESSION['post']['nik']?>">
								<input id="id_pemohon_validasi" name="id_pemohon" type="hidden" value="">
								<input id="id_saksi1_validasi" name="id_saksi1" type="hidden" value="<?= $_SESSION['id_saksi1']?>"/>
								<input id="id_saksi2_validasi" name="id_saksi2" type="hidden" value="<?= $_SESSION['id_saksi2']?>"/>
								 
								<div class="form-group subtitle_head">
								<label class="col-sm-3 control-label" for="status">IDENTITAS PEMBERI HIBAH</label>
									<div class="btn-group col-sm-8" data-toggle="buttons">
										<label id="pemohon_11" class="btn btn-info btn-flat btn-sm col-sm-2 form-check-label <?php if (!empty($individu)): ?>active<?php endif ?>">
											<input id="pemohon_1" type="radio" name="pemohon" class="form-check-input" type="radio" value="1" <?php if (!empty($individu)): ?>checked <?php endif ?> autocomplete="off" onchange="ubah_pelaku('pemohon',this.value);"> Warga Desa
										</label>
										<label id="pemohon_22" class="btn btn-info btn-flat btn-sm col-sm-2 form-check-label <?php if (empty($individu)): ?>active<?php endif; ?>">
											<input id="pemohon_2" type="radio" name="pemohon" class="form-check-input" type="radio" value="2" <?php if (empty($individu)): ?>checked<?php endif; ?> autocomplete="off" onchange="ubah_pelaku('pemohon',this.value);"> Warga Luar Desa
										</label>
									</div>
									</div>
								<div class="form-group pemohon_desa" <?php if (empty($individu)): ?>style="display: none;"<?php endif; ?>>
									<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA PEMBERI WARGA DESA</strong></label>
								</div>
								<div class="form-group pemohon_desa" <?php if (empty($individu)): ?>style="display: none;"<?php endif; ?>>
									<label for="nik"  class="col-sm-3 control-label">NIK / Nama</label>
									<div class="col-sm-6 col-lg-4">
										<select class="form-control input-sm select2-nik-ajax" id="nik" name="nik" style="width:100%;" data-url="<?= site_url('surat/list_penduduk_ajax')?>" onchange="submit_form_ambil_data();">
											<option value="">--  Cari NIK / Nama Penduduk--</option>
											<?php foreach ($penduduk as $data): ?>
												<option value="<?= $data['id']?>" <?php selected($individu['nik'], $data['nik']); ?>><?= $data['info_pilihan_penduduk']?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<?php if ($individu): ?>
									<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
								<?php	endif; ?>
								<?php if (empty($individu)): ?>
									<div class="form-group pemohon_luar_desa" >
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA PEMBERI HIBAH LUAR DESA</strong></label>
									</div>
									<div class="form-group pemohon_luar_desa">
										<label for="nomor"  class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-8">
											<input name="nama_non_warga" class="form-control input-sm required" type="text" placeholder="Nama" value="<?= $_SESSION['post']['nama_non_warga']?>">
										</div>
									</div>
									<div class="form-group pemohon_luar_desa">
										<label for="nik_non_warga"  class="col-sm-3 control-label">Nomor KTP</label>
										<div class="col-sm-4">
											<input name="nik_non_warga" class="form-control input-sm required" type="text" placeholder="Nomor KTP" value="<?= $_SESSION['post']['nik_non_warga']?>">
										</div>
									 
										</div>
									<div class="form-group pemohon_luar_desa">
										<label for="jeniskelamin_pemohon"  class="col-sm-3 control-label">Jenis Kelamin</label>
										<div class="col-sm-4">
											<input name="jeniskelamin_pemohon" class="form-control input-sm required" type="text" placeholder="Jenis Kelamin" value="<?= $_SESSION['post']['jeniskelamin_pemohon']?>">
										</div>
									</div>
									<div class="form-group pemohon_luar_desa">
										<label for="tempatlahir_pemohon"  class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
										<div class="col-sm-4">
											<input name="tempatlahir_pemohon" class="form-control input-sm required" type="text" placeholder="Tempat Lahir" value="<?= $_SESSION['post']['tempatlahir_pemohon']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal" class="form-control input-sm datepicker required" name="tanggallahir_pemohon" type="text" placeholder="dd - mm - yyyy" value="<?= $_SESSION['post']['tanggallahir_pemohon']?>"/>
											</div>
										</div>
									</div>
									<div class="form-group pemohon_luar_desa">
										<label for="pekerjaan_pemohon"  class="col-sm-3 control-label">Pekerjaan</label>
										<div class="col-sm-8">
											<input id="pekerjaan_pemohon" class="form-control input-sm required" type="text" placeholder="Pekerjaan" name="pekerjaan_pemohon"value="<?= $_SESSION['post']['pekerjaan_pemohon']?>"/>
										</div>
									</div>
									<div class="form-group pemohon_luar_desa">
										<label for="alamat_pemohon"  class="col-sm-3 control-label">Tempat Tinggal</label>
										<div class="col-sm-8">
											<input id="alamat_pemohon" class="form-control input-sm required" type="text" placeholder="Tempat Tinggal" name="alamat_pemohon"value="<?= $_SESSION['post']['alamat_pemohon']?>"/>
										</div>
									 </div>
								<?php endif; ?>
								 <div class="form-group subtitle_head" id="Dusun">
								<label class="col-sm-4 control-label">DETAIL IDENTITAS TANAH YANG DI HIBAHKAN<br></label>
							 	</div>
                                     <div class="form-group Dusun">
										<label for="Dusun" class="col-sm-3 control-label" > Nama Dusun  / RT / RW </label>
									<div class="col-sm-2">
										<input name="Dusun_nama" type="hidden" value="<?= $Dusun[$_SESSION['post']['Dusun']] ?>">
										<select class="form-control input-sm required" name="Dusun" onchange="$('input[name=Dusun_nama]').val($(this).find(':selected').data('Dusunnama'));">
											<option value="">-- Pilih Dusun --</option>
											<?php foreach ($Dusun as $id => $nama): ?>
												<option value="<?= $id?>" data-Dusunnama="<?= $nama; ?>" <?php if ($id==$_SESSION['post']['Dusun']): ?>selected<?php endif; ?>><?= $nama; ?></option>
											<?php endforeach;?>
											</select>
										</div>
								       <div class="col-sm-2">
										<input name="RT_nama" type="hidden" value="<?= $RT[$_SESSION['post']['RT']] ?>">
										<select class="form-control input-sm required" name="RT" onchange="$('input[name=RT_nama]').val($(this).find(':selected').data('RTnama'));">
											<option value="">-- Pilih RT --</option>
											<?php foreach ($RT as $id => $nama): ?>
												<option value="<?= $id?>" data-RTnama="<?= $nama; ?>" <?php if ($id==$_SESSION['post']['RT']): ?>selected<?php endif; ?>><?= $nama; ?></option>
											<?php endforeach;?>
										</select>
									</div>
									 <div class="col-sm-2">
										<input name="RW_nama" type="hidden" value="<?= $RW[$_SESSION['post']['RW']] ?>">
										<select class="form-control input-sm required" name="RW" onchange="$('input[name=RW_nama]').val($(this).find(':selected').data('RWnama'));">
											<option value="">-- Pilih RW --</option>
											<?php foreach ($RW as $id => $nama): ?>
												<option value="<?= $id?>" data-RWnama="<?= $nama; ?>" <?php if ($id==$_SESSION['post']['RW']): ?>selected<?php endif; ?>><?= $nama; ?></option>
											<?php endforeach;?>
										</select>
										</div>
										</div>
									  <div class="form-group">
									<label for="desalurah"  class="col-sm-3 control-label">Desa / Kecamatan</label>
									<div class="col-sm-4">
										<input name="desalurah" class="form-control input-sm" type="text" placeholder="Desa / Kelurahan" value="<?= $desa['nama_desa']?>">
									</div>
									 <div class="col-sm-4">
										<input name="camatt" class="form-control input-sm" type="text" value="<?= $desa['nama_kecamatan']?>">
									</div>
								</div>
								<div class="form-group">
									<label for="kabb"  class="col-sm-3  control-label">Kabupaten / Provinsi</label>
									<div class="col-sm-4">
										<input name="kabb" class="form-control input-sm" type="text" value="<?= $desa['nama_kabupaten']?>">
									</div>
									<div class="col-sm-4">
										<input name="propp" class="form-control input-sm" type="text" value="<?= $desa['nama_propinsi']?>">
									</div>
									</div>
									<div class="form-group">
										<label for="jenis_tanah" class="col-sm-3 control-label" >Jenis Tanah / No. SPPT</label>
										<div class="col-sm-4">
										<input name="jenis_tanah_nama" type="hidden" value="<?= $jenis_tanah[$_SESSION['post']['jenis_tanah']] ?>">
										<select class="form-control input-sm required" name="jenis_tanah" onchange="$('input[name=jenis_tanah_nama]').val($(this).find(':selected').data('jenis_tanahnama'));">
											<option value="">-- Pilih Jenis Tanah --</option>
											<?php foreach ($jenis_tanah as $id => $nama): ?>
												<option value="<?= $id?>" data-jenis_tanahnama="<?= $nama; ?>" <?php if ($id==$_SESSION['post']['jenis_tanah']): ?>selected<?php endif; ?>><?= $nama; ?></option>
											<?php endforeach;?>
										</select>
										</div>
                                        <div class="col-sm-4">
										<input id="nib" class="form-control input-sm required" type="text" placeholder="52.08.030.001.022-0012.0" name="nib" value="<?= $_SESSION['post']['nib']?>">
										</div>
										 </div>
				                    <div class="form-group">
										<label for="luas_tanah"  class="col-sm-3 control-label">Luas Tanah Yang Dihibahkan</label>
										<div class="col-sm-8">
											<input id="luas_tanah" class="form-control input-sm required" type="text" placeholder="Ketik Angka Saja" name="luas_tanah" value="<?= $_SESSION['post']['luas_tanah']?>">
										</div>
							 	</div>
								<div class="form-group subtitle_head" id="batas-batas_tanah">
								<label class="col-sm-3 control-label">BATAS - BATAS SANDINGAN TANAH<br></label>
							 	</div>
                            <div class="form-group">
								<div class="col-sm-6">
									<label for="utara"> </label>
									<input name="utara" class="form-control input-sm required" placeholder="Batas Sebelah Utara"value="<?= $_SESSION['post']['utara']?>">  
								</div>
								</div>
								<div class="form-group">
								<div class="col-sm-6">
									<label for="selatan"> </label>
									<input name="selatan" class="form-control input-sm required" placeholder="Batas Sebelah Selatan"value="<?= $_SESSION['post']['selatan']?>">  
								</div>
								</div>
								<div class="form-group">
								<div class="col-sm-6">
									<label for="timur"> </label>
									<input name="timur" class="form-control input-sm required" placeholder="Batas Sebelah Timur" value="<?= $_SESSION['post']['timur']?>">  
								</div>
							    </div>
								<div class="form-group">
								<div class="col-sm-6">
									<label for="barat"> </label>
									<input name="barat" class="form-control input-sm required" placeholder="Batas Sebelah Barat"value="<?= $_SESSION['post']['barat']?>">  
								</div>
										</div>
										<!-- pembelii -->
								<div class="form-group subtitle_head" id="a_penerimahibahii">
									<label class="col-sm-3 control-label" for="status">IDENTITAS PENERIMA HIBAH</label>
									<div class="btn-group col-sm-8" data-toggle="buttons">
										<label class="btn btn-info btn-flat btn-sm col-sm-4 col-sm-4 col-md-4 col-lg-3 form-check-label <?php if (!empty($penerimahibahii)): ?>active<?php endif ?>">
											<input id="penerimahibahii_1" type="radio" name="penerimahibahii" class="form-check-input" type="radio" value="1" <?php if (!empty($penerimahibahii)): ?>checked<?php endif; ?> autocomplete="off" onchange="ubah_penerimahibahii(this.value);"> Warga Desa
										</label>
										<label id="label_penerimahibahii_2"  class="btn btn-info btn-flat btn-sm col-sm-4 col-md-4 col-lg-3 form-check-label <?php if (empty($penerimahibahii)): ?>active<?php endif; ?>">
											<input id="penerimahibahii_2" type="radio" name="penerimahibahii" class="form-check-input" type="radio" value="2" <?php if (empty($penerimahibahii)): ?>checked<?php endif; ?> autocomplete="off" onchange="ubah_penerimahibahii(this.value);"> Warga Luar Desa
										</label>
									</div>
								</div>

								<div class="form-group penerimahibahii_desa" <?php if (empty($penerimahibahii)): ?>style="display: none;"<?php endif; ?>>
									<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA ENERIMA HIBAH DARI DATABASE</strong></label>
								</div>

								<div class="form-group penerimahibahii_desa" <?php if (empty($penerimahibahii)): ?>style="display: none;"<?php endif; ?>>
									<label for="penerimahibahii_desa" class="col-sm-3 control-label" ><strong>NIK / Nama</strong></label>
									<div class="col-sm-5">
										<select class="form-control input-sm select2-nik-ajax" id="id_penerimahibahii" name="id_penerimahibahii" style="width:100%;" data-url="<?= site_url('surat/list_penduduk_ajax')?>"  onchange="submit_form_ambil_data('a_penerimahibahii');">
											<option value="">--  Cari NIK / Nama Penduduk--</option>
											<?php foreach ($penduduk as $data): ?>
												<option value="<?= $data['id']?>" <?php selected($penerimahibahii['nik'], $data['nik']); ?>><?= $data['info_pilihan_penduduk']?></option>
											<?php endforeach;?>
										</select>
									</div>
								</div>

								<?php if ($penerimahibahii): ?>
									<?php $individu = $penerimahibahii;?>
									<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
								<?php endif; ?>

								<?php if (empty($penerimahibahii)): ?>
									<div class="form-group penerimahibahii_luar_desa" >
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA PENERIMA HIBAH DARI LUAR DESA</strong></label>
									</div>
									<div class="form-group penerimahibahii_luar_desa">
										<label for="nama_penerimahibahii" class="col-sm-3 control-label">Nama Penerimahibahii</label>
										<div class="col-sm-8">
											<input  class="form-control input-sm required" type="text" placeholder="Nama Penerimahibahii" name="nama_penerimahibahii" value="<?= $_SESSION['post']['nama_penerimahibahii']?>">
										</div>
									</div>
									<div class="form-group penerimahibahii_luar_desa">
										<label for="nik_penerimahibahii"  class="col-sm-3 control-label">NIK Penerimahibahii</label>
										<div class="col-sm-8">
											<input  class="form-control input-sm required" type="text" placeholder="NIK Penerimahibahii" name="nik_penerimahibahii" value="<?= $_SESSION['post']['nik_penerimahibahii']?>">
										</div>
									</div>
									<div class="form-group penerimahibahii_luar_desa">
										<label for="tempat_lahir_penerimahibahii"  class="col-sm-3 control-label">Tempat  / Tanggal Lahir / Umur</label>
										<div class="col-sm-3 col-lg-4">
											<input class="form-control input-sm required" type="text" name="tempat_lahir_penerimahibahii" id="tempat_lahir_penerimahibahii" placeholder="Tempat Lahir Penerimahibahii" value="<?= $_SESSION['post']['tempat_lahir_penerimahibahii']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal" class="form-control input-sm required datepicker" name="tanggal_lahir_penerimahibahii" type="text" placeholder="Tgl. Lahir" value="<?= $_SESSION['post']['tanggal_lahir_penerimahibahii']?>" onchange="$('input[name=umur_penerimahibahii]').val(_calculateAge($(this).val()));"/>
											</div>
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" name="umur_penerimahibahii" readonly="readonly" placeholder="Umur (Tahun)" type="text" value="<?= $_SESSION['post']['umur_penerimahibahii']?>">
										</div>
									</div>

									<div class="form-group penerimahibahii_luar_desa">
										<label for="jkpenerimahibahii" class="col-sm-3 control-label" ><strong>Jenis Kelamin / Pekerjaan</strong></label>
										<div class="col-sm-4">
											<input type="hidden" name="jkid_penerimahibahii">
											<select class="form-control input-sm required" name="jkpenerimahibahii" id="jkpenerimahibahii" onchange="$('input[name=jkid_penerimahibahii]').val($(this).find(':selected').data('jkid'));">
												<option value="">-- Jenis Kelamin --</option>
												<?php foreach ($sex as $data): ?>
													<option value="<?= ucwords(strtolower($data['nama']))?>" data-jkid="<?= $data['id']?>" <?php selected(ucwords(strtolower($data['nama'])), $_SESSION['post']['jkpenerimahibahii']) ?>><?= ucwords($data['nama'])?></option>
												<?php endforeach;?>
											</select>
										</div>
										<div class="col-sm-4">
											<input type="hidden" name="pekerjaanid_penerimahibahii">
											<select class="form-control input-sm required" name="pekerjaanpenerimahibahii" id="pekerjaanpenerimahibahii" onchange="$('input[name=pekerjaanid_penerimahibahii]').val($(this).find(':selected').data('pekerjaanid'));">
												<option value="">-- Pekerjaan --</option>
												<?php foreach ($pekerjaan as $data): ?>
													<option value="<?= $data['nama']?>" data-pekerjaanid="<?= $data['id']?>" <?php if ($data['nama']==$_SESSION['post']['pekerjaanpenerimahibahii']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									<div class="form-group penerimahibahii_luar_desa">
										<label for="alamat_penerimahibahii"  class="col-sm-3 control-label">Alamat / RT / RW</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="alamat_penerimahibahii" id="alamat_penerimahibahii" placeholder="Alamat" value="<?= $_SESSION['post']['alamat_penerimahibahii']?>">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" type="text" name="rt_penerimahibahii" id="rt_penerimahibahii" placeholder="RT" value="<?= $_SESSION['post']['rt_penerimahibahii']?>">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" name="rw_penerimahibahii" id="rw_penerimahibahii"  type="text" placeholder="RW" value="<?= $_SESSION['post']['rw_penerimahibahii']?>">
										</div>
									</div>
									<div class="form-group penerimahibahii_luar_desa">
										<label for="alamat_penerimahibahii"  class="col-sm-3 control-label">Desa / Kecamatan</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="desapenerimahibahii" id="desapenerimahibahii" placeholder="Desa" value="<?= $_SESSION['post']['desapenerimahibahii']?>">
										</div>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="kecpenerimahibahii" id="kecpenerimahibahii" placeholder="Kecamatan" value="<?= $_SESSION['post']['kecpenerimahibahii']?>">
										</div>
									</div>
									<div class="form-group penerimahibahii_luar_desa">
										<label for="alamat_penerimahibahii"  class="col-sm-3 control-label">Kabupaten / Provinsi</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="kabpenerimahibahii" id="kabpenerimahibahii" placeholder="Kabupaten" value="<?= $_SESSION['post']['kabpenerimahibahii']?>">
										</div>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="provinsipenerimahibahii" id="provinsipenerimahibahii" placeholder="Provinsi" value="<?= $_SESSION['post']['provinsipenerimahibahii']?>">
										</div>
									</div>
								<?php endif; ?>

								<!-- akhir pembelii -->
                              
							  </div>
							<div class="col-md-12">
								<div class="form-group subtitle_head">
									<label class="col-sm-3 control-label" for="status">SAKSI 1</label>
									<div class="btn-group col-sm-8" data-toggle="buttons">
										<label class="btn btn-info btn-flat btn-sm col-sm-2 form-check-label <?php if (!empty($saksi1)): ?>active<?php endif ?>">
											<input id="saksi1_1" type="radio" name="saksi1" class="form-check-input" type="radio" value="1" <?php if (!empty($saksi)): ?>checked<?php endif ?> onchange="ubah_saksi1(this.value);"> Warga Desa
										</label>
										<label id="label_saksi1_2" class="btn btn-info btn-flat btn-sm col-sm-2 form-check-label <?php if (empty($saksi1)): ?>active<?php endif; ?>">
											<input id="saksi1_2" type="radio" name="saksi1" class="form-check-input" type="radio" value="2" <?php if (empty($saksi1)): ?>checked<?php endif; ?> onchange="ubah_saksi1(this.value);"> Warga Luar Desa
										</label>
									</div>
								</div>
								<div class="form-group saksi1_desa" <?php if (empty($saksi1)): ?>style="display: none;"<?php endif; ?>>
									<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA SAKSI 1 WARGA DESA</strong></label>
								</div>
								<div class="form-group saksi1_desa" <?php if (empty($saksi1)): ?>style="display: none;"<?php endif; ?>>
									<label for="id_saksi1"  class="col-sm-3 control-label">NIK / Nama</label>
									<div class="col-sm-6 col-lg-4">
										<select class="form-control input-sm select2-nik-ajax" id="id_saksi1" name="id_saksi1" style="width:100%;" data-url="<?= site_url('surat/list_penduduk_ajax')?>" onchange="submit_form_ambil_data();">
											<option value="">--  Cari NIK / Nama Penduduk--</option>
											<?php foreach ($penduduk as $data): ?>
												<option value="<?= $data['id']?>" <?php selected($saksi1['nik'], $data['nik']); ?>><?= $data['info_pilihan_penduduk']?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<?php if ($saksi1): //bagian info setelah terpilih
									$individu = $saksi1;
									include("donjo-app/views/surat/form/konfirmasi_pemohon.php");
								endif; ?>

								<?php if (empty($saksi1)): ?>
									<div class="form-group saksi1_luar_desa">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA SAKSI 1 LUAR DESA</strong></label>
									</div>
									<div class="form-group saksi1_luar_desa">
										<label for="namasaksii"  class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-8">
											<input name="namasaksii" class="form-control input-sm required" type="text" placeholder="Nama Saksi 1" value="<?= $_SESSION['post']['namasaksii']?>">
										</div>
									</div>
									<div class="form-group saksi1_luar_desa">
										<label for="umursaksii" class="col-sm-3 control-label">Umur</label>
										<div class="col-sm-2">
											<input name="umursaksii" class="form-control input-sm required" type="text" placeholder="Umur Saksi 1 (Tahun)" value="<?= $_SESSION['post']['umursaksii']?>">
										</div>
									</div>
									<div class="form-group saksi1_luar_desa">
										<label for="pekerjaansaksii" class="col-sm-3 control-label">Pekerjaan</label>
										<div class="col-sm-8">
											<input name="pekerjaansaksii" class="form-control input-sm required" type="text" placeholder="Pekerjaan Saksi 1" value="<?= $_SESSION['post']['pekerjaansaksii']?>">
										</div>
									</div>
									<div class="form-group saksi1_luar_desa">
										<label for="alamatsaksii" class="col-sm-3 control-label">Alamat</label>
										<div class="col-sm-8">
											<input name="alamatsaksii" class="form-control input-sm required" type="text" placeholder="Alamat Saksi 1" value="<?= $_SESSION['post']['alamatsaksii']?>">
										</div>
									</div>
								<?php endif; ?>
							</div>
							<div class="col-md-12">
								<div class="form-group subtitle_head">
									<label class="col-sm-3 control-label" for="status">SAKSI 2</label>
									<div class="btn-group col-sm-8" data-toggle="buttons">
										<label class="btn btn-info btn-flat btn-sm col-sm-2 form-check-label <?php if (!empty($saksi2)): ?>active<?php endif ?>">
											<input id="saksi2_1" type="radio" name="saksi2" class="form-check-input" type="radio" value="1" <?php if (!empty($saksi2)): ?>checked <?php endif ?> autocomplete="off" onchange="ubah_saksi2(this.value);"> Warga Desa
										</label>
										<label id="label_saksi2_2" class="btn btn-info btn-flat btn-sm col-sm-2 form-check-label <?php if (empty($saksi2)): ?>active<?php endif; ?>">
											<input id="saksi2_2" type="radio" name="saksi2" class="form-check-input" type="radio" value="2" <?php if (empty($saksi2)): ?>checked<?php endif; ?> autocomplete="off" onchange="ubah_saksi2(this.value);"> Warga Luar Desa
										</label>
									</div>
								</div>
								<div class="form-group saksi2_desa" <?php if (empty($saksi2)): ?>style="display: none;"<?php endif; ?>>
									<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA SAKSI 2 WARGA DESA</strong></label>
								</div>
								<div class="form-group saksi2_desa" <?php if (empty($saksi2)): ?>style="display: none;"<?php endif; ?>>
									<label for="id_saksi2"  class="col-sm-3 control-label">NIK / Nama</label>
									<div class="col-sm-6 col-lg-4">
										<select class="form-control input-sm select2-nik-ajax" id="id_saksi2" name="id_saksi2" style="width:100%;" data-url="<?= site_url('surat/list_penduduk_ajax')?>" onchange="submit_form_ambil_data();">
											<option value="">--  Cari NIK / Nama Penduduk--</option>
											<?php foreach ($penduduk as $data): ?>
												<option value="<?= $data['id']?>" <?php selected($saksi2['nik'], $data['nik']); ?>><?= $data['info_pilihan_penduduk']?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<?php if ($saksi2): //bagian info setelah terpilih
									$individu = $saksi2;
									include("donjo-app/views/surat/form/konfirmasi_pemohon.php");
								endif; ?>
								<?php if (empty($saksi2)): ?>
									<div class="form-group saksi2_luar_desa">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA SAKSI 2 LUAR DESA</strong></label>
									</div>
									<div class="form-group saksi2_luar_desa">
										<label for="namasaksiii"  class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-8">
											<input name="namasaksiii" class="form-control input-sm required" type="text" placeholder="Nama Saksi 2" value="<?= $_SESSION['post']['namasaksii']?>">
										</div>
									</div>
									<div class="form-group saksi2_luar_desa">
										<label for="umursaksiii" class="col-sm-3 control-label">Umur</label>
										<div class="col-sm-2">
											<input name="umursaksiii" class="form-control input-sm required" type="text" placeholder="Umur Saksi 2 (Tahun)" value="<?= $_SESSION['post']['umursaksiii']?>">
										</div>
									</div>
									<div class="form-group saksi2_luar_desa">
										<label for="pekerjaansaksiii" class="col-sm-3 control-label">Pekerjaan</label>
										<div class="col-sm-8">
											<input name="pekerjaansaksiii" class="form-control input-sm required" type="text" placeholder="Pekerjaan Sakasi 2" value="<?= $_SESSION['post']['pekerjaansaksiii']?>">
										</div>
									</div>
									<div class="form-group saksi2_luar_desa">
										<label for="alamatsaksiii" class="col-sm-3 control-label">Alamat</label>
										<div class="col-sm-8">
											<input name="alamatsaksiii" class="form-control input-sm required" type="text" placeholder="Alamat Saksi 2" value="<?= $_SESSION['post']['alamatsaksiii']?>">
										</div>
									</div>
								<?php endif; ?>
							 	 <div class="form-group subtitle_head" id="penandatangan">
								<label class="col-sm-3 control-label">PENANDA TANGAN<br></label>
							 	</div>
                                <div class="form-group nama_perangkat_kewilayahan">
										<label for="pamong" class="col-sm-3 control-label" ><strong>Nama Kawil Lokasi Tanah</strong></label>
										<div class="col-sm-4">
											<input type="hidden" name="pamong_nama">
											<select class="form-control input-sm required" name="nama_kadus" id="nama_kadus" onchange="$('input[name=pamong_nama]').val($(this).find(':selected').data('pamong_namaid'));">
												<option value="">-- Pilih Perangkat Kewilayahan --</option>
												<?php foreach ($pamong as $data): ?>
													<option value="<?= ($data['pamong_nama'])?>" data-pamongsid="<?= $data['id']?>" <?php selected(ucwords(strtolower($data['pamong_nama'])), $_SESSION['post']['pamong_nama']) ?>><?= ucwords($data['pamong_nama'])?>(<?php echo $data['jabatan']?>)</option>
												<?php endforeach;?>
											</select>
                                             </div>
											 </div>
								<?php include("donjo-app/views/surat/form/_pamong.php"); ?>
							</form>
						</div>
						</div>
						</div>
                        </div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
					<div class='modal fade' id='infoBox' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
					<div class='modal-dialog'>
						<div class='modal-content'>
							<div class='modal-header btn-default'>
								<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
								<h4 class='modal-title' id='myModalLabel'><i class='fa fa-info-circle'></i>&nbsp;&nbsp;Info Isian Surat</h4>
							</div>
							<div class='modal-body small'>
								<h5><strong>Form ini Menghasilkan:</strong></h5>
								<ol>
								<li>Surat Hibah</li>
                                <li>Aturan Pembuatan Surat Hibah:</li>
								<p>a. Pihak PEMBERI HIBAH hanya warga desa dan Non Warga </p>
								<p>b. Pihak PENERIMA HIBAH boleh warga desa sendiri atau warga luar desa.</p>
								<p>c. Penanda Tangan Melibatkan Dua Orang Saksi Bisa Saksi Dalam Desa / Warga Luar.</p>
								<p>b. Penanda Tangan Juga Melibatkan Perangkat Kewilayahan Sesuai Lokasi Objek Tanah.</p>
							</div>
							<div class='modal-footer btn-default'>
								<button type="button" class="btn btn-social btn-flat btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
