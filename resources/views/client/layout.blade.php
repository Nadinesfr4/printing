<!DOCTYPE html>
<html lang="en">
<head>
    @include('client.aspect.css')
</head>


<body>
    <!-- header_section -->
            @include('client.aspect.header')


    <!-- main body - start -->
    <main class="mt-0">


        <!-- sidebar mobile menu - start -->
            @include('client.aspect.sidebar')


            @yield('content')

    <!-- sidebar mobile menu - start -->
        @include('client.aspect.footer')

        {{-- js --}}
        @include('client.aspect.js')

    
</body>
</html>