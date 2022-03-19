<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Data Nama</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
	<div class="container mt-4 text-center">
		<h1>Daftar Nama Keluarga</h1>
		<ol class="list-group my-4">
			@foreach ($mahasiswa as $nama)
				<li class="list-group-item"><?= $nama ?></li>
			@endforeach
		</ol>

		<div class="m-5">
			<img class="rounded-circle m-2" src="/img/img1.jpg" alt="Text Image 1" style="width: 10em">
			<img class="rounded-circle m-2" src="/img/img2.jpg" alt="Text Image 2" style="width: 10em">
			<img class="rounded-circle m-2" src="/img/img3.jpg" alt="Text Image 3" style="width: 10em">
			<img class="rounded-circle m-2" src="/img/img4.jpg" alt="Text Image 4" style="width: 10em">
		</div>

		<div>
			<p>Copyright &copy; <?= date('Y') ?> Ari Safari</p>
		</div>

		<script src="/js/bootstrap.bundle.min.js"></script>
	</div>
</body>

</html>
