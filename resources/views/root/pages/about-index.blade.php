<!-- resources/views/root/pages/about-index.blade.php -->
@extends('base.base-root-index')

@section('content')
<div class="page-content">
	<div class="text-center mb-4"> <!-- Membuat judul "Tentang Kami" menjadi center -->
		<h2>Tentang Kami</h2>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6"> <!-- Kolom untuk bagian gambar -->
			<div class="about-image mb-4">
				<img src="{{ asset('auth/assets/img/favicon.png') }}" alt="PKBM Mutiara Ilmu" style="width: 60%;">
			</div>
		</div>

		<div class="col-md-6"> <!-- Kolom untuk bagian teks -->
			<p>PKBM Mutiara Ilmu adalah lembaga pendidikan yang berfokus pada ilmu komputer dan teknologi informasi. Kami menyediakan berbagai program pendidikan untuk mempersiapkan siswa dengan keterampilan dan pengetahuan terbaru yang dibutuhkan dalam industri teknologi saat ini.</p>

			<p>Kami memiliki visi untuk menjadi pusat pendidikan terkemuka dalam menghasilkan lulusan yang siap untuk langsung terjun ke dunia kerja. Dengan kurikulum yang terus diperbarui sesuai dengan perkembangan teknologi, PKBM Mutiara Ilmu berkomitmen untuk memberikan pengalaman belajar terbaik kepada setiap siswa.</p>

			<p>Kami memiliki tim pengajar yang berpengalaman dan fasilitas belajar yang modern. Kami tidak hanya mendidik siswa secara akademis tetapi juga mempersiapkan mereka untuk menghadapi tantangan dunia nyata. Kami yakin bahwa pendidikan adalah investasi terbaik untuk masa depan, dan di PKBM Mutiara Ilmu, kami mengubah potensi menjadi prestasi.</p>
		</div>
	</div>
</div>
@endsection

@section('custom-js')
<script src="{{ asset('dist') }}/assets/extensions/tinymce/tinymce.min.js"></script>
<script src="{{ asset('dist') }}/assets/static/js/pages/tinymce.js"></script>
@endsection
