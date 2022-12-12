<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>PROTECTING YOU</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  @yield('css')
  {{--  <script src="{{ asset('js/jquery.min.js') }}" charset="utf-8"></script>
  --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>
<body class="">  
  

  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="">   <img src="{{URL::asset('img/controlparental2.png')}}" width="150" > </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('perfil')}}">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('tokens')}}">Tokens de Usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('dispositivos')}}">Dispositivos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('plan')}}">Plan</a>
          </li>
      </ul>
    </div>
    <!--end::Root-->


    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "../../../demo1/dist/assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="../../../demo1/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../../demo1/dist/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="../../../demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="../../../demo1/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="../../../demo1/dist/assets/js/widgets.bundle.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/widgets.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/apps/chat/chat.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="../../../demo1/dist/assets/js/custom/apps/user-management/users/list/table.js"></script>

    <script src="../../../demo1/dist/assets/js/custom/apps/user-management/users/list/export-users.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/apps/user-management/users/list/add.js"></script>
		<script src="../../../demo1/dist/assets/js/widgets.bundle.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/widgets.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/apps/chat/chat.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="../../../demo1/dist/assets/js/custom/utilities/modals/users-search.js"></script>
        <script src="../../../demo1/dist/assets/js/custom/apps/calendar/calendar.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
