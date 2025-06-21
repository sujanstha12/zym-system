<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>NepholiZym-Admin</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
      <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            @include('admin.layout.sidebar')
                        <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
              @include('admin.layout.header')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                @include('sweetalert::alert')
               @yield('container')
                  <!-- footer -->
                  @include('admin.layout.footer')
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('assets/js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('assets/js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
      <!-- chart js -->
      <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
      <script src="{{ asset('assets/js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/js/utils.js') }}"></script>
      <script src="{{ asset('assets/js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('assets/js/custom.js') }}j"></script>
      <script src="{{ asset('assets/js/chart_custom_style1.js') }}"></script>
      <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
      <script>
          ClassicEditor
              .create(document.querySelector('#editor'), {
                  ckfinder: {
                      uploadUrl: '{{ route("upload") }}?_token={{ csrf_token() }}'
                  }
              })
              .catch(error => {
                  console.error(error);
              });
              </script>

   </body>
</html>
