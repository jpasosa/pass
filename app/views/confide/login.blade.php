<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>easypass (logueo)</title>

	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

	<!-- Bootstrap -->
	<link href="{{asset('assets/admin_kit/bootstrap/css/bootstrap.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/admin_kit/bootstrap/css/responsive.css')}}" rel="stylesheet" />

	<!-- Glyphicons Font Icons -->
	<link href="{{asset('assets/admin_kit/theme/css/glyphicons.css')}}" rel="stylesheet" />

	<!-- Uniform Pretty Checkboxes -->
	<link href="{{asset('assets/admin_kit/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css')}}" rel="stylesheet" />

	<!-- PrettyPhoto -->
	<link href="{{asset('assets/admin_kit/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet" />

	<!-- Main Theme Stylesheet :: CSS -->
	<link href="{{asset('assets/admin_kit/theme/css/style-dark_login.css')}}" rel="stylesheet" />


	<!-- Google Analytics -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36057737-1']);
		_gaq.push(['_trackPageview']);

		(function()
		{
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<!-- LESS.js Library -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/system/less.min.js')}}"></script>
</head>

<body class="login">

<!-- Wrapper -->
<div id="login">


	<!-- Box -->
	<div class="form-signin">
		@if (Session::get('error'))
			<div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
		@endif

		@if (Session::get('notice'))
			<div class="alert">{{{ Session::get('notice') }}}</div>
		@endif
		<h3> Logueo al Panel </h3>

		<!-- Row -->
		<div class="row-fluid row-merge">

			<!-- Column -->
			<div class="span12">
				<div class="inner">

					<!-- Form -->
					<form role="form" method="POST" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">
						<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

						<label for="email" class="strong">{{{ Lang::get('confide::confide.username_e_mail') }}}</label>
						<input class="input-block-level" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">


						<label for="password" class="strong">
							{{{ Lang::get('confide::confide.password') }}}
							<a class="password" href="login.html?lang=en&amp;style=style-dark">olvidaste tu clave?</a>
        					</label>
						<input class="input-block-level" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">


						<div class="uniformjs">
							<label class="checkbox">
								<input type="checkbox" value="remember-me">
								Recordarme
							</label>
						</div>

						<div class="row-fluid">
							<div class="span5 center">
								<button tabindex="3" type="submit" class="btn btn-block btn-primary">Ingresar</button>
							</div>
							<div class="span2 center">o</div>
							<div class="span5 center">
								<a href="{{ URL::to('users/create') }}" class="btn btn-block btn-info">Crear Cuenta</a>
							</div>
						</div>



					</form>
					<!-- // Form END -->

				</div>
			</div>
			<!-- // Column END -->


			<!-- // Column END -->

		</div>
		<!-- // Row END -->

		<div class="ribbon-wrapper"><div class="ribbon primary">miembros</div></div>
	</div>
	<!-- // Box END -->

</div>
<!-- // Wrapper END -->

	<!-- JQuery -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/system/jquery.min.js')}}"></script>

	<!-- JQueryUI -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js')}}"></script>

	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- Modernizr -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/system/modernizr.js')}}"></script>

	<!-- Bootstrap -->
	<script src="{{asset('assets/admin_kit/bootstrap/js/bootstrap.min.js')}}"></script>

	<!-- SlimScroll Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js')}}"></script>

	<!-- Common Demo Script -->
	<script src="{{asset('assets/admin_kit/theme/scripts/demo/common_login.js')}}"></script>

	<!-- Holder Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/other/holder/holder.js')}}"></script>

	<!-- Uniform Forms Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js')}}"></script>

	<!-- PrettyPhoto -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>

	<!-- Global -->
	<script>
	var basePath = "{{asset('assets/admin_kit/')}}";
	</script>



</body>
</html>