@extends('layouts.default')

@section('title', 'Dashboard V2')

@push('css')
	<link href="/assets/plugins/nvd3/nvd3.min.css" rel="stylesheet" />
	<link href="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
	<link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<link href="/assets/css/default/style.min.css" rel="stylesheet" />
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
	<h1 class="page-header">Dashboard <small>Informações de paciete e grupo de risco...</small></h1>
	<!-- end page-header -->
	<!-- begin row -->
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-green">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">TAXA DE OCUPAÇÃO</div>
					<div class="stats-number">70%</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 50.1%;"></div>
					</div>
					<div class="stats-desc">Aumento de no mês (50.1%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-blue">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">RENDA MENSAL</div>
					<div class="stats-number">180,200</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 40.5%;"></div>
					</div>
					<div class="stats-desc">Aumento de no mês (40.5%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-purple">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">CONSULTAS REALIZADAS NESSE MÊS</div>
					<div class="stats-number">7,842,900</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 70.1%;"></div>
					</div>
					<div class="stats-desc">Aumento de no mês (70.1%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-black">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">CONSULTAS MARCADAS</div>
					<div class="stats-number">3,988</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 54.9%;"></div>
					</div>
					<div class="stats-desc">Aumento de no mês (54.9%)</div>
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
						Mapa de pacientes com doenças Crônica
						<small></small>
					</h4>
					<div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 260px;"></div>
				</div>
				<div class="widget-chart-sidebar bg-black-darker">
					<div class="chart-number">
						1,225,729
						<small>Pacientes</small>
					</div>
					<div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
					<ul class="chart-legend f-s-11">
						<li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>Idoso</span></li>
						<li><i class="fa fa-circle fa-fw text-success f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Pessoas de meia idade</span></li>
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
						Paciente por região
					</h4>
				</div>
				<div id="visitors-map" class="bg-black" style="height: 160px;"></div>
				<div class="list-group">
					<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
						1. Recife
						<span class="badge f-w-500 bg-gradient-green f-s-10">20.95%</span>
					</a> 
					<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
						2. Olinda
						<span class="badge f-w-500 bg-gradient-blue f-s-10">16.12%</span>
					</a>
					<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
						3. Paulista
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
			<h4 class="panel-title">Dados dos paciente</h4>
		</div>
		<!-- end panel-heading -->
		
		<!------------------------------------- #modal-message ---------------------------------------------->
		<div class="modal modal-message fade" id="modal-message">
				<div class="modal-dialog">
					<div class="modal-content">
						
						<div class="modal-body  text-center">
						<img src="/assets/img/user/user-13.png" class="img-rounded height-30" />
							<br/>
							<br/>
							<h4 class="modal-title">043c00e6c7ff021e8cc4d394d3264cb5</h4>
							
							<p>Última consulta: 4 semanas atrás</p>
							<p>27 anos</p>
							<p>Plano de saúde: Premium</p>
							<p>Profissão: Desenvolvedor</p>
							<p>Situação: Paciente saudável</p>
							<p>Solteiro</p>
							<p>Do you want to turn on location services so GPS can use your location ?</p>
							<div class="row">
								<div class="col-12">
									<img src="/assets/img/user/grafico-usuario.png" class="img-rounded height-300"/>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
						</div>
					</div>
				</div>
			</div>
		<!--------------------------------------------- #modal-alert ---------------------------------------->
		<!-- begin panel-body -->
		<div class="panel-body">
			<table id="data-table-default" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th width="1%"></th>
						<th width="1%" data-orderable="false"></th>
						<th class="text-nowrap" data-orderable="false">hash do pacinte</th>
						<th class="text-nowrap">data de nascimento</th>
						<th class="text-nowrap"data-orderable="false">Plano de saúde</th>
						<th class="text-nowrap">Última consulta</th>
						<th class="text-nowrap" data-orderable="false"></th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td width="1%" class="f-s-600 text-inverse">1</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="even gradeC">
						<td class="f-s-600 text-inverse">2</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>20/06/1966</td>
						<td>Premium</td>
						<td>3 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="odd gradeA">
						<td class="f-s-600 text-inverse">3</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>22/04/1966</td>
						<td>Basic</td>
						<td>1 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="even gradeA">
						<td class="f-s-600 text-inverse">4</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/06/1986</td>
						<td>Medium</td>
						<td>2 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="odd gradeA">
						<td class="f-s-600 text-inverse">5</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>30/06/1976</td>
						<td>Basic</td>
						<td>1 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="even gradeA">
						<td class="f-s-600 text-inverse">6</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1996</td>
						<td>basic</td>
						<td>9 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">7</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>22/12/1926</td>
						<td>Premium</td>
						<td>1 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">8</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>18/07/1936</td>
						<td>Basic</td>
						<td>2 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">9</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>24/04/1966</td>
						<td>Medium</td>
						<td>2 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">10</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">11</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">12</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">13</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">14</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">15</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">16</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">17</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">18</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">19</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">20</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">21</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
					</tr>
					<tr class="gradeA">
						<td class="f-s-600 text-inverse">22</td>
						<td width="1%" class="with-img"><img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" /></td>
						<td>043c00e6c7ff021e8cc4d394d3264cb5</td>
						<td>12/04/1966</td>
						<td>Premium</td>
						<td>4 semana atrás</td>
						<td class="text-center"><a href="#modal-message" class="btn btn-sm btn-lime" data-toggle="modal">Ver detalhes</a></td>
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
				<div class="stats-icon"><i class="fa fa-users"></i></div>
				<div class="stats-info">
					<h4>PACIENTES GRAVES</h4>
					<p>1,291,922</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">Ver detalhes <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-orange">
				<div class="stats-icon"><i class="fa fa-users"></i></div>
				<div class="stats-info">
					<h4>PACIENTES CRÔNICOS</h4>
					<p>20.444</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">Ver detalhes <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-green">
				<div class="stats-icon"><i class="fa fa-users"></i></div>
				<div class="stats-info">
					<h4>PACIENTES SAUDAVEIS</h4>
					<p>1,291,922</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">Ver detalhes <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-black-lighter">
				<div class="stats-icon"><i class="fa fa-clock"></i></div>
				<div class="stats-info">
					<h4>TEMPO MÉDIO POR CONSULTA</h4>
					<p>00:12:23</p>	
				</div>
				<div class="stats-link">
					<a href="javascript:;">Ver detalhes <i class="fa fa-arrow-alt-circle-right"></i></a>
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
					<h4 class="panel-title">Fluxo de consulta por dia</h4>
				</div>
				<div class="panel-body">
					<div id="nv-bar-chart" class="height-sm"></div>
				</div>
			</div>
			<!-- end panel -->
	</div>
	<div class="col-4">
			<!-- begin panel -->
			<div class="panel panel-inverse" >
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Atendimentos mais frequentes</h4>
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
									<td><label class="label label-lime">Cardiologia</label></td>
									<td>13,203 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
									
								</tr>
								<tr>
									<td><label class="label label-warning">Dermatologia</label></td>
									<td>28.2%</td>
									
								</tr>
								<tr>
									<td><label class="label label-success">Ortopedia</label></td>
									<td>1,230,030</td>
									
								</tr>
								<tr>
									<td><label class="label label-primary">Pediatria</label></td>
									<td>00:03:45</td>
									
								</tr>
								<tr>
									<td><label class="label label-default">Psiquiatria</label></td>
									<td>40.5%</td>
									
								</tr>
								<tr>
									<td><label class="label label-inverse">Obstetrícia</label></td>
									<td>73.4%</td>
									
								</tr>
								<tr>
									<td><label class="label label-success">Ginecologia </label></td>
									<td>73.4%</td>									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end panel -->
	</div><!-- end row -->
	</div><!-- end row -->
	<!-- begin row -->
	<div class="row">
	<!-- begin col-6 -->
	<div class="col-12">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="flot-chart-1">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Gráfico de cirugias  </h4>
				</div>
				<div class="panel-body">
					<p>
					Cirugias diárias em comparação com ao dia anterior.
					</p>
					<div id="basic-chart" class="height-sm"></div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-12 -->
	</div>
	<!-- end row -->
	</div>
	<!-- end row -->
	
@endsection



@push('scripts')
	<script src="/assets/plugins/flot/dom-tools.js"></script>
    <script src="/assets/plugins/flot/EventEmitter.js"></script>
	<script src="/assets/plugins/flot/flot.js"></script>
	<script src="/assets/plugins/flot/flot.time.js"></script>
	<script src="/assets/plugins/flot/flot.pie.js"></script>
	<script src="/assets/plugins/flot/flot.stack.js"></script>
	<script src="/assets/plugins/flot/flot.categories.js"></script>
	<script src="/assets/js/demo/chart-flot.demo.js"></script>
	<script>
		$(document).ready(function() {
			Chart.init();
		});
	</script>
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