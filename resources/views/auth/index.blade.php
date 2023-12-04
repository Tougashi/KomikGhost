<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--favicon-->
<link rel="icon" href="assets/images/logo/logo3.png" type="image/png" />
<!--plugins-->
<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
<!-- loader-->
<link href="assets/css/pace.min.css" rel="stylesheet" />
<script src="assets/js/pace.min.js"></script>
<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link href="assets/css/app.css" rel="stylesheet">
<link href="assets/css/icons.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<title>KOMIK GHOST</title>
</head>

<body class="bg-login" style="overflow: hidden">
<!--wrapper-->
<div class="wrapper">
<header class="login-header shadow">
<nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
	<div class="container-fluid">
		<a class="navbar-brand" href="/Beranda">
			<div class="img-logo">
			<img src="assets/images/logo/logo3.png" width="40" alt="" class="rounded mx-auto d-block"/>
			</div>
		</a>
			<img src="assets/images/logo/logo1.png" width="45" alt="" class="nav-item"/>
		</div>
	</div>
</nav>
</header>
<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
<div class="container-fluid">
<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
<div class="col mx-auto">
<div class="card mt-5 mt-lg-0">
<div class="card-body">					
<div class="border p-4 rounded">
	<div class="text-center">
		<h3 class="">Masuk</h3>
		<p>Belum punya akun? <a href="/register">Buat disini</a>
	</p>
	</div>
	<div class="form-body">
		@if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
             {{ Session::get('error') }}
            </div>
		@endif	
		<form class="row g-3" action="{{ route('login') }}" method="POST">
			@csrf
			<div class="col-12">
				<label for="Username" class="form-label">Nama Pengguna</label>
				<input type="text" class="form-control" id="username" placeholder="Masukan Nama Pengguna" name="username">
			</div>
			<div class="col-12">
				<label for="inputChoosePassword" class="form-label">Kata Sandi</label>
				<div class="input-group" id="show_hide_password">
					<input type="password" class="form-control border-end-0" id="password"  placeholder="Masukan Kata Sandi" name="password">
					 <a href="#" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-check form-switch">
					<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
					<label class="form-check-label" for="flexSwitchCheckChecked">Ingat Saya</label>
				</div>
			</div>
			<div class="col-md-6 text-end">	<a href="#">Lupa Kata Sandi?</a>
			</div>
			<div class="col-12">
				<div class="d-grid">
					<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Masuk</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
<!--end row-->
</div>
</div>
<footer class="bg-white shadow-sm border-top p-2 text-center fixed-bottom">
<p class="mb-0">KOMIK GHOST | Hak Cipta © 2023.</p>
</footer>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--Password show & hide js -->
<script>
$(document).ready(function () {
$("#show_hide_password a").on('click', function (event) {
	event.preventDefault();
	if ($('#show_hide_password input').attr("type") == "text") {
		$('#show_hide_password input').attr('type', 'password');
		$('#show_hide_password i').addClass("bx-hide");
		$('#show_hide_password i').removeClass("bx-show");
	} else if ($('#show_hide_password input').attr("type") == "password") {
		$('#show_hide_password input').attr('type', 'text');
		$('#show_hide_password i').removeClass("bx-hide");
		$('#show_hide_password i').addClass("bx-show");
	}
});
});
</script>
<!--app JS-->
<script src="assets/js/app.js"></script>
</body>

</html>