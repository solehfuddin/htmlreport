<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Estatement</title>
	<style>
		body {
			font-size: 10px;
			font-family: sans-serif;
		}

		tr th {
			border-bottom: 1px dotted #000;
			padding: 13px;
		}
	</style>
</head>

<body>
	<?php include 'v_headerstatement.php';?>
	<table style="margin-left: 50px;" width="100%">
		<tr>
			<td width="50%" style="border-right:20px solid #fff;">
				<div>Kepada Yth:<br>
					<?= $user['customer_bill_name'] . ' : ' . $user['customer_bill_number'] . "<br>" . $user['address2'] . "<br>" . $user['city'] . ', ' . $user['province'] ?>
				</div>
				<br>
				<div><?= $user['province'] ?><br>
					TELEPON : <?= $user['phone'] ?><br>
					CONTACT PERSON : <?= $user['contact_person'] ?>
				</div>
			</td>
			<td style="border-left:20px solid #fff;">
				<div>Customer COD No:<br>
					<?= $user['customer_ship_name'] . ' : ' . $user['customer_ship_number'] . "<br>" . $user['address2'] . "<br>" . $user['city'] . ', ' . $user['province'] ?>
				</div>
				<br>
				<div><?= $user['province'] ?><br>
					TELEPON : <?= $user['phone'] ?><br>
					CONTACT PERSON : <?= $user['contact_person'] ?>
				</div>
			</td>
		<tr>
	</table>
	<table style=" border-spacing: 10px; width:100%; margin-bottom:50px;">
		<thead>
			<tr style="text-align:center;">
				<th>No.</th>
				<th style="width: 100px;">Tgl.Transaksi</th>
				<th style="width: 130px;">No.PO</th>
				<th style="width: 120px;">No.Invoice</th>
				<th style="width: 105px;">Lewat Tempo</th>
				<th>Nilai Invoice</th>
				<th>Sisa Tagihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($divisi as $div) {
				$divitem = $div['divisi'];
				$parent_kode = $data['parent_kode'];
				$blnawal 	 = $data['blnawal'];
				$blnakhir	 = $data['blnakhir'];
				$tahun		 = $data['tahun'];

				$queryItemDiv  = "SELECT *, TIMESTAMPDIFF(DAY, tgl, CURDATE()) AS lewattempo
									  FROM tbl_statement
									  WHERE parent_kode = '$parent_kode'
									  AND i_bln BETWEEN '$blnawal' AND '$blnakhir'
									  AND thn = '$tahun'
									  AND divisi = '$divitem'
									  ORDER BY i_bln ASC";

				$querySubtotal = "SELECT SUM(amount) AS totalamount, SUM(outstanding) AS totaloutstanding
									  FROM tbl_statement
									  WHERE parent_kode = '$parent_kode'
									  AND i_bln BETWEEN '$blnawal' AND '$blnakhir'
									  AND thn = '$tahun'
									  AND divisi = '$divitem'
									  ORDER BY i_bln ASC";

				$subitem  = $this->db->query($queryItemDiv)->result_array();
				$subtotal = $this->db->query($querySubtotal)->row_array();
			?>
				<tr style="text-align: left;">
					<td colspan="7"><?= $div['divisi'] ?></td>
				</tr>
				<?php
				foreach ($subitem as $item) {
				?>
					<tr>
						<td style="text-align:center;"><?= $no++; ?></td>
						<td style="text-align:center;"><?= date('d M Y', strtotime($item['tgl'])) ?></td>
						<td style="text-align:center;"><?= $item['purchase_order'] ?></td>
						<td style="text-align:center;"><?= $item['trx_no'] ?></td>
						<td style="text-align:center;"><?= $item['lewattempo'] . ' Hari' ?></td>
						<td style="text-align:center;"><?= number_format($item['amount'], 0, ',', '.') ?></td>
						<td style="text-align:center;"><?= number_format($item['outstanding'], 0, ',', '.') ?></td>
					</tr>
				<?php }; ?>
				<tr>
					<td colspan="5"></td>
					<td style="text-align:center; border-top: 1px dotted #000; padding: 5px;"><?= number_format($subtotal['totalamount'], 0, ',', '.'); ?></td>
					<td style="text-align:center; border-top: 1px dotted #000; padding: 5px;"><?= number_format($subtotal['totaloutstanding'], 0, ',', '.'); ?></td>
				</tr>
			<?php }; ?>
			<tr>
				<td style="text-align:center; letter-spacing: 15px;" colspan="5">TOTAL</td>
				<td style="text-align:center; border-top: 1px dotted #000; padding: 5px;"><?= "Rp. " . number_format($total['0']['totalamount'], 0, ',', '.'); ?></td>
				<td style="text-align:center; border-top: 1px dotted #000; padding: 5px;"><?= "Rp. " . number_format($total['0']['totaloutstanding'], 0, ',', '.'); ?></td>
			</tr>
		</tbody>
	</table>
			<div style="border-top: 1px dotted #000; margin-top:10%;">
				<div style="margin-top:10px;">Pembayaran Customer Optik dapat ditransfer melalui Rekening a/n. PT Timur Raya lestari :<br>
					1) BCA Cab. Asemka Jakarta A/C. 001.304136.6<br>
					2) BANK MANDIRI Cab. KIP Jakarta A/C. 125.000482135.1
				</div>
				<br>
				<div>Pembayaran Medical (Dokter, RS, Klinik dan Perusahaan) dapat ditransfer melalui Rekening a/n. PT Timur Raya Lestari :<br>
					- BANK MANDIRI Cab. KIP Jakarta A/C. 166.000069642.7<br>
					- BANK SULSELBAR Cab. Jakarta A/C. 400-003-0000005609
				</div>
				<br>
				<div>Konfirmasi Pembayaran hubungi :<br>
					- SMS/WA: 0815 1033 4072, atau<br>
					- Telepon: (021) 461 0154 Ext: 201 s/d 205
				</div>
			</div>
</body>

</html>