@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                            <div class="col-md-6">
                                <input id="endereco" type="endereco" class="form-control{{ $errors->has('endereco') ? ' is-invalid' : '' }}" name="endereco" value="{{ old('endereco') }}" required>

                                @if ($errors->has('endereco'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--div class="form-group row">
                            <label for="nomeMae" class="col-md-4 col-form-label text-md-right">{{ __('Nome da Mãe') }}</label>

                            <div class="col-md-6">
                                <input id="nomeMae" type="text" class="form-control{{ $errors->has('nomeMae') ? ' is-invalid' : '' }}" name="nomeMae" value="{{ old('nomeMae') }}" required autofocus>

                                @if ($errors->has('nomeMae'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nomeMae') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dataNascimento" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>

                            <div class="col-md-6">
                                <input id="dataNascimento" type="text" class="form-control{{ $errors->has('dataNascimento') ? ' is-invalid' : '' }}" name="dataNascimento" value="{{ old('dataNascimento') }}" required autofocus>

                                @if ($errors->has('dataNascimento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dataNascimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                            <div class="col-md-6">
                                <input id="sexo" type="text" class="form-control{{ $errors->has('sexo') ? ' is-invalid' : '' }}" name="sexo" value="{{ old('sexo') }}" required autofocus>

                                @if ($errors->has('sexo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autofocus>

                                @if ($errors->has('cpf'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">{{ __('RG') }}</label>

                            <div class="col-md-6">
                                <input id="rg" type="text" class="form-control{{ $errors->has('rg') ? ' is-invalid' : '' }}" name="rg" value="{{ old('rg') }}" required autofocus>

                                @if ($errors->has('rg'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="orgaoExpedidorIdentidade" class="col-md-4 col-form-label text-md-right">{{ __('Orgão Expedidor do RG') }}</label>

                            <div class="col-md-6">
                                <input id="orgaoExpedidorIdentidade" type="text" class="form-control{{ $errors->has('orgaoExpedidorIdentidade') ? ' is-invalid' : '' }}" name="orgaoExpedidorIdentidade" value="{{ old('orgaoExpedidorIdentidade') }}" required autofocus>

                                @if ($errors->has('orgaoExpedidorIdentidade'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('orgaoExpedidorIdentidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dataEmissaoIdentidade" class="col-md-4 col-form-label text-md-right">{{ __('Data de Emissão do RG') }}</label>

                            <div class="col-md-6">
                                <input id="dataEmissaoIdentidade" type="text" class="form-control{{ $errors->has('dataEmissaoIdentidade') ? ' is-invalid' : '' }}" name="dataEmissaoIdentidade" value="{{ old('dataEmissaoIdentidade') }}" required autofocus>

                                @if ($errors->has('dataEmissaoIdentidade'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dataEmissaoIdentidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idEstadoCivil" class="col-md-4 col-form-label text-md-right">{{ __('Id do Estado Civil') }}</label>

                            <div class="col-md-6">
                                <input id="idEstadoCivil" type="text" class="form-control{{ $errors->has('idEstadoCivil') ? ' is-invalid' : '' }}" name="idEstadoCivil" value="{{ old('idEstadoCivil') }}" required autofocus>

                                @if ($errors->has('idEstadoCivil'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idEstadoCivil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="idProfissao" class="col-md-4 col-form-label text-md-right">{{ __('Id da Profissão') }}</label>

                            <div class="col-md-6">
                                <input id="idProfissao" type="text" class="form-control{{ $errors->has('idProfissao') ? ' is-invalid' : '' }}" name="idProfissao" value="{{ old('idProfissao') }}" required autofocus>

                                @if ($errors->has('idProfissao'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idProfissao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="idNaturezaOcupacao" class="col-md-4 col-form-label text-md-right">{{ __('Id da Ocupação') }}</label>

                            <div class="col-md-6">
                                <input id="idNaturezaOcupacao" type="text" class="form-control{{ $errors->has('idNaturezaOcupacao') ? ' is-invalid' : '' }}" name="idNaturezaOcupacao" value="{{ old('idNaturezaOcupacao') }}" required autofocus>

                                @if ($errors->has('idNaturezaOcupacao'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idNaturezaOcupacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="idNacionalidade" class="col-md-4 col-form-label text-md-right">{{ __('Id da Nacionalidade') }}</label>

                            <div class="col-md-6">
                                <input id="idNacionalidade" type="text" class="form-control{{ $errors->has('idNacionalidade') ? ' is-invalid' : '' }}" name="idNacionalidade" value="{{ old('idNacionalidade') }}" required autofocus>

                                @if ($errors->has('idNacionalidade'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idNacionalidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idOrigemComercial" class="col-md-4 col-form-label text-md-right">{{ __('Id de Origem Comercial') }}</label>

                            <div class="col-md-6">
                                <input id="idOrigemComercial" type="text" class="form-control{{ $errors->has('idOrigemComercial') ? ' is-invalid' : '' }}" name="idOrigemComercial" value="{{ old('idOrigemComercial') }}" required autofocus>

                                @if ($errors->has('idOrigemComercial'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idOrigemComercial') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idProduto" class="col-md-4 col-form-label text-md-right">{{ __('Id do Produto') }}</label>

                            <div class="col-md-6">
                                <input id="idProduto" type="text" class="form-control{{ $errors->has('idProduto') ? ' is-invalid' : '' }}" name="idProduto" value="{{ old('idProduto') }}" required autofocus>

                                @if ($errors->has('idProduto'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idProduto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numeroAgencia" class="col-md-4 col-form-label text-md-right">{{ __('Número da Agência') }}</label>

                            <div class="col-md-6">
                                <input id="numeroAgencia" type="text" class="form-control{{ $errors->has('numeroAgencia') ? ' is-invalid' : '' }}" name="numeroAgencia" value="{{ old('numeroAgencia') }}" required autofocus>

                                @if ($errors->has('numeroAgencia'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numeroAgencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numeroContaCorrente" class="col-md-4 col-form-label text-md-right">{{ __('Número da Conta Corrente') }}</label>

                            <div class="col-md-6">
                                <input id="numeroContaCorrente" type="text" class="form-control{{ $errors->has('numeroContaCorrente') ? ' is-invalid' : '' }}" name="numeroContaCorrente" value="{{ old('numeroContaCorrente') }}" required autofocus>

                                @if ($errors->has('numeroContaCorrente'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numeroContaCorrente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diaVencimento" class="col-md-4 col-form-label text-md-right">{{ __('Dia do Vencimento do Cartão') }}</label>

                            <div class="col-md-6">
                                <input id="diaVencimento" type="text" class="form-control{{ $errors->has('diaVencimento') ? ' is-invalid' : '' }}" name="diaVencimento" value="{{ old('diaVencimento') }}" required>

                                @if ($errors->has('diaVencimento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('diaVencimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomeImpresso" class="col-md-4 col-form-label text-md-right">{{ __('Nome Impresso') }}</label>

                            <div class="col-md-6">
                                <input id="nomeImpresso" type="text" class="form-control{{ $errors->has('nomeImpresso') ? ' is-invalid' : '' }}" name="nomeImpresso" value="{{ old('nomeImpresso') }}" required>

                                @if ($errors->has('nomeImpresso'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nomeImpresso') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nomeEmpresa" class="col-md-4 col-form-label text-md-right">{{ __('Nome da Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="nomeEmpresa" type="text" class="form-control{{ $errors->has('nomeEmpresa') ? ' is-invalid' : '' }}" name="nomeEmpresa" value="{{ old('nomeEmpresa') }}" required>

                                @if ($errors->has('nomeEmpresa'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nomeEmpresa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="valorRenda" class="col-md-4 col-form-label text-md-right">{{ __('Valor da Renda do Cliente') }}</label>

                            <div class="col-md-6">
                                <input id="valorRenda" type="text" class="form-control{{ $errors->has('valorRenda') ? ' is-invalid' : '' }}" name="valorRenda" value="{{ old('valorRenda') }}" required>

                                @if ($errors->has('valorRenda'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('valorRenda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="canalEntrada" class="col-md-4 col-form-label text-md-right">{{ __('Canal de Entrada') }}</label>

                            <div class="col-md-6">
                                <input id="canalEntrada" type="text" class="form-control{{ $errors->has('canalEntrada') ? ' is-invalid' : '' }}" name="canalEntrada" value="{{ old('canalEntrada') }}" required>

                                @if ($errors->has('canalEntrada'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('canalEntrada') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="valorPontuacao" class="col-md-4 col-form-label text-md-right">{{ __('Valor da Pontuação') }}</label>

                            <div class="col-md-6">
                                <input id="valorPontuacao" type="text" class="form-control{{ $errors->has('valorPontuacao') ? ' is-invalid' : '' }}" name="valorPontuacao" value="{{ old('valorPontuacao') }}" required>

                                @if ($errors->has('valorPontuacao'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('valorPontuacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idTipoEndereco" class="col-md-4 col-form-label text-md-right">{{ __('Id do Tipo de Endereço') }}</label>

                            <div class="col-md-6">
                                <input id="idTipoEndereco" type="text" class="form-control{{ $errors->has('idTipoEndereco') ? ' is-invalid' : '' }}" name="idTipoEndereco" value="{{ old('idTipoEndereco') }}" required>

                                @if ($errors->has('idTipoEndereco'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idTipoEndereco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('CEP do Cliente') }}</label>

                            <div class="col-md-6">
                                <input id="cep" type="text" class="form-control{{ $errors->has('cep') ? ' is-invalid' : '' }}" name="cep" value="{{ old('cep') }}" required>

                                @if ($errors->has('cep'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cep') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logradouro" class="col-md-4 col-form-label text-md-right">{{ __('Logradouro') }}</label>

                            <div class="col-md-6">
                                <input id="logradouro" type="text" class="form-control{{ $errors->has('logradouro') ? ' is-invalid' : '' }}" name="logradouro" value="{{ old('logradouro') }}" required>

                                @if ($errors->has('logradouro'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('logradouro') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Número da Residência') }}</label>

                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}" name="numero" value="{{ old('numero') }}" required>

                                @if ($errors->has('numero'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="complemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento') }}</label>

                            <div class="col-md-6">
                                <input id="complemento" type="text" class="form-control{{ $errors->has('complemento') ? ' is-invalid' : '' }}" name="complemento" value="{{ old('complemento') }}" required>

                                @if ($errors->has('complemento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('complemento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pontoReferencia" class="col-md-4 col-form-label text-md-right">{{ __('Ponto de Referência') }}</label>

                            <div class="col-md-6">
                                <input id="pontoReferencia" type="text" class="form-control{{ $errors->has('pontoReferencia') ? ' is-invalid' : '' }}" name="pontoReferencia" value="{{ old('pontoReferencia') }}" required>

                                @if ($errors->has('pontoReferencia'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pontoReferencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>

                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control{{ $errors->has('bairro') ? ' is-invalid' : '' }}" name="bairro" value="{{ old('bairro') }}" required>

                                @if ($errors->has('bairro'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bairro') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control{{ $errors->has('cidade') ? ' is-invalid' : '' }}" name="cidade" value="{{ old('cidade') }}" required>

                                @if ($errors->has('cidade'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="uf" class="col-md-4 col-form-label text-md-right">{{ __('UF do Endereço') }}</label>

                            <div class="col-md-6">
                                <input id="uf" type="text" class="form-control{{ $errors->has('uf') ? ' is-invalid' : '' }}" name="uf" value="{{ old('uf') }}" required>

                                @if ($errors->has('uf'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('uf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="pais" value="{{ old('pais') }}" required>

                                @if ($errors->has('pais'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="enderecoCorrespondencia" class="col-md-4 col-form-label text-md-right">{{ __('Endereço para correspondência') }}</label>

                            <div class="col-md-6">
                                <input id="enderecoCorrespondencia" type="text" class="form-control{{ $errors->has('enderecoCorrespondencia') ? ' is-invalid' : '' }}" name="enderecoCorrespondencia" value="{{ old('enderecoCorrespondencia') }}" required>

                                @if ($errors->has('enderecoCorrespondencia'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('enderecoCorrespondencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="limiteGlobal" class="col-md-4 col-form-label text-md-right">{{ __('Limite Global') }}</label>

                            <div class="col-md-6">
                                <input id="limiteGlobal" type="text" class="form-control{{ $errors->has('limiteGlobal') ? ' is-invalid' : '' }}" name="limiteGlobal" value="{{ old('limiteGlobal') }}" required>

                                @if ($errors->has('limiteGlobal'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('limiteGlobal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="limiteMaximo" class="col-md-4 col-form-label text-md-right">{{ __('Limite Máximo') }}</label>

                            <div class="col-md-6">
                                <input id="limiteMaximo" type="text" class="form-control{{ $errors->has('limiteMaximo') ? ' is-invalid' : '' }}" name="limiteMaximo" value="{{ old('limiteMaximo') }}" required>

                                @if ($errors->has('limiteMaximo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('limiteMaximo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="limiteParcelas" class="col-md-4 col-form-label text-md-right">{{ __('Limite ds Parcelas') }}</label>

                            <div class="col-md-6">
                                <input id="limiteParcelas" type="text" class="form-control{{ $errors->has('limiteParcelas') ? ' is-invalid' : '' }}" name="limiteParcelas" value="{{ old('limiteParcelas') }}" required>

                                @if ($errors->has('limiteParcelas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('limiteParcelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="limiteConsignado" class="col-md-4 col-form-label text-md-right">{{ __('Limite Consignado') }}</label>

                            <div class="col-md-6">
                                <input id="limiteConsignado" type="text" class="form-control{{ $errors->has('limiteConsignado') ? ' is-invalid' : '' }}" name="limiteConsignado" value="{{ old('limiteConsignado') }}" required>

                                @if ($errors->has('limiteConsignado'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('limiteConsignado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomeReferencia1" class="col-md-4 col-form-label text-md-right">{{ __('Nome de Referência 1') }}</label>

                            <div class="col-md-6">
                                <input id="nomeReferencia1" type="text" class="form-control{{ $errors->has('nomeReferencia1') ? ' is-invalid' : '' }}" name="nomeReferencia1" value="{{ old('nomeReferencia1') }}" required>

                                @if ($errors->has('nomeReferencia1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nomeReferencia1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="enderecoReferencia1" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de Referência 1') }}</label>

                            <div class="col-md-6">
                                <input id="enderecoReferencia1" type="text" class="form-control{{ $errors->has('enderecoReferencia1') ? ' is-invalid' : '' }}" name="enderecoReferencia1" value="{{ old('enderecoReferencia1') }}" required>

                                @if ($errors->has('enderecoReferencia1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('enderecoReferencia1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nomeReferencia2" class="col-md-4 col-form-label text-md-right">{{ __('Nome de Referência 2') }}</label>

                            <div class="col-md-6">
                                <input id="nomeReferencia2" type="text" class="form-control{{ $errors->has('nomeReferencia2') ? ' is-invalid' : '' }}" name="nomeReferencia2" value="{{ old('nomeReferencia2') }}" required>

                                @if ($errors->has('nomeReferencia2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nomeReferencia2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="enderecoReferencia2" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de Referência 2') }}</label>

                            <div class="col-md-6">
                                <input id="enderecoReferencia2" type="text" class="form-control{{ $errors->has('enderecoReferencia2') ? ' is-invalid' : '' }}" name="enderecoReferencia2" value="{{ old('enderecoReferencia2') }}" required>

                                @if ($errors->has('enderecoReferencia2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('enderecoReferencia2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->











                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
