<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="oprimeverify.com provides affordable, real US non-VoIP numbers for SMS verification on popular platforms like WhatsApp, eBay, Tinder, and more. Enjoy fast support, flexible pricing, and reliable service for all your SMS verification needs.">
    <title>Bypass SMS and Text Verification With Real USA Numbers - OPRIME VERIFY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('') }}/public/assets2/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{ url('') }}/public/assets/vendor/Shortcode/Shortcode.js"></script>
    <script src="{{ url('') }}/public/assets/js/app.js" defer></script>
    <script src="{{ url('') }}/public/assets/js/server.js" defer></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Sidebar Styles */
        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px; /* Initially hidden */
            background-color: #003366; /* Blue background */
            color: white;
            transition: left 0.3s ease;
            z-index: 1000;
        }
        #sidebar .menu {
            padding: 20px;
        }
        #sidebar .menu a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 5px;
        }
        #sidebar .menu a:hover {
            background-color: #00509e; /* Darker blue on hover */
        }
        #sidebar .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
        }
        #sidebar-toggle {
            position: fixed;
            top: 15px;
            left: 15px;
            font-size: 24px;
            cursor: pointer;
            z-index: 1001;
        }
        #sidebar.show {
            left: 0;
        }

        /* Hide sidebar on small screens */
        @media (max-width: 768px) {
            #sidebar {
                width: 200px;
            }
        }

        /* Adjust content area */
        #content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }
        #content.shift {
            margin-left: 0;
        }
    </style>
</head>

<body>
    <div id="sidebar">
        <span class="close-btn" id="close-btn">&times;</span>
        <div class="menu">
            @auth
            <a href="/home">Dashboard</a>
            <a href="/fund-wallet">Fund Wallet</a>
            <a href="https://oprimeboost.com">Boost Account</a>
            <a href="https://oprimeaccs.com">Buy Social Account</a>
            <a href="/log-out">Log Out</a>
            @else
            <a href="/home">Dashboard</a>
            <a href="/fund-wallet">Fund Wallet</a>
            <a href="/log-out">Log Out</a>
            @endauth
        </div>
    </div>

    <div id="sidebar-toggle">
        <i class="bi bi-list"></i>
    </div>

    <div id="content">
        <div class="fixed z-20 w-full flex">
            <div class="bg-cyan-600 text-white p-4 flex">
                <div class="mx-auto">Please subscribe to <a href="https://t.me/+ZXcw9TjiI1FkN2Rk" target="_blank" style="text-decoration: underline">our Telegram channel</a></div>
            </div>
            <!-- Your existing navbar code here -->
        </div>

        @yield('content')
        
        <div class="bg-base-100 border-t mt-5 p-5">
            <footer class="d-flex justify-content-center ">
                <p>2024 OPRIME VERIFY</p>
            </footer>
        </div>

        <script data-turbo-eval="false" data-turbolinks-eval="false">
            // Your existing script here
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const sidebar = document.getElementById('sidebar');
                const sidebarToggle = document.getElementById('sidebar-toggle');
                const closeBtn = document.getElementById('close-btn');
                const content = document.getElementById('content');

                sidebarToggle.addEventListener('click', function () {
                    sidebar.classList.toggle('show');
                    content.classList.toggle('shift');
                });

                closeBtn.addEventListener('click', function () {
                    sidebar.classList.remove('show');
                    content.classList.remove('shift');
                });

                const table = document.getElementById('data-table');
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

                $(document).ready(function () {
                    $("select").select2();
                });
            });
        </script>
    </div>
</body>

</html>
