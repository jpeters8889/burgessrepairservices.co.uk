<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('/assets/css/app.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

    <meta name="robots" content="noindex">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

    @include('page-view-builder::header')
</head>
<body class="bg-gradient-to-b from-blue to-white">

<div class="min-h-screen flex flex-col">
    <header class="inner-wrapper bg-white shadow sm:rounded-b-2xl mb-4">
        <div class="p-2 flex flex-col border-b border-blue sm:flex-row sm:items-center">
            <h1 class="text-blue text-2xl font-logo text-center leading-tight tracking-wide sm:text-left">
                <a href="/">Burgess Repair Services</a>
            </h1>
            <ul class="flex-col space-y-1 hidden sm:flex sm:flex-1">
                <li>
                    <a href="mailto:info@burgessrepairservices.co.uk" class="flex space-x-2">
                        <span class="flex-1 text-right">info@burgessrepairservices.co.uk</span>
                        <span><i class="far fa-envelope"></i></span>
                    </a>
                </li>

                <li>
                    <a href="tel:01270211126" class="flex space-x-2">
                        <span class="flex-1 text-right">01782 211126</span>
                        <span><i class="fas fa-phone"></i></span>
                    </a>
                </li>
            </ul>
        </div>

        <nav x-data="{showNav: false}">
            <ul class="flex flex-col">
                <div class="flex items-center text-blue text-2xl px-4 sm:hidden" @click="showNav = !showNav">
                    <div class="flex-1 text-center font-logo">
                        Menu
                    </div>
                    <i class="fas fa-bars"></i>
                </div>
                <ul :class="showNav ? 'flex' : 'hidden sm:flex'"
                    class="flex-col sm:flex-row sm:justify-around text-lg font-semibold sm:text-xs sm:font-normal sm:text-center md:text-base">
                    <li class="border-b border-t border-blue sm:border-0">
                        <a class="py-2 px-4 block text-center sm:px-0" href="/">
                            Home
                        </a>
                    </li>
                    <li class="border-b border-blue sm:border-0">
                        <a class="py-2 px-4 block text-center sm:px-0" href="/what-we-do">
                            What We Do
                        </a>
                    </li>
                    <li class="border-b border-blue sm:border-0">
                        <a class="py-2 px-4 block text-center sm:px-0" href="/ata-accreditation">
                            ATA Accreditation
                        </a>
                    </li>
                    <li class="border-b border-blue sm:border-0">
                        <a class="py-2 px-4 block text-center sm:px-0" href="/hot-rods-and-bikes">
                            Hot Rods and Bikes
                        </a>
                    </li>
                    <li class="border-b border-blue sm:border-0">
                        <a class="py-2 px-4 block text-center sm:px-0" href="/contact-us">
                            Contact Us
                        </a>
                    </li>
                    <li class="border-b border-blue sm:border-0">
                        <a class="py-2 px-4 block text-center sm:px-0" href="/useful-links">
                            Useful Links
                        </a>
                    </li>
                    <li class="sm:hidden">
                        <a href="tel:01270211126" class="py-2 px-4 block text-center sm:px-0">
                            Call us now
                        </a>
                    </li>
                </ul>
            </ul>
        </nav>
    </header>

    <div class="flex-1">
        <div class="inner-wrapper bg-white shadow sm:rounded-2xl p-2">
            <div class="flex flex-col sm:flex-row sm:space-x-2">
                <div class="sm:w-2/3 border-r sm:border-blue sm:pr-2 md:w-3/4">
                    @yield('content')
                </div>

                <div class="mt-2 sm:w-1/3 sm:mt-0 sm:text-sm md:w-1/4">
                    <h3 class="text-blue font-semibold">
                        Burgess Repair Services Ltd
                    </h3>
                    <p class="leading-tight">
                        Poplar Garage<br/>
                        Poplar Grove<br/>
                        Crewe<br/>
                        Cheshire<br/>
                        CW1 4AZ<br/>
                        (at the end of Henry Street)
                    </p>

                    <h3 class="text-blue font-semibold mt-2">
                        Opening Hours
                    </h3>
                    <p class="leading-tight">
                        Monday to Friday: 8.30am - 6.00pm<br/>
                        Saturday: 9.00am - 1.00pm<br/>
                        Sunday: Closed
                    </p>

                    <div class="border border-gray mt-2 w-full h-64">
                        <iframe class="border-0 w-full h-full"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB_1dR5BM9AEdqPLzMBo5rMftbp-y0vVdE&amp;q=Burgess+Repair+Services,+Crewe&amp;zoom=15"
                                frameborder="0">
                        </iframe>
                    </div>
                    <p>
                        <a class="mt-1 text-blue hover:text-black"
                           href="https://www.google.co.uk/maps/place/Burgess%27s+Repair+Services+Ltd/@53.101413,-2.429935,16z/data=!4m2!3m1!1s0x487a5f51f075a7ef:0x6af8df020f6f0993"
                           target="_blank">
                            View on Google Maps
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="inner-wrapper bg-white shadow sm:rounded-t-2xl p-2 mt-4 text-sm text-center leading-tight">
        <p class="mb-2">
            Copyright &copy; 1980 - {{ date('Y') }} Burgess Repair Services Ltd - All Rights Reserved.
        </p>

        <p class="mb-2">
            No part of this website maybe reproduced without the prior written permission of Burgess Repair Services
            Ltd.
        </p>

        <p class="mb-2">
            <a href="/terms-and-conditions">Terms and Conditions</a><br/>
            <a href="/privacy-policy">Privacy Policy</a>
        </p>

        <p>
            Website Designed and Maintained by <a href="https://jamie-peters.co.uk" target="_blank">Jamie Peters</a>.
        </p>
    </footer>
</div>

</body>
</html>
