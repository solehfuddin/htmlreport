<!DOCTYPE html>
<html>
<head>
	<title>Invoice TRL</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css');?>">
</head>
<body>
	<div id="wrap">

		<!-- Area Header -->
			<div class="row">
				<div class="header-left">
					<img class="custom-img" src="<?php echo base_url('assets/images/banner/bumperbanner.png'); ?>" width="200" height="72"/>

					<p style="font-size: 10px; font-family: arial; margin-top: -15px">
						Jl. Rawa Kepiting No. 4 K.I.P Jakarta 13920
					</p>

					<div class="row">
						<div class="icon-telp">
							<img style="margin-top: -5px;" src="<?php echo base_url('assets/images/icon/telp.png'); ?>" 
							width="12" height="12">
						</div>

						<div class="title-telp">
							Telp
						</div>

						<div class="content-telp">
							: (021) 4610154 / 08121145555
						</div>
					</div>


					<div class="row">
						<div class="icon-fax">
							<img style="margin-top: -5px;" src="<?php echo base_url('assets/images/icon/fax.png'); ?>" 
							width="12" height="12">
						</div>

						<div class="title-fax">
							Fax
						</div>

						<div class="content-fax">
							: (021) 4610154,4610151,4610152
						</div>
					</div>
							
					<div class="row">
						<div class="icon-mail">
							<img style="margin-top: -5px;" src="<?php echo base_url('assets/images/icon/email.png'); ?>" 
							width="12" height="12">
						</div>

						<div class="title-mail">
							Mail
						</div>

						<div class="content-mail">
							: cslab@trl.co.id
						</div>
					</div>

					<div class="row">
						<div class="icon-web">
							<img style="margin-top: -5px;" src="<?php echo base_url('assets/images/icon/web.png'); ?>" 
							width="12" height="12">
						</div>

						<div class="title-web">
							Web
						</div>

						<div class="content-web">
							: www.timurrayalestari.com
						</div>
					</div>
				</div>

				<div class="header-right" style="margin-left: 30px;">
					<div class="billto-tbl">
						BILL TO
					</div>

					<div class="billto-wrap">
						
					</div>

					<div class="shipto-tbl">
						SHIP TO
					</div>
					
					<div class="shipto-wrap">
						
					</div>

					<?php 
						foreach ($json as $header) { 
							$custname 	= $header['cust_name'];
							$address  	= $header['address1'];
							$city		= $header['city'];
							$province 	= $header['province'];
							$username 	= $header['username'];
							$ordernumber= $header['order_number'];
							$total 		= $header['price_total'];
							$invdate 	= $header['datefilter'];
							$invdate 	= date('d/m/y', strtotime($invdate));
							$duedate 	= $header['due_date'];
							$duedate 	= date('d/m/y', strtotime($duedate));
						};
					?>
						

					<div class="row">
						<div class="billto-content">
							<p style="font-family: arial; font-size: 10px; margin: 5px; text-align: justify;">
								<?php echo $custname; ?>
							</p>

							<p style="font-family: arial; font-size: 10px; margin: 5px; text-align: justify;">
								<?php echo $address; ?>
							</p>

							<p style="font-family: arial; font-size: 10px; margin: 5px; text-align: justify;">
								<?php echo $city; ?>, 
								<?php echo $province; ?>
							</p>							
						</div>

						<div class="shipto-content">
							<p style="font-family: arial; font-size: 10px; margin: 5px; text-align: justify;">
								<?php echo $custname; ?>
							</p>

							<p style="font-family: arial; font-size: 10px; margin: 5px; text-align: justify;">
								<?php echo $address; ?>
							</p>

							<p style="font-family: arial; font-size: 10px; margin: 5px; text-align: justify;">
								<?php echo $city; ?>, 
								<?php echo $province; ?>
							</p>	
						</div>
					</div>
					
				</div>
			</div>
		<!-- Area Header -->

		<!-- Area Top Content -->

			<div class="title-topship">
				SHIP
			</div>

			<div class="title-charge">
				CHARGE
			</div>

			<div class="title-invoice">
				INVOICE
			</div>

			<div class="title-ordnumber">
				ORDER NUMBER
			</div>

			<div class="title-ponumber">
				PURCHASE ORDER
			</div>

			<div class="title-invdate">
				INV DATE
			</div>

			<div class="title-duedate">
				DUE DATE
			</div>

			<div class="row">
				<div class="content-ship">
					<p style="font-family: arial; font-size: 9px; margin: 2px; text-align: center;">
						<?php echo $username ; ?>
					</p>
				</div>

				<div class="content-charge">
					<p style="font-family: arial; font-size: 9px; margin: 2px; text-align: center;">
						<?php echo $username ; ?>
					</p>
				</div>

				<div class="content-invoice">
					
				</div>

				<div class="content-ordnumber">
					
				</div>

				<div class="content-ponumber">
					<p style="font-family: arial; font-size: 9px; margin: 2px; text-align: center;">
						<?php echo $ordernumber; ?>
					</p>
				</div>

				<div class="content-invdate">
					<p style="font-family: arial; font-size: 9px; margin: 2px; text-align: center;">
						<?php echo $invdate; ?>
					</p>
				</div>

				<div class="content-duedate">
					<p style="font-family: arial; font-size: 9px; margin: 2px; text-align: center;">
						<?php echo $duedate; ?>
					</p>
				</div>
			</div>

		<!-- Area Top Content -->

		<!-- Area Content -->
			<div class="title-itemcode" style="margin-top: 10px;">
				ITEM CODE
			</div>

			<div class="title-itemdescription">
				DESCRIPTION
			</div>

			<div class="title-uom">
				UOM
			</div>

			<div class="title-qty">
				QTY
			</div>

			<div class="title-price">
				PRICE
			</div>

			<div class="title-total">
				TOTAL
			</div>

			<div class="row">
				
				<div class="content-itemcode">
					<?php 
						foreach ($json as $content) { ?>
							<?php $margin = $content['margin'];?>
							<p style="font-family: arial; font-size: 9.6px; margin: 3px; text-align: justify;
								margin-bottom: <?php echo $margin; ?>px;">
					 			<?php echo $content['item_code']; ?>
					 		</p>
					<?php }; ?>			
				</div>

				<div class="content-description">
					<?php 
						foreach ($json as $content) { ?>
							<?php $extra_margin = $content['extra_margin'];?>
							<p style="font-family: arial; font-size: 9.6px; margin: 3px; text-align: justify;">
					 			<?php echo $content['description']; ?>
					 		</p>
					 		<p style="font-family: arial; font-size: 9.6px; margin: 3px; text-align: justify;
					 			">
					 			<?php echo $content['power']; ?>
					 		</p>
					<?php }; ?>
				</div>

				<div class="content-uom">
					<?php 
						foreach ($json as $content) { ?>
							<?php $margin = $content['margin'];?>
							<p style="font-family: arial; font-size: 9.6px; margin: 3px; text-align: center;
								margin-bottom: <?php echo $margin; ?>px;">
					 			<?php echo $content['uom']; ?>
					 		</p>
					<?php }; ?>
				</div>

				<div class="content-qty">
					<?php 
						foreach ($json as $content) { ?>
							<?php $margin = $content['margin'];?>
							<p style="font-family: arial; font-size: 9.6px; margin: 3px; text-align: center;
								margin-bottom: <?php echo $margin; ?>px;">
					 			<?php echo $content['qty']; ?>
					 		</p>
					<?php }; ?>
				</div>

				<div class="content-price">
					<?php 
						foreach ($json as $content) { ?>
							<?php $margin = $content['margin'];?>
							<p style="font-family: arial; font-size: 9.6px; margin: 3px; text-align: right;
								margin-bottom: <?php echo $margin; ?>px;">
					 			<?php echo $content['price']; ?>
					 		</p>
					<?php }; ?>
				</div>

				<div class="content-total">
					<?php 
						foreach ($json as $content) { ?>
							<?php $extra = $content['extra_margin']; ?>
							<p style="font-family: arial; font-size: 9.6px; margin: 3px; margin-top: 3.5px; text-align: right; margin-bottom: <?php echo $extra; ?>px; ">
					 			<?php echo $content['total']; ?>
					 		</p>
					<?php }; ?>

				</div>

				<!--
				<div class="custom-facetcode">
					<p style="font-family: arial; font-size: 9.8px; margin: 2px; text-align: center;">
						FRAME BOR PROGRESSIVE
					</p>
				</div>

				<div class="custom-facetdescr">
					<p style="font-family: arial; font-size: 9.8px; margin: 2px; text-align: justify;">
						FACET FRAME BOR PROGRESSIVE
					</p>
				</div>

				<div class="custom-facetuom">
					<p style="font-family: arial; font-size: 9.8px; margin: 2px; text-align: center;">
						PCS
					</p>
				</div>

				<div class="custom-facetqty">
					<p style="font-family: arial; font-size: 9.8px; margin: 2px; text-align: center;">
						2
					</p>
				</div>

				<div class="custom-facetprice">
					<p style="font-family: arial; font-size: 9.8px; margin: 2px; text-align: right;">
						25.000,00
					</p>
				</div>

				<div class="custom-facettotal">
					<p style="font-family: arial; font-size: 9.8px; margin: 2px; text-align: right;">
						50.000,00
					</p>
				</div> -->

				<div class="custom-totalprice">
					<p style="font-family: arial; font-size: 9.8px; margin: 2px; text-align: right;">
						<b><?php echo str_replace($total, ",00", "") ; ?></b>
					</p>
				</div>

				<div class="custom-note">
					<p style="font-family: arial; font-size: 10px; margin: 2px; text-align: justify;">
						NOTE : 
					</p>
				</div>

				<div class="custom-alltotal">
					TOTAL
				</div>

			</div>

			
		<!-- Area Content -->

		<!-- Area Footer -->
		<div class="row">
			<div class="footer-left">
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

			<div class="footer-right">
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

		</div>
	
	</div>
</body>
</html>