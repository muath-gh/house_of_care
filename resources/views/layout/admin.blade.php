<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Keto Admin </title>
    @include('layout.includes.backend.head')
</head>
<body id="page-top">
    <div id="wrapper">
        {{-- sidebar --}}
        @include('layout.includes.backend.sidebar')
        {{-- end of sidebar --}}
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                {{-- topbar --}}
                @include('layout.includes.backend.topbar')
                {{-- end of topbar --}}
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            {{-- footer --}}
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            {{-- end footer --}}
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
   <!-- Bootstrap core JavaScript-->

   <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

   <!-- Core plugin JavaScript-->
   <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

   <!-- Custom scripts for all pages-->
   <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>

   <!-- Page level plugins -->
   <script src="{{asset('backend/vendor/chart.js/Chart.min.js')}}"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <!-- Page level custom scripts -->
   <script src="{{asset('backend/js/demo/chart-area-demo.js')}}"></script>
   <script src="{{asset('backend/js/demo/chart-pie-demo.js')}}"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.js"></script>
</html>