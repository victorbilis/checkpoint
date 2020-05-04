@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Login Page')

@section('content')
	<!-- begin login -->
	<div class="login login-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-11.jpg)"></div>
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
					<span class="logo"></span> <b>Checkpoint</b> Admin
					<small>Capital Hospital</small>
				</div>
				<div class="icon">
					<i class="fa fa-sign-in"></i>
				</div>
			</div>
			<!-- end login-header --> 
			<!-- begin login-content -->
			<div class="login-content">
				<form action="{{ route('login') }}" method="POST" class="margin-bottom-0">
				{{ csrf_field() }}
					<div class="form-group m-b-15">
						<input type="text" class="form-control form-control-lg" name="email" placeholder="E-mail" required />
					</div>
					<div class="form-group m-b-15">
						<input type="password" class="form-control form-control-lg" name="password" placeholder="Senha" required />
					</div>
					<div class="checkbox checkbox-css m-b-30">
						<input type="checkbox" id="remember_me_checkbox" value="" />
						<label for="remember_me_checkbox">
							Lembrar-me	
						</label>
					</div>
					<div class="login-buttons">
						<button type="submit" class="btn s btn-block btn-lg btn-checkpoint">Entrar</button>
					</div>
					<div class="m-t-20 m-b-40 p-b-40 text-inverse">
						Não tem cadastro? <a href="/register/v3" class="text-checkpoint">Clique aqui</a> para fazer o cadastro.
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


