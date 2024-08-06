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
        /* Sidebar styles */
        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            background-color: #1e1e1e;
            overflow-x: hidden;
            transition: 0.3s;
            padding-top: 60px;
            z-index: 1000;
        }

        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 16px;
            color: #ffffff;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            background-color: #575757;
        }

        #sidebar .closebtn {
            position: absolute;
            top: 15px;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #openSidebarBtn {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 24px;
            cursor: pointer;
        }

        @media screen and (max-width: 768px) {
            #sidebar {
                width: 100%;
            }
        }

        /* Ensure content adjusts when sidebar is opened */
        #main {
            transition: margin-left .3s;
            padding: 16px;
        }
    </style>
</head>

<body>
    <div id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/">Home</a>
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
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        @endauth
    </div>

    <div id="main">
        <span id="openSidebarBtn" onclick="openNav()">&#9776;</span>
        <div class="bg-cyan-600 text-white p-4 flex">
            <div class="mx-auto">Please subscribe to <a href="https://t.me/+ZXcw9TjiI1FkN2Rk" target="_blank" style="text-decoration: underline">our Telegram channel</a></div>
        </div>
        @yield('content')
        <div class="bg-base-100 border-t mt-5 p-5">
            <footer class="d-flex justify-content-center">
                <p>2024 OPRIME VERIFY</p>
            </footer>
        </div>
        <!-- Start of Tawk.to Script-->
        <!-- <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/66832ebdeaf3bd8d4d16f725/1i1o6t68o';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script> -->
        <!--End of Tawk.to Script-->
    </div>

    <script>
        function openNav() {
            document.getElementById("sidebar").style.left = "0";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("sidebar").style.left = "-250px";
            document.getElementById("main").style.marginLeft= "0";
        }

        document.addEventListener('DOMContentLoaded', function () {
            const table = document.getElementById('data-table');
            if (table) {
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
            }

            // You may add the sendPostRequest function here or modify the code accordingly
        });

        $(document).ready(function () {
            //change selectboxes to selectize mode to be searchable
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
</body>

</html>
