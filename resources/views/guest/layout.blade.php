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

        <script src="{{ asset('landing/script.js') }}"></script>
    </body>
</html>
