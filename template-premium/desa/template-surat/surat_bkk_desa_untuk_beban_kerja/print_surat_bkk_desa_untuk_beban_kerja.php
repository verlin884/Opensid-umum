<html>
	<?php $this->load->view('print/headjs.php');?>
	<body>
		<div id="content" class="container_12 clearfix">
			<div id="content-main" class="grid_7">
				<link href="<?= base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
				<div>
					<table width="100%">
						<tr> <img src="<?= LogoDesa($desa['logo']);?>" alt=""  width="100" height="80" class="logo"></tr>
						<div class="header">
							<h4 class="kop">PEMERINTAH KABUPATEN <?= strtoupper(unpenetration($desa['nama_kabupaten']))?> </h4>
							<h4 class="kop">KECAMATAN <?= strtoupper(unpenetration($desa['nama_kecamatan']))?> </h4>
							<h4 class="kop">DESA <?= strtoupper(unpenetration($desa['nama_desa']))?></h4>
							<h5 class="kop2"><?= ($desa['alamat_kantor'])?> </h5>
							<div style="text-align: center;"><hr></div>
						</div>
						<div align="center"><u><h4 class="kop">SURAT BKK DESA UNTUK BEBAN KERJA</h4></u></div>
						<div align="center"><h4 class="kop">Nomor : <?= $input['nomor']?></h4></div>
					</table>
					<table width="100%">
						<td class="indentasi">Yang bertanda tangan dibawah ini <?= unpenetration($input['jabatan'])?> <?= unpenetration($desa['nama_desa'])?>, Kecamatan <?= unpenetration($desa['nama_kecamatan'])?>,
						Kabupaten <?= unpenetration($desa['nama_kabupaten'])?>, Provinsi <?= unpenetration($desa['nama_propinsi'])?> menerangkan dengan sebenarnya bahwa:  </td></tr>
					</table>
					<div id="isi3">
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr><td>
							<table width="100%">
								<tr><td width="20%">Nama Lengkap</td><td width="2%">:</td><td width="64%"><?= unpenetration($data['nama'])?></td></tr>
								<tr><td>Nomor KTP</td><td>:</td><td><?= $data['nik']?></td></tr>
								<tr><td>Tempat dan Tgl. Lahir </td><td>:</td><td><?= ($data['tempatlahir'])?>, <?= tgl_indo($data['tanggallahir'])?> </td></tr>
								<tr><td>Jenis Kelamin</td><td>:</td><td><?= $data['sex']?></td></tr>
								<tr><td>Alamat/ Tempat Tinggal</td><td>:</td><td>RT. <?= $data['rt']?>, RW. <?= $data['rw']?>, Dusun <?= ununderscore(unpenetration($data['dusun']))?>, Desa <?= unpenetration($desa['nama_desa'])?>, Kec. <?= unpenetration($desa['nama_kecamatan'])?>, Kab. <?= unpenetration($desa['nama_kabupaten'])?></td></tr>
								<tr><td>Agama</td><td>:</td><td><?= $data['agama']?></td></tr>
								<tr><td>Status</td><td>:</td><td><?= $data['status_kawin']?></td></tr>
								<tr><td>Pendidikan</td><td>:</td><td><?= $data['pendidikan']?></td></tr>
								<tr><td>Pekerjaan</td><td>:</td><td><?= $data['pekerjaan']?></td></tr>
								<tr><td>Kewarganegaraan </td><td>:</td><td><?= $data['warganegara']?></td></tr>
								<tr><td>Keterangan </td><td>:</td><td> <?= $input['keterangan']?></td></tr>
								<tr><td>Keperluan </td><td>:</td><td> <?= $input['keperluan']?></td></tr>
								<tr><td>Berlaku mulai </td><td>:</td><td><?= tgl_indo(tgl_indo_in($input['berlaku_dari']))?> sampai dengan  <?= tgl_indo(tgl_indo_in($input['berlaku_sampai']))?></td></tr>
							</table>
							<table width="100%">
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr><td  class="indentasi">Demikian Surat Keterangan ini  kami buat untuk dapat dipergunakan sebagaimana mestinya. </td></tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
								<tr></tr>
							</table>
						</div>
						<table width="100%">
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr><td></td><td width="30%"></td><td  align="center"><?= unpenetration($desa['nama_desa'])?>, <?= $tanggal_sekarang?></td></tr>
							<tr><td></td><td width="30%"></td><td align="center"><?= unpenetration($input['jabatan'])?> <?= unpenetration($desa['nama_desa'])?></td></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr><td> <td></td><td align="center">( <?= unpenetration($input['pamong'])?> )</td></tr>
						</table>
					</div>
				</div>
			</div>
			<div id="aside"></div>
			<div id="footer" class="container_12"></div>
		</div>
	</body>
</html>

