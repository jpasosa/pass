@extends('layout')



@section('content')

<!-- Menúes cuadrados -->
<div class="row-fluid row-merge">
	<div class="span6">
	<!-- Inner -->
		<div class="innerAll">
			<!-- Row -->
			<div class="row-fluid">
				<div class="span4">
					<a href="#" class="widget-stats widget-stats-2">
						<span class="sparkline"></span>
						<span class="txt"><strong>ACCESOS</strong></span>
						<div class="clearfix"></div>
					</a>
				</div>
				<div class="span4">
					<a href="#" class="widget-stats widget-stats-2 widget-stats-3">
						<span class="sparkline success"></span>
						<span class="txt"> <strong>CATEGORIAS</strong></span>
						<div class="clearfix"></div>
					</a>
				</div>
				<div class="span4">
					<a href="#" class="widget-stats widget-stats-2 widget-stats-3">
						<span class="sparkline danger"></span>
						<span class="txt"> <strong>TAGS</strong></span>
						<div class="clearfix"></div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="span6">
		<div class="innerAll">
			<div class="row-fluid">
				<div class="span3">
					<a href="index.html?lang=en&amp;style=style-dark" class="widget-stats widget-stats-2 widget-stats-easy-pie">
						<div data-percent="75" class="easy-pie">:)</div>
						<span class="txt"><strong>EMAILS</strong></span>
						<div class="clearfix"></div>
					</a>
				</div>
				<div class="span3">
					<a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="widget-stats widget-stats-2 widget-stats-easy-pie txt-single">
						<div data-percent="85" class="easy-pie danger">:)</div>
						<span class="txt"><strong>GMAIL EMAIL</strong></span>
						<div class="clearfix"></div>
					</a>
				</div>
				<div class="span3">
					<a href="http://mxtoolbox.com/SuperTool.aspx?action=blacklist%3a190.210.162.55&run=toolpage" target="_blank" class="widget-stats widget-stats-2 widget-stats-easy-pie txt-single">
						<div data-percent="90" class="easy-pie success">:)</div>
						<span class="txt"><strong>VPS BLACKLIST</strong></span>
						<div class="clearfix"></div>
					</a>
				</div>
				<div class="span3">
					<a href="/users/logout" class="widget-stats widget-stats-2 widget-stats-easy-pie">
						<div data-percent="23" class="easy-pie inverse">:)</div>
						<span class="txt"><strong>SALIR</strong></span>
						<div class="clearfix"></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>



