<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Data Nama</title>
</head>

<body>
	<h1>Daftar Nama Keluarga</h1>
	<ol>
		@foreach ($family as $nama)
			<li><?= $nama ?></li>
		@endforeach
	</ol>
</body>

</html>