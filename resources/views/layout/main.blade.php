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
        /* Sidebar styling */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            background-color: #333;
            transition: 0.3s;
            overflow: auto;
            z-index: 100;
            color: white;
        }
        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 0;
            padding: 16px;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }
        .openbtn {
            font-size: 20px;
            cursor: pointer;
        }
        .openbtn {
            position: fixed;
            top: 15px;
            left: 15px;
            background: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            z-index: 101;
        }
        @media screen and (max-width: 768px) {
            .sidebar { width: 100%; }
        }
    </style>
</head>
<body>
    <button class="openbtn" onclick="toggleSidebar()">☰ Open Sidebar</button>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">×</a>
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

    <div id="main">
        <!-- Main content -->
        @yield('content')
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("mySidebar");
            const isVisible = sidebar.style.left === "0px";
            sidebar.style.left = isVisible ? "-250px" : "0";
        }
        function closeSidebar() {
            document.getElementById("mySidebar").style.left = "-250px";
        }
    </script>
    <!-- Optional JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const table = document.getElementById('data-table');
            const rows = table.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const countdownElement = row.cells[2]; // Assumes "Expires" is in the third column (index 2)
                let seconds = parseInt(countdownElement.getAttribute('data-seconds'), 10);

                const countdownInterval = setInterval(function () {
                    countdownElement.textContent = seconds + 's';

                    if (seconds <= 0) {
                        clearInterval(countdownInterval);
                        // Add your logic to handle the expiration, e.g., sendPostRequest(row);
                        console.log('Expired:', row);
                    }

                    seconds--;
                }, 1000);
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $("select").select2();
        });
    </script>

    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #000000;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://t.me/+fTn69pDmZuc1MjM0" class="float" target="_blank">
        <i class="fa fa-comment my-float"></i>
    </a>

    <div class="bg-base-100 border-t mt-5 p-5">
        <footer class="d-flex justify-content-center">
            <p>2024 OPRIME VERIFY</p>
        </footer>
    </div>
</body>
</html>
