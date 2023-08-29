<script>
  function submit_form_ambil_data()
  {
   	$('input').removeClass('required');
   	$('select').removeClass('required');
   	$('#'+'validasi').attr('action','');
    $('#'+'validasi').attr('target','');
    $('#'+'validasi').submit();
  }

  function ubah_pasangan(asal)
  {
		$('#pasangan').val(asal);
		if (asal == 1)
		{
			$('.pasangan_desa').show();
			$('.pasangan_luar_desa').hide();
		}
		else
		{
			$('.pasangan_desa').hide();
			$('.pasangan_luar_desa').show();
			$('#id_pasangan').val('*'); // Hapus $id_wanita
			submit_form_ambil_data();
		}
		$('input[name=anchor').val('pasangan');
	}

</script>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Keterangan Izin Perkawinan dari Orang Tua</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_desa/about')?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?= site_url('surat')?>"> Daftar Cetak Surat</a></li>
			<li class="active">Surat Keterangan Izin Perkawinan dari Orang Tua</li>
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
							<div class="col-md-12">
								<div class="form-group subtitle_head">
									<label class="col-sm-3 text-right"><strong>ANAK YANG DIBERI IZIN</strong></label>
								</div>
								
								<?php include("donjo-app/views/surat/form/_cari_nik.php"); ?>

							</div>
						</form>
						<form id="validasi" action="<?= $form_action?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat')?>">
							<div class="col-md-12">
								<input id="nik_validasi" name="nik" type="hidden" value="<?= $_SESSION['post']['nik']?>">
								<?php if ($individu): ?>
									<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
								<?php	endif; ?>
								
								<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>
								
								<div class="form-group subtitle_head">
									<label class="col-sm-3 text-right"><strong>AYAH YANG MEMBERI IZIN</strong></label>
								</div>
								
								<div class="form-group">
									<label for="nik"  class="col-sm-3 control-label">NIK / Nama </label>
									<div class="col-sm-6 col-lg-4">
										<input  id="nik_ayah" class="form-control input-sm required" type="text" value="<?= strtoupper($ayah['nik']);?> - <?= strtoupper($ayah['nama']);?>" disabled="" />
									</div>
								</div>
								
								<div class="form-group konfirmasi">
									<label for="keperluan"  class="col-sm-3 control-label">Tempat  / Tanggal Lahir / Umur</label>
									<div class="col-sm-4">
										<input class="form-control input-sm" type="text" value="<?= strtoupper($ayah['tempatlahir']);?> " disabled="">
									</div>
									<div class="col-sm-2">
								  	<input class="form-control input-sm" type="text" value="<?= strtoupper(tgl_indo ($ayah['tanggallahir']));?> " disabled="">
									</div>
									<div class="col-sm-2">
										<input class="form-control input-sm" type="text" value="<?= strtoupper($ayah['umur']);?> TAHUN" disabled="">
									</div>
								</div>
								<div class="form-group konfirmasi">
									<label for="keperluan"  class="col-sm-3 control-label">Alamat</label>
									<div class="col-sm-8">
										<input class="form-control input-sm" type="text" value="<?= strtoupper($ayah['alamat_wilayah']); ?>" disabled="">
									</div>
								</div>
								<div class="form-group konfirmasi">
									<label for="keperluan"  class="col-sm-3 control-label">Pendidikan / Warga Negara /Agama</label>
									<div class="col-sm-4">
										<input class="form-control input-sm" type="text" value="<?= strtoupper($ayah['pendidikan']);?>" disabled="">
									</div>
									<div class="col-sm-2">
										<input class="form-control input-sm" type="text" value="<?= strtoupper($ayah['warganegara']);?>" disabled="">
									</div>
									<div class="col-sm-2">
										<input class="form-control input-sm" type="text" value=" <?= strtoupper($ayah['agama']);?>" disabled="">
									</div>
								</div>
								
								<div class="form-group subtitle_head">
									<label class="col-sm-3 text-right"><strong>IBU YANG MEMBERI IZIN</strong></label>
								</div>
								
								<div class="form-group">
									<label for="nik"  class="col-sm-3 control-label">NIK / Nama </label>
									<div class="col-sm-6 col-lg-4">
										<input  id="nik_ibu" class="form-control input-sm required" type="text" value="<?= strtoupper($ibu['nik']);?> - <?= strtoupper($ibu['nama']);?>" disabled="" />
									</div>
								</div>
								
								<div class="form-group konfirmasi">
									<label for="keperluan"  class="col-sm-3 control-label">Tempat  / Tanggal Lahir / Umur</label>
									<div class="col-sm-4">
										<input class="form-control input-sm" type="text" value="<?= strtoupper($ibu['tempatlahir']);?> " disabled="">
									</div>
									<div class="col-sm-2">
								  	<input class="form-control input-sm" type="text" value="<?= strtoupper(tgl_indo ($ibu['tanggallahir']));?> " disabled="">
									</div>
									<div class="col-sm-2">
										<input class="form-control input-sm" type="text" value="<?= strtoupper($ibu['umur']);?> TAHUN" disabled="">
									</div>
								</div>
								<div class="form-group konfirmasi">
									<label for="keperluan"  class="col-sm-3 control-label">Alamat</label>
									<div class="col-sm-8">
										<input class="form-control input-sm" type="text" value="<?= strtoupper($ibu['alamat_wilayah']); ?>" disabled="">
									</div>
								</div>
								<div class="form-group konfirmasi">
									<label for="keperluan"  class="col-sm-3 control-label">Pendidikan / Warga Negara /Agama</label>
									<div class="col-sm-4">
										<input class="form-control input-sm" type="text" value="<?= strtoupper($ibu['pendidikan']);?>" disabled="">
									</div>
									<div class="col-sm-2">
										<input class="form-control input-sm" type="text" value="<?= strtoupper($ibu['warganegara']);?>" disabled="">
									</div>
									<div class="col-sm-2">
										<input class="form-control input-sm" type="text" value=" <?= strtoupper($ibu['agama']);?>" disabled="">
									</div>
								</div>

								<div class="form-group subtitle_head">
									<label class="col-sm-3 control-label" for="status">YANG DIAJAK KAWIN / MENIKAH</label>
									<div class="btn-group col-sm-8" data-toggle="buttons">
										<label class="btn btn-info btn-flat btn-sm col-sm-4 col-sm-4 col-md-4 col-lg-3 form-check-label <?php if (!empty($pasangan)): ?>active<?php endif ?>">
											<input id="pasangan_1" type="radio" name="pasangan" class="form-check-input" type="radio" value="1" <?php if (!empty($pasangan)): ?>checked<?php endif; ?> autocomplete="off" onchange="ubah_pasangan(this.value);"> Dari Database Penduduk
										</label>
										<label id="label_pasangan" class="btn btn-info btn-flat btn-sm col-sm-4 col-md-4 col-lg-3 form-check-label <?php if (empty($pasangan)): ?>active<?php endif; ?>">
											<input id="pasangan_2" type="radio" name="pasangan" class="form-check-input" type="radio" value="2" <?php if (empty($pasangan)): ?>checked<?php endif; ?> autocomplete="off" onchange="ubah_pasangan(this.value);"> Tidak Terdata
										</label>
									</div>
								</div>

								<div class="form-group pasangan_desa" <?php if (empty($pasangan)): ?>style="display: none;"<?php endif; ?>>
									<div class="col-md-12">
										<div class="form-group">
											<label for="pasangan_desa" class="col-sm-3 control-label" ><strong>NIK / Nama Pasangan	</strong></label>
											<div class="col-sm-6 col-lg-4">
										  	<select class="form-control <?php if($pasangan==1):?> required <?php endif ?> input-sm select2-nik-ajax" id="id_pasangan" name="id_pasangan" style ="width:100%;"  data-url="<?= site_url('surat/list_penduduk_ajax')?>" onchange="submit_form_ambil_data(this.id);">
													<?php if ($pasangan): ?>
														<option value="<?= $pasangan['id']?>" selected><?= $pasangan['nik'].' - '.$pasangan['nama']?></option>
													<?php endif;?>
												</select>
											</div>
										</div>
									</div>
								</div>
								
								<?php if ($pasangan): ?>
									<?php //bagian info setelah terpilih
									$individu = $pasangan;
									include("donjo-app/views/surat/form/konfirmasi_pemohon.php");
									?>
								<?php endif; ?>	
							
								<?php if (empty($pasangan)): ?>
								<div class="form-group pasangan_luar_desa" >
										<label for="ayah_desa"  class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA PASANGAN TIDAK TERDATA </strong></label>
									</div>
									<div class="form-group pasangan_luar_desa">
										<label for="nama_ibu"  class="col-sm-3 control-label">Nama Pasangan</label>
										<div class="col-sm-8">
											<input  class="form-control input-sm required" type="text" placeholder="Nama Pasangan" name="nama_pasangan" value="<?= $_SESSION['post']['nama_pasangan']?>">
										</div>
									</div>
									<div class="form-group pasangan_luar_desa">
										<label for="nik_ibu"  class="col-sm-3 control-label">NIK Pasangan</label>
										<div class="col-sm-8">
											<input  class="form-control input-sm required" type="text" placeholder="NIK Pasangan" name="nik_pasangan" value="<?= $_SESSION['post']['nik_pasangan']?>">
										</div>
									</div>
									<div class="form-group pasangan_luar_desa">
										<label for="tempat_lahir_ibu"  class="col-sm-3 control-label">Tempat  / Tanggal Lahir / Umur</label>
										<div class="col-sm-3 col-lg-4">
											<input class="form-control input-sm" type="text" name="tempat_lahir_pasangan" id="tempat_lahir_pasangan" placeholder="Tempat Lahir Pasangan" value="<?= $_SESSION['post']['tempat_lahir_pasangan']?>">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal"  class="form-control input-sm required datepicker" name="tanggal_lahir_pasangan" type="text" placeholder="Tgl. Lahir" value="<?= $_SESSION['post']['tanggal_lahir_pasangan']?>" onchange="$('input[name=umur_pasangan]').val(_calculateAge($(this).val()));"/>
											</div>
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" name="umur_pasangan" readonly="readonly" placeholder="Umur (Tahun)" type="text" value="<?= $_SESSION['post']['umur_pasangan']?>">
										</div>
									</div>

									<div class="form-group pasangan_luar_desa">
										<input type="hidden" name="pekerjaan_id_pasangan">
										<label for="pekerjaan_pasangan" class="col-sm-3 control-label" ><strong>Pekerjaan</strong></label>
										<div class="col-sm-4">
											<select class="form-control input-sm" name="pekerjaan_pasangan" id="pekerjaan_pasangan" onchange="$('input[name=pekerjaan_id_pasangan]').val($(this).find(':selected').data('pekerjaanid'));">
												<option value="">-- Pekerjaan --</option>
												<?php foreach ($pekerjaan as $data): ?>
													<option value="<?= $data['nama']?>" data-pekerjaanid="<?= $data['id']?>" <?php if ($data['nama']==$_SESSION['post']['pekerjaan_pasangan']): ?>selected<?php endif; ?>><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									
									<div class="form-group pasangan_luar_desa">
										<input type="hidden" name="agama_id_pasangan">
										<label for="pekerjaan_pasangan" class="col-sm-3 control-label" ><strong>Agama <?php echo ($_SESSION['post']['agama_pasangan']);?></strong></label>
										<div class="col-sm-4">
											<select class="form-control input-sm" name="agama_pasangan" id="agama_pasangan" onchange="$('input[name=agama_id_pasangan]').val($(this).find(':selected').data('agamapasangan_id'));">
												<option value="">- Pilih Agama -</option>
												<?php foreach ($agama as $data): ?>
													<option data-agamapasangan_id="<?= $data['id']?>" value="<?= $data['id']=='7' ? $data['nama'] : ucwords(strtolower($data['nama']))?>" <?php if ( $data['nama']==strtoupper($_SESSION['post']['agama_pasangan'])): ?> selected <?php endif; ?> ><?= $data['nama']?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>

									<div class="form-group pasangan_luar_desa">
										<input type="hidden" name="warganegara_id_pasangan">
										<label for="pekerjaan_pasangan" class="col-sm-3 control-label" ><strong>Warga Negara</strong></label>
										<div class="col-sm-4">
											<select class="form-control input-sm" name="warganegara_pasangan" id="warganegara_pasangan" onchange="$('input[name=warganegara_id_pasangan]').val($(this).find(':selected').data('warganegara_pasangan'));">
												<option value="">- Pilih Warganegara -</option>
												<?php foreach ($warganegara as $data): ?>
													<option data-warganegara_pasangan="<?= $data['id']?>" value="<?= $data['id']=='3' ? ucwords(strtolower($data['nama'])): strtoupper($data['nama'])?>" <?php if ($data['nama']==$_SESSION['post']['warganegara_pasangan']): ?> selected <?php endif; ?> > <?= $data['nama']?> </option>
												<?php endforeach;?>

											</select>
										</div>
									</div>

									<div class="form-group pasangan_luar_desa">
										<label for="alamat_pasangan"  class="col-sm-3 control-label">Alamat / RT / RW</label>
										<div class="col-sm-4">
											<input class="form-control input-sm" type="text" name="alamat_pasangan" id="alamat_pasangan" placeholder="Alamat Pasangan" value="<?= $_SESSION['post']['alamat_pasangan']?>">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" name="rt_pasangan" id="rt_pasangan" placeholder="RT" value="<?= $_SESSION['post']['rt_pasangan']?>">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" name="rw_ibu" id="rw_pasangan"  type="text" placeholder="RW" value="<?= $_SESSION['post']['rw_pasangan']?>">
										</div>
									</div>
									<div class="form-group pasangan_luar_desa">
										<label for="alamat_pasangan"  class="col-sm-3 control-label">Desa / Kecamatan</label>
										<div class="col-sm-4">
											<input class="form-control input-sm" type="text" name="desapasangan" id="desapasangan" placeholder="Desa" value="<?= $_SESSION['post']['desapasangan']?>">
										</div>
										<div class="col-sm-4">
											<input class="form-control input-sm" type="text" name="kecpasangan" id="kecpasangan" placeholder="Kecamatan" value="<?= $_SESSION['post']['kecpasangan']?>">
										</div>
									</div>
									<div class="form-group pasangan_luar_desa">
										<label for="alamat_pasangan"  class="col-sm-3 control-label">Kabupaten / Provinsi</label>
										<div class="col-sm-4">
											<input class="form-control input-sm" type="text" name="kabpasangan" id="kabpasangan" placeholder="Kabupaten" value="<?= $_SESSION['post']['kabpasangan']?>">
										</div>
										<div class="col-sm-4">
											<input class="form-control input-sm" type="text" name="provinsipasangan" id="provinsipasangan" placeholder="Provinsi" value="<?= $_SESSION['post']['provinsipasangan']?>">
										</div>
									</div>
								<?php endif; ?>	
							</div>
						</form>
					</div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
			</div>
		</div>
	</section>
</div>
