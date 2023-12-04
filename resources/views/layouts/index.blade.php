<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('/assets/images/logo/logo3.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('/assets/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	<link href="{{ asset('/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
	<link href="{{ url('https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap') }}" rel="stylesheet">
	<link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('/assets/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('/assets/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('/assets/css/header-colors.css') }}" />
	<title>{{ $title }} | KG</title>
</head>

<body onload="info_noti()">
<!--wrapper-->
<div class="wrapper">
	@include('partials.index')
	<div class="page-wrapper">
		<div class="container">
			@yield('container')
			@include('sweetalert::alert')
		</div>
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		
	</div>
	
<!--end wrapper-->
</div>
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h6 class="mb-0">Tema</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
			</div>
			<hr/>
			
				</div>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
	<!--notification js -->
	<script src="{{ asset('/assets/plugins/notifications/js/lobibox.min.js') }}"></script>
	<script src="{{ asset('/assets/plugins/notifications/js/notifications.min.js') }}"></script>
	<script src="{{ asset('/assets/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('/assets/js/app.js') }}"></script>

	<script src="{{ asset('/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	{{-- IMAGE UOLOADER --}}
	<script src="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
		</script>

	{{-- SWEET ALERT --}}
	<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
	<script src="{{ url('https://cdn.jsdelivr.net/npm/sweetalert2@10')}}" ></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const deleteButtons = document.querySelectorAll('.btn-danger[data-confirm-delete]');
			
			deleteButtons.forEach(button => {
				button.addEventListener('click', function(event) {
					event.preventDefault();
					
					const targetUrl = this.getAttribute('href');
					
					Swal.fire({
						title: 'Konfirmasi',
						text: 'Anda yakin ingin menghapus?',
						icon: 'warning',
						showCancelButton: true,
						confirmButtonText: 'Ya, hapus',
						cancelButtonText: 'Batal',
					}).then((result) => {
						if (result.isConfirmed) {
							window.location.href = targetUrl;
						}
					});
				});
			});
		});
	</script>
	<script src="{{ asset('/assets/plugins/select2/js/select2.min.js') }}"></script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
	
</body>

</html>