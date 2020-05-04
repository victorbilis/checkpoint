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
			<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
					<label class="control-label">Nome <span class="text-danger">*</span></label>
					<div class="row row-space-10">
						<div class="col-md-12 m-b-15">
							<input type="text" class="form-control" placeholder="Nome Completo" name="name" required />
						</div>
					</div>
					<label class="control-label">CPF <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input id="masked-input-cpf" type="text" class="form-control" placeholder="999.999.999-99" name="cpf" required/>
						</div>
					</div>
					<label class="control-label">Sexo<span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
						<select id="inputState" class="form-control" name="gener">
							<option selected disabled>Escolha</option>
							<option value="m">Masculino</option>
							<option value="f">Feminino</option>
							<option value="o">Outros</option>
						</select>
						</div>
					</div>					
					<label class="control-label">Celular<span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="text" id="masked-input-phone" class="form-control" placeholder="(99) 99999-9999 " name="phone_number" required/>
						</div>
					</div>
					<label class="control-label">E-mail<span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="email" class="form-control" placeholder="Endereço e-mail " required name="email"/>
						</div>
					</div>
					<label class="control-label">Confirmar e-mail <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="email" class="form-control" placeholder="Escrever endereço e-mail" name="email_confirmation" required/>
						</div>
					</div>
					<label class="control-label">Senha<span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="password" class="form-control" placeholder="Informe uma senha" required name="password"/>
						</div>
					</div>
					<label class="control-label">Confirmar senha <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="password" class="form-control" placeholder="Informe uma senha" required name="password_confirmation"/>
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

@push('scripts')
	<script src="/assets/plugins/jquery-migrate/jquery-migrate.min.js"></script>
	<script src="/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
	<script src="/assets/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
	<script src="/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="/assets/plugins/password-indicator/js/password-indicator.js"></script>
	<script src="/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
	<script src="/assets/plugins/tag-it/js/tag-it.min.js"></script>
    <script src="/assets/plugins/moment/moment.js"></script>
    <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/assets/plugins/select2/dist/js/select2.min.js"></script>
    <script src="/assets/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
    <script src="/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
    <script src="/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
    <script src="/assets/plugins/clipboard/dist/clipboard.min.js"></script>
	<script src="/assets/js/demo/form-plugins.demo.js"></script>
	<script>
		$(document).ready(function() {
			FormPlugins.init();
		});
	</script>
@endpush