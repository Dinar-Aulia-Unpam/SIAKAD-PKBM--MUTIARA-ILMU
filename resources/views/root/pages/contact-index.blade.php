<!-- resources/views/root/pages/contact-index.blade.php -->
@extends('base.base-root-index')

@section('content')
<div class="page-content">
	<h2 style="text-align: center;">Kontak Kami</h2>
	<hr>
	<div class="contact-info">
		<div class="row">
			<div class="col-md-6">
				<h3>Alamat</h3>
				<p>Jl. Raya Indonesia Merdeka No. 1945</p>
				<p>Kota Baru Jadi, Provinsi Baru Jadi</p>
			</div>
			<div class="col-md-6">
				<h3>Kontak</h3>
				<p><strong>Telepon:</strong> (021) 1234567</p>
				<p><strong>Email:</strong> info@amdevacademy.com</p>
				<p><strong>Website:</strong> <a href="http://www.amdevacademy.com">www.amdevacademy.com</a></p>
			</div>
		</div>
	</div>

	<div class="map-container mt-4">
		<!-- Replace with your actual embed code from Google Maps -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126979.82150160756!2d106.00484755!3d-5.97828945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41903819290ab7%3A0x5f5c4dbfc123deee!2sKota%20Cilegon%2C%20Banten!5e0!3m2!1sid!2sid!4v1720173916359!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</div>
@endsection

@section('custom-js')
<script src="{{ asset('dist') }}/assets/extensions/tinymce/tinymce.min.js"></script>
<script src="{{ asset('dist') }}/assets/static/js/pages/tinymce.js"></script>
@endsection
