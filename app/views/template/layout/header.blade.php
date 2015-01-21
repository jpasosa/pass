

<a href="{{ URL::to('/') }}" class="appbrand pull-left">
	<span>pass <span>v1.0</span></span>
</a>
<button type="button" class="btn btn-navbar">
	<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
</button>
<ul class="topnav pull-left tn1">

</ul>
<ul class="topnav pull-right">
	<li class="hidden-phone" id="lang_nav">
		<a href="index.html?lang=en&amp;style=style-dark#" data-toggle="dropdown">
			<img src="{{asset('assets/admin_kit/theme/images/lang/en.png')}}" alt="en" />
		</a>
		<ul class="dropdown-menu pull-left">
      		<li class="active">
      			<a href="#" title="English">
      				<img src="{{asset('assets/admin_kit/theme/images/lang/en.png')}}" alt="English" />
      				English
      			</a>
      		</li>
      		<li>
      			<a href="#" title="Romanian">
      				<img src="{{asset('assets/admin_kit/theme/images/lang/ro.png')}}" alt="Romanian">
      				Romanian
      			</a>
      		</li>
      		<li>
      			<a href="#" title="Italian">
      				<img src="{{asset('assets/admin_kit/theme/images/lang/it.png')}}" alt="Italian">
      				Italian
      			</a>
      		</li>
      		<li>
      			<a href="#" title="French">
      				<img src="{{asset('assets/admin_kit/theme/images/lang/fr.png')}}" alt="French">
      				French
      			</a>
      		</li>
      		<li>
      			<a href="#" title="Polish">
      				<img src="{{asset('assets/admin_kit/theme/images/lang/pl.png')}}" alt="Polish">
      				Polish
      			</a>
      		</li>
		</ul>
	</li>

	<li class="account">
		<a data-toggle="dropdown" href="#" class="glyphicons logout lock"><span class="hidden-phone text">Juampa</span><i></i></a>
		<ul class="dropdown-menu pull-right">
			<li><a href="#" class="glyphicons cogwheel">Configuracion<i></i></a></li>
			<li class="highlight profile">
				<span>
					<span class="heading">
						Perfil
					<a href="#" class="pull-right">editar</a></span>
					<span class="img"></span>
					<span class="details">
						<a href="#">Juampa</a>
						juanpablososa@gmail.com
					</span>
					<span class="clearfix"></span>
				</span>
			</li>
			<li>
				<span>
					<a class="btn btn-default btn-mini pull-right" href="{{ URL::to('users/logout') }}">Salir</a>
				</span>
			</li>
		</ul>
	</li>
</ul>


