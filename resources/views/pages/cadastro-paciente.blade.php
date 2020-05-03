@extends('layouts.default')

@section('title', 'Cadastro Paciente')

@push('css')
	<link href="/assets/plugins/smartwizard/dist/css/smart_wizard.css" rel="stylesheet" />
@endpush

@section('content')


	

	<!-- begin page-header -->
	<h1 class="page-header">Cadastro Paciente <small>Etapa 01: Atendimento</small></h1>
	<!-- end page-header -->
	
	<!-- begin wizard-form -->
	<form action="/" method="POST" class="form-control-with-bg">
		<!-- begin wizard -->
		
		<div id="wizard">
			<!-- begin wizard-step -->
			<ul>
				<li class="col-md-3 col-sm-4 col-6">
					<a href="#step-1">
						<span class="number">1</span> 
						<span class="info text-ellipsis">
							Dados pessoais
							<small class="text-ellipsis">Nome, Enderço, CPF...</small>
						</span>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-6">
					<a href="#step-2">
						<span class="number">2</span> 
						<span class="info text-ellipsis">
							Triagem
							<small class="text-ellipsis">Encaminhamento do paciente</small>
						</span>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-6">
					<a href="#step-3">
						<span class="number">3</span>
						<span class="info text-ellipsis">
							Médico
							<small class="text-ellipsis">Consulta com um especialista</small>
						</span>
					</a>
				</li>
				<li class="col-md-3 col-sm-4 col-6">
					<a href="#step-4">
						<span class="number">4</span> 
						<span class="info text-ellipsis">
							Enfermaria
							<small class="text-ellipsis">Onde o paciente será acompanhado</small>
						</span>
					</a>
				</li>
			</ul>
			<!-- end wizard-step -->
			
			<!-- begin wizard-content -->
			<div>
				<!-- begin step-1 -->
				<div id="step-1">
					<!-- begin fieldset -->
					<fieldset>
						<!-- begin row -->
						<div class="row">
							<!-- begin col-8 -->
							<div class="col-md-8 offset-md-2">
								<div class="text-center">
								<img src="/assets/img/user/qr-code.jpg" class="img-rounded height-250"/>
								<br/>
								<br/>
								<!-- Button trigger modal -->
									<button type="button" class="btn btn-lime" data-toggle="modal" data-target="#exampleModalCenter">
									Ler Qrcode
									</button>
									<div>
								<!-- Modal -->
								<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalCenterTitle">Atendimento paciente</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label for="formGroupExampleInput">Leia o código do paciente ou digite ele aqui para começar o atendimento</label>
											<input type="text" class="form-control" id="formGroupExampleInput" placeholder="d77faaa3c82935734dd19ff19bf86a39c5bd7748">
										</div>
										<div class="">
										<br/>
										<img src="/assets/img/user/user-4.jpg" class="img-rounded height-150"/>
										<br/>
										<br/>
										<h4>Paulo Augusto da Silva</h4>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">fechar</button>
										<button type="button" class="btn btn-primary">Confirmar Paciente</button>
									</div>
									</div>
								</div>
								</div>
							</div>
						</div>
									
								<br/>
								<br/>
								<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Dados pessoais do paciente</legend>
								<!-- begin form-group row -->
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Nome Completo</label>
									<div class="col-md-6">
										<input type="text" name="firstname" placeholder="John" class="form-control" />
									</div>
								</div>
								<!-- end form-group row -->
								<!-- begin form-group row -->
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Data de nascimento</label>
									<div class="col-md-6">
										<div class="row row-space-6">
											<div class="col-4">
												<select class="form-control" name="year">
													<option>-- Dia --</option>
												</select>
											</div>
											<div class="col-4">
												<select class="form-control" name="month">
													<option>-- Mês --</option>
												</select>
											</div>
											<div class="col-4">
												<select class="form-control" name="day">
													<option>-- Ano --</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<!-- end form-group row -->
								<!-- begin form-group row -->
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Cpf</label>
									<div class="col-md-6">
										<input type="text" name="ic" placeholder="999.999.999-99" class="form-control" />
									</div>
								</div>
								<!-- end form-group row -->
								<!-- begin form-group row -->
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Enderço</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="Av. Santa - 1333" class="form-control" />
									</div>
								</div>
								<!-- end form-group row -->
								<br/>
								<br/>
								<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Dados do atendimento</legend>
								
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Atentende responsável</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="Ana Lucia Santos" class="form-control" disabled />
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">hash responsável</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="85136c79cbf9fe36bb9d05d0639c70c265c18d37" class="form-control" disabled/>
									</div>
								</div>								
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Data do atendimento</label>
									<div class="col-md-6">
										<div class="row row-space-6">
											<div class="col-4">
												<select class="form-control" name="year">
													<option>-- Dia --</option>
												</select>
											</div>
											<div class="col-4">
												<select class="form-control" name="month">
													<option>-- Mês --</option>
												</select>
											</div>
											<div class="col-4">
												<select class="form-control" name="day">
													<option>-- Ano --</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Horário de atendimento</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="18:30:44" class="form-control" />
									</div>
								</div>
							</div>
							<!-- end col-8 -->
						</div>
						<!-- end row -->
					</fieldset>
					<!-- end fieldset -->
				</div>
				<!-- end step-1 -->
				<!-- begin step-2 -->
				<div id="step-2">
					<!-- begin fieldset -->
					<fieldset>
						<!-- begin row -->
						<div class="row">
							<!-- begin col-8 -->
							<div class="col-md-8 offset-md-2">
							<div class="text-center">
								<img src="/assets/img/user/qr-code.jpg" class="img-rounded height-250"/>
								<br/>
								<br/>
								<!-- Button trigger modal -->
								<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Informações da triagem</legend>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Funcionário responsável</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="$1$kBKJMHQ4$1pp13Bafhu5u1Q7WBexWW" class="form-control" />
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">hash do Funcionário </label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="$1$kBKJMHQ4$1pp13Bafhu5u1Q7WBexWW" class="form-control" />
									</div>
								</div>
								<!-- begin form-group row -->
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Encaminhamento</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="" class="form-control" />
									</div>
								</div>
								<!-- end form-group row -->
								<!-- begin form-group row -->
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Situação</label>
									<div class="col-md-6">
										<input type="email" name="email" placeholder="Grave/moderada/tranquila" class="form-control" />
									</div>
								</div>
								<!-- end form-group row -->
							</div>
							<!-- end col-8 -->
						</div>
						<!-- end row -->
					</fieldset>
					<!-- end fieldset -->
				</div>
				<!-- end step-2 -->
				<!-- begin step-3 -->
				<div id="step-3">
					<!-- begin fieldset -->
					<fieldset>
						<!-- begin row -->
						<div class="row">
							<!-- begin col-8 -->
							<div class="col-md-8 offset-md-2">

								<!-- Button trigger modal -->
									<div class="text-center">
									<img src="/assets/img/user/qr-code.jpg" class="img-rounded height-250"/>
									<br/>
									<br/>
									<div><button type="button" class="btn btn-lime" data-toggle="modal" data-target="#exampleModalCenter">
										Ler Qrcode
									</button></div>
									</div>
								</br>
								<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Sobre o paciente</legend>
								<div class="row text-center">
									<div class="col-md-6">
										
									<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Passar Receita</button>

									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Nova Consulta:</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Título:</label>
												<input type="text" class="form-control" id="recipient-name">
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Descrição:</label>
												<textarea class="form-control" id="message-text"></textarea>
											</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
											<button type="button" class="btn btn-primary">Salvar</button>
										</div>
										</div>
									</div>
									</div>
									</div>
									<div class="col-md-6">
									<button type="button" class="btn btn-success"  onclick="window.location.href = '/extra/timeline'">Ver timeline de consultas</button>
									</div>
								</div>
								<br/>
								<br/>
								<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Informações da consulta</legend>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Nome médico</label>
									<div class="col-md-6">
									<input type="text" name="ic" value="Pedro Henrique" class="form-control"  disabled/>
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Hash do médico</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="$1$kBKJMHQ4$1pp13Bafhu5u1Q7WBexWW" class="form-control" disabled/>
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Data do atendimento</label>
									<div class="col-md-6">
										<div class="row row-space-6">
											<div class="col-4">
												<select class="form-control" name="year">
													<option>-- Dia --</option>
												</select>
											</div>
											<div class="col-4">
												<select class="form-control" name="month">
													<option>-- Mês --</option>
												</select>
											</div>
											<div class="col-4">
												<select class="form-control" name="day">
													<option>-- Ano --</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Horário de atendimento</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="19:30:44" class="form-control" disabled/>
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Procedimento</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="informar o que foi passado para o paciente" class="form-control" />
									</div>
								</div>
							</div>								
						</div>
						<!-- end row -->
					</fieldset>
					<!-- end fieldset -->
				</div>
				<!-- end step-3 -->
				<!-- begin step-4 -->
				<div id="step-4">
					<div class="m-b-0 text-center">
						<!-- begin fieldset -->
					<fieldset>
						<!-- begin row -->
						<div class="row">
							<!-- begin col-8 -->
							<div class="col-md-8 offset-md-2">

								<!-- Button trigger modal -->
									<div class="text-center">
									<img src="/assets/img/user/qr-code.jpg" class="img-rounded height-250"/>
									<br/>
									<br/>
									<div><button type="button" class="btn btn-lime" data-toggle="modal" data-target="#exampleModalCenter">
										Ler Qrcode
									</button></div>
									</div>
								</br>
								
								<div class="row text-center">
									<div class="col-md-6">
										
									

									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Nova Receita</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Título:</label>
												<input type="text" class="form-control" id="recipient-name">
											</div>
											<div class="form-group">
												<label for="message-text" class="col-form-label">Receita:</label>
												<textarea class="form-control" id="message-text"></textarea>
											</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
											<button type="button" class="btn btn-primary">Confirmar</button>
										</div>
										</div>
									</div>
									</div>
									</div>
								</div>
								<br/>
								<br/>
								<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Informações da consulta</legend>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Nome enfermera</label>
									<div class="col-md-6">
									<input type="text" name="ic" value="Maria Clara" class="form-control" disabled/>
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Hash enfermera</label>
									<div class="col-md-6">
									<input type="text" name="ic" value="$1$kBKJMHQ4$1pp13Bafhu5u1Q7WBexWW" class="form-control" disabled/>
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Data do atendimento</label>
									<div class="col-md-6">
										<div class="row row-space-6">
											<div class="col-4">
												<select class="form-control" name="year">
													<option>-- Dia --</option>
												</select>
											</div>
											<div class="col-4">
												<select class="form-control" name="month">
													<option>-- Mês --</option>
												</select>
											</div>
											<div class="col-4">
												<select class="form-control" name="day">
													<option>-- Ano --</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Horário de atendimento</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="18:30:44" class="form-control" />
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Temperatura do paciente</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="27°" class="form-control" />
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Pessão do paciente</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="140/90" class="form-control" />
									</div>
								</div>
								<div class="form-group row m-b-10">
									<label class="col-md-3 text-md-right col-form-label">Descrição</label>
									<div class="col-md-6">
									<input type="text" name="ic" placeholder="Procedimento que o paciente passou" class="form-control" />
									</div>
								</div>
							</div>								
						</div>
						<!-- end row -->
					</fieldset>
					<!-- end fieldset -->
					</div>
				</div>
				<!-- end step-4 -->
			</div>
			<!-- end wizard-content -->
		</div>
		<!-- end wizard -->
	</form>
	<!-- end wizard-form -->
@endsection

@push('scripts')
	<script src="/assets/plugins/smartwizard/dist/js/jquery.smartWizard.js"></script>
	<script src="/assets/js/demo/form-wizards.demo.js"></script>
	<script>
		$(document).ready(function() {
			FormWizard.init();
		});
	</script>
@endpush
