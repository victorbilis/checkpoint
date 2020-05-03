@extends('layouts.default')

@section('title', 'Listagem Pacientes')

@push('css')
	<link href="/assets/plugins/datatables/css/dataTables.bootstrap4.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables/css/responsive/responsive.bootstrap4.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
		<li class="breadcrumb-item active">Managed Tables</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Managed Tables <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	<!------------------------------------- #modal-message ---------------------------------------------->
	<div class="modal modal-message fade" id="modal-message">
				<div class="modal-dialog">
					<div class="modal-content">
						
						<div class="modal-body  text-center">
							<img src="/assets/img/user/user-icon-vector.png" class="img-rounded height-30" />
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
			<h4 class="panel-title">Lista de pacientes</h4>
		</div>
		<!-- end panel-heading -->
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
	<!-- end panel -->
@endsection

@push('scripts')
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
@endpush