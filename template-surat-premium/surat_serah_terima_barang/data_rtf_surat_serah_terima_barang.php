<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
	/*
		
	*/
		
		for ($i=1; $i<=15 ; $i++) { 
			$total[$i]=$input['total_'.$i];
			$harga[$i]=$input['harga_'.$i];
			$vol[$i]=$input['vol_'.$i];

			if ($total[$i]==0) {
				$total[$i]="";
			}else{
				$total[$i]=number_format($total[$i],0,",",".");
			}

			
			$harga[$i]=number_format($harga[$i],0,",",".");
			$vol[$i]=number_format($vol[$i],0,",",".");

			
			
		}


		$array_replace = array(
	    "[total_1]"        		=> $total[1],
	    "[total_2]"        		=> $total[2],
	    "[total_3]"        		=> $total[3],
	    "[total_4]"        		=> $total[4],
	    "[total_5]"        		=> $total[5],
	    "[total_6]"        		=> $total[6],
	    "[total_7]"        		=> $total[7],
	    "[total_8]"        		=> $total[8],
	    "[total_9]"        		=> $total[9],
	    "[total_10]"        	=> $total[10],
	    "[total_11]"        	=> $total[11],
	    "[total_12]"        	=> $total[12],
	    "[total_13]"        	=> $total[13],
	    "[total_14]"        	=> $total[14],
	    "[total_15]"        	=> $total[15],
	    "[harga_1]"        		=> $harga[1],
	    "[harga_2]"        		=> $harga[2],
	    "[harga_3]"        		=> $harga[3],
	    "[harga_4]"        		=> $harga[4],
	    "[harga_5]"        		=> $harga[5],
	    "[harga_6]"        		=> $harga[6],
	    "[harga_7]"        		=> $harga[7],
	    "[harga_8]"        		=> $harga[8],
	    "[harga_9]"        		=> $harga[9],
	    "[harga_10]"        	=> $harga[10],
	    "[harga_11]"        	=> $harga[11],
	    "[harga_12]"        	=> $harga[12],
	    "[harga_13]"        	=> $harga[13],
	    "[harga_14]"        	=> $harga[14],
	    "[harga_15]"        	=> $harga[15],
	    "[vol_1]"        		=> $vol[1],
	    "[vol_2]"        		=> $vol[2],
	    "[vol_3]"        		=> $vol[3],
	    "[vol_4]"        		=> $vol[4],
	    "[vol_5]"        		=> $vol[5],
	    "[vol_6]"        		=> $vol[6],
	    "[vol_7]"        		=> $vol[7],
	    "[vol_8]"        		=> $vol[8],
	    "[vol_9]"        		=> $vol[9],
	    "[vol_10]"        		=> $vol[10],
	    "[vol_11]"        		=> $vol[11],
	    "[vol_12]"        		=> $vol[12],
	    "[vol_13]"        		=> $vol[13],
	    "[vol_14]"        		=> $vol[14],
	    "[vol_15]"        		=> $vol[15],
	    "[gTotal]"        		=> rupiah($input['gTotal']),
	    "[hari]"				=> hari(strtotime(rev_tgl($input['tanggal_terima']))),
	    "[tanggal_terima]"		=> tgl_indo2(rev_tgl($input['tanggal_terima'])),
	    "[tanggal_order]"		=> tgl_indo2(rev_tgl($input['tanggal_order'])),
	    
	    
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	

	

	?>