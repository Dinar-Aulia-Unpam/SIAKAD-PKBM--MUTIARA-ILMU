<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Text Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .footer {
            color: #002147; /* Warna biru tua */
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .footer a {
            color: #002147; /* Warna biru tua untuk tautan */
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .social-icons {
            margin-top: 10px;
        }
        .footer .social-icons a {
            margin: 0 5px;
            display: inline-block;
        }
        .footer .social-icons a img {
            width: 24px;
            height: 24px;
        }

        .loader {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Background gelap semi-transparent */
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .loader img {
            width: 100px; /* Atur ukuran logo */
            height: auto;
            animation: spin 2s linear infinite; /* Animasi rotasi logo */
        }

        .loader .loading-progress {
            margin-top: 20px;
            width: 100px;
            height: 10px;
            background-color: #fff; /* Warna latar belakang untuk progress */
            border-radius: 5px;
            overflow: hidden;
        }

        .loader .loading-progress .progress-bar {
            width: 0%;
            height: 100%;
            background-color: #00bcd4; /* Warna untuk progress bar */
            animation: progress 2s ease-in-out infinite;
        }

        .loader .loading-text {
            color: #fff;
            font-size: 14px;
            margin-top: 10px;
            animation: fadeInOut 2s ease-in-out infinite; /* Animasi efek fade in dan fade out */
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes progress {
            0% { width: 0%; }
            50% { width: 50%; }
            100% { width: 100%; }
        }

        @keyframes fadeInOut {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }

    </style>
</head>
<body>

    <!-- Loading animation -->
    <div class="loader" id="loader">
        <img src="{{ asset('amdev.png') }}" alt="Loading Logo">
        <div class="loading-text">PKBM Mutiara Ilmu</div>
        <div class="loading-progress">
            <div class="progress-bar"></div>
        </div>
    </div>

    <!-- Other content of your page -->

    <footer class="footer">
        <p><a href="https://wa.me/628179851011" target="_blank">&copy; 2025 PKBM Mutiara Ilmu</a></p>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank"><img src="https://img.icons8.com/ios-filled/50/002147/facebook-new.png" alt="Facebook"></a>
            <a href="https://twitter.com" target="_blank"><img src="https://img.icons8.com/ios-filled/50/002147/twitter.png" alt="Twitter"></a>
            <a href="https://instagram.com" target="_blank"><img src="https://img.icons8.com/ios-filled/50/002147/instagram-new.png" alt="Instagram"></a>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var loader = document.getElementById('loader');

        // Hide loader after DOM content is fully loaded
            loader.style.display = 'none';

        // Handle click events on links
            var links = document.querySelectorAll('a[href]');
            links.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    var parentMenuItem = link.closest('.menu-item');

                // Check if the link is not a sub-menu link under ".menu-item"
                    if (!parentMenuItem.classList.contains('has-sub') || !parentMenuItem.contains(event.target)) {
                        loader.style.display = 'flex';

                    // Simulate loading progress
                        var progressBar = document.querySelector('.loader .progress-bar');
                        progressBar.style.width = '0%';

                        setTimeout(function() {
                            progressBar.style.width = '100%';
                        loader.style.display = 'none'; // Hide loader after progress complete
                    }, 1000); // Adjust the delay time as needed
                    }
                });
            });
        });
    </script>
</body>
</html>
