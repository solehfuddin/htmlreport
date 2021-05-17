<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Surat Pesanan</title>
	 <style>
	@page{
	margin-top: 0.60cm;
	margin-left: 0.60cm;
	margin-right: 0.60cm;
	margin-bottom: 0.60cm;
	}
	.tg  {border-collapse:collapse;border-spacing:0;}
	.tg td{font-family:Arial, sans-serif;font-size:12px;padding:8px 5px;border-style:solid;border-width:0.5px;overflow:hidden;word-break:normal;border-color:black;}
	.tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:8px 5px;border-style:solid;border-width:0.5px;overflow:hidden;word-break:normal;border-color:black;}
	.tg .tg-0lax{text-align:left;vertical-align:top}
	 </style>
	</head>
	<body>
		<?php
			foreach ($json as $header) {
				$custname 	= $header['customer_name'];
				$alamat 	= $header['address'];
				$city 		= $header['city'];
				$invdate 	= substr($header['date'], 0, 10);
				$invdate 	= date('d M Y', strtotime($invdate));
				$dp 		= $header['down_payment'];
				$sales 		= $header['sales'];
				$nosp 	    = $header['trans_number'];
			}
		?>
		
		<div><img width="70" style="padding-top:px;" src="<?php echo base_url('assets/images/logo.png')?>"></div>
		<div><h1 style="font-size:20px; padding-top:-70px; padding-left:80px;">Timur Raya Lestari</h1></div>
		<div><p style="font-size:9px; padding-top:-25px; padding-left:80px;">Jl. Rawa Kepiting No.4, K.I.P., Jakarta 13920, Indonesia</h1></p>
		<div><p style="font-size:9px; padding-top:-20px; padding-left:80px;">telp. (021) 461-0154, 461-3212 (Hunting)</h1></p>
		<img width="80" style="padding-left:660px; padding-top:-70px;" src="<?php echo base_url('assets/images/tuvnord.png')?>">
		<h2 align="center">SURAT PESANAN</h2>
		<h5 align="right" style="padding-right:50px;">No : <?php echo $nosp; ?></h5>
		<div style="border:1px solid black;">

			<table width="100%" style="font-size:12px;">
			<tr>
				<td>
					<table>
						<tr>
							<td>Pemesanan</td>
							<td>:</td>
							<td>OPTIK / RUMAH SAKIT / PERUSAHAAN /  DOKTER</td>
						</tr>
						<tr>
							<td>Nama Optik</td>
							<td>:</td>
							<td><?php echo $custname; ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><?php echo $alamat; ?></td>
						</tr>
						<tr>
							<td>Kota</td>
							<td>:</td>
							<td><?php echo $city; ?></td>
						</tr>
						<tr>
							<td>Status Order</td>
							<td>:</td>
							<td>INDEN / BASIC</td>
						</tr>
					</table>
				</td>
			</tr>
			</table>
		</div>
		<p style="padding-top:-107px; padding-left:90; font-size:12px;">..............................................................................................</p>
		<p style="padding-top:-10px; padding-left:90; font-size:12px;">..............................................................................................</p>
		<p style="padding-top:-10px; padding-left:90; font-size:12px;">..............................................................................................</p>
		<p style="padding-top:-10px; padding-left:90; font-size:12px;">..............................................................................................</p>
		<p style="padding-top:-30px; padding-left:534; font-size:12px;">....................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;....................</p>
		<p style="padding-top:-90px;">
		<table style="margin-left:523px;" class="tg">
			<tr>
				<th class="tg-0lax" align="center">Tanggal Order</th>
				<th class="tg-0lax" align="center">Tanggal Kirim</th>
			</tr>
			<tr>
				<td class="tg-0lax" align="center" height="30"><?php echo $invdate; ?></td>
				<td class="tg-0lax" align="center" height="30"><?php echo $invdate; ?></td>
				</tr>
		</table>
		</p>
		
		<table class="tg" width="100%" style="margin-top:18px;">
		  <tr>
			<th class="tg-0lax" align="center">No.</th>
			<th class="tg-0lax" align="center">Nama Barang / Item Merek & Artikel</th>
			<th class="tg-0lax" align="center">Quantity</th>
			<th class="tg-0lax" align="center">Satuan Unit</th>
			<th class="tg-0lax" align="center">Harga Satuan</th>
			<th class="tg-0lax" align="center">Harga Total</th>
		  </tr>

		  	<?php
				if (count($json) >= 10)
				{
					for($j = 1; $j <= 10; $j++){
			?>

			<tr>
				<td class="tg-0lax" align="center"><?php echo $j; ?></td>
				<td class="tg-0lax" align="center">Terlampir</td>
				<td class="tg-0lax" align="center"></td>
				<td class="tg-0lax" align="center"></td>
				<td class="tg-0lax" align="center"></td>
				<td class="tg-0lax" align="center"></td>
		  	</tr>

			<?php
					}
				}
				else
				{
					$i = 0;
					foreach($json as $content){
					$i++;
			?>
			
			<tr>
				<td class="tg-0lax" align="center"><?php echo $i; ?></td>
				<td class="tg-0lax" align="center"><?php echo $content['description']; ?></td>
				<td class="tg-0lax" align="center"><?php echo $content['qty']; ?></td>
				<td class="tg-0lax" align="center">PCS</td>
				<td class="tg-0lax" align="center"><?php echo $content['unit_standard_price']; ?></td>
				<td class="tg-0lax" align="center"><?php echo $content['amount']; ?></td>
		  	</tr>
			
			<?php
					}
				}
			?>
		</table>
		
		<table style="margin-top:10px; font-size:12px;">
			<tr>
				<td width="187">Order Via</td>
				<td>:</td>
				<td>Android</td>
			</tr>
			<tr>
				<td>Uang Muka</td>
				<td>:</td>
				<td>...................., % atau Sejumlah Rp. <?php echo number_format($dp, 0, "", "."); ?></td>
			</tr>
			<tr>
				<td>Discount</td>
				<td>:</td>
				<td> (%)</td>
			</tr>
			<tr>
				<td>Syarat Pembayaran</td>
				<td>:</td>
				<td>Cash Rp. ....................</td>
			</tr>
			<tr>
				<td>Cicilan</td>
				<td>:</td>
				<td>Sebanyak () Kali, Sejumlah Rp. .................... /bulan ....................</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>Dimulai Sejak Bulan .................... Sampai dengan Bulan ....................</td>
			</tr>
		</table>
		<table style="font-size:12px;">
			<tr>
				<td>Pembayaran diterima oleh PT. Timur Raya Lestari pada setiap tanggal .................... /bulannya (Sesuai Kesepakatan)</td>
			</tr>
		</table>
		<table style="font-size:12px;" width="84.5%">
			<tr>
				<td >Alamat Pengiriman barang</td>
				<td>:</td>
				<td><?php echo $alamat; ?></td>
			</tr>
		</table>
		<p style="font-size:10px;"><strong>Pembayaran Optik Dapat di transfer melalui Rek. a/n PT.Timur Raya Lestari<br>1.BCA Cab.Asemka Jakarta A/C 001.304136.6<br>2.BANK MANDIRI Cab. KIP Jakarta A/C 125.000482135.1<br>Pembayaran medical dapat di transfer melalui BANK MANDIRI Cab. KIP Jakarta A/C. 166.000069642.7</strong></p>
		<div>
		<table class="tg">
		  <tr style="height:20px;">
			<th class="tg-0lax" colspan="3" align="center">Internal Control</th>
		  </tr>
		  <tr>
			<td class="tg-0lax" align="center" width="120">Nama Sales Insiator</td>
			<td class="tg-0lax" align="center" width="120">Manager Sales</td>
			<td class="tg-0lax" align="center" width="120">Manager AR</td>
		  </tr>
		  <tr>
			<td class="tg-0lax" height="120"></td>
			<td class="tg-0lax" height="120"></td>
			<td class="tg-0lax" height="120"></td>
		  </tr>
		</table>
		<p style="padding-top:-135px; padding-left:460;">SALES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CUSTOMER</p>
		<p style="padding-top:55px; padding-left:410; font-size:11px;">Nama : <?php echo $sales; ?></p>
		<p style="padding-top:-26px; padding-left:570; font-size:11px;">Nama : .....................................<br>Jabatan : ..................................</p>
		</div>
		
		<?php
			if (count($json) >= 10)
			{
		?>
			<pagebreak>
		
			<table class="tg" width="100%" style="margin-top:18px;">
			  <tr>
				<th class="tg-0lax" align="center">No.</th>
				<th class="tg-0lax" align="center">Nama Barang / Item Merek & Artikel</th>
				<th class="tg-0lax" align="center">Quantity</th>
				<th class="tg-0lax" align="center">Satuan Unit</th>
				<th class="tg-0lax" align="center">Harga Satuan</th>
				<th class="tg-0lax" align="center">Harga Total</th>
			  </tr>

				<?php
					$i = 0;
					foreach($json as $content){
					$i++;
				?>

				<tr>
					<td class="tg-0lax" align="center"><?php echo $i; ?></td>
					<td class="tg-0lax" align="center"><?php echo $content['description'] . $content['rl']; ?></td>
					<td class="tg-0lax" align="center"><?php echo $content['qty']; ?></td>
					<td class="tg-0lax" align="center">PCS</td>
					<td class="tg-0lax" align="center"><?php echo $content['unit_standard_price']; ?></td>
					<td class="tg-0lax" align="center"><?php echo $content['amount']; ?></td>
				</tr>

				<?php
					}
				?>
			</table>
		<?php
			}
		?>
	</body>
</html>