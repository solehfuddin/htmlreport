<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bill</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/customprint.css');?>">

</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<!-- <body class="A4"> -->
<body>

	<section class="sheet padding-10mm">

    <!-- Write HTML just like a web page -->
    <article>
    		<div class="row" style=" width:40%; height:40px;">
		
				<div id="logo">
					<img src="<?php echo base_url('assets/images/banner/logo_trl.png'); ?>" width="200px">
				  </div>
				<div class="header-left">

					<p style="font-size: 11px; font-family: arial; margin-top: -1px">
						  Jl. Rawa Kepiting No. 4 K.I.P Jakarta 13920
					</p>

					<div class="row">
						<div class="icon-telp">
							<img style="margin-top: -5px;" src="<?php echo base_url('assets/images/icon/telp.png'); ?>" 
							height="12"> <p style="font-size: 11px; margin-top:-14px; margin-left:20px; ">Telp&nbsp; : (021) 4610154 / <img src="<?php echo base_url('assets/images/icon/wa.png'); ?>" 
							height="11"> 08121145555</p>
						</div>
						<div class="icon-telp">
							<img style="margin-top: -6px;" src="<?php echo base_url('assets/images/icon/fax.png'); ?>" 
							height="12"> <p style="font-size: 11px; margin-top:-14px; margin-left:20px; ">Fax&nbsp;&nbsp; : (021) 4610154,4610151,4610152</p>
						</div>
						<div class="icon-telp">
							<img style="margin-top: -6px;" src="<?php echo base_url('assets/images/icon/email.png'); ?>" 
							height="12"> <p style="font-size: 11px; margin-top:-14px; margin-left:20px; ">Mail&nbsp; : cslab@trl.co.id</p>
						</div>
						<div class="icon-telp">
							<img style="margin-top: -6px;" src="<?php echo base_url('assets/images/icon/web.png'); ?>" 
							height="12"> <p style="font-size: 11px; margin-top:-14px; margin-left:20px; ">Web&nbsp; : www.timurrayalab.com</p>
						</div>
					</div>
				</div>
			</div>

			<?php 
				foreach ($json as $header) { 
					$custname 	= $header['gc_optical_name'];
					$address  	= $header['gc_optical_addr'];
					$city		= $header['gc_optical_city'];
					$province 	= $header['shippingProvince'];
					$username 	= $header['username'];
					$ordernumber= $header['trans_number'];
					$total 		= $header['grandTotal'];
					$invdate 	= substr($header['trans_date'], 0, 10);
					$invdate 	= date('d/m/y', strtotime($invdate));
					$duedate 	= substr($header['due_date'], 0, 10);
					$duedate 	= date('d/m/y', strtotime($duedate));

					$shippingCourier = $header['shippingCourier'];
					$shippingPrice = $header['shippingPrice'];
				};
			?>

			<table align="right" style="margin-top:-135; border:1px solid; font-size: 11px;">
				<tr style="background:#1E88E5; color:#fff;">
					<th width="200" style="border-right: 1px solid black;">Bill to :</th>
					<th width="200">Ship to :</th>
				</tr>
				<tr>
					<td height="120" style="text-align:left;">
						<!-- <p style="margin:10px 0"><?= $info->customer_bill_name ?></p><br> -->
						<p style="font-family: arial; font-size: 10px; margin-top: -55px; text-align: justify;">
							<?php echo $custname; ?>
						</p>

						<p style="font-family: arial; font-size: 10px; margin-top: 5px; text-align: justify;">
							<?php echo $address; ?>
						</p>

						<p style="font-family: arial; font-size: 10px; margin-top: 5px; text-align: justify;">
							<?php echo $city; ?>, 
							<?php echo $province; ?>
						</p>	
					</td>
					<td height="120" style="text-align:left;">
						<p style="font-family: arial; font-size: 10px; margin-top: -55px; text-align: justify;">
							<?php echo $custname; ?>
						</p>

						<p style="font-family: arial; font-size: 10px; margin-top: 5px; text-align: justify;">
							<?php echo $address; ?>
						</p>

						<p style="font-family: arial; font-size: 10px; margin-top: 5px; text-align: justify;">
							<?php echo $city; ?>, 
							<?php echo $province; ?>
						</p>
					</td>
				</tr>
			</table>

			<table style="margin-top:20; border:1px solid; font-size: 11px; text-align:center;">
				<tr style="background:#1E88E5;">
					<th width="70" style="border-right: 1px solid black;">SHIP</th>         
					<th width="70" style="border-right: 1px solid black;">CHARGE</th>
					<th width="135" style="border-right: 1px solid black;">INVOICE</th>
					<th width="135" style="border-right: 1px solid black;">ORDER NUMBER</th>
					<th width="135" style="border-right: 1px solid black;">PURCHASE ORDER</th>
					<th width="86" style="border-right: 1px solid black;">INV DATE</th>
					<th width="86" >DUE DATE</th>
				</tr>
				<tr style="text-align: left; ">
					<td><?php echo $username ; ?></td>
					<td><?php echo $username ; ?></td>
					<td></td>
					<td></td>
					<td><?php echo $ordernumber; ?></td>
					<td><?php echo $invdate; ?></td>
					<td><?php echo $duedate; ?></td>
				</tr>
			</table>

			<table class="dataItem" style="margin-top:20; border:1px solid; font-size: 11px; text-align:center;">
				<tr style="background:#1E88E5;">
					<th width="140" style="border-right: 1px solid black;max-width:140px;">ITEM CODE</th>
					<th width="270" style="border-right: 1px solid black;">DESCRIPTION</th>
					<th width="67,5" style="border-right: 1px solid black;">UOM</th>
					<th width="67,5" style="border-right: 1px solid black;">QTY</th>
					<th width="86" style="border-right: 1px solid black;">PRICE</th>
					<th width="86" >TOTAL</th>
				</tr>
				
				 	<?php
						foreach($json as $content){
					?>
						<tr>
							<td style="text-align:left; "><?php echo $content['description']; ?></td>
							<td style="text-align:left; ">
								<?php echo $content['item_code']; ?>
							</td>
							<td><?php echo $content['umo_code']; ?></td>
							<td><?php echo $content['qty']; ?></td>
							<td style="text-align:center;">
								<?php echo "Rp " . number_format($content['unit_standard_price'], 0, "", "."); ?>
							</td>
							<td style="text-align:right;">
								<?php echo "Rp " . number_format($content['price_item'], 0, "", "."); ?>
							</td>
						</tr>

						<tr>
							<td></td>
							<td style="text-align:left;"><?php echo "Discount : " . $content['discount'] . " %"; ?></td>
							<td></td>
							<td></td>
							<td></td>
							<td style="text-align:right;">
								<?php echo "Rp - " . number_format($content['price_item']*($content['discount']/100), 0, "", "."); ?>
								</td>
						</tr>
					<?php
						}
					?>

					<tr>
						<td style="text-align:left;">Shipping : <?php echo $shippingCourier; ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td style="text-align:right;"><?php echo "Rp " . number_format($shippingPrice, 0, "", "."); ?></td>
					</tr>

					<tr>
						<td></td>
						<td></td>
						<td style="border-top:1px solid black;background:#1E88E5;color:#fff;">TOTAL</td>
						<td></td>
						<td></td>
						<td style="text-align:right; font-size: 12px;"><?php echo "Rp " . number_format($total, 0, "", "."); ?></td>
					</tr> 
			</table>

			<br>
			<table style="border:0 !important; margin-top:-20px;">
				<tr>
				<td width="580" style="border:0 !important;">
				<div class="row" style="font-size: 9px;  ">
					<div class="footer-left" style="border-spacing: 15px;">
						<div class="footer-leftone">
							Pembayaran Customer Optik dapat ditransfer melalui rekening a/n. PT. Timur Raya Lestari :
						</div>

						<div class="footer-lefttwo">
							1) BCA cab. Asemka Jakarta A/C. 001.304136.6
						</div>

						<div class="footer-lefttwo">
							2) BANK MANDIRI Cab. KIP Jakarta A/C. 125.000482135.1
						</div>

						<div class="footer-lefttwo">
							<b>PERHATIAN</b>
						</div>

						<div class="footer-lefttwo">
							* Barang yang sudah dibeli tidak dapat dikembalikan
						</div>

						<div class="footer-lefttwo">
							* Untuk kesalahan pengiriman, barang dapat dikembalikan paling lambat 1 bulan dari tanggal invoice terbit
						</div>
					</div>
				</div>
				</td>

				<td width="228" style="border:0 !important;">
				<div class="footer-right" style="font-size: 9px; border-spacing: 15px;" >
					<div class="footer-leftone">
						Konfirmasi Pembayaran Hubungi :
					</div>

					<div class="footer-lefttwo">
						- SMS/WA : 0815 1033 4072 , atau
					</div>

					<div class="footer-lefttwo">
						- Telepon : (021) 461 0154 Ext : 201 s/d 205
					</div>

					<div class="footer-lefttwo" style="text-align: center; margin-top: 5px;">
						Hormat kami,
					</div>
				</div>
				</td>
				</tr>
			</table>
			<?php
				if($content['cash_carry'] == 'Non Payment Method'){
			?>
				<img src="<?php echo base_url('assets/images/approved.png'); ?>" style='margin-top:-120; 
				margin-left:410;' height="120px">
			<?php
				}
				else
				{
			?>
				<img src="<?php echo base_url('assets/images/paid.png'); ?>" style='margin-top:-120; 
				margin-left:430;' height="120px">
			<?php
				}
			?>
    </article>

    </section>
</body>

</html>