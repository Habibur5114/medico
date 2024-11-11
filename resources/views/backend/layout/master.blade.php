<!DOCTYPE html>

<html lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
      @include('backend.include.head-titles')

  </head>
  <style>
<style>
  .colored-toast.swal2-icon-success {
  background-color: #a5dc86 !important;
}

.colored-toast.swal2-icon-error {
  background-color: #f27474 !important;
}

.colored-toast.swal2-icon-warning {
  background-color: #f8bb86 !important;
}

.colored-toast.swal2-icon-info {
  background-color: #3fc3ee !important;
}

.colored-toast.swal2-icon-question {
  background-color: #87adbd !important;
}

.colored-toast .swal2-title {
  color: white;
}

.colored-toast .swal2-close {
  color: white;
}
.colored-toast .swal2-html-container {
  color: white;
}

</style>
  </style>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('backend.include.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('backend.include.header')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">

            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Content -->
                    @yield('body-content')
                <!-- / Content -->
            </div>

            <!-- Footer -->
              @include('backend.include.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
     @include('backend.include.scripts')
     @if(Session::has('success'))
     <script>
         const Toast = Swal.mixin({
             toast: true,
             position: 'top-end',
             iconColor: 'white',
             customClass: {
                 popup: 'colored-toast',
             },
             showConfirmButton: false,
             timer: 2500,
             timerProgressBar: true,
         })
         Toast.fire({
             icon: 'success',
             title: "{{ Session::get('success') }}",
         })
     </script>
 @endif
  </body>
</html>


