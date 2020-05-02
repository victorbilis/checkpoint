@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Register Page')

@section('content')
	<!-- begin register -->
	<div class="register register-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-9.jpg)"></div>
			<div class="news-caption">
				<h4 class="caption-title"><b>Registro</b> novos funcionários</h4>
				<p>
					Área reservada para cadastro de novos funcionários poderem ter acesso ao sistema.
				</p>
			</div>
		</div>
		<!-- end news-feed -->
		<!-- begin right-content -->
		<div class="right-content">
			<!-- begin register-header -->
			<h1 class="register-header">
				Checkpoint cadastro
				<small>Crie um cadastro no sistema para ter acesso aos nossos recursos .</small>
			</h1>
			<!-- end register-header -->
			<!-- begin register-content -->
			<div class="register-content">
				<form action="/" method="GET" class="margin-bottom-0">
					<label class="control-label">Nome <span class="text-danger">*</span></label>
					<div class="row row-space-10">
						<div class="col-md-6 m-b-15">
							<input type="text" class="form-control" placeholder="Nome" required />
						</div>
						<div class="col-md-6 m-b-15">
							<input type="text" class="form-control" placeholder="Sobrenome" required />
						</div>
					</div>
					<label class="control-label">E-mail <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="text" class="form-control" placeholder="Endereço e-mail " required />
						</div>
					</div>
					<label class="control-label">Confirmar e-mail <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="text" class="form-control" placeholder="Escrever endereço e-mail" required />
						</div>
					</div>
					<label class="control-label">Senha <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="password" class="form-control" placeholder="Informe uma senha" required />
						</div>
					</div>
					<div class="register-buttons">
						<button type="submit" class="btn btn-checkpoint btn-block btn-lg">Casdatrar</button>
					</div>
					<div class="m-t-20 m-b-40 p-b-40 text-inverse">
						Você já tem cadastro? <a href="/login/v3" class="text-checkpoint"> Clique aqui</a> para fazer o login.
					</div>
					<hr />
					<p class="text-center">
						&copy; Checkpoint 2020
					</p>
				</form>
			</div>
			<!-- end register-content -->
		</div>
		<!-- end right-content -->
	</div>
	<!-- end register -->
@endsection
