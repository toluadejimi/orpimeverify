@extends('layout.main')
@section('content')
    <br>
    <br>
    <br>
    <br>


 
    <div class="container ">

    <div class="container" style="background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <div class="d-flex flex-column align-items-start my-4 p-2 mt-5">
        <h2 style="font-size: 24px; color: blue; margin: 0;">
            Hi, {{ Auth::user()->username }} 👋
        </h2>
        <p style="font-size: 16px; color: gray;">Welcome to OprimeVerify</p>
    </div>
</div>



        <div class="d-flex justify-content-center mb-3 p-1">

            
            <!--<h4 style="color: red;"><b>FOR OTHER COUNTRIES NUMBER CLICK ON SERVER 3</b></h4>-->
        </div>
        <!--  <div style="text-align: justify;">-->
        <!--        <hr>-->
        <!--</div>-->

        <!-- <divstyle="text-align: justify;">-->
        <!--    <br>-->
        <!--    <hr>-->
        <!--</div>-->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif

        <style>
            .red-button {
                background-color: red;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                text-decoration: none; /* Remove default link underline */
            }

            .red-button:hover {
                background-color: darkred; /* Change background color on hover */
            }
        </style>
        <!--<center>-->
        <!--    <a href="https://t.me/c/1964626672/68" class="red-button">Click here to Watch How to verify number</a>-->
        <!--</center>-->

        <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Dp57PAS972qQzHqP" -->
        <!--       frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" -->
        <!--       allowfullscreen></iframe>-->
        <!--   <div class="row mt-5">-->
       
        <!-- <iframe width="400" height="315" src="https://www.youtube.com/embed/d_TbY-_EuiM?si=Dp57PAS972qQzHqP"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  
