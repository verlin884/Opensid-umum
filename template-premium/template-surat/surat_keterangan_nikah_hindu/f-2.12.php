<?php //if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<style type="text/css">
table.disdukcapil
{
	width: 100%;
	border: solid 1px #000000;
	/*border-collapse: collapse;*/
}
table.disdukcapil td
{
	padding: 1px 1px 1px 3px;
	margin: 0px;
}
table.disdukcapil td.padat
{
	padding: 0px;
	margin: 0px;
}
table.disdukcapil td.anggota
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
	border-top: dashed 1px #000000;
	border-bottom: dashed 1px #000000;
}
table.disdukcapil td.judul
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
	border-top: double 1px #000000;
	border-bottom: double 1px #000000;
}
table.disdukcapil td.bawah {border-bottom: solid 1px #000000;}
table.disdukcapil td.atas {border-top: solid 1px #000000;}
table.disdukcapil td.tengah_blank
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
}
table.disdukcapil td.pinggir_kiri {border-left: solid 1px #000000;}
table.disdukcapil td.pinggir_kanan {border-right: solid 1px #000000;}
table.disdukcapil td.kotak {border: solid 1px #000000;}
table.disdukcapil td.abu {background-color: lightgrey;}
table.disdukcapil td.kode {background-color: lightgrey;}
table.disdukcapil td.kode div
{
	margin: 0px 15px 0px 15px;
	border: solid 1px black;
	background-color: white;
	text-align: center;
}
table.disdukcapil td.pakai-padding
{
	padding-left: 20px;
	padding-right: 2px;
}
table.disdukcapil td.kiri { text-align: left; }
table.disdukcapil td.kanan { text-align: right; }
table.disdukcapil td.tengah { text-align: center; }

table#kop
{
	margin-top: -5px;
	margin-bottom: 0px;
	padding: 0px;
	border: 0px;
	border-collapse: collapse;
}
table#kop td {padding: 0px; margin: 0px;}
table#kop tr {padding: 0px; margin: 0px;}
table#kode
{
	padding: 2px 10px;
	border: solid 1px black;
	margin-top: 0px;
	margin-bottom: 0px;
	font-size: 11pt;
}
</style>

<page orientation="portrait" format="210x330" style="font-size: 7pt;">
	<table id="kode" align="right">
		<tr><td><strong>Kode . F-2.12</strong></td></tr>
	</table>
	<table id="kop" class="disdukcapil" border="0">
		<col span="48" style="width: 2.0833%;">
		<tr><td colspan=48>&nbsp;</td></tr>
		<tr>
			<td colspan="10">Pemerintah Desa/Kelurahan</td>
			<td>: </td>
			<td colspan="7"><?= $config['nama_desa'];?></td>
			<td colspan="13">&nbsp;</td>
			<td colspan="3">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
			<td>&nbsp; </td>
			<td colspan="9">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">Kecamatan</td>
			<td>: </td>
			<td colspan="7"><?= $config['nama_kecamatan'];?></td>
			<td colspan="19">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
			<td>&nbsp; </td>
			<td colspan="9">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">Kabupaten/Kota</td>
			<td>:</td>
			<td colspan="7"><?= $config['nama_kabupaten'];?></td>
			<td colspan="19">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
			<td>&nbsp; </td>
			<td colspan="9">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11">&nbsp;</td>
			<?php for ($i=0; $i<9; $i++): ?>
				<td style="border-bottom: 1px solid black;">&nbsp;</td>
			<?php endfor; ?>
			<td colspan="14">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
			<td>&nbsp; </td>
			<td colspan="9">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">Kode Wilayah</td>
			<td style="border-right: 1px solid black;">:</td>
			<?php for ($i=0; $i<9; $i++): ?>
				<td class="kotak padat tengah">
					&nbsp;
				</td>
			<?php endfor; ?>
			<td colspan="28">&nbsp;</td>
		</tr>
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
	</table>
	<p style="text-align: center; margin: 0px; padding: 5px;">
		<strong style="font-size: 9pt;">FORMULIR PENCATATAN PERKAWINAN</strong>
	</p>

	<!-- DATA SUAMI -->
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td><strong>I</strong></td>
			<td colspan="47"><strong>DATA SUAMI</strong></td>
			
		</tr>
		<tr>
			<td>1</td>
			<td colspan="10">Nomor Induk Kependudukan (NIK)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['nik_pria'][$i])): ?>
						<?=$input['nik_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>
		<tr>
			<td>2</td>
			<td colspan="10">Nomor Kartu Keluarga (KK)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['kk_pria'][$i])): ?>
						<?=$input['kk_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>
		<tr>
			<td>3</td>
			<td colspan="10">Nomor Paspor</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				
				<td class="kotak padat tengah">
					<?php if (isset($input['pasport_pria'][$i])): ?>
						<?=$input['kk_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>

			<?php endfor; ?>
		</tr>
		<tr>
			<td>4</td>
			<td colspan="10">Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['nama_pria'][$i])): ?>
						<?=$input['nama_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>5</td>
			<td colspan="10">Tempat / Tanggal Lahir</td>
			<td>:</td>

			<?php for ($i=0; $i< $input['strlen_tempat_lahir']; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_lahir_pria'][$i])): ?>
						<?=$input['tempat_lahir_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>				
				</td>
			<?php endfor; ?>
			<td class="kotak padat tengah">/</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['tanggal_lahir_pria'][$i])): ?>
						<?=$input['tanggal_lahir_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['bulan_lahir_pria'][$i])): ?>
						<?=$input['bulan_lahir_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<4; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['tahun_lahir_pria'][$i])): ?>
						<?=$input['tahun_lahir_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<?php for ($i=0; $i<$input['sisa_kotak_tempat_lahir']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td>6</td>
			<td colspan="10">Alamat</td>
			<td>:</td>

			<?php for ($i=0; $i<$input['len_alamat_pria']; $i++): ?>

				<td class="kotak padat tengah">
					
					<?php if (isset($input['alamat_pria'][$i])): ?>
						<?=$input['alamat_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<td colspan="2" class="kotak padat tengah">RT</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rt_pria'][$i])): ?>
						<?=$input['rt_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>
			<td colspan="2" class="kotak padat tengah">RW</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rw_pria'][$i])): ?>
						<?=$input['rw_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
			<?php for ($i=0; $i<$input['sisa_kotak_alamat_pria']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td colspan="11">&nbsp;</td>
			<td>:</td>
			<td colspan="4" class="kotak padat tengah">KODE POS</td>

			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kdpos_pria'][$i])): ?>
						<?=$input['kdpos_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan="4" class="kotak padat tengah">TELEPON</td>
			<?php for ($i=0; $i<12; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['telpon_pria'][$i])): ?>
						<?=$input['telpon_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<11; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Dsa./Kel.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['desa_pria'];?></td>
			<td colspan="4" class="kotak padat tengah">Kec.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kec_pria'];?></td>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Kab./Kota</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kab_pria'];?></td>
			<td colspan="4" class="kotak padat tengah">Provinsi</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['prov_pria'];?></td>
		</tr>

		<tr>
			<td>7</td>
			<td colspan="10">Pendidikan Terakhir</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['pendidikan_pria'][$i])): ?>
						<?=$input['pendidikan_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>


		<tr>
			<td>8</td>
			<td colspan="10">Agama / Pengayat Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['agama_pria'][$i])): ?>
						<?=$input['agama_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>9</td>
			<td colspan="10">Nama Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>10</td>
			<td colspan="10">Pekerjaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['pekerjaan_pria'][$i])): ?>
						<?=$input['pekerjaan_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>11</td>
			<td colspan="10">Anak Ke</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['anak_ke_pria'][$i])): ?>
						<?=$input['anak_ke_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>12</td>
			<td colspan="10">Status Perkawinan Sebelum Nikah</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['status_kawin_pria'][$i])): ?>
						<?=$input['status_kawin_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>13</td>
			<td colspan="10">Perkawinan Yang Ke</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['istri_ke'][$i])): ?>
						<?=$input['istri_ke'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>14</td>
			<td colspan="10">Istri Yang Ke (Bagi yang poligami)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['istri_ke'][$i])): ?>
						<?=$input['istri_ke'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>15</td>
			<td colspan="10">Kewarganegaraan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['warganegara_pria'][$i])): ?>
						<?=$input['warganegara_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>16</td>
			<td colspan="10">Kebangsan (Bagi WNA)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

	</table>


	<!-- DATA AYAH DARI SUAMI -->
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td><strong>II</strong></td>
			<td colspan="47"><strong>DATA AYAH DARI SUAMI</strong></td>
			
		</tr>
		<tr>
			<td>17</td>
			<td colspan="10">Nomor Induk Kependudukan (NIK)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>

				<td class="kotak padat tengah">

					<?php if (isset($input['nik_ayah_pria'][$i])): ?>
						<?=$input['nik_ayah_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>
		
		<tr>
			<td>18</td>
			<td colspan="10">Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_ayah_pria'][$i])): ?>
						<?=$input['nama_ayah_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>	
			<?php endfor; ?>
		</tr>

		<tr>
			<td>19</td>
			<td colspan="10">Agama / Pengayat Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
			<td class="kotak padat tengah">
				
				<?php if (isset($input['agama_ayah_pria'][$i])): ?>
					<?=$input['agama_ayah_pria'][$i];?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>20</td>
			<td colspan="10">Nama Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>21</td>
			<td colspan="10">Tempat / Tanggal Lahir</td>
			<td>:</td>
			
			<?php for ($i=0; $i< $input['strlen_tempat_lahir_ayah']; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_lahir_ayah_pria'][$i])): ?>
						<?=$input['tempat_lahir_ayah_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>				
				</td>
			<?php endfor; ?>
			<td class="kotak padat tengah">/</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['tanggal_lahir_ayah_pria'][$i])): ?>
						<?=$input['tanggal_lahir_ayah_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['bulan_lahir_ayah_pria'][$i])): ?>
						<?=$input['bulan_lahir_ayah_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<4; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['tahun_lahir_ayah_pria'][$i])): ?>
						<?=$input['tahun_lahir_ayah_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<?php for ($i=0; $i<$input['sisa_kotak_tempat_lahir_ayah']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td>22</td>
			<td colspan="10">Alamat</td>
			<td>:</td>

			<?php for ($i=0; $i<$input['len_alamat_ayah_pria']; $i++): ?>

				<td class="kotak padat tengah">
					
					<?php if (isset($input['alamat_ayah_pria'][$i])): ?>
						<?=$input['alamat_ayah_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<td colspan="2" class="kotak padat tengah">RT</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rt_ayah_pria'][$i])): ?>
						<?=$input['rt_ayah_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>
			<td colspan="2" class="kotak padat tengah">RW</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rw_ayah_pria'][$i])): ?>
						<?=$input['rw_ayah_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
			<?php for ($i=0; $i<$input['sisa_kotak_alamat_ayah_pria']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td colspan="11">&nbsp;</td>
			<td>:</td>
			<td colspan="4" class="kotak padat tengah">KODE POS</td>

			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kdpos_pria'][$i])): ?>
						<?=$input['kdpos_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan="4" class="kotak padat tengah">TELEPON</td>
			<?php for ($i=0; $i<12; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['telpon_pria'][$i])): ?>
						<?=$input['telpon_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<11; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Dsa./Kel.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['desa_ayah_pria'];?></td>
			<td colspan="4" class="kotak padat tengah">Kec.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kec_ayah_pria'];?></td>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Kab./Kota</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kab_ayah_pria'];?></td>
			<td colspan="4" class="kotak padat tengah">Provinsi</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['prov_ayah_pria'];?></td>
		</tr>

		<tr>
			<td>23</td>
			<td colspan="10">Pekerjaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['pekerjaan_ayah_pria'][$i])): ?>
						<?=$input['pekerjaan_ayah_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
	</table>


	<!-- DATA IBU DARI SUAMI -->
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td><strong>III</strong></td>
			<td colspan="47"><strong>DATA IBU DARI SUAMI</strong></td>
			
		</tr>
		<tr>
			<td>24</td>
			<td colspan="10">Nomor Induk Kependudukan (NIK)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>

				<td class="kotak padat tengah">

					<?php if (isset($input['nik_ibu_pria'][$i])): ?>
						<?=$input['nik_ibu_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>
		
		<tr>
			<td>25</td>
			<td colspan="10">Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_ibu_pria'][$i])): ?>
						<?=$input['nama_ibu_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>	
			<?php endfor; ?>
		</tr>

		<tr>
			<td>26</td>
			<td colspan="10">Agama / Pengayat Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
			<td class="kotak padat tengah">
				
				<?php if (isset($input['agama_ibu_pria'][$i])): ?>
					<?=$input['agama_ibu_pria'][$i];?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>27</td>
			<td colspan="10">Nama Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>28</td>
			<td colspan="10">Tempat / Tanggal Lahir</td>
			<td>:</td>
			
			<?php for ($i=0; $i< $input['strlen_tempat_lahir_ibu']; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_lahir_ibu_pria'][$i])): ?>
						<?=$input['tempat_lahir_ibu_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>				
				</td>
			<?php endfor; ?>
			<td class="kotak padat tengah">/</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['tanggal_lahir_ibu_pria'][$i])): ?>
						<?=$input['tanggal_lahir_ibu_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['bulan_lahir_ibu_pria'][$i])): ?>
						<?=$input['bulan_lahir_ibu_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<4; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['tahun_lahir_ibu_pria'][$i])): ?>
						<?=$input['tahun_lahir_ibu_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<?php for ($i=0; $i<$input['sisa_kotak_tempat_lahir_ibu']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td>29</td>
			<td colspan="10">Alamat</td>
			<td>:</td>

			<?php for ($i=0; $i<$input['len_alamat_ibu_pria']; $i++): ?>

				<td class="kotak padat tengah">
					
					<?php if (isset($input['alamat_ibu_pria'][$i])): ?>
						<?=$input['alamat_ibu_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<td colspan="2" class="kotak padat tengah">RT</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rt_ibu_pria'][$i])): ?>
						<?=$input['rt_ibu_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>
			<td colspan="2" class="kotak padat tengah">RW</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rw_ibu_pria'][$i])): ?>
						<?=$input['rw_ibu_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
			<?php for ($i=0; $i<$input['sisa_kotak_alamat_ibu_pria']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td colspan="11">&nbsp;</td>
			<td>:</td>
			<td colspan="4" class="kotak padat tengah">KODE POS</td>

			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kdpos_pria'][$i])): ?>
						<?=$input['kdpos_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan="4" class="kotak padat tengah">TELEPON</td>
			<?php for ($i=0; $i<12; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['telpon_pria'][$i])): ?>
						<?=$input['telpon_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<11; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Dsa./Kel.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['desa_ibu_pria'];?></td>
			<td colspan="4" class="kotak padat tengah">Kec.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kec_ibu_pria'];?></td>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Kab./Kota</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kab_ibu_pria'];?></td>
			<td colspan="4" class="kotak padat tengah">Provinsi</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['prov_ibu_pria'];?></td>
		</tr>

		<tr>
			<td>30</td>
			<td colspan="10">Pekerjaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['pekerjaan_ibu_pria'][$i])): ?>
						<?=$input['pekerjaan_ibu_pria'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<!-- DATA ISTRI -->
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td><strong>IV</strong></td>
			<td colspan="47"><strong>DATA ISTRI</strong></td>
			
		</tr>
		<tr>
			<td>31</td>
			<td colspan="10">Nomor Induk Kependudukan (NIK)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['nik_wanita'][$i])): ?>
						<?=$input['nik_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>
		<tr>
			<td>32</td>
			<td colspan="10">Nomor Kartu Keluarga (KK)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['kk_wanita'][$i])): ?>
						<?=$input['kk_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>
		<tr>
			<td>33</td>
			<td colspan="10">Nomor Paspor</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				
				<td class="kotak padat tengah">
					<?php if (isset($input['pasport_wanita'][$i])): ?>
						<?=$input['kk_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>

			<?php endfor; ?>
		</tr>
		<tr>
			<td>34</td>
			<td colspan="10">Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['nama_wanita'][$i])): ?>
						<?=$input['nama_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>35</td>
			<td colspan="10">Tempat / Tanggal Lahir</td>
			<td>:</td>

			<?php for ($i=0; $i< $input['strlen_tempat_lahir_wanita']; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_lahir_wanita'][$i])): ?>
						<?=$input['tempat_lahir_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>				
				</td>
			<?php endfor; ?>
			<td class="kotak padat tengah">/</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['tanggal_lahir_wanita'][$i])): ?>
						<?=$input['tanggal_lahir_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['bulan_lahir_wanita'][$i])): ?>
						<?=$input['bulan_lahir_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<4; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['tahun_lahir_wanita'][$i])): ?>
						<?=$input['tahun_lahir_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<?php for ($i=0; $i<$input['sisa_kotak_tempat_lahir_wanita']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td>36</td>
			<td colspan="10">Alamat</td>
			<td>:</td>

			<?php for ($i=0; $i<$input['len_alamat_wanita']; $i++): ?>

				<td class="kotak padat tengah">
					
					<?php if (isset($input['alamat_wanita'][$i])): ?>
						<?=$input['alamat_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<td colspan="2" class="kotak padat tengah">RT</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rt_wanita'][$i])): ?>
						<?=$input['rt_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>
			<td colspan="2" class="kotak padat tengah">RW</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rw_wanita'][$i])): ?>
						<?=$input['rw_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
			<?php for ($i=0; $i<$input['sisa_kotak_alamat_wanita']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td colspan="11">&nbsp;</td>
			<td>:</td>
			<td colspan="4" class="kotak padat tengah">KODE POS</td>

			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kdpos_wanita'][$i])): ?>
						<?=$input['kdpos_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan="4" class="kotak padat tengah">TELEPON</td>
			<?php for ($i=0; $i<12; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['telpon_wanita'][$i])): ?>
						<?=$input['telpon_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<11; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Dsa./Kel.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['desa_wanita'];?></td>
			<td colspan="4" class="kotak padat tengah">Kec.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kec_wanita'];?></td>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Kab./Kota</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kab_wanita'];?></td>
			<td colspan="4" class="kotak padat tengah">Provinsi</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['prov_wanita'];?></td>
		</tr>

		<tr>
			<td>37</td>
			<td colspan="10">Pendidikan Terakhir</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['pendidikan_wanita'][$i])): ?>
						<?=$input['pendidikan_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>


		<tr>
			<td>38</td>
			<td colspan="10">Agama / Pengayat Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['agama_wanita'][$i])): ?>
						<?=$input['agama_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>39</td>
			<td colspan="10">Nama Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>40</td>
			<td colspan="10">Pekerjaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['pekerjaan_wanita'][$i])): ?>
						<?=$input['pekerjaan_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>41</td>
			<td colspan="10">Anak Ke</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['anak_ke_wanita'][$i])): ?>
						<?=$input['anak_ke_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>42</td>
			<td colspan="10">Status Perkawinan Sebelum Nikah</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['status_kawin_wanita'][$i])): ?>
						<?=$input['status_kawin_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>43</td>
			<td colspan="10">Perkawinan Yang Ke</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['suami_ke'][$i])): ?>
						<?=$input['suami_ke'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>44</td>
			<td colspan="10">Kewarganegaraan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['warganegara_wanita'][$i])): ?>
						<?=$input['warganegara_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>45</td>
			<td colspan="10">Kebangsan (Bagi WNA)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

	</table>

	<!-- DATA AYAH DARI WANITA -->
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td><strong>V</strong></td>
			<td colspan="47"><strong>DATA AYAH DARI ISTRI</strong></td>
			
		</tr>
		<tr>
			<td>46</td>
			<td colspan="10">Nomor Induk Kependudukan (NIK)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>

				<td class="kotak padat tengah">

					<?php if (isset($input['nik_ayah_wanita'][$i])): ?>
						<?=$input['nik_ayah_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>
		
		<tr>
			<td>47</td>
			<td colspan="10">Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_ayah_wanita'][$i])): ?>
						<?=$input['nama_ayah_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>	
			<?php endfor; ?>
		</tr>

		<tr>
			<td>48</td>
			<td colspan="10">Agama / Pengayat Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
			<td class="kotak padat tengah">
				
				<?php if (isset($input['agama_ayah_wanita'][$i])): ?>
					<?=$input['agama_ayah_wanita'][$i];?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>49</td>
			<td colspan="10">Nama Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>50</td>
			<td colspan="10">Tempat / Tanggal Lahir</td>
			<td>:</td>
			
			<?php for ($i=0; $i< $input['strlen_tempat_lahir_ayah_wanita']; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_lahir_ayah_wanita'][$i])): ?>
						<?=$input['tempat_lahir_ayah_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>				
				</td>
			<?php endfor; ?>
			<td class="kotak padat tengah">/</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['tanggal_lahir_ayah_wanita'][$i])): ?>
						<?=$input['tanggal_lahir_ayah_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['bulan_lahir_ayah_wanita'][$i])): ?>
						<?=$input['bulan_lahir_ayah_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<4; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['tahun_lahir_ayah_wanita'][$i])): ?>
						<?=$input['tahun_lahir_ayah_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<?php for ($i=0; $i<$input['sisa_kotak_tempat_lahir_ayah_wanita']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td>51</td>
			<td colspan="10">Alamat</td>
			<td>:</td>

			<?php for ($i=0; $i<$input['len_alamat_ayah_wanita']; $i++): ?>

				<td class="kotak padat tengah">
					
					<?php if (isset($input['alamat_ayah_wanita'][$i])): ?>
						<?=$input['alamat_ayah_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<td colspan="2" class="kotak padat tengah">RT</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rt_ayah_wanita'][$i])): ?>
						<?=$input['rt_ayah_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>
			<td colspan="2" class="kotak padat tengah">RW</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rw_ayah_wanita'][$i])): ?>
						<?=$input['rw_ayah_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
			<?php for ($i=0; $i<$input['sisa_kotak_alamat_ayah_wanita']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td colspan="11">&nbsp;</td>
			<td>:</td>
			<td colspan="4" class="kotak padat tengah">KODE POS</td>

			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kdpos_wanita'][$i])): ?>
						<?=$input['kdpos_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan="4" class="kotak padat tengah">TELEPON</td>
			<?php for ($i=0; $i<12; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['telpon_wanita'][$i])): ?>
						<?=$input['telpon_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<11; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Dsa./Kel.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['desa_ayah_wanita'];?></td>
			<td colspan="4" class="kotak padat tengah">Kec.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kec_ayah_wanita'];?></td>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Kab./Kota</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kab_ayah_wanita'];?></td>
			<td colspan="4" class="kotak padat tengah">Provinsi</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['prov_ayah_wanita'];?></td>
		</tr>

		<tr>
			<td>52</td>
			<td colspan="10">Pekerjaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['pekerjaan_ayah_wanita'][$i])): ?>
						<?=$input['pekerjaan_ayah_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<!-- DATA IBU DARI ISTRI -->
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td><strong>VI</strong></td>
			<td colspan="47"><strong>DATA IBU DARI ISTRI</strong></td>
			
		</tr>
		<tr>
			<td>53</td>
			<td colspan="10">Nomor Induk Kependudukan (NIK)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>

				<td class="kotak padat tengah">

					<?php if (isset($input['nik_ibu_wanita'][$i])): ?>
						<?=$input['nik_ibu_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>
		
		<tr>
			<td>54</td>
			<td colspan="10">Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_ibu_wanita'][$i])): ?>
						<?=$input['nama_ibu_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>	
			<?php endfor; ?>
		</tr>

		<tr>
			<td>55</td>
			<td colspan="10">Agama / Pengayat Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
			<td class="kotak padat tengah">
				
				<?php if (isset($input['agama_ibu_wanita'][$i])): ?>
					<?=$input['agama_ibu_wanita'][$i];?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>56</td>
			<td colspan="10">Nama Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>57</td>
			<td colspan="10">Tempat / Tanggal Lahir</td>
			<td>:</td>
			
			<?php for ($i=0; $i< $input['strlen_tempat_lahir_ibu_wanita']; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_lahir_ibu_wanita'][$i])): ?>
						<?=$input['tempat_lahir_ibu_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>				
				</td>
			<?php endfor; ?>
			<td class="kotak padat tengah">/</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['tanggal_lahir_ibu_wanita'][$i])): ?>
						<?=$input['tanggal_lahir_ibu_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['bulan_lahir_ibu_wanita'][$i])): ?>
						<?=$input['bulan_lahir_ibu_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<4; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['tahun_lahir_ibu_wanita'][$i])): ?>
						<?=$input['tahun_lahir_ibu_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<?php for ($i=0; $i<$input['sisa_kotak_tempat_lahir_ibu_wanita']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td>58</td>
			<td colspan="10">Alamat</td>
			<td>:</td>

			<?php for ($i=0; $i<$input['len_alamat_ibu_wanita']; $i++): ?>

				<td class="kotak padat tengah">
					
					<?php if (isset($input['alamat_ibu_wanita'][$i])): ?>
						<?=$input['alamat_ibu_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<td colspan="2" class="kotak padat tengah">RT</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rt_ibu_wanita'][$i])): ?>
						<?=$input['rt_ibu_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>
			<td colspan="2" class="kotak padat tengah">RW</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rw_ibu_wanita'][$i])): ?>
						<?=$input['rw_ibu_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
			<?php for ($i=0; $i<$input['sisa_kotak_alamat_ibu_wanita']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td colspan="11">&nbsp;</td>
			<td>:</td>
			<td colspan="4" class="kotak padat tengah">KODE POS</td>

			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kdpos_wanita'][$i])): ?>
						<?=$input['kdpos_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan="4" class="kotak padat tengah">TELEPON</td>
			<?php for ($i=0; $i<12; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['telpon_wanita'][$i])): ?>
						<?=$input['telpon_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<11; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Dsa./Kel.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['desa_ibu_wanita'];?></td>
			<td colspan="4" class="kotak padat tengah">Kec.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kec_ibu_wanita'];?></td>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Kab./Kota</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kab_ibu_wanita'];?></td>
			<td colspan="4" class="kotak padat tengah">Provinsi</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['prov_ibu_wanita'];?></td>
		</tr>

		<tr>
			<td>59</td>
			<td colspan="10">Pekerjaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['pekerjaan_ibu_wanita'][$i])): ?>
						<?=$input['pekerjaan_ibu_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<!-- DATA SAKSI -->
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td><strong>VII</strong></td>
			<td colspan="47"><strong>DATA SAKSI</strong></td>
			
		</tr>
		<tr>
			<td colspan="48"><strong>DATA SAKSI I</strong></td>	
		</tr>
		<tr>
			<td>60</td>
			<td colspan="10">Nomor Induk Kependudukan (NIK)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>

				<td class="kotak padat tengah">

					<?php if (isset($input['nik_saksi_1'][$i])): ?>
						<?=$input['nik_saksi_1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>
		
		<tr>
			<td>61</td>
			<td colspan="10">Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_saksi_1'][$i])): ?>
						<?=$input['nama_saksi_1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>	
			<?php endfor; ?>
		</tr>

		<tr>
			<td>62</td>
			<td colspan="10">Agama / Pengayat Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
			<td class="kotak padat tengah">
				
				<?php if (isset($input['agama_saksi_1'][$i])): ?>
					<?=$input['agama_saksi_1'][$i];?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>63</td>
			<td colspan="10">Nama Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>64</td>
			<td colspan="10">Tempat / Tanggal Lahir</td>
			<td>:</td>
			
			<?php for ($i=0; $i< $input['strlen_tempat_lahir_saksi_1']; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_lahir_saksi_1'][$i])): ?>
						<?=$input['tempat_lahir_saksi_1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>				
				</td>
			<?php endfor; ?>
			<td class="kotak padat tengah">/</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['tanggal_lahir_saksi_1'][$i])): ?>
						<?=$input['tanggal_lahir_saksi_1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['bulan_lahir_saksi_1'][$i])): ?>
						<?=$input['bulan_lahir_saksi_1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<4; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['tahun_lahir_saksi_1'][$i])): ?>
						<?=$input['tahun_lahir_saksi_1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<?php for ($i=0; $i<$input['sisa_kotak_tempat_lahir_saksi_1']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td>65</td>
			<td colspan="10">Alamat</td>
			<td>:</td>

			<?php for ($i=0; $i<$input['len_alamat_saksi_1']; $i++): ?>

				<td class="kotak padat tengah">
					
					<?php if (isset($input['alamat_saksi_1'][$i])): ?>
						<?=$input['alamat_saksi_1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<td colspan="2" class="kotak padat tengah">RT</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rt_saksi_1'][$i])): ?>
						<?=$input['rt_saksi_1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>
			<td colspan="2" class="kotak padat tengah">RW</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rw_saksi_1'][$i])): ?>
						<?=$input['rw_saksi_1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
			<?php for ($i=0; $i<$input['sisa_kotak_alamat_saksi_1']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td colspan="11">&nbsp;</td>
			<td>:</td>
			<td colspan="4" class="kotak padat tengah">KODE POS</td>

			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kdpos_wanita'][$i])): ?>
						<?=$input['kdpos_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan="4" class="kotak padat tengah">TELEPON</td>
			<?php for ($i=0; $i<12; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['telpon_wanita'][$i])): ?>
						<?=$input['telpon_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<11; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Dsa./Kel.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['desa_wanita'];?></td>
			<td colspan="4" class="kotak padat tengah">Kec.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kec_wanita'];?></td>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Kab./Kota</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kab_wanita'];?></td>
			<td colspan="4" class="kotak padat tengah">Provinsi</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['prov_wanita'];?></td>
		</tr>

		<tr>
			<td>66</td>
			<td colspan="10">Pekerjaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['pekerjaan_saksi_1'][$i])): ?>
						<?=$input['pekerjaan_saksi_1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan="48"><strong>DATA SAKSI II</strong></td>	
		</tr>
		<tr>
			<td>67</td>
			<td colspan="10">Nomor Induk Kependudukan (NIK)</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>

				<td class="kotak padat tengah">

					<?php if (isset($input['nik_saksi_2'][$i])): ?>
						<?=$input['nik_saksi_2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>
		
		<tr>
			<td>68</td>
			<td colspan="10">Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nama_saksi_2'][$i])): ?>
						<?=$input['nama_saksi_2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>	
			<?php endfor; ?>
		</tr>

		<tr>
			<td>69</td>
			<td colspan="10">Agama / Pengayat Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
			<td class="kotak padat tengah">
				
				<?php if (isset($input['agama_saksi_2'][$i])): ?>
					<?=$input['agama_saksi_2'][$i];?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>70</td>
			<td colspan="10">Nama Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>71</td>
			<td colspan="10">Tempat / Tanggal Lahir</td>
			<td>:</td>
			
			<?php for ($i=0; $i< $input['strlen_tempat_lahir_saksi_2']; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_lahir_saksi_2'][$i])): ?>
						<?=$input['tempat_lahir_saksi_2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>				
				</td>
			<?php endfor; ?>
			<td class="kotak padat tengah">/</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['tanggal_lahir_saksi_2'][$i])): ?>
						<?=$input['tanggal_lahir_saksi_2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['bulan_lahir_saksi_2'][$i])): ?>
						<?=$input['bulan_lahir_saksi_2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>		

				</td>
			<?php endfor; ?>

			<td class="kotak padat tengah">-</td>
			
			<?php for ($i=0; $i<4; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['tahun_lahir_saksi_2'][$i])): ?>
						<?=$input['tahun_lahir_saksi_2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<?php for ($i=0; $i<$input['sisa_kotak_tempat_lahir_saksi_2']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td>72</td>
			<td colspan="10">Alamat</td>
			<td>:</td>

			<?php for ($i=0; $i<$input['len_alamat_saksi_2']; $i++): ?>

				<td class="kotak padat tengah">
					
					<?php if (isset($input['alamat_saksi_2'][$i])): ?>
						<?=$input['alamat_saksi_2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>

			<td colspan="2" class="kotak padat tengah">RT</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rt_saksi_2'][$i])): ?>
						<?=$input['rt_saksi_2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>	

				</td>
			<?php endfor; ?>
			<td colspan="2" class="kotak padat tengah">RW</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['rw_saksi_2'][$i])): ?>
						<?=$input['rw_saksi_2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
			<?php for ($i=0; $i<$input['sisa_kotak_alamat_saksi_2']; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>

		</tr>

		<tr>
			<td colspan="11">&nbsp;</td>
			<td>:</td>
			<td colspan="4" class="kotak padat tengah">KODE POS</td>

			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['kdpos_wanita'][$i])): ?>
						<?=$input['kdpos_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

			<td colspan="4" class="kotak padat tengah">TELEPON</td>
			<?php for ($i=0; $i<12; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['telpon_wanita'][$i])): ?>
						<?=$input['telpon_wanita'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			<?php for ($i=0; $i<11; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Dsa./Kel.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['desa_wanita'];?></td>
			<td colspan="4" class="kotak padat tengah">Kec.</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kec_wanita'];?></td>
		</tr>

		<tr>
			<td colspan="12">&nbsp;</td>
			<td colspan="4" class="kotak padat tengah">Kab./Kota</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['kab_wanita'];?></td>
			<td colspan="4" class="kotak padat tengah">Provinsi</td>
			<td colspan="14" class="kotak padat tengah"><?=$input['prov_wanita'];?></td>
		</tr>

		<tr>
			<td>73</td>
			<td colspan="10">Pekerjaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">

					<?php if (isset($input['pekerjaan_saksi_2'][$i])): ?>
						<?=$input['pekerjaan_saksi_2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
	</table>

	<!-- DATA PERKAWINAN -->
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td><strong>VIII</strong></td>
			<td colspan="47"><strong>DATA PERKAWINAN</strong></td>
			
		</tr>
		<tr>
			<td>74</td>
			<td colspan="10">Tanggal Pemberkatan Perkawinan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tanggal_nikah'][$i])): ?>
						<?=strtoupper($input['tanggal_nikah'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			
		</tr>
		<tr>
			<td>75</td>
			<td colspan="10">Hari, Tanggal, Bulan Melapor</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tanggal_melapor_nikah'][$i])): ?>
						<?=strtoupper($input['tanggal_melapor_nikah'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			
		</tr>
		<tr>
			<td>76</td>
			<td colspan="10">Pukul</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['jam_nikah'][$i])): ?>
						<?=$input['jam_nikah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td>77</td>
			<td colspan="10">Agama/Penganut Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['agama_pernikahan'][$i])): ?>
						<?=strtoupper($input['agama_pernikahan'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>78</td>
			<td colspan="10">Nama Kepercayaan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>79</td>
			<td colspan="10">Nama Badan Peradilan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['nama_badan_peradilan'][$i])): ?>
						<?=strtoupper($input['nama_badan_peradilan'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>80</td>
			<td colspan="10">No Pts Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['nomor_putusan'][$i])): ?>
						<?=strtoupper($input['nomor_putusan'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>

		<tr>
			<td>81</td>
			<td colspan="10">Tgl Pts Penetapan Pengadilan</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['tanggal_putusan'][$i])): ?>
						<?=strtoupper($input['tanggal_putusan'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>

		<tr>
			<td>82</td>
			<td colspan="10">Nama Pemuka Agama</td>
			<td>:</td>
			<?php for ($i=0; $i<36; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['nama_rohaniawan'][$i])): ?>
						<?=strtoupper($input['nama_rohaniawan'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
			
		</tr>

		<tr>
			<td>83</td>
			<td colspan="10">Ijin Perwakilan Bagi WNA/Nomor</td>
			<td>:</td>			
			<?php for ($i=0; $i<36; $i++): ?>
			<td class="kotak padat tengah">
				
				<?php if (isset($input['nomor_perwakilan_wna'][$i])): ?>
					<?=strtoupper($input['nomor_perwakilan_wna'][$i]);?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>
			</td>
			<?php endfor; ?>

			
		</tr>

		<tr>
			<td>84</td>
			<td colspan="10">Jumlah Anak Yg Telah Diakui</td>
			<td>:</td>

			<?php for ($i=0; $i<36; $i++): ?>
			<td class="kotak padat tengah">
				
				<?php if (isset($input['anak_diakui'][$i])): ?>
					<?=$input['anak_diakui'][$i];?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>
			<?php endfor; ?>
		</tr>		

		<tr>
			<td>85</td>
			<td colspan="10">Nama Anak</td>
			<td>:</td>
			<td>1.</td>
			<?php for ($i=0; $i<35; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['anak_diakui_1'][$i])): ?>
						<?=strtoupper($input['anak_diakui_1'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="10">&nbsp;</td>
			<td>:</td>
			<td>2.</td>
			<?php for ($i=0; $i<35; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['anak_diakui_2'][$i])): ?>
						<?=strtoupper($input['anak_diakui_2'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="10">&nbsp;</td>
			<td>:</td>
			<td>3.</td>
			<?php for ($i=0; $i<35; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['anak_diakui_3'][$i])): ?>
						<?=strtoupper($input['anak_diakui_3'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>


		<tr>
			<td>&nbsp;</td>
			<td colspan="10">&nbsp;</td>
			<td>:</td>
			<td>4.</td>
			<?php for ($i=0; $i<35; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['anak_diakui_4'][$i])): ?>
						<?=strtoupper($input['anak_diakui_4'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="10">&nbsp;</td>
			<td>:</td>
			<td>5.</td>
			<?php for ($i=0; $i<35; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['anak_diakui_5'][$i])): ?>
						<?=strtoupper($input['anak_diakui_5'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>


		<tr>
			<td>&nbsp;</td>
			<td colspan="10">&nbsp;</td>
			<td>:</td>
			<td>6.</td>
			<?php for ($i=0; $i<35; $i++): ?>
				<td class="kotak padat tengah">
					
					<?php if (isset($input['anak_diakui_6'][$i])): ?>
						<?=strtoupper($input['anak_diakui_6'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>

				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>86</td>
			<td colspan="10">No, Tgl Akte Kelahiran</td>
			<td>:</td>
			<td>1.</td>
			<td >No.</td>
			
			<td class="kotak padat tengah" colspan="17">

				<?php if (isset($input['akte_anak_diakui_1'])): ?>
					<?=strtoupper($input['akte_anak_diakui_1']);?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>
			

			<td>Tgl</td>
			<?php for ($i=0; $i<16; $i++): ?>
			<td  class="kotak padat tengah">

				<?php if (isset($input['akte_anak_tanggal_1'][$i])): ?>
					<?=strtoupper($input['akte_anak_tanggal_1'][$i]);?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>
			<?php endfor; ?>

		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="10">&nbsp;</td>
			<td>&nbsp;</td>
			<td>2.</td>
			<td >No.</td>
			
			<td class="kotak padat tengah" colspan="17">
				<?php if (isset($input['akte_anak_diakui_2'])): ?>
					<?=strtoupper($input['akte_anak_diakui_2']);?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>
			</td>

			<td>Tgl</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td  class="kotak padat tengah">
					<?php if (isset($input['akte_anak_tanggal_2'][$i])): ?>
						<?=strtoupper($input['akte_anak_tanggal_2'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>

		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="10">&nbsp;</td>
			<td>&nbsp;</td>
			<td>3.</td>
			<td >No.</td>
			
			<td class="kotak padat tengah" colspan="17">

				<?php if (isset($input['akte_anak_diakui_3'])): ?>
					<?=strtoupper($input['akte_anak_diakui_3']);?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>

			<td>Tgl</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td  class="kotak padat tengah">
					<?php if (isset($input['akte_anak_tanggal_3'][$i])): ?>
						<?=strtoupper($input['akte_anak_tanggal_3'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="10">&nbsp;</td>
			<td>&nbsp;</td>
			<td>4.</td>
			<td >No.</td>
			
			<td class="kotak padat tengah" colspan="17">

				<?php if (isset($input['akte_anak_diakui_4'])): ?>
					<?=strtoupper($input['akte_anak_diakui_4']);?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>

			<td>Tgl</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td  class="kotak padat tengah">
					<?php if (isset($input['akte_anak_tanggal_4'][$i])): ?>
						<?=strtoupper($input['akte_anak_tanggal_4'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="10">&nbsp;</td>
			<td>&nbsp;</td>
			<td>5.</td>
			<td>No.</td>
			
			<td class="kotak padat tengah" colspan="17">

				<?php if (isset($input['akte_anak_diakui_5'])): ?>
					<?=strtoupper($input['akte_anak_diakui_5']);?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>

			<td>Tgl</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td  class="kotak padat tengah">
					<?php if (isset($input['akte_anak_tanggal_5'][$i])): ?>
						<?=strtoupper($input['akte_anak_tanggal_5'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="10">&nbsp;</td>
			<td>&nbsp;</td>
			<td>6.</td>
			<td >No.</td>
			<td class="kotak padat tengah" colspan="17">

				<?php if (isset($input['akte_anak_diakui_6'])): ?>
					<?=strtoupper($input['akte_anak_diakui_6']);?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>

			</td>

			<td>Tgl</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td  class="kotak padat tengah">
					<?php if (isset($input['akte_anak_tanggal_6'][$i])): ?>
						<?=strtoupper($input['akte_anak_tanggal_6'][$i]);?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>

	</table>


	<!-- DATA ADMINISTRASI -->
	<table class="disdukcapil" style="margin-top: -5px; border: 0px;" border="0">
		<col span="48" style="width: 2.0833%;">
		<!-- Untuk memaksa penampilan setiap kolom -->
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="19" class="kotak padat tengah"><strong>DATA ADMINISTRASI</strong></td>
			<td colspan="29">&nbsp;</td>
			
		</tr>
		<tr>
			<td colspan="19" ><strong><i>Hanya Diisi Oleh Petugas</i></strong></td>
			<td colspan="29">&nbsp;</td>
			
		</tr>
		<tr>
			<td>87</td>
			<td colspan="10" class="kotak padat kiri">Persyaratan</td>
			<td colspan="29">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Surat Keterangan Perkawinan Dari Pemuka Agama / Pengayat Kepercayaan / Salinan Penetapan Pengadilan</td>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Fotocopy Kutipan Akte Kelahiran</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Surat Keterangan Dari Dsa./Kel.</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Fotocopy KTP/KK yang Dilegalisir Pejabat yang Berwenang</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Pas Photo Berdampingan ukuran 4x6 cm sebanyak 3 (tiga) lembar</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">2 (dua) orang saksi yang telah berusia  21 tahun keatas</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Fotocopy kutipan akte kelahiran anak yang akan diakui / disyahkan</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Fotocpy akte perceraian/kematian jika yang bersangkutan telah pernah kawin</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Ijin dari Komandan bila anggota TNI / POLRI</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Perjanjian Perkawinan</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">STMD dari Kepolisian</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Surat ijin dari Istri bagi yang berpoligami</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Surat ijin dari Pengadilan Negeri bagi yang berpoligami</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Surat ijin dari Perwakilan Negera Asing yang bersangkutan jika WNA</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">Paspor / Dokumen keimigrasian bagi WNA</td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td colspan="2" class="kotak padat tengah">&nbsp;</td>
			<td colspan="44">SKTT dari Dinas Kependudukan dan Catatan Sipil</td>
		</tr>

		
		<tr>
			<td>88</td>
			<td colspan="10" >Nomor Akte Perkawinan</td>
			<td>:</td>
			<td colspan="28" class="kotak padat kiri">&nbsp;</td>
		</tr>
		<tr>
			<td>89</td>
			<td colspan="10" >Tanggal Akte Perkawinan</td>
			<td>:</td>
			<td colspan="3" class="kotak padat tengah">TGL</td>
			<td class="kotak padat tengah">&nbsp;</td>
			<td class="kotak padat tengah">&nbsp;</td>

			<td colspan="3" class="kotak padat tengah">BLN</td>
			<td class="kotak padat tengah">&nbsp;</td>
			<td class="kotak padat tengah">&nbsp;</td>

			<td colspan="3" class="kotak padat tengah">THN</td>
			<td class="kotak padat tengah">&nbsp;</td>
			<td class="kotak padat tengah">&nbsp;</td>

			<td colspan="13" class="kotak padat kiri">&nbsp;</td>
		</tr>
		<tr>
			<td>90</td>
			<td colspan="10" >Tanggal Cetak Kutipan</td>
			<td>:</td>
			<td colspan="3" class="kotak padat tengah">TGL</td>
			<td class="kotak padat tengah">&nbsp;</td>
			<td class="kotak padat tengah">&nbsp;</td>

			<td colspan="3" class="kotak padat tengah">BLN</td>
			<td class="kotak padat tengah">&nbsp;</td>
			<td class="kotak padat tengah">&nbsp;</td>

			<td colspan="3" class="kotak padat tengah">THN</td>
			<td class="kotak padat tengah">&nbsp;</td>
			<td class="kotak padat tengah">&nbsp;</td>

			<td colspan="13" class="kotak padat kiri">&nbsp;</td>
		</tr>
		<tr>
			<td>91</td>
			<td colspan="10">Nama Petugas Entri Data</td>
			<td>:</td>
			<td colspan="15" class="kotak padat kiri">&nbsp;</td>
			<td colspan="2">NIP</td>
			<td colspan="17" class="kotak padat kiri">&nbsp;</td>
		</tr>
		<tr>
			<td>92</td>
			<td colspan="10" >Tanggal Entri Data</td>
			<td>:</td>
			<td colspan="3" class="kotak padat tengah">TGL</td>
			<td class="kotak padat tengah">&nbsp;</td>
			<td class="kotak padat tengah">&nbsp;</td>

			<td colspan="3" class="kotak padat tengah">BLN</td>
			<td class="kotak padat tengah">&nbsp;</td>
			<td class="kotak padat tengah">&nbsp;</td>

			<td colspan="3" class="kotak padat tengah">THN</td>
			<td class="kotak padat tengah">&nbsp;</td>
			<td class="kotak padat tengah">&nbsp;</td>

			<td colspan="13" class="kotak padat kiri">&nbsp;</td>
		</tr>


		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>

		<tr>
			<td colspan="16" class="padat tengah"><strong>Mengetahui,</strong></td>
			<td colspan="16" class="padat tengah">&nbsp;</td>
			<td colspan="16" class="padat tengah">93..............,..............................................</td>
		</tr>
		<tr>
			<td colspan="16" class="padat tengah">Kepala</td>
			<td colspan="16" class="padat tengah">Petugas Pencatat</td>
			<td colspan="16" class="padat tengah">Pelapor</td>
		</tr>
		<tr>
			<td colspan="16" class="padat tengah">94....................................................</td>
			<td colspan="16" class="padat tengah">&nbsp;</td>
			<td colspan="16" class="padat tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="16" class="padat tengah"><br /><br /><br /><br /><br /><br /><br /><br /><br /></td>
			<td colspan="16" class="padat tengah"><br /><br /><br /><br /><br /><br /><br /><br /><br /></td>
			<td colspan="16" class="padat tengah"><br /><br /><br /><br /><br /><br /><br /><br /><br /></td>
		</tr>
		<tr>
			<td colspan="16" class="padat tengah">95.............................................................</td>
			<td colspan="16" class="padat tengah">96.............................................................</td>
			<td colspan="16" class="padat tengah">97.............................................................</td>
		</tr>
		<tr>
			<td colspan="16" class="padat tengah">Nama Jelas (NIP)</td>
			<td colspan="16" class="padat tengah">Nama Jelas (NIP)</td>
			<td colspan="16" class="padat tengah">Nama Jelas</td>
		</tr>

	</table>
	
</page>