@extends('layouts.default')

@section('title', 'Timeline')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Extra</a></li>
		<li class="breadcrumb-item active">Timeline</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Timeline consultas<small> dados do cliente</small></h1>
	<!-- end page-header -->
	
	<!-- begin timeline -->
	<ul class="timeline">
		<li>
			<!-- begin timeline-time -->
			<div class="timeline-time">
				<span class="date">Semana passada</span>
				<span class="time">27/04/2020</span>
			</div>
			<!-- end timeline-time -->
			<!-- begin timeline-icon -->
			<div class="timeline-icon">
				<a href="javascript:;">&nbsp;</a>
			</div>
			<!-- end timeline-icon -->
			<!-- begin timeline-body -->
			<div class="timeline-body">
				<div class="timeline-header">
					<span class="userimage"><img src="../assets/img/user/user-1.jpg" alt="" /></span>
					<span class="username"><a href="javascript:;">John Smith</a> <small></small></span>
					<span class="pull-right text-muted">18 Views</span>
				</div>
				<div class="timeline-content">
					<p>
						Hospital Capital - horário total de atendimento: 2 horas 
						<br/>
						Entrada: 18:00 - Saída: 20:00
						<hr/>
						Descrição: paciente teve confulsos na noite anterior, com mal está e muita dor de cabeça
					</p>
				</div>
				<ul>
					<li>Entrada no local: 18:00
						<br/>
							- Nome atendente: Beatriz Costa
							<br/>
							- Hash atendimento: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Realizou uma consulta clínico geral: 18:30
						<br/>
							- Nome funcionario: Beatriz Costa
							<br/>
							- Ação: Clínico pediu a realização de um exame de sangue ao paciente
							<br/>
							- Hash médico: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Realizou exame de sangue: 19:00
						<br/>
							- Nome enfermeiro: Beatriz Costa
							<br/>
							- Ação: foram coletados 3 potes de sangue, para verificar do açucar e sal no sangue
							<br/>
							- Hash médico: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Saiu do hospital: 20:00
					</li>
				</ul>				
			</div>
			<!-- end timeline-body -->
		</li>
		<li>
			<!-- begin timeline-time -->
			<div class="timeline-time">
				<span class="date">Semana passada</span>
				<span class="time">15/04/2020</span>
			</div>
			<!-- end timeline-time -->
			<!-- begin timeline-icon -->
			<div class="timeline-icon">
				<a href="javascript:;">&nbsp;</a>
			</div>
			<!-- end timeline-icon -->
			<!-- begin timeline-body -->
			<div class="timeline-body">
				<div class="timeline-header">
					<span class="userimage"><img src="../assets/img/user/user-1.jpg" alt="" /></span>
					<span class="username"><a href="javascript:;">John Smith</a> <small></small></span>
					<span class="pull-right text-muted">18 Views</span>
				</div>
				<div class="timeline-content">
					<p>
						Hospital Capital - horário total de atendimento: 2 horas 
						<br/>
						Entrada: 18:00 - Saída: 20:00
						<hr/>
						Descrição: paciente teve confulsos na noite anterior, com mal está e muita dor de cabeça
					</p>
				</div>
				<ul>
					<li>Entrada no local: 18:00
						<br/>
							- Nome atendente: Beatriz Costa
							<br/>
							- Hash atendimento: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Realizou uma consulta clínico geral: 18:30
						<br/>
							- Nome funcionario: Beatriz Costa
							<br/>
							- Ação: Clínico pediu a realização de um exame de sangue ao paciente
							<br/>
							- Hash médico: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Realizou exame de sangue: 19:00
						<br/>
							- Nome enfermeiro: Beatriz Costa
							<br/>
							- Ação: foram coletados 3 potes de sangue, para verificar do açucar e sal no sangue
							<br/>
							- Hash médico: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Saiu do hospital: 20:00
					</li>
				</ul>				
			</div>
			<!-- end timeline-body -->
		</li>
		<li>
			<!-- begin timeline-time -->
			<div class="timeline-time">
				<span class="date">Semana passada</span>
				<span class="time">01/04/2020</span>
			</div>
			<!-- end timeline-time -->
			<!-- begin timeline-icon -->
			<div class="timeline-icon">
				<a href="javascript:;">&nbsp;</a>
			</div>
			<!-- end timeline-icon -->
			<!-- begin timeline-body -->
			<div class="timeline-body">
				<div class="timeline-header">
					<span class="userimage"><img src="../assets/img/user/user-1.jpg" alt="" /></span>
					<span class="username"><a href="javascript:;">John Smith</a> <small></small></span>
					<span class="pull-right text-muted">18 Views</span>
				</div>
				<div class="timeline-content">
					<p>
						Hospital Capital - horário total de atendimento: 2 horas 
						<br/>
						Entrada: 18:00 - Saída: 20:00
						<hr/>
						Descrição: paciente teve confulsos na noite anterior, com mal está e muita dor de cabeça
					</p>
				</div>
				<ul>
					<li>Entrada no local: 18:00
						<br/>
							- Nome atendente: Beatriz Costa
							<br/>
							- Hash atendimento: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Realizou uma consulta clínico geral: 18:30
						<br/>
							- Nome funcionario: Beatriz Costa
							<br/>
							- Ação: Clínico pediu a realização de um exame de sangue ao paciente
							<br/>
							- Hash médico: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Realizou exame de sangue: 19:00
						<br/>
							- Nome enfermeiro: Beatriz Costa
							<br/>
							- Ação: foram coletados 3 potes de sangue, para verificar do açucar e sal no sangue
							<br/>
							- Hash médico: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Saiu do hospital: 20:00
					</li>
				</ul>				
			</div>
			<!-- end timeline-body -->
		</li>
		<li>
			<!-- begin timeline-time -->
			<div class="timeline-time">
				<span class="date">Semana passada</span>
				<span class="time">12/03/2020</span>
			</div>
			<!-- end timeline-time -->
			<!-- begin timeline-icon -->
			<div class="timeline-icon">
				<a href="javascript:;">&nbsp;</a>
			</div>
			<!-- end timeline-icon -->
			<!-- begin timeline-body -->
			<div class="timeline-body">
				<div class="timeline-header">
					<span class="userimage"><img src="../assets/img/user/user-1.jpg" alt="" /></span>
					<span class="username"><a href="javascript:;">John Smith</a> <small></small></span>
					<span class="pull-right text-muted">18 Views</span>
				</div>
				<div class="timeline-content">
					<p>
						Hospital Capital - horário total de atendimento: 2 horas 
						<br/>
						Entrada: 18:00 - Saída: 20:00
						<hr/>
						Descrição: paciente teve confulsos na noite anterior, com mal está e muita dor de cabeça
					</p>
				</div>
				<ul>
					<li>Entrada no local: 18:00
						<br/>
							- Nome atendente: Beatriz Costa
							<br/>
							- Hash atendimento: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Realizou uma consulta clínico geral: 18:30
						<br/>
							- Nome funcionario: Beatriz Costa
							<br/>
							- Ação: Clínico pediu a realização de um exame de sangue ao paciente
							<br/>
							- Hash médico: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Realizou exame de sangue: 19:00
						<br/>
							- Nome enfermeiro: Beatriz Costa
							<br/>
							- Ação: foram coletados 3 potes de sangue, para verificar do açucar e sal no sangue
							<br/>
							- Hash médico: ec02c59dee6faaca3189bace969c22d3
					</li>
					<br/>
					<li>Saiu do hospital: 20:00
					</li>
				</ul>				
			</div>
			<!-- end timeline-body -->
		</li>
	</ul>
	<!-- end timeline -->
@endsection

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="/assets/js/demo/timeline.demo.js"></script>
	<script>
		$(document).ready(function() {
			Timeline.init();
		});
	</script>
@endpush