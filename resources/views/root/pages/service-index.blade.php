<!-- resources/views/root/pages/service-index.blade.php -->
@extends('base.base-root-index')

@section('content')
<div class="page-content">
	<h2 class="text-center">Pelayanan Kami</h2>
	<hr>
	<div class="service-section">
		<h3><i class="fas fa-code"></i> Kursus Pemrograman</h3>
		<p class="service-description">Kami menawarkan berbagai kursus pemrograman mulai dari pemrograman dasar hingga tingkat lanjut. Kursus kami mencakup berbagai bahasa pemrograman seperti Python, Java, C++, dan lainnya. Setiap kursus dirancang untuk memberikan pemahaman mendalam dan praktis tentang pemrograman sehingga siswa siap untuk proyek-proyek dunia nyata.</p>
	</div>

	<div class="service-section">
		<h3><i class="fas fa-laptop-code"></i> Pelatihan Web Development</h3>
		<p class="service-description">Pelatihan ini mencakup semua aspek pengembangan web, termasuk front-end, back-end, dan full-stack development. Kami membahas teknologi terbaru seperti HTML5, CSS3, JavaScript, PHP, dan framework populer seperti Laravel dan CodeIgniter. Siswa akan mempelajari cara membangun aplikasi web yang responsif dan interaktif.</p>
	</div>

	<div class="service-section">
		<h3><i class="fas fa-database"></i> Bootcamp Data Science</h3>
		<p class="service-description">Bootcamp intensif ini dirancang untuk melatih siswa dalam analisis data, pembelajaran mesin, dan big data. Kami menggunakan alat dan teknologi terbaru seperti Python, R, SQL, dan berbagai library data science. Siswa akan mengerjakan proyek nyata yang membantu mereka memahami penerapan data science dalam industri.</p>
	</div>

	<div class="service-section">
		<h3><i class="fas fa-shield-alt"></i> Pelatihan Keamanan Cyber</h3>
		<p class="service-description">Kami menyediakan pelatihan yang komprehensif tentang keamanan cyber untuk melindungi sistem informasi dari ancaman dan serangan. Materi meliputi dasar-dasar keamanan, enkripsi, keamanan jaringan, dan strategi penanganan insiden. Siswa akan belajar bagaimana mengidentifikasi dan mengatasi berbagai jenis ancaman keamanan.</p>
	</div>

	<div class="service-section">
		<h3><i class="fas fa-user-tie"></i> Konsultasi Teknologi</h3>
		<p class="service-description">Kami menawarkan layanan konsultasi untuk membantu organisasi mengatasi tantangan teknologi. Tim ahli kami siap memberikan saran dan solusi yang disesuaikan dengan kebutuhan klien. Kami menangani berbagai aspek teknologi, mulai dari pengembangan perangkat lunak hingga manajemen infrastruktur IT.</p>
	</div>

	<div class="service-section">
		<h3><i class="fas fa-chalkboard-teacher"></i> Workshop dan Seminar</h3>
		<p class="service-description">Kami secara rutin mengadakan workshop dan seminar tentang topik-topik terbaru dalam dunia teknologi. Acara ini dirancang untuk memberikan wawasan mendalam dan keterampilan praktis kepada peserta. Kami mengundang pakar industri sebagai pembicara untuk berbagi pengalaman dan pengetahuan mereka.</p>
	</div>
</div>
@endsection

@section('custom-css')
<style>
	.service-section {
		margin-bottom: 20px;
	}
	.service-description {
		display: none;
		margin-left: 30px; /* Adjust this value to align text with the title */
	}
	h3 {
		cursor: pointer;
		display: flex;
		align-items: center;
	}
	h3 i {
		margin-right: 10px;
	}
</style>
@endsection

@section('custom-js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
        $('.service-description').hide(); // Hide all descriptions on page load
        $('h3').on('click', function() {
        	$(this).next('.service-description').slideToggle();
        });
    });
</script>
@endsection
