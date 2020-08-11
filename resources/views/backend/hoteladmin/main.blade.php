<!DOCTYPE html>
<html lang="en">
<head>
<title>Resturant MNG</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="icon" href="img/myebus_logo.jpg" type="image/x-icon" />
<link rel="icon" href="{{asset('img/myebus_logo.jpg')}}" type="image/x-icon" />
<link rel="stylesheet" type="text/css" id="theme" href="{{asset('css/theme-default.css')}}"/>
</head>
<body>
<div class="page-container page-navigation-toggled">
@include('backend.hoteladmin.menu_bar')
<div class="page-content">
@include('backend.hoteladmin.navigation')


@yield('content')

</div>
</div>
</div>
<!--END PAGE-->
</div>
</div>
<!-- POST FORM -->
<!-- END POSTING -->


   <!-- START PLUGINS -->
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/owl/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/nvd3/lib/d3.v3.js')}}"></script>        
<script type="text/javascript" src="{{asset('js/plugins/nvd3/nv.d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-select.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<!-- END THIS PAGE PLUGINS-->        

<?php //include 'menu_bar_action.php'; ?>
<!-- START TEMPLATE -->
<script type="text/javascript" src="{{asset('js/settings.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('js/actions.js')}}"></script>
<script type="text/javascript" src="{{asset('js/my_functions.js')}}"></script>
<!-- END TEMPLATE -->
<script src="{{ asset('js/alertify.min.js') }}"></script>
<!-- PAGE ACTION -->
  <!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  <!-- Font Awesome -->
  
<?php //include 'menu_bar_action.php'; ?>

</body>
</html>
@if (session('success'))
    <script type="text/javascript">
      alertify.success('{{ session('success') }}');
    </script>
@elseif(session('error'))
    <script type="text/javascript">
      alertify.error('{{ session('error') }}');
    </script>
@endif