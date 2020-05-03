@extends('layouts.default')

@section('title', 'Listagem Médicos')

@push('css')
	<link href="/assets/plugins/datatables/css/dataTables.bootstrap4.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables/css/autoFill/autoFill.bootstrap4.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables/css/responsive/responsive.bootstrap4.css" rel="stylesheet" />
@endpush

@section('content')
	
	<!-- begin page-header -->
	<h1 class="page-header">Listagem do médicos</h1>
	<!-- end page-header -->
	
	<!-- begin row -->
	<div class="row">
		
		<!-- begin col-10 -->
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
					<h4 class="panel-title">Dados médicos</h4>
				</div>
				
				<!-- begin panel-body -->
				<div class="panel-body">
					<table id="data-table-autofill" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="1%"></th>
								<th width="1%" data-orderable="false"></th>
								<th class="text-nowrap">Nome</th>
								<th class="text-nowrap">Especialidade</th>
								<th class="text-nowrap" data-orderable="false">Sala de atendimento</th>
								<th class="text-nowrap" data-orderable="false">Turno</th>
								<th class="text-nowrap" data-orderable="false">CRM</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td width="1%" class="f-s-600 text-inverse">1</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
								<td> Gustavo Henrique</td>
								<td>Cardiologia</td>
								<td>9 no terceiro andar</td>
								<td>Tarde</td>
								<td>143188</td>
							</tr>
							<tr class="even gradeC">
								<td width="1%" class="f-s-600 text-inverse">2</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
								<td>Maria Henrique</td>
								<td>Pediatria</td>
								<td>1 no primeiro andar</td>
								<td>manha</td>
								<td>456879</td>
							</tr>
							<tr class="odd gradeA">
								<td width="1%" class="f-s-600 text-inverse">3</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
								<td>Jonas Pereira</td>
								<td>Cardiologia</td>
								<td>29 no terceiro andar</td>
								<td>Tarde</td>
								<td>789541</td>
							</tr>
							<tr class="even gradeA">
								<td width="1%" class="f-s-600 text-inverse">4</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>1 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="odd gradeA">
								<td width="1%" class="f-s-600 text-inverse">5</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
								<td>Pedro Santos</td>
								<td>Ginecologia</td>
								<td>3 no primeiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="even gradeA">
								<td width="1%" class="f-s-600 text-inverse">6</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">7</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
								<td>Luis Gustavo</td>
								<td>Psiquiatria</td>
								<td>22 no segundo andar</td>
								<td>Tarde</td>
								<td>187954</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">8</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
								<td>Maria Carla</td>
								<td>Ginecologia</td>
								<td>15 no terceiro andar</td>
								<td>Manhã</td>
								<td>895647</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">9</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
								<td>Larissa Silva</td>
								<td>Psiquiatria</td>
								<td>4 no segundo andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">10</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
								<td>Joana Moraes</td>
								<td>Obstetrícia</td>
								<td>7 no terceiro andar</td>
								<td>Manha</td>
								<td>654987</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">11</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">12</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">13</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">14</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">15</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">16</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">17</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">18</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">19</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">20</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">21</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="f-s-600 text-inverse">22</td>
								<td width="1%" class="with-img"><img src="/assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
								<td>Paulo Henrique</td>
								<td>Dermatologia</td>
								<td>39 no terceiro andar</td>
								<td>Noite</td>
								<td>143188</td>
							</tr>								
						</tbody>
					</table>
				</div>
				<!-- end panel-body -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-10 -->
	</div>
	<!-- end row -->
@endsection

@push('scripts')
	<script src="/assets/plugins/datatables/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/datatables/js/dataTables.bootstrap4.js"></script>
	<script src="/assets/plugins/datatables/js/autoFill/dataTables.autoFill.js"></script>
	<script src="/assets/plugins/datatables/js/autoFill/autoFill.bootstrap4.js"></script>
	<script src="/assets/plugins/datatables/js/responsive/dataTables.responsive.js"></script>
	<script src="/assets/plugins/datatables/js/responsive/responsive.bootstrap4.js"></script>
	<script src="/assets/js/demo/table-manage-autofill.demo.js"></script>
	<script>
		$(document).ready(function() {
			TableManageAutofill.init();
		});
	</script>
@endpush
