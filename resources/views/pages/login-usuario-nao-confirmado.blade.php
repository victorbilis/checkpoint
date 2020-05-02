@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Login Page')

@section('content')
	<!-- begin login -->
	<div class="login login-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-usuario-nao-confirmado.jpg)"></div>
			<div class="news-caption">
				<!-- <h4 class="caption-title"><b>Usuário não confirmado</b></h4>
				<p>
					Dados e informações sobre pacientes que utilizar o serviço da Checkpoint.
				</p> -->
			</div>
		</div>
		<!-- end news-feed -->
		<!-- begin right-content -->
		<div class="right-content">
			<!-- begin login-header -->
			<div class="login-header">
				<div class="brand">
					<span class="logo"></span>Usuário <b>não confirmado</b>
					<small>Capital Hospital</small>
				</div>
				<div class="icon">
					<i class="fa fa-sign-in"></i>
				</div>
			</div>
			<!-- end login-header -->
			<!-- begin login-content -->
			<div class="login-content">
				<form action="login/v3" method="GET" class="margin-bottom-0">
					<div class="form-group m-b-15">
						<p class="text-center">infelizemente seu usuário<b class="text-danger"> não foi verificado com sucesso</b></p>
						
						<p class="text-center"><b>Tente mais tarde!</b></p>
					</div>
					<br/>
					<div class="login-buttons">
						<button type="submit" class="btn s btn-block btn-lg btn-danger">Confirmar</button>
					</div>
					<br/>
					<br/>
					<br/>
					<hr />
					<p class="text-center text-grey-darker">
						&copy; Checkpoint 2020
					</p>
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end right-container -->
	</div>
	<!-- end login -->
@endsection
