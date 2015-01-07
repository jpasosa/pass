<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8"> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->

<head>
	<title>easypass (registro)</title>

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
	<link href="{{asset('assets/admin_kit/theme/css/style-light_create.css')}}" rel="stylesheet" />


	<!-- Google Analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36057737-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<!-- LESS.js Library -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/system/less.min.js')}}"></script>
</head>


<body class="login">
	<div id="login">
	<!-- Box -->
	<div class="form-signin">
		@if (Session::get('error'))
			<div class="alert alert-error alert-danger">
		@if (is_array(Session::get('error')))
			{{ head(Session::get('error')) }}
		@endif
			</div>
		@endif

		@if (Session::get('notice'))
			<div class="alert">{{ Session::get('notice') }}</div>
		@endif

		<h3>Crear una cuenta. <span>Ya sos miembro? <a href="login.html?lang=en">Logueate por acá</a></span></h3>

		<!-- Form -->
		{{ Form::open(array('action'=>'UsersController@store', 'method' => 'post', 'files'=>true)) }}
		<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

		<!-- Row -->
		<div class="row-fluid row-merge">
			<!-- Column -->
			<div class="span6">
				<div class="inner">
					<!-- NOMBRE -->
					<label for="name" class="strong">{{{ Lang::get('confide.name') }}}</label>
					<input class="input-block-level" placeholder="{{{ Lang::get('confide.name') }}}" type="text" name="name" id="name" value="{{{ Input::old('name') }}}">
					<!-- APELLIDO -->
					 <label for="last_name" class="strong">{{{ Lang::get('confide.last_name') }}}</label>
            			<input class="input-block-level" placeholder="{{{ Lang::get('confide.last_name') }}}" type="text" name="last_name" id="last_name" value="{{{ Input::old('last_name') }}}">
            			<!-- USUARIO -->
					<label class="strong" for="username">{{{ Lang::get('confide.username') }}}</label>
					<input class="input-block-level" placeholder="{{{ Lang::get('confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
					<!-- IMAGEN -->
					<label for="image" class="strong">{{{ Lang::get('confide.image') }}}</label>
            			{{ Form::file('image', $attributes = array('class'=>'input-block-level', 'data-parsley-required'=>true, 'id'=>'image', 'value'=>"{{{ Input::old('image') }}}")) }}
				</div>
			</div>
			<!-- // Column END -->

			<!-- Column -->
			<div class="span6">
				<div class="inner">
					<!-- CLAVE -->
					<label for="password" class="strong">{{{ Lang::get('confide.password') }}}</label>
            			<input class="input-block-level" placeholder="{{{ Lang::get('confide.password') }}}" type="password" name="password" id="password">
            			<!-- REPETIR CLAVE -->
					<label for="password_confirmation" class="strong">{{{ Lang::get('confide.password_confirmation') }}}</label>
					<input class="input-block-level" placeholder="{{{ Lang::get('confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
					<!-- EMAIL -->
					<label for="email" class="strong">
						{{{ Lang::get('confide.e_mail') }}}
						<small>{{ Lang::get('confide.signup.confirmation_required') }}</small>
					</label>
					<input class="input-block-level" placeholder="{{{ Lang::get('confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">

					<br />

					<button type="submit" class="btn btn-icon-stacked btn-block btn-success ">
						<i></i>
						<span>{{{ Lang::get('confide.signup.submit') }}}</span>
					</button>

					<p>Problemas? <a href="faq.html?lang=en">Obtener Ayuda</a></p>
				</div>
			</div>
			<!-- // Column END -->
		</div>
		<!-- // Row END -->
		{{ Form::close() }}

		<!-- // Form END -->

		<div class="ribbon-wrapper"><div class="ribbon success">Registro</div></div>
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
<script src="{{asset('assets/admin_kit/theme/scripts/demo/common.js?1420247754')}}"></script>

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