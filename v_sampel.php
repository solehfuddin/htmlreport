<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Data sampel</title>
	</head>
	<body>
		<?php var_dump($total); ?>
		<br >
		<?= "Total Amount : " . number_format($total[0]['totalamount'],0,',','.'); ?>
		<br />
		<?= "Total Outstanding :" . number_format($total[0]['totaloutstanding'],0,',','.'); ?>
		<br />
		<?php var_dump($divisi); ?>
		<br />
		<?php foreach($divisi as $div) {
			echo $div['divisi'];
			echo "<br/>";
		};?>
	</body>
</html>