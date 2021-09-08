<!doctype html>
<html class="no-js" lang="en" dir="rtl" lang="ar"> 
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @include('layout.includes.frontend.head')
        @livewireStyles
    </head>
    <body>

    
        <div class="page-holder">
@include('layout.includes.frontend.header')
<div class="container">
@yield('content')
</div>
@include('layout.includes.frontend.footer')
          </div>
        		<!-- JS here -->
           
    </body>
    @livewireScripts

      <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/vendor/lightbox2/js/lightbox.min.js')}}"></script>
      <script src="{{asset('assets/vendor/nouislider/nouislider.min.js')}}"></script>
      <script src="{{asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
      <script src="{{asset('assets/vendor/owl.carousel2/owl.carousel.min.js')}}"></script>
      <script src="{{asset('assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

      <script src="{{asset('assets/js/front.js')}}"></script>

      <script>
        window.addEventListener('alert', event => { 
                     toastr[event.detail.type](event.detail.message, 
                     event.detail.title ?? ''), toastr.options = {
                            "closeButton": true,
                            "progressBar": true,
                        }
                    });
        </script>
</html>