<h3 class="heading-mosaic">Overview</h3>
<div class="innerLR">
	<div class="widget widget-tabs widget-quick hidden-print">
		<div class="widget-head">
			<ul>
				<li class="active"><a href="#accesosTab" data-toggle="tab" class="glyphicons keys"><i></i>Accesos</a></li>
				<li><a href="#categoriasTab" data-toggle="tab" class="glyphicons sort"><i></i>Categorias</a></li>
				<li><a href="#tagsTab" data-toggle="tab" class="glyphicons tags"><i></i>Tags</a></li>
				<li><a href="#emailsTab" data-toggle="tab" class="glyphicons envelope"><i></i>Emails</a></li>
			</ul>
		</div>
		<div class="widget-body">
			<div class="tab-content">
				<div class="tab-pane active" id="accesosTab">
					<h3></h3>
					<div class="innerLR">
						<div class="widget">
							<div class="widget-head">
								<h4 class="heading">Últimos Accesos Ingresados</h4>
							</div>
							<div class="widget-body">
								<table class="table table-striped table-bordered table-condensed">
									<thead>
										<tr>
											<th>ID</th>
											<th>TITULO</th>
											<th>URL</th>
											<th>USUARIO</th>
											<th>CLAVE</th>
										</tr>
									</thead>

									<tbody>
										<!-- Table row -->
										<tr class="gradeX">
											<td>1</td>
											<td>Internet Explorer 4.0</td>
											<td>Win 95+</td>
											<td class="center">4</td>
											<td class="center">X</td>
										</tr>
										<tr class="gradeC">
											<td>2</td>
											<td>Internet Explorer 5.0</td>
											<td>Win 95+</td>
											<td class="center">5</td>
											<td class="center">C</td>
										</tr>
										<tr class="gradeA">
											<td>3</td>
											<td>Internet Explorer 5.5</td>
											<td>Win 95+</td>
											<td class="center">5.5</td>
											<td class="center">A</td>
										</tr>
										<tr class="gradeA">
											<td>4</td>
											<td>Internet Explorer 6</td>
											<td>Win 98+</td>
											<td class="center">6</td>
											<td class="center">A</td>
										</tr>
										<tr class="gradeC">
											<td>5</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td class="center">-</td>
											<td class="center">C</td>
										</tr>
										<tr class="gradeC">
											<td>6</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td class="center">-</td>
											<td class="center">C</td>
										</tr>
										<tr class="gradeU">
											<td>7</td>
											<td>All others</td>
											<td>-</td>
											<td class="center">-</td>
											<td class="center">U</td>
										</tr>
									</tbody>
									<!-- // Table body END -->
								</table>
								<!-- // Table END -->
							</div>
						</div>
						<!-- // Widget END -->
					</div>
				</div>
				<!-- FIN ACCESOS tab -->



				<!-- CATEGORIAS tab -->
				<div class="tab-pane" id="categoriasTab">
					<h3></h3>
					<div class="innerLR">
						<!-- Widget -->
						<div class="widget">
							<!-- Widget heading -->
							<div class="widget-head">
								<h4 class="heading">Últimas Categorías Ingresadas</h4>
							</div>
							<!-- // Widget heading END -->
							<div class="widget-body">
								<!-- Table -->
								<table class="table table-striped table-bordered table-condensed">

									<!-- Table heading -->
									<thead>
										<tr>
											<th>ID</th>
											<th>TITULO</th>
											<th>URL</th>
											<th>USUARIO</th>
											<th>CLAVE</th>
										</tr>
									</thead>
									<!-- // Table heading END -->

									<!-- Table body -->
									<tbody>
										<!-- Table row -->
										<tr class="gradeX">
											<td>1</td>
											<td>Internet Explorer 4.0</td>
											<td>Win 95+</td>
											<td class="center">4</td>
											<td class="center">X</td>
										</tr>
										<tr class="gradeC">
											<td>2</td>
											<td>Internet Explorer 5.0</td>
											<td>Win 95+</td>
											<td class="center">5</td>
											<td class="center">C</td>
										</tr>
										<tr class="gradeA">
											<td>3</td>
											<td>Internet Explorer 5.5</td>
											<td>Win 95+</td>
											<td class="center">5.5</td>
											<td class="center">A</td>
										</tr>
										<tr class="gradeA">
											<td>4</td>
											<td>Internet Explorer 6</td>
											<td>Win 98+</td>
											<td class="center">6</td>
											<td class="center">A</td>
										</tr>
										<tr class="gradeC">
											<td>5</td>
											<td>IE Mobile</td>
											<td>Windows Mobile 6</td>
											<td class="center">-</td>
											<td class="center">C</td>
										</tr>
										<tr class="gradeC">
											<td>6</td>
											<td>PSP browser</td>
											<td>PSP</td>
											<td class="center">-</td>
											<td class="center">C</td>
										</tr>
										<tr class="gradeU">
											<td>7</td>
											<td>All others</td>
											<td>-</td>
											<td class="center">-</td>
											<td class="center">U</td>
										</tr>
									</tbody>
									<!-- // Table body END -->
								</table>
								<!-- // Table END -->
							</div>
						</div>
						<!-- // Widget END -->
					</div>

				</div>
				<!-- FIN CATEGORIAS tab -->


				<!-- TAGS tab -->
				<div class="tab-pane" id="tagsTab">


				</div>
				<!-- FIN TAGS tab -->


				<!-- EMAILS tab -->
				<div class="tab-pane" id="emailsTab">


				</div>
				<!-- FIN EMAILS tab -->


			</div>
		</div>
	</div>
	<!-- // Quick Tabs Widget END -->

</div>



