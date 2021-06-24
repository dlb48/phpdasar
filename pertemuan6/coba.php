<?php
$pasien = 
[
	[
		"norm" => "0001",
		"nama" => "doddy",
		"tempatlahir" => "way kanan",
		"tgl" => "14-03-1993",
		"jns_bayar" => "bpjs",
		"gambar" => "doddy.jpg"
	],
	[	"norm" => "0002",
		"nama" => "erik",
		"tempatlahir" => "way kanan",
		"tgl" => "14-03-1993",
		"jns_bayar" => "bpjs",
		"gambar" => "erik.jpg"
	],
		["norm" => "0003",
		"nama" => "fajar",
		"tempatlahir" => "way kanan",
		"tgl" => "14-03-1993",
		"jns_bayar" => "bpjs",
		"gambar" => "fajar.jpg"
	],
	[	"norm" => "0004",
		"nama" => "mellia",
		"tempatlahir" => "way kanan",
		"tgl" => "14-03-1993",
		"jns_bayar" => "bpjs",
		"gambar" => "mellia.jpg"
	],
	[	"norm" => "0005",
		"nama" => "nofariza",
		"tempatlahir" => "way kanan",
		"tgl" => "14-03-1993",
		"jns_bayar" => "bpjs",
		"gambar" => "nofariza.jpg"
	]
];

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Data Pasien</title>
	</head>
	<body>
		<h1>Daftar Pasien</h1>
			<?php foreach ($pasien as $pas) : ?>
				<ul>
					<li>
						<img src="img/<?= $pas["gambar"]; ?>">
					</li>
					<li>Nomor RM : <?= $pas ["norm"]; ?></li>
					<li>Nama : <?= $pas ["nama"]; ?></li>
					<li>Tempat Lahir : <?= $pas ["tempatlahir"]; ?></li>
					<li>Tanggal Lahir : <?= $pas ["tgl"]; ?></li>
					<li>Jenis Bayar : <?= $pas ["jns_bayar"]; ?></li>
			
				</ul>
			<?php endforeach;?>
	
	</body>
</html>