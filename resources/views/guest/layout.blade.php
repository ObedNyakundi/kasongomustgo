@include('guest.header')
    <body>
        <!-- main frame -->
        <div class="main-frame">

            <!-- navigation -->
            @include('guest.navigation')
            <!-- end of navigation -->

            @yield('content')
            

            <!-- popular topics & Footer-->
            <div class="frame4">

                <!-- popular topics -->
                @include('guest.popular')
                <!-- end of popular topics -->

                <!-- Footer section -->
                @include('guest.footer')
                <!-- end of footer section -->

            </div>
            <!-- end of popular topics & footer-->

        </div>
        <!-- end of main frame -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
        <script src="{{ asset('landing/script.js') }}"></script>
    </body>
</html>
