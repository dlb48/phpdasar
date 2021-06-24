<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Latihan 1</title>	
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<?php for( $i = 1; $i <= 5; $i++ ) : ?>
		<?php if( $i % 2 == 0 ) : ?>
			<tr class="warna-genap">
		<?php else : ?>
			<tr class="warna-ganjil">
		<?php endif; ?>
			<?php for( $j = 1; $j <= 5; $j++ ) : ?>
				<td><?= "$i, $j"; ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>
	
</body>
</html>