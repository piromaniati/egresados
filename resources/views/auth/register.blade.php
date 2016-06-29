@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre Completo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label"></label>
                            <div class="col-lg-6">
                                <div class="radio">
                                    <label><input type="radio" name="tipo" id="tipo1" onclick="desactivar();" value="option1" checked="true">Universidad</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="tipo" id="tipo2" onclick="activar();" value="option2">Egresado</label>
                                </div>
                            </div>
                        </div>
                            

    
                        <div class="form-group" disabled="true" id="titulo" style="visibility: hidden; display: none">
                            <label for="" class="col-md-4 control-label">Se encuentra titulado?</label>
                            <div class="col-md-4">
                                <select class="form-control" id="titulo" name="titulo">
                                    <option>Si</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" disabled="true" id="nombre_universidad" style="visibility: hidden; display: none">
                            <label for="" class="col-md-4 control-label">Nombre de su Universidad</label>
                            <div class="col-md-4">
                                <select class="form-control" id="nombre_universidad" name="nombre_universidad">
                                    <option>UAS</option>
                                    <option>TEC Culiacan</option>
                                    <option>UDO</option>
                                    <option>TEC Monterrey</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" disabled="true" id="trabaja" style="visibility: hidden; display: none">
                            <label for="" class="col-md-4 control-label">Usted trabaja actualmente?</label>
                            <div class="col-md-4">
                                <select class="form-control" id="trabaja" name="trabaja">
                                    <option>Si</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>


                         <div class="form-group" disabled="true" id="edad" style="visibility: hidden; display: none">
                            <label for="" class="col-md-4 control-label">Cual es su edad?</label>
                            <input type="text" class="form-control" id="edad" name="edad" placeholder="25" maxlength="2">
                        </div>

                        <div class="form-group" disabled="true" id="telefono" style="visibility: hidden; display: none">
                            <label for="" class="col-md-4 control-label">Cual es su numero de telefono?</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="6677123456" maxlength="10">
                        </div>

                        <div class="form-group" disabled="true" id="sexo" style="visibility: hidden; display: none">
                            <label for="" class="col-md-4 control-label">Cual es su sexo?</label>
                            <div class="col-md-4">
                                <select class="form-control" id="sexo" name="sexo">
                                    <option>Hombre</option>
                                    <option>Mujer</option>
                                </select>
                            </div>
                        </div>
                            
                        <div class="form-group" disabled="true" id="graduacion" style="visibility: hidden; display: none">
                            <label for="" class="col-md-4 control-label">En que año se graduo?</label>
                            <input type="text" class="form-control" id="graduacion" name="graduacion" placeholder="2000" maxlength="4">
                        </div>

                        <div class="form-group" disabled="true" id="ideas_propias" style="visibility: hidden; display: none">
                            <h5>Que tan satisfecho esta usted con los siguientes aspectos?</h5>
                            <label for="select" class="col-md-4 control-label">La posibilidad de realizar ideas propias</label>
                            <div class="col-md-4">
                                <select class="form-control" id="ideas_propias" name="ideas_propias">
                                    <option>Nada satisfecho</option>
                                    <option>Poco satisfecho</option>
                                    <option>Medianamente satisfecho</option>
                                    <option>Muy satisfecho</option>
                                    <option>Totalmente satisfecho</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" disabled="true" id="salario" style="visibility: hidden; display: none">
                            <label for="select" class="col-md-4 control-label">El salario (ingreso y prestaciones)</label>
                            <div class="col-md-4">
                                <select class="form-control" id="salario" name="salario">
                                    <option>Nada satisfecho</option>
                                    <option>Poco satisfecho</option>
                                    <option>Medianamente satisfecho</option>
                                    <option>Muy satisfecho</option>
                                    <option>Totalmente satisfecho</option>
                                </select>
                            </div>
                        </div>
                            
                        <div class="form-group" disabled="true" id="trabajo_equipo" style="visibility: hidden; display: none">
                            <label for="select" class="col-md-4 control-label">Desarrollo de trabajo en equipo</label>
                            <div class="col-md-4">
                                <select class="form-control" id="trabajo_equipo" name="trabajo_equipo">
                                    <option>Nada satisfecho</option>
                                    <option>Poco satisfecho</option>
                                    <option>Medianamente satisfecho</option>
                                    <option>Muy satisfecho</option>
                                    <option>Totalmente satisfecho</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" disabled="true" id="ambiente" style="visibility: hidden; display: none">
                            <label for="select" class="col-md-4 control-label">El ambiente de trabajo</label>
                            <div class="col-md-4">
                                <select class="form-control" id="ambiente" name="ambiente">
                                    <option>Nada satisfecho</option>
                                    <option>Poco satisfecho</option>
                                    <option>Medianamente satisfecho</option>
                                    <option>Muy satisfecho</option>
                                    <option>Totalmente satisfecho</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group" disabled="true" id="con_generales" style="visibility: hidden; display: none">
                            <h5>De acuerdo con su experiencia laboral actual y la(s) actividades que desarrolla, indiquenos:</h5>
                            <label for="select" class="col-md-4 control-label">Conocimientos generales de la disciplina</label>
                            <div class="col-md-4">
                                <select class="form-control" id="con_generales" name="con_generales">
                                    <option>Ninguna exigencia</option>
                                    <option>Poca exigencia</option>
                                    <option>Moderada exigencia</option>
                                    <option>Mucha exigencia</option>
                                    <option>Total</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" disabled="true" id="con_especializados" style="visibility: hidden; display: none">
                            <label for="select" class="col-md-4 control-label">Conocimientos especializados</label>
                            <div class="col-md-4">
                                <select class="form-control" id="con_especializados" name="con_especializados">
                                    <option>Ninguna exigencia</option>
                                    <option>Poca exigencia</option>
                                    <option>Moderada exigencia</option>
                                    <option>Mucha exigencia</option>
                                    <option>Total</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" disabled="true" id="lenguas_extranjeras" style="visibility: hidden; display: none">
                            <label for="select" class="col-md-4 control-label">Conocimiento de lenguas extranjeras</label>
                            <div class="col-md-4">
                                <select class="form-control" id="lenguas_extranjeras" name="lenguas_extranjeras">
                                    <option>Ninguna exigencia</option>
                                    <option>Poca exigencia</option>
                                    <option>Moderada exigencia</option>
                                    <option>Mucha exigencia</option>
                                    <option>Total</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" disabled="true" id="adaptabilidad" style="visibility: hidden; display: none">
                            <label for="select" class="col-md-4 control-label">Adaptabilidad</label>
                            <div class="col-md-4">
                                <select class="form-control" id="adaptabilidad" name="adaptabilidad">
                                    <option>Ninguna exigencia</option>
                                    <option>Poca exigencia</option>
                                    <option>Moderada exigencia</option>
                                    <option>Mucha exigencia</option>
                                    <option>Total</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrarme<
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
