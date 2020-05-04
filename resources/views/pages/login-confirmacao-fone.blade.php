@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Confirmação')

@section('content')
	<!-- begin login -->
	<div class="login login-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-9.jpg)"></div>
			<div class="news-caption">
				<h4 class="caption-title"><b>Painel administrador</b></h4>
				<p>
					Dados e informações sobre pacientes que utilizar o serviço da Checkpoint.
				</p>
			</div>
		</div>
		<!-- end news-feed -->
		<!-- begin right-content -->
		<div class="right-content">
			<!-- begin login-header -->
			<div class="login-header">
				<div class="brand">
					<span class="logo"></span> <b>Verificação</b> usuário
					<small>Capital Hospital</small>
				</div>
				<div class="icon">
					<i class="fa fa-sign-in"></i>
				</div>
			</div>
			<!-- end login-header -->
			<!-- begin login-content -->
			<div class="login-content">
				<form action="{{route('verificar')}}" method="POST" class="margin-bottom-0">
				{{ csrf_field() }}
					<div class="form-group m-b-15">
						
						<input type="hidden" name="phone_number" value="{{$phonenumber}}"/>
						<input type="hidden" name="id" value="{{$id}}"/>
						<input type="number" name="verification_code" class="form-control form-control-lg" placeholder="Número de verificação" required />
					</div>
					<div class="form-group m-b-15">
						<p class="text-center">Seu número de verificação foi enviado para o <b class="text-checkpoint">{{$phonenumber}}</b> informado no seu cadastro</p>
						
					</div>
					<div class="login-buttons">
						<button type="submit" class="btn s btn-block btn-lg btn-checkpoint">Verificar número</button>
					</div>
					<div class="m-t-20 m-b-40 p-b-40 text-inverse">
						Não tem o número de confirmação? <a href="/register/v3" class="text-checkpoint">Clique aqui</a> para fazer o cadastro.
					</div>
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
