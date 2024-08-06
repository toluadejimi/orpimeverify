<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="oprimeverify.com provides affordable, real US non-VoIP numbers for SMS verification on popular platforms like WhatsApp, eBay, Tinder, and more. Enjoy fast support, flexible pricing, and reliable service for all your SMS verification needs.">
    <title>Bypass SMS and Text Verification With Real USA Numbers - OPRIME VERIFY</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/public/assets2/style.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .navbar {
            background-color: #1e1e1e;
            color: white;
        }

        .navbar-brand img {
            height: 50px;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .navbar-nav .nav-link:hover {
            color: #e90505 !important;
        }

        .dropdown-menu {
            background-color: #1e1e1e;
            border: none;
        }

        .dropdown-item {
            color: white;
        }

        .dropdown-item:hover {
            background-color: #575757;
        }

        .btn-primary {
            background-color: #e90505;
            border-color: #e90505;
        }

        .btn-primary:hover {
            background-color: #c70000;
            border-color: #c70000;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #000;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        @media (max-width: 767px) {
            .navbar-expand-lg .navbar-collapse {
                background-color: #1e1e1e;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="https://oprime.com.ng/mailer/wp-content/uploads/2024/04/IMG_0359.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/fund-wallet">Fund Wallet</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://oprimeboost.com">Boost Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://oprimeaccs.com">Buy Social Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/log-out">Log Out</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Register</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="bg-cyan-600 text-white p-4 text-center">
        Please subscribe to <a href="https://t.me/+ZXcw9TjiI1FkN2Rk" target="_blank" class="text-underline">our Telegram channel</a>
    </div>

    <main class="container mt-4">
        @yield('content')
    </main>

    <div class="float">
        <a href="https://t.me/+fTn69pDmZuc1MjM0" target="_blank" class="my-float">
            <i class="fa fa-comment"></i>
        </a>
    </div>

    <footer class="footer mt-5">
        <p>2024 OPRIME VERIFY</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9o+J9N3BvO9KfTSTH5vHpuK62r0B27oGAT5hJcXbX9dA4cdI2jM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-2r7H1z6zEw88LNIVpDFNKoUl8A4mQF5K6p6G5J5sK5C6X57BLqqVgO8P+IxJ4x+5G" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>

    <script>
        $(document).ready(function () {
            $("select").select2();
        });

        document.addEventListener('DOMContentLoaded', function () {
            const table = document.getElementById('data-table');
            if (table) {
                const rows = table.querySelectorAll('tbody tr');

                rows.forEach(row => {
                    const countdownElement = row.cells[2];
                    let seconds = parseInt(countdownElement.getAttribute('data-seconds'), 10);

                    const countdownInterval = setInterval(function () {
                        countdownElement.textContent = seconds + 's';

                        if (seconds <= 0) {
                            clearInterval(countdownInterval);
                            console.log('Expired:', row);
                        }

                        seconds--;
                    }, 1000);
                });
            }
        });
    </script>
</body>

</html>
