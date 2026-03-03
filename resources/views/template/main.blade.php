<!doctype html>
<html lang="en">
  <!--begin::Head-->
    @include('template.header')
<!-- ini header -->
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      @include('template.navbar')
<!-- ini file navbar -->
      <!--end::Header-->
      @include('template.sidebar')
      <!--begin::Sidebar-->
<!-- ini file sidebar -->
      <!--end::Sidebar-->
      <!--begin::App Main-->
      @include('template.content')
<!-- ini file content -->
      <!--end::App Main-->
      <!--begin::Footer-->
      @include('template.footer')
<!-- ini file footer -->
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
      @include('template.mainfoter')
<!-- ini file js -->
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