<div class="col-lg-5 col-sm-12"> -->
        <div class="card border-0 shadow-lg p-2 mb-3 bg-body rounded-40">
            <div class="card-body">
                <div class="">

                    <div class="p-2 col-lg-6">
                        <input type="text" id="searchInput" class="form-control border-0"
                               placeholder="Search for a service..." onkeyup="filterServices()">
                    </div>


                    <div class="row my-3 p-2"
                         style="background: blue; border-radius: 10px; color: white; font-size: 18px; border-radius: 15px">
                        <div class="col-7">
                            <h5>Services</h5>
                        </div>
                        <div class="col">
                            <h5>Price</h5>
                        </div>
                    </div>


                </div>

                <div x-data="{currentTab: 1}">


                    <div class="flex justify-between pb-4 ">
                        <div @click="currentTab = 1"
                             class="button-gradient bg-gradient-to-r from-black to-black text-white text-sm font-medium me-2 px-4 py-2 rounded-md hover:cursor-pointer">
                            USA 🇺🇸 Numbers (1)
                        </div>
                        <div @click="currentTab = 2"
                             class="button-gradient bg-gradient-to-r from-black to-black text-white text-sm font-medium me-2 px-4 py-2 rounded-md hover:cursor-pointer">
                            USA 🇺🇸 Numbers 2
                        </div>
                        <div @click="currentTab = 3"
                             class="button-gradient bg-gradient-to-r from-black to-black text-white text-sm font-medium me-2 px-4 py-2 rounded-md hover:cursor-pointer">
                            All Country Numbers
                        </div>

                    </div>


                    <div x-show="currentTab === 1" style="height:200px; width:100%; overflow-y: scroll;" class="">


                        @foreach ($services as $key => $value)
                            <div class="row service-row">
                                @foreach ($value as $innerKey => $innerValue)
                                    <div style="font-size: 12px " class="col-5 service-name">
                                        {{ $innerValue->name }}
                                    </div>

                                    @if(Auth::user()->custom_price != 0)
                                        <div style="font-size: 13px" class="col">
                                            @php $cost = Auth::user()->custom_price * $innerValue->cost + $margin @endphp
                                            N{{ number_format($cost, 2) }}
                                        </div>
                                        <div class="col">
                                            @auth

                                                @if(Auth::user()->wallet < $cost)

                                                    <a href="fund-wallet" style="color: #7c7c7c"><i
                                                            class="bi bi-wallet-fill"> Fund Wallet</i></a>

                                                @else
                                                    <form action="order-usordernumberno" method="post">
                                                        @csrf
                                                        <input hidden name="service" value="{{ $key }}">
                                                        <input hidden name="type" value="1">
                                                        <input hidden name="amount" value="{{ $cost }}">
                                                        <input hidden name="cost" value="{{ $innerValue->cost }}">
                                                        <input hidden name="name" value="{{ $innerValue->name }}">
                                                        <button class="myButton"
                                                                style="border: 0px; background: transparent"
                                                                onclick="hideButtondis(this)"><i
                                                                class="fa fa-shopping-bag"></i></button>
                                                    </form>

                                                @endif

                                            @else

                                                <a class=""
                                                   href="/login">
                                                    <i class="fa fa-lock text-dark"></i>
                                                </a>
                                            @endauth

                                            <script>
                                                function hideButtondis(link) {
                                                    // Hide the clicked link
                                                    link.style.display = 'none';

                                                    setTimeout(function () {
                                                        link.style.display = 'inline'; // or 'block' depending on your layout
                                                    }, 5000); // 5 seconds
                                                }
                                            </script>

                                        </div>
                                    @else

                                        <div style="font-size: 11px" class="col">
                                            @php $cost = $get_rate * $innerValue->cost + $margin @endphp
                                            N{{ number_format($cost, 2) }}
                                        </div>
                                        <div class="col">

                                            @auth

                                                @if(Auth::user()->wallet < $cost)

                                                    <a href="fund-wallet" style="color: #7c7c7c">
                                                        <i class="bi bi-wallet-fill"> Fund Wallet</i>

                                                    </a>

                                                @else
                                                    <form action="order-usordernumberno" method="post">
                                                        @csrf
                                                        <input hidden name="service" value="{{ $key }}">
                                                        <input hidden name="type" value="1">
                                                        <input hidden name="amount" value="{{ $cost }}">
                                                        <input hidden name="cost" value="{{ $innerValue->cost }}">
                                                        <input hidden name="name" value="{{ $innerValue->name }}">
                                                        <button class="myButton"
                                                                style="border: 0px; background: transparent"
                                                                onclick="hideButtondon(this)"><i
                                                                class="fa fa-shopping-bag"></i></button>
                                                    </form>

                                                @endif

                                            @else

                                                <a class=""
                                                   href="/login">
                                                    <i class="fa fa-lock text-dark"></i>
                                                </a>
                                            @endauth

                                            <script>
                                                function hideButtondon(link) {
                                                    // Hide the clicked link
                                                    link.style.display = 'none';

                                                    setTimeout(function () {
                                                        link.style.display = 'inline'; // or 'block' depending on your layout
                                                    }, 5000); // 5 seconds
                                                }
                                            </script>


                                        </div>

                                        {{--                                <div class="col">--}}
                                        {{--                                    <a href="/order-now?service={{ $key }}&price={{ $cost }}&cost={{ $innerValue->cost }}&name={{ $innerValue->name }}">--}}
                                        {{--                                 <i class="fa fa-shopping-bag">Buy</i>--}}
                                        {{--                                    </a>--}}
                                        {{--                                </div>--}}
                                    @endif



                                    <hr style="border-color: #cccccc" class=" my-2">
                                @endforeach
                            </div>
                        @endforeach


                    </div>

                    <div x-show="currentTab === 2" style="height:200px; width:100%; overflow-y: scroll;" class="">

                        @if(!empty($tellbot_services))

                            @foreach ($tellbot_services->message as $key)
                                <div class="row service-row">
                                    <div style="font-size: 12px " class="col-5 service-name">
                                        {{ $key->name }}
                                    </div>
                                    @if(Auth::user()->custom_price != 0)
                                        <div style="font-size: 12px " class="col">
                                            @php $cost = (int) Auth::user()->custom_price * (double) $key->price + (int) $margin2 @endphp
                                            N{{ number_format($cost, 2) }}
                                        </div>

                                        <div class="col">
                                            @auth

                                                @if(Auth::user()->wallet < $cost)

                                                    <a href="fund-wallet" style="color: #7c7c7c"><i
                                                            class="bi bi-wallet-fill"> Fund Wallet</i></a>

                                                @else
                                                    <form action="order-usasecound" method="post">
                                                        @csrf
                                                        <input hidden name="service" value="{{ $key->name }}">
                                                        <input hidden name="type" value="2">
                                                        <input hidden name="amount" value="{{ $cost }}">
                                                        <input hidden name="cost" value="{{ $key->price }}">
                                                        <input hidden name="name" value="{{ $innerValue->name }}">
                                                        <button class="myButton"
                                                                style="border: 0px; background: transparent"
                                                                onclick="hideButtonlop(this)"><i
                                                                class="fa fa-shopping-bag"></i></button>
                                                    </form>

                                                @endif

                                            @else

                                                <a class=""
                                                   href="/login">
                                                    <i class="fa fa-lock text-dark"></i>
                                                </a>
                                            @endauth


                                            <script>
                                                function hideButtonlop(link) {
                                                    // Hide the clicked link
                                                    link.style.display = 'none';

                                                    setTimeout(function () {
                                                        link.style.display = 'inline'; // or 'block' depending on your layout
                                                    }, 5000); // 5 seconds
                                                }
                                            </script>

                                        </div>





                                        {{--                                        <div class="col">--}}
                                        {{--                                            <a href="/order-oprime?service={{ $key->name }}&price={{ $cost }}&cost={{ $key->price }}">--}}
                                        {{--                                                <i class="fa fa-shopping-bag"></i>--}}
                                        {{--                                            </a>--}}
                                        {{--                                        </div>--}}




                                    @else


                                        <div style="font-size: 11px" class="col">
                                            @php $cost = (int) $get_rate2 * (double) $key->price + (int) $margin2 @endphp
                                            N{{ number_format($cost, 2) }}
                                        </div>

                                        <div class="col">


                                            @auth

                                                @if(Auth::user()->wallet < $cost)

                                                    <a href="fund-wallet" style="color: #7c7c7c"><i
                                                            class="bi bi-wallet-fill"> Fund Wallet</i></a>

                                                @else
                                                    <form id="orderForm" action="order-usasecound" method="post">
                                                        @csrf
                                                        <input hidden name="service" value="{{ $key->name }}">
                                                        <input hidden name="type" value="2">
                                                        <input hidden name="amount" value="{{ $cost }}">
                                                        <input hidden name="cost" value="{{ $key->price }}">
                                                        <input hidden name="name" value="{{ $innerValue->name }}">
                                                        <button class="myButton" type="submit"
                                                                style="border: 0px; background: transparent"
                                                                onclick="hideButtonppl(this)"><i
                                                                class="fa fa-shopping-bag"></i></button>
                                                    </form>

                                                @endif

                                            @else

                                                <a class=""
                                                   href="/login">
                                                    <i class="fa fa-lock text-dark"></i>
                                                </a>
                                            @endauth


                                            <script>
                                                function hideButtonppl(link) {
                                                    // Hide the clicked link
                                                    link.style.display = 'none';

                                                    setTimeout(function () {
                                                        link.style.display = 'inline'; // or 'block' depending on your layout
                                                    }, 5000); // 5 seconds
                                                }
                                            </script>


                                            {{--                                        <div class="col">--}}
                                            {{--                                            <a href="/order-oprime?service={{ $key->name }}&price={{ $cost }}&cost={{ $key->price }}">--}}
                                            {{--                                                <i class="fa fa-shopping-bag">Buy</i>--}}
                                            {{--                                            </a>--}}
                                            {{--                                        </div>--}}
                                            @endif
                                        </div>


                                        <hr style="border-color: #cccccc" class=" my-2">
                                </div>
                            @endforeach

                        @else
                            <span>Server busy</span>
                        @endif
                    </div>
                    <div x-show="currentTab === 3" style="height:200px; width:100%; overflow-y: scroll;" class="">

                        <div class="max-w-sm mx-auto">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                an option</label>
                            <select id="countries"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    onchange="getSelectedCountry()">
                                <option selected>Choose a country</option>
                                @foreach($online_sim->countries as $country)
                                    <option value="{{ $country->code }}">{{ $country->original }}</option>
                                @endforeach
                            </select>
                            <div class="pt-2">
                                <input type="text" oninput="searchServices()" name="services" id="services"
                                       class="border rounded-md p-2 w-full" placeholder="Search.."/>
                            </div>
                            <div class="pt-2" id="servicesList">

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <p>
                        Why SMS does not arrive?
                        Please consider the following recommendations:

                    </p>
                    <p> 1.⁠ ⁠Repeat sending the SMS code from the selected service to the purchased phone number.
                    </p>
                    <p> 2.⁠ ⁠Change your IP address. Use a proxy or VPN. Your IP address should comply with the
                        country of the purchased phone number.</p>
                    <p> 3.⁠ ⁠Apply extensions in the browser to change the user-agent or open the tab in incognito
                        mode. Many websites track a certain set of user information.</p>
                    <p> 4.⁠ ⁠Try to buy another phone number.</p>

                    <p>Additionally:
                        We don’t charge you until you receive code , so you can keep trying different numbers</p>
                </div>
            </div>
        </div>
    </div>

    <!--<div>-->

    <!--</div>-->
    <!--<br>-->
    <!--<div class="col-lg-7 col-sm-12">-->
    <div class="card border-1 shadow-lg p-2 mb-1 bg-body rounded-20">

        <!--<div class="card-body">-->


        <!--<div class="">-->

        <div class="">
            <!--<h6 class="text-danger"><b>In Case Number/code didnt drop kindly reload this page you can delete after 1 minute if its didn't drop</b></h6>-->
            <br>
            <strong>
                <h4>Verifications</h4>
            </strong>
        </div>

        <div>


            <div class="table-responsive ">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service</th>
                        <th>Phone No</th>
                        <th>Code</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Date</th>


                    </tr>
                    </thead>
                    <tbody>


                    @forelse($verification as $data)
                        <tr>
                            <td style="font-size: 12px;">{{ $data->id }}</td>
                            <td style="font-size: 12px;">{{ $data->service }}</td>
                            @if($data->type == 'tella')
                                <td style="font-size: 12px; color: green"><a href="">{{ $data->phone }} </a></td>
                            @elseif($data->type == 'dailysms')
                                <td style="font-size: 12px; color: green"><a href="">{{ $data->phone }} </a></td>
                            @else
                                <td style="font-size: 12px; color: green"><a href="">{{ $data->phone }} </a></td>
                            @endif
                            <td style="font-size: 12px;">{{ $data->sms }}</td>
                            <td style="font-size: 12px;">₦{{ number_format($data->cost, 2) }}</td>
                            <td>
                                @if ($data->status == 1)
                                    <span style="background: orange; border:0px; font-size: 10px"
                                          class="btn btn-warning btn-sm">Pending</span>
                                    @if($data->type == 'tella')

                                        <a onclick="hideButtondeletetella(this)"
                                           href="cancle-tella-sms?id={{ $data->order_id }}&delete=1"
                                           style="background: rgb(168, 0, 14); border:0px; font-size: 10px"
                                           class="btn btn-warning btn-sm">Delete</span>
                                            @elseif($data->type == 'dailysms')
                                                <a onclick="hideButtondeletetella(this)" href="cancle-sms?id={{  $data->id }}&delete=1"
                                                   style="background: rgb(168, 0, 14); border:0px; font-size: 10px"
                                                   class="btn btn-warning btn-sm">Delete</span>
                                                    @else
                                                        <a onclick="hideButtondeletetella(this)" href="cancel-online-sms?id={{  $data->order_id }}&delete=1"
                                                           style="background: rgb(168, 0, 14); border:0px; font-size: 10px"
                                                           class="btn btn-warning btn-sm">Delete</span>
                                                            @endif
                                                            @else
                                                                <span style="font-size: 10px;"
                                                                      class="text-white btn btn-success btn-sm">Completed</span>
                                    @endif


                                                            <script>
                                                                function hideButtondeletetella(link) {
                                                                    // Hide the clicked link
                                                                    link.style.display = 'none';

                                                                    setTimeout(function () {
                                                                        link.style.display = 'inline'; // or 'block' depending on your layout
                                                                    }, 5000); // 5 seconds
                                                                }
                                                            </script>

                            </td>
                            <td style="font-size: 12px;">{{ $data->created_at }}</td>
                        </tr>

                    @empty

                        <h6>No verification found</h6>
                    @endforelse

                    </tbody>

                    {{ $verification->links() }}

                </table>
            </div>
        </div>


    </div>
    </div>


    </div>


    </div>
    </div>
    </div>
    </div>




    <script>
        function updateLinks() {
            var selectElement = document.getElementById('countries');
            var selectedValue = selectElement.value;
            var links = document.querySelectorAll('[id^="countryLink_"]');
            links.forEach(function (link) {
                var serviceName = link.querySelector('span:first-child').textContent;
                var price = link.querySelector('span:nth-child(2)').textContent;
                link.href = "/order-sim?service=" + serviceName + "&country=" + selectedValue + "&cost=" + price;
            });
        }


        function getSelectedCountry() {
            var selectElement = document.getElementById('countries');
            var options = selectElement.getElementsByTagName('option');
            var selectedValue = selectElement.value;
            var selectedText = "";

            // Iterate over the options to find the selected text
            for (var i = 0; i < options.length; i++) {
                if (options[i].value === selectedValue) {
                    selectedText = options[i].textContent;
                    break;
                }
            }

            console.log("Selected Country Text:", selectedText);

            // Send a request to the API endpoint
            fetch('https://onlinesim.io/api/getNumbersStats.php?country=' + selectedValue)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // assuming response is JSON
                })
                .then(data => {
                    // Handle the data returned from the API
                    console.log('Data received:', data);
                    updateServices(data.services, selectedValue, selectedText);
                    // You can update your UI or perform further actions with the data
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                    // Handle errors here
                });
        }


        function updateServices(services, country, countryText) {
            var servicesList = document.getElementById('servicesList');
            // Clear existing services
            servicesList.innerHTML = '';

            // Check if services is an array or an object
            if (Array.isArray(services)) {
                // If services is an array, iterate over each service
                services.forEach(function (service) {
                    addServiceElement(service, country, countryText);
                });
            } else if (typeof services === 'object') {
                // If services is an object, iterate over its keys
                Object.keys(services).forEach(function (key) {
                    addServiceElement(services[key], country, countryText);
                });
            }
        }

        function addServiceElement(service, country, countryText) {
            var servicesList = document.getElementById('servicesList');
            var a = document.createElement('a');
            a.className = "flex justify-between hover:text-white service-item hover:bg-blue-500 hover:p-2 hover:rounded-md";
            var span1 = document.createElement('span');
            span1.textContent = service.service;
            var span2 = document.createElement('span');
            var price = {{ $get_rate3 }} * service.price + {{ $margin3 }};
            var noN = price.toFixed(2);
            span2.textContent = `N ${price.toFixed(2)}`;
            a.href = `/order-sim?service=${service.service}&price=${service.price}&country=${country}&countryText=${countryText}&cost=${noN}`;
            a.appendChild(span1);
            a.appendChild(span2);
            servicesList.appendChild(a);
        }


        function searchServices() {
            var input = document.getElementById('services');
            var filter = input.value.toUpperCase();
            var services = document.getElementsByClassName('service-item');

            for (var i = 0; i < services.length; i++) {
                var service = services[i].getElementsByTagName('span')[0];
                var txtValue = service.textContent || service.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    services[i].style.display = "";
                } else {
                    services[i].style.display = "none";
                }
            }
        }

        function filterServices() {
            var input, filter, serviceRows, serviceNames, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            serviceRows = document.getElementsByClassName("service-row");
            for (i = 0; i < serviceRows.length; i++) {
                serviceNames = serviceRows[i].getElementsByClassName("service-name");
                txtValue = serviceNames[0].textContent || serviceNames[0].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    serviceRows[i].style.display = "";
                } else {
                    serviceRows[i].style.display = "none";
                }
            }
        }
    </script>

@endsection
