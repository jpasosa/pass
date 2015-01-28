<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->

	<head>
		@include('template/layout/head')
	</head>

	<body class="">
		<!-- Main Container Fluid -->
		<div class="container-fluid fluid menu-left">
			<div class="navbar main hidden-print">
				@include('template/layout/header')
			</div>
			<div id="wrapper">
				<div id="menu" class="hidden-phone hidden-print">
					@include('template/layout/left_menu')
				</div>
				<div id="content">
					@include('template/layout/search_menu')
					@include('template/layout/content')
				</div>
				<div class="clearfix"></div>
				<div id="footer" class="hidden-print">
					@include('template/layout/footer')
				</div>
			</div>
			@include('template/layout/load_endscripts')
		</div>
	</body>

</html>
