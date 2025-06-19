<!DOCTYPE html>
<html>

<head>
    <title>Reset Password Anda</title>
</head>

<body>
    <div style="width: 100%; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 15px; text-align: center; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <div style="display: flex; align-items: center; justify-content: space-between; padding-bottom: 20px; border-bottom: 1px solid #ddd;">
            <img alt="Icon Header" style="width: 100%; max-width: 75px; max-height: 75px;" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEikp4QgXR23gZT3v_f8YHPtpfrb48IfjPSEfNjQlEYvlbB4r-n2Ckpb7mpMfc5g-sRWhrrO0joxS9QkU0gA6ajIj6Yh3eqwA7n1V6fHqRATuv0bcRfKfVxgO_8k_MQZRvqDSWwbBq5INnAOhOAMi3-kz8AXohbxnxZ4K7oWjQvo7Spabw0IWj9Qs6a2fV7g/s320/favicon.png">
            <div style="font-size: 24px; font-weight: bold;">Siakad - PKBM Mutiara Ilmu</div>
        </div>
        <h2>Halo, {{ $user['mhs_name'] }}</h2>
        <p>Kami menerima permintaan untuk mereset password akun Anda.</p>
        <p>Token ini akan Expired pada {{ $user->token_created_at->addHour()->format('H:i') }}</p>
        <a href="{{ url('/mahasiswa/auth-reset', $user->verify_token) }}">Reset Password</a>
        <p>Atau bisa juga dengan menekan link dibawah ya :)</p>
        <p>{{ url('/mahasiswa/auth-reset', $user->verify_token) }}</p>
    </div>
</body>

</html>
