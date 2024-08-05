<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Great Indian Workers
    </title>
    <link rel="shortcut icon" href="{{ url('giw logo.png') }}" type="image/x-icon">

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    @vite('resources/css/app.css')


    {{-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" /> --}}
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #3369d5 0%, #d351da 100%);
        }
    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour hover:text-gray-800 text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="{{ url('/') }}">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <!-- <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512.005 512.005">
                        <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502"
                            transform="matrix(1,0,0,1,0,0)" />
                        <path class="plane-take-off"
                            d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                    </svg> -->

                    <svg class="h-8 fill-current inline" id="Layer_1" data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.19 33.73" width="50" height="50">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #ffffff;
                                }

                                .cls-1,
                                .cls-2,
                                .cls-3 {
                                    stroke: #231f20;
                                    stroke-miterlimit: 10;
                                    stroke-width: 3px;
                                }

                                .cls-2 {
                                    fill: #f26522;
                                }

                                .cls-3 {
                                    fill: #00a651;
                                }
                            </style>
                        </defs>
                        <rect class="cls-1" x="40.05" y="64.4" width="33.84" height="10.44" rx="4.88"
                            transform="translate(103.45 9) rotate(124.37)" />
                        <rect class="cls-2" x="53.16" y="64.3" width="33.84" height="10.44" rx="4.88"
                            transform="translate(46.7 -80.08) rotate(56.78)" />
                        <rect class="cls-3" x="44.65" y="74.34" width="37.05" height="10.44" rx="4.88"
                            transform="translate(-45.1 -51.29) rotate(-1.42)" />
                        <path class="cls-1"
                            d="M62.38,71l-.54.79-7.52,11A5.17,5.17,0,0,1,47.14,84h0a5.17,5.17,0,0,1-1.39-7.16l7.5-11,.47-.68"
                            transform="translate(-43.15 -52.89)" />
                    </svg>


                    Great Indian Workers
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-black lg:bg-transparent text-black p-4 lg:p-0 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="toggleColour inline-block py-2 px-4 text-white font-bold no-underline hover:text-gray-800"
                            href="{{ url('/') }}">Home</a>





                        <!-- drop down -->



                        <!-- drop down -->




                    </li>
                    <li class="mr-3">
                        <a class="toggleColour inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                            href="{{ url('/products') }}">Products</a>
                    </li>

                    <!-- drop down -->





                    <!-- drop down -->


                    <li class="mr-3">
                        <a class="toggleColour inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                            href="{{ url('/services') }}">Services</a>
                    </li>

                    <li class="mr-3">
                        <a class="toggleColour inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                            href="{{ url('/about') }}">About Us</a>
                    </li>
                </ul>
                <button id="navAction"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Login
                </button>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