<!-- HISTORIAL DE ACTIVIDADES -->
<div class="row-fluid border-top">
	<div class="span6">
		<div class="innerAll">
			<div class="widget widget-4 widget-tabs-icons-only widget-timeline margin-bottom-none">
				<div class="widget-head">
					<h4 class="heading">Recent Activity <span>timeline</span></h4>

				</div>
				<div class="widget-body">
					<div class="tab-content">
						<div class="tab-pane" id="filterUsersTab">
							<ul class="list-timeline">
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon user_add"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">John Doe</a> registered at <a href="index.html?lang=en&amp;style=style-dark">John Doe's</a> suggestion.</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon user_add"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Darius Jackson</a> registered at <a href="index.html?lang=en&amp;style=style-dark">Jane Doe's</a> suggestion.</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon user_add"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">John Doe</a> registered at <a href="index.html?lang=en&amp;style=style-dark">Melisa Ragae's</a> suggestion.</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon user_add"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> registered at <a href="index.html?lang=en&amp;style=style-dark">John Doe's</a> suggestion.</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon user_add"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Jane Doe</a> registered at <a href="index.html?lang=en&amp;style=style-dark">John Doe's</a> suggestion.</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon user_add"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Darius Jackson</a> registered at <a href="index.html?lang=en&amp;style=style-dark">Melisa Ragae's</a> suggestion.</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon user_add"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Jane Doe</a> registered at <a href="index.html?lang=en&amp;style=style-dark">Jane Doe's</a> suggestion.</span>
									<div class="clearfix"></div>
								</li>
							</ul>
							<a href="index.html?lang=en&amp;style=style-dark" class="btn btn-primary view-all">View all</a>
						</div>

						<div class="tab-pane active" id="filterOrdersTab">
							<ul class="list-timeline">
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon shopping_cart"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2301</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon shopping_cart"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2302</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon shopping_cart"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2303</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon shopping_cart"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2304</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon shopping_cart"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2305</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon shopping_cart"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">John Doe</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2306</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon shopping_cart"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2307</a>)</span>
									<div class="clearfix"></div>
								</li>
							</ul>
							<a href="index.html?lang=en&amp;style=style-dark" class="btn btn-primary view-all">View all</a>
						</div>
						<div class="tab-pane" id="filterMessagesTab">
							<ul class="list-timeline">
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon envelope"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2301</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon envelope"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2302</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon envelope"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2303</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon envelope"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2304</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon envelope"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2305</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon envelope"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2306</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon envelope"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Melisa Ragae</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2307</a>)</span>
									<div class="clearfix"></div>
								</li>
							</ul>
							<a href="index.html?lang=en&amp;style=style-dark" class="btn btn-primary view-all">View all</a>
						</div>


						<div class="tab-pane" id="filterLinksTab">
							<ul class="list-timeline">
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon link"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Melisa Ragae</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2301</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon link"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">John Doe</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2302</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon link"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2303</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon link"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2304</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon link"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Darius Jackson</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2305</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon link"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Melisa Ragae</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2306</a>)</span>
									<div class="clearfix"></div>
								</li>
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon link"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2307</a>)</span>
									<div class="clearfix"></div>
								</li>
							</ul>
							<a href="index.html?lang=en&amp;style=style-dark" class="btn btn-primary view-all">View all</a>
						</div>
						<!-- // Filter Links Tab END -->



						<!-- Filter Photos Tab -->
						<div class="tab-pane" id="filterPhotosTab">
							<ul class="list-timeline">

																<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon camera"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2301</a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
																<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon camera"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2302</a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
																<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon camera"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Martin Glades</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2303</a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
																<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon camera"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2304</a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
																<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon camera"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">Jane Doe</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2305</a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
																<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon camera"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">John Doe</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2306</a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->
																<!-- Activity item -->
								<li>
									<span class="date">21/03</span>
									<span class="glyphicons activity-icon camera"><i></i></span>
									<span class="ellipsis"><a href="index.html?lang=en&amp;style=style-dark">John Doe</a> bought 10 items worth of &euro;50 (<a href="index.html?lang=en&amp;style=style-dark">order #2307</a>)</span>
									<div class="clearfix"></div>
								</li>
								<!-- // Activity item END -->

							</ul>
							<a href="index.html?lang=en&amp;style=style-dark" class="btn btn-primary view-all">View all</a>
						</div>
						<!-- // Filter Photos Tab END -->

					</div>
				</div>
			</div>
			<!-- // Recent Activity END -->

		</div>
		<!-- // spacing END -->

	</div>
	<!-- // Column END -->

	<!-- Column -->
	<div class="span6">


	<!-- 6/12 Column -->

		<!-- Upcoming Events Widget -->
		<div class="widget widget-4 margin-bottom-none">

			<!-- Widget Heading -->
			<div class="widget-head">
				<h4 class="heading"></h4>
				<span class="pull-right"><a href="https://www.google.com/calendar/render?tab=mc#g" target="_blank" class="btn btn-small btn-default">Calendario Gmail</a></span>
				<div class="clearfix"></div>
			</div>
			<!-- // Widget Heading END -->

			<div class="widget-body">

				<!-- Datepicker Inline -->
				<div class="datepicker-inline" id="datepicker-inline"></div>


			</div>
		</div>
		<!-- // Upcoming Events Widget END -->

	<!-- // 6/12 Column END -->

	<!-- 6/12 Column -->
	<div class="span6"></div>
	<!-- // 6/12 Column END -->


	</div>
	<!-- // Column END -->

</div>
<!-- // Row END -->


<div class="row-fluid row-merge"></div>


@stop


