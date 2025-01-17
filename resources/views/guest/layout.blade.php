@include('guest.header')
  <body>
@include('guest.styles')
    
    <div>
      <div class="frame2-container10">
        <div class="frame2-frame2">
          <div class="frame2-container11">
            <div class="frame2-frame1">
              <div class="frame2-container12">
                <div class="frame2-container13">

                    <!-- Body Area -->
                  <div class="frame2-container14">

                    @yield('content')

                  </div>
                  <!-- End of Body Area -->

                  <!-- Footer Area -->
                  @include('guest.footer')
                  <!-- End of Footer Area -->

                  <!-- Navigation Area -->
                  @include('guest.navigation')
                  <!-- End of Navigation Area -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
