	<!-- <div id="themer" class="collapse">
		<div class="wrapper">
			<span class="close2">&times; close</span>
			<h4>Themer <span>color options</span></h4>
			<ul>
				<li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
				<li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
				<li>
					<span class="link" id="themer-custom-reset">reset theme</span>
					<span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
				</li>
			</ul>
			<div id="themer-getcode" class="hide">
				<hr class="separator" />
				<button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
				<button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
				<div class="clearfix"></div>
			</div>
		</div>
	</div> -->

	<!-- Modal Gallery -->
	<!-- <div id="modal-gallery" class="modal modal-gallery hide fade hidden-print" tabindex="-1">
	    <div class="modal-header">
	        <a class="close" data-dismiss="modal">&times;</a>
	        <h3 class="modal-title"></h3>
	    </div>
	    <div class="modal-body"><div class="modal-image"></div></div>
	    <div class="modal-footer">
	        <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
	        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
	        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
	        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
	    </div>
	</div> -->
	<!-- // Modal Gallery END -->


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
	<script src="{{asset('assets/admin_kit/theme/scripts/demo/common_home.js')}}"></script>

	<!-- Holder Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/other/holder/holder.js')}}"></script>

	<!-- Uniform Forms Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js')}}"></script>

	<!-- PrettyPhoto -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>

	<!-- Global -->
	<script>
	var basePath = '{{asset('assets/admin_kit/')}}';
	</script>

	<!-- Bootstrap Extended -->
	<script src="{{asset('assets/admin_kit/bootstrap/extend/bootstrap-select/bootstrap-select.js')}}"></script>
	<script src="{{asset('assets/admin_kit/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')}}"></script>
	<script src="{{asset('assets/admin_kit/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')}}"></script>
	<script src="{{asset('assets/admin_kit/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/admin_kit/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js')}}"></script>
	<script src="{{asset('assets/admin_kit/bootstrap/extend/bootbox.js')}}"></script>
	<script src="{{asset('assets/admin_kit/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js')}}"></script>
	<script src="{{asset('assets/admin_kit/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js')}}"></script>

	<!-- Google Code Prettify -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/other/google-code-prettify/prettify.js')}}"></script>

	<!-- Gritter Notifications Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js')}}"></script>

	<!-- Notyfy Notifications Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js')}}"></script>

	<!-- MiniColors Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.js')}}"></script>

	<!-- DateTimePicker Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

	<!-- Cookie Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/system/jquery.cookie.js')}}"></script>

	<!-- Colors -->
	<script>
	var primaryColor = '#e25f39',
		dangerColor = '#bd362f',
		successColor = '#609450',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';
	</script>

	<!-- Themer -->
	<script>
	var themerPrimaryColor = primaryColor;
	</script>
	<script src="{{asset('assets/admin_kit/theme/scripts/demo/themer.js')}}"></script>

	<!-- Twitter Feed -->
	<script src="{{asset('assets/admin_kit/theme/scripts/demo/twitter.js')}}"></script>

	<!-- Easy-pie Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.js')}}"></script>

	<!-- Sparkline Charts Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js')}}"></script>

	<!-- Ba-Resize Plugin -->
	<script src="{{asset('assets/admin_kit/theme/scripts/plugins/other/jquery.ba-resize.js')}}"></script>

	<!-- Dashboard Demo Script -->
	<script src="{{asset('assets/admin_kit/theme/scripts/demo/index.js')}}"></script>
<!-- 1420247831 -->

	<!-- Google JSAPI -->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>

	<!--  Flot Charts Plugin -->
	<script src="{{asset('assets/admin_kit/heme/scripts/plugins/charts/flot/jquery.flot.js')}}"></script>
	<script src="{{asset('assets/admin_kit/heme/scripts/plugins/charts/flot/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('assets/admin_kit/heme/scripts/plugins/charts/flot/jquery.flot.tooltip.js')}}"></script>
	<script src="{{asset('assets/admin_kit/heme/scripts/plugins/charts/flot/jquery.flot.selection.js')}}"></script>
	<script src="{{asset('assets/admin_kit/heme/scripts/plugins/charts/flot/jquery.flot.resize.js')}}"></script>
	<script src="{{asset('assets/admin_kit/heme/scripts/plugins/charts/flot/jquery.flot.orderBars.js')}}"></script>

	<!-- Charts Helper Demo Script -->
	<script src="{{asset('assets/admin_kit/theme/scripts/demo/charts.helper.js')}}"></script>
<!-- 1420247831 -->

	<!-- Optional Resizable Sidebars -->
	<!--[if gt IE 8]><!--><script src="{{asset('assets/admin_kit/theme/scripts/demo/resizable.js')}}"></script><!--<![endif]-->
<!-- 1420247831 -->
	<!-- Bootstrap Image Gallery -->
	<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
	<script src="{{asset('assets/admin_kit/bootstrap/extend/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js')}}" type="text/javascript"></script>

	<script>
	//Load the Visualization API and the table/core chart package.
	google.load('visualization', '1.0', {'packages':['table', 'corechart']});

	// Set a callback to run when the Google Visualization API is loaded.
	google.setOnLoadCallback(charts.traffic_sources_dataTables.init);
	</script>
