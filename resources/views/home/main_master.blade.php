<!doctype html>
<html class="no-js" lang="en">
   @include('home.body.head')
    <body>

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
       @include('home.body.header')
        <!-- header-area-end -->

        <!-- main-area -->
        @yield('contents')
        <!-- main-area-end -->

        <!-- Footer-area -->
       @include('home.body.footer')
        <!-- Footer-area-end -->
         
		<!-- JS here -->
        @include('home.body.js')
    </body>
</html>
