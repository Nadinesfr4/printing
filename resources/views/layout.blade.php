<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>


<body>
    <!-- header_section -->
            @include('admin.header')


    <!-- main body - start -->
    <main class="mt-0">


        <!-- sidebar mobile menu - start -->
            @include('admin.sidebar')


            @yield('content')

    <!-- sidebar mobile menu - start -->
        @include('admin.footer')

        {{-- js --}}
        @include('admin.js')

    
</body>
</html>