

			<!-- Scrollable menu wrapper with Maximum height -->
			<div class="slim-scroll" data-scroll-height="800px">

			<!-- Sidebar Profile -->
			<span class="profile">
				<a class="img" href="my_account.html?lang=en&amp;style=style-dark">
					<img src="{{asset('assets/admin_kit/theme/images/mrawesome.jpg')}}" alt="Mr. Awesome" /></a>
				<span>
					<strong>Bienvenido</strong>
					<a href="#" class="glyphicons right_arrow">juampa <i></i></a>
				</span>
			</span>
			<!-- // Sidebar Profile END -->

			<!-- Sidebar Mini Stats -->
			<div id="notif">
				<ul>
					<li><a href="#" class="glyphicons keys" title="156 Accesos"><i></i>x</a></li>
					<li><a href="#" class="glyphicons sort" title="3 Categorías"><i></i>3</a></li>
					<li><a href="#" class="glyphicons tags" title="28 Tags"><i></i>28</a></li>
					<li><a href="#" class="glyphicons envelope" title="3 Emails"><i></i>3</a></li>
				</ul>
			</div>
			<!-- // Sidebar Mini Stats END -->

			<!-- Regular Size Menu -->
			<ul>
				<!-- Menu Regular Item -->
				<li class="glyphicons display active"><a href="{{ URL::to('/') }}"><i></i><span>Homepage</span></a></li>

				<!-- ACCESOS -->
				<li class="hasSubmenu glyphicons keys">
					<a data-toggle="collapse" href="#menu_components">
						<i></i><span>ACCESOS</span>
					</a>
					<ul class="collapse" id="menu_components">
						<!-- Components Submenu Regular Items -->
						<li class=""><a href="#"><span>Buscar</span></a></li>
						<li class=""><a href="#"><span>Crear</span></a></li>
						<!-- // Components Submenu Regular Items END -->
					</ul>
					<span class="count">156</span>
				</li>

				<!-- CATEGORIAS -->
				<li class="hasSubmenu glyphicons sort">
					<a data-toggle="collapse" href="index.html?lang=en&amp;style=style-dark#menu_categorias"><i></i><span>CATEGORIAS</span></a>
					<ul class="collapse" id="menu_categorias">
						<li class=""><a href="#"><span>Listar</span></a></li>
						<li class=""><a href="#"><span>Crear</span></a></li>
					</ul>
					<span class="count">3</span>
				</li>

				<!-- TAGS -->
				<li class="hasSubmenu glyphicons tags">
					<a data-toggle="collapse" href="index.html?lang=en&amp;style=style-dark#menu_tags"><i></i><span>TAGS</span></a>
					<ul class="collapse" id="menu_tags">
						<li class=""><a href="#"><span>Listar</span></a></li>
						<li class=""><a href="#"><span>Crear</span></a></li>
					</ul>
					<span class="count">28</span>
				</li>

				<!-- EMAILS -->
				<li class="hasSubmenu glyphicons envelope">
					<a data-toggle="collapse" href="#menu_emails"><i></i><span>EMAILS</span></a>
					<ul class="collapse" id="menu_emails">
						<li class=""><a href="#"><span>Listar</span></a></li>
						<li class=""><a href="#"><span>Crear</span></a></li>
					</ul>
					<span class="count">3</span>
				</li>
			</ul>


			<!-- Larger Menu Style -->
			<div class="clearfix"></div>
			<!-- // Larger Menu Style END -->

			<!-- Menu Position Change -->
			<div class="separator top uniformjs menu_js hidden-phone">
				<div class="innerLR">
					<label for="toggle-menu-position" class="checkbox">
						<input type="checkbox" class="checkbox" id="toggle-menu-position" />
						right menu
					</label>
				</div>
			</div>
			<!-- // Menu Position Change END -->


			</div>
			<!-- // Scrollable Menu wrapper with Maximum Height END -->

