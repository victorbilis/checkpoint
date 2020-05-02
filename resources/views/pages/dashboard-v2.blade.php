@extends('layouts.default')

@section('title', 'Dashboard V2')

@push('css')
	<link href="/assets/plugins/nvd3/nvd3.min.css" rel="stylesheet" />
	<link href="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
	<link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Dashboard v2</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Dashboard v2 <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	<!-- begin row -->
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-green">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">TODAY'S VISITS</div>
					<div class="stats-number">7,842,900</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 70.1%;"></div>
					</div>
					<div class="stats-desc">Better than last week (70.1%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-blue">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">TODAY'S PROFIT</div>
					<div class="stats-number">180,200</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 40.5%;"></div>
					</div>
					<div class="stats-desc">Better than last week (40.5%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-purple">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">NEW ORDERS</div>
					<div class="stats-number">38,900</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 76.3%;"></div>
					</div>
					<div class="stats-desc">Better than last week (76.3%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-black">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">NEW COMMENTS</div>
					<div class="stats-number">3,988</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 54.9%;"></div>
					</div>
					<div class="stats-desc">Better than last week (54.9%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
	</div>
	<!-- end row -->
	
	<!-- begin row -->
	<div class="row">
		<!-- begin col-8 -->
		<div class="col-lg-8">
			<div class="widget-chart with-sidebar bg-black">
				<div class="widget-chart-content">
					<h4 class="chart-title">
						Visitors Analytics
						<small>Where do our visitors come from</small>
					</h4>
					<div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 260px;"></div>
				</div>
				<div class="widget-chart-sidebar bg-black-darker">
					<div class="chart-number">
						1,225,729
						<small>Total visitors</small>
					</div>
					<div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
					<ul class="chart-legend f-s-11">
						<li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>New Visitors</span></li>
						<li><i class="fa fa-circle fa-fw text-success f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Return Visitors</span></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end col-8 -->
		<!-- begin col-4 -->
		<div class="col-lg-4">
			<div class="panel panel-inverse" data-sortable-id="index-1">
				<div class="panel-heading">
					<h4 class="panel-title">
						Visitors Origin
					</h4>
				</div>
				<div id="visitors-map" class="bg-black" style="height: 179px;"></div>
				<div class="list-group">
					<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
						1. United State 
						<span class="badge f-w-500 bg-gradient-green f-s-10">20.95%</span>
					</a> 
					<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
						2. India
						<span class="badge f-w-500 bg-gradient-blue f-s-10">16.12%</span>
					</a>
					<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
						3. Mongolia
						<span class="badge f-w-500 bg-gradient-grey f-s-10">14.99%</span>
					</a>
				</div>
			</div>
		</div>
		<!-- end col-4 -->
	</div>
	<!-- end row -->
	<!-- begin row -->
	<div class="row">
		<!-- begin col-12-->
		<div class="col-lg-12">
			<!-- begin panel -->
	<div class="panel panel-inverse">
		<!-- begin panel-heading -->
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
			<h4 class="panel-title">Data asda - Default</h4>
		</div>
		<!-- end panel-heading -->
		<!-- begin panel-body -->
		<div class="panel-body">
			<table id="data-table-default" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th width="1%"></th>
						<th width="1%" data-orderable="false"></th>
						<th class="text-nowrap">Rendering engine</th>
						<th class="text-nowrap">Browser</th>
						<th class="text-nowrap">Platform(s)</th>
						<th class="text-nowrap">Engine version</th>
						<th class="text-nowrap">CSS grade</th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td width="1%" class="f-s-600 text-inverse">1</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
						<td>Trident</td>
						<td>Internet Explorer 4.0</td>
						<td>Win 95+</td>
						<td>4</td>
						<td>X</td>
					</tr>
					<tr class="even gradeC">
						<td class="f-s-600 text-inverse">2</td>
						<td class="with-img"><img src="/assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
						<td>Trident</td>
						<td>Internet Explorer 5.0</td>
						<td>Win 95+</td>
						<td>5</td>
						<td>C</td>
					</tr>
					<tr class="odd gradeA">
						<td class="f-s-600 text-inverse">3</td>
						<td class="with-img"><img src="/assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
						<td>Trident</td>
						<td>Internet Explorer 5.5</td>
						<td>Win 95+</td>
						<td>5.5</td>
						<td>A</td>
					</tr>
					<tr class="even gradeA">
						<td class="f-s-600 text-inverse">4</td>
						<td class="with-img"><img src="/assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
						<td>Trident</td>
						<td>Internet Explorer 6</td>
						<td>Win 98+</td>
						<td>6</td>
						<td>A</td>
					</tr>
					<tr class="odd gradeA">
						<td class="f-s-600 text-inverse">5</td>
						<td class="with-img"><img src="/assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
						<td>Trident</td>
						<td>Internet Explorer 7</td>
						<td>Win XP SP2+</td>
						<td>7</td>
						<td>A</td>
					</tr>
					<tr class="even gradeA">
						<td class="f-s-600 text-inverse">6</td>
						<td class="with-img"><img src="/assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
						<td>Trident</td>
						<td>AOL browser (AOL desktop)</td>
						<td>Win XP</td>
						<td>6</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">7</td>
						<td class="with-img"><img src="/assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Firefox 1.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">8</td>
						<td class="with-img"><img src="/assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">9</td>
						<td class="with-img"><img src="/assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Firefox 2.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">10</td>
						<td class="with-img"><img src="/assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Firefox 3.0</td>
						<td>Win 2k+ / OSX.3+</td>
						<td>1.9</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">11</td>
						<td class="with-img"><img src="/assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Camino 1.0</td>
						<td>OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">12</td>
						<td class="with-img"><img src="/assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Camino 1.5</td>
						<td>OSX.3+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">13</td>
						<td class="with-img"><img src="/assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Netscape 7.2</td>
						<td>Win 95+ / Mac OS 8.6-9.2</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">14</td>
						<td class="with-img"><img src="/assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Netscape Browser 8</td>
						<td>Win 98SE+</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">15</td>
						<td class="with-img"><img src="/assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Netscape Navigator 9</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">16</td>
						<td class="with-img"><img src="/assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">17</td>
						<td class="with-img"><img src="/assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.1</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.1</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">18</td>
						<td class="with-img"><img src="/assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.2</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.2</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">19</td>
						<td class="with-img"><img src="/assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.3</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.3</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">20</td>
						<td class="with-img"><img src="/assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.4</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.4</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">21</td>
						<td class="with-img"><img src="/assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.5</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.5</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">22</td>
						<td class="with-img"><img src="/assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.6</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.6</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">23</td>
						<td class="with-img"><img src="/assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.7</td>
						<td>Win 98+ / OSX.1+</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">24</td>
						<td class="with-img"><img src="/assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Mozilla 1.8</td>
						<td>Win 98+ / OSX.1+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">25</td>
						<td class="with-img"><img src="/assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Seamonkey 1.1</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">26</td>
						<td class="with-img"><img src="/assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
						<td>Gecko</td>
						<td>Epiphany 2.20</td>
						<td>Gnome</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">27</td>
						<td class="with-img"><img src="/assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
						<td>Webkit</td>
						<td>Safari 1.2</td>
						<td>OSX.3</td>
						<td>125.5</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">28</td>
						<td class="with-img"><img src="/assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
						<td>Webkit</td>
						<td>Safari 1.3</td>
						<td>OSX.3</td>
						<td>312.8</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">29</td>
						<td class="with-img"><img src="/assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
						<td>Webkit</td>
						<td>Safari 2.0</td>
						<td>OSX.4+</td>
						<td>419.3</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">30</td>
						<td class="with-img"><img src="/assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
						<td>Webkit</td>
						<td>Safari 3.0</td>
						<td>OSX.4+</td>
						<td>522.1</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">31</td>
						<td class="with-img"><img src="/assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
						<td>Webkit</td>
						<td>OmniWeb 5.5da</td>
						<td>OSX.4+</td>
						<td>420</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">32</td>
						<td class="with-img"><img src="/assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
						<td>Webkit</td>
						<td>iPod Touch / iPhone</td>
						<td>iPod</td>
						<td>420.1</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">33</td>
						<td class="with-img"><img src="/assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
						<td>Webkit</td>
						<td>S60</td>
						<td>S60</td>
						<td>413</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">34</td>
						<td class="with-img"><img src="/assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
						<td>Presto</td>
						<td>Opera 7.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">35</td>
						<td class="with-img"><img src="/assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
						<td>Presto</td>
						<td>Opera 7.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">36</td>
						<td class="with-img"><img src="/assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
						<td>Presto</td>
						<td>Opera 8.0</td>
						<td>Win 95+ / OSX.2+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">37</td>
						<td class="with-img"><img src="/assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
						<td>Presto</td>
						<td>Opera 8.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">38</td>
						<td class="with-img"><img src="/assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
						<td>Presto</td>
						<td>Opera 9.0</td>
						<td>Win 95+ / OSX.3+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">39</td>
						<td class="with-img"><img src="/assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
						<td>Presto</td>
						<td>Opera 9.2</td>
						<td>Win 88+ / OSX.3+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">40</td>
						<td class="with-img"><img src="/assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
						<td>Presto</td>
						<td>Opera 9.5</td>
						<td>Win 88+ / OSX.3+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">41</td>
						<td class="with-img"><img src="/assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
						<td>Presto</td>
						<td>Opera for Wii</td>
						<td>Wii</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">42</td>
						<td class="with-img"><img src="/assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
						<td>Presto</td>
						<td>Nokia N800</td>
						<td>N800</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">43</td>
						<td class="with-img"><img src="/assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
						<td>Presto</td>
						<td>Nintendo DS browser</td>
						<td>Nintendo DS</td>
						<td>8.5</td>
						<td>C/A<sup>1</sup></td>
					</tr>
					<tr class="gradeC">
						<td class="f-s-600 text-inverse">44</td>
						<td class="with-img"><img src="/assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
						<td>KHTML</td>
						<td>Konqureror 3.1</td>
						<td>KDE 3.1</td>
						<td>3.1</td>
						<td>C</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">45</td>
						<td class="with-img"><img src="/assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
						<td>KHTML</td>
						<td>Konqureror 3.3</td>
						<td>KDE 3.3</td>
						<td>3.3</td>
						<td>A</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">46</td>
						<td class="with-img"><img src="/assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
						<td>KHTML</td>
						<td>Konqureror 3.5</td>
						<td>KDE 3.5</td>
						<td>3.5</td>
						<td>A</td>
					</tr>
					<tr class="gradeX">
						<td class="f-s-600 text-inverse">47</td>
						<td class="with-img"><img src="/assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
						<td>Tasman</td>
						<td>Internet Explorer 4.5</td>
						<td>Mac OS 8-9</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr class="gradeC">
						<td class="f-s-600 text-inverse">48</td>
						<td class="with-img"><img src="/assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
						<td>Tasman</td>
						<td>Internet Explorer 5.1</td>
						<td>Mac OS 7.6-9</td>
						<td>1</td>
						<td>C</td>
					</tr>
					<tr class="gradeC">
						<td class="f-s-600 text-inverse">49</td>
						<td class="with-img"><img src="/assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
						<td>Tasman</td>
						<td>Internet Explorer 5.2</td>
						<td>Mac OS 8-X</td>
						<td>1</td>
						<td>C</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">50</td>
						<td class="with-img"><img src="/assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
						<td>Misc</td>
						<td>NetFront 3.1</td>
						<td>Embedded devices</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">51</td>
						<td class="with-img"><img src="/assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
						<td>Misc</td>
						<td>NetFront 3.4</td>
						<td>Embedded devices</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr class="gradeX">
						<td class="f-s-600 text-inverse">52</td>
						<td class="with-img"><img src="/assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
						<td>Misc</td>
						<td>Dillo 0.8</td>
						<td>Embedded devices</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr class="gradeX">
						<td class="f-s-600 text-inverse">53</td>
						<td class="with-img"><img src="/assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
						<td>Misc</td>
						<td>Links</td>
						<td>Text only</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr class="gradeX">
						<td class="f-s-600 text-inverse">54</td>
						<td class="with-img"><img src="/assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
						<td>Misc</td>
						<td>Lynx</td>
						<td>Text only</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr class="gradeC">
						<td class="f-s-600 text-inverse">55</td>
						<td class="with-img"><img src="/assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
						<td>Misc</td>
						<td>IE Mobile</td>
						<td>Windows Mobile 6</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr class="gradeC">
						<td class="f-s-600 text-inverse">57</td>
						<td class="with-img"><img src="/assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr class="gradeU">
						<td class="f-s-600 text-inverse">58</td>
						<td class="with-img"><img src="/assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
						<td>Other browsers</td>
						<td>All others</td>
						<td>-</td>
						<td>-</td>
						<td>U</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- end panel-body -->
		</div>
		<!-- end col-12 -->
		<!-- begin row -->
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-red">
				<div class="stats-icon"><i class="fa fa-desktop"></i></div>
				<div class="stats-info">
					<h4>TOTAL VISITORS</h4>
					<p>3,291,922</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-orange">
				<div class="stats-icon"><i class="fa fa-link"></i></div>
				<div class="stats-info">
					<h4>BOUNCE RATE</h4>
					<p>20.44%</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-grey-darker">
				<div class="stats-icon"><i class="fa fa-users"></i></div>
				<div class="stats-info">
					<h4>UNIQUE VISITORS</h4>
					<p>1,291,922</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-black-lighter">
				<div class="stats-icon"><i class="fa fa-clock"></i></div>
				<div class="stats-info">
					<h4>AVG TIME ON SITE</h4>
					<p>00:12:23</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
	</div>
	<!-- end row -->
	<div class="row">
	<div class="col-8">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Bar Chart</h4>
				</div>
				<div class="panel-body">
					<div id="nv-bar-chart" class="height-sm"></div>
				</div>
			</div>
			<!-- end panel -->
	</div>
	<div class="col-4">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="index-4">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Analytics Details</h4>
				</div>
				<div class="panel-body p-t-0">
					<div class="table-responsive">
						<table class="table table-valign-middle">
							<thead>
								<tr>	
									<th>Source</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><label class="label label-danger">Unique Visitor</label></td>
									<td>13,203 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
									
								</tr>
								<tr>
									<td><label class="label label-warning">Bounce Ratea</label></td>
									<td>28.2%</td>
									
								</tr>
								<tr>
									<td><label class="label label-success">Total Page Views</label></td>
									<td>1,230,030</td>
									
								</tr>
								<tr>
									<td><label class="label label-primary">Avg Time On Site</label></td>
									<td>00:03:45</td>
									
								</tr>
								<tr>
									<td><label class="label label-default">% New Visits</label></td>
									<td>40.5%</td>
									
								</tr>
								<tr>
									<td><label class="label label-inverse">Return Visitors</label></td>
									<td>73.4%</td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end panel -->
	</div>
	</div>
	</div>
	<!-- end row -->
	
@endsection



@push('scripts')
<script src="/assets/plugins/nvd3/nvd3.min.js"></script>
	<script src="/assets/js/demo/chart-d3.demo.js"></script>
	<script>
		$(document).ready(function() {
			ChartNvd3.init();
		});
	</script>
	
	<script src="/assets/plugins/datatables/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/datatables/js/dataTables.bootstrap4.js"></script>
	<script src="/assets/plugins/datatables/js/responsive/dataTables.responsive.js"></script>
	<script src="/assets/plugins/datatables/js/responsive/responsive.bootstrap4.js"></script>
	<script src="/assets/js/demo/table-manage-default.demo.js"></script>
	<script>
		$(document).ready(function() {
			TableManageDefault.init();
		});
	</script>
	<script src="/assets/plugins/nvd3/nvd3.min.js"></script>
	<script src="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
	<script src="/assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
	<script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="/assets/js/demo/dashboard-v2.js"></script>
	<script>
		$(document).ready(function() {
			DashboardV2.init();
		});
	</script>
@endpush