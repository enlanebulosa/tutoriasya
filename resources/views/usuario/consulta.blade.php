@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Consulta para {{$user->nombre}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/consulta') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('materia') ? ' has-error' : '' }}">
                          <label for="id_materia" class="col-md-4 control-label">Materia</label>
                          <div class="col-md-6">
                            <select class="form-control" name="id_materia">
                              <option value="">Elija una materia</option>
                              @foreach($materias as $materia)
                                <option value={{$materia->id}}>{{$materia->nombre}} - {{$materia->nivel}}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('id_profesor') ? ' has-error' : '' }}">

                          <div class="col-md-6">
                              <input id="id_profesor" type="hidden" class="form-control hidden" name="id_profesor" value="{{$user->id}}" autofocus>

                              @if ($errors->has('id_profesor'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('id_profesor') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('id_usuario') ? ' has-error' : '' }}">

                          <div class="col-md-6">
                              <input id="id_usuario" type="hidden" class="form-control hidden" name="id_usuario" value='{{ Auth::user()->id }}' autofocus>

                              @if ($errors->has('id_usuario'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('id_usuario') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                          <label for="descripcion" class="col-md-4 control-label">Correo electrónico</label>

                          <div class="col-md-6">
                              <textarea rows="1.5" cols="50" id="nombre" type="field" class="form-control" name="descripcion" value="{{ old('nombre') }}" autofocus>{{ Auth::user()->email }}
                              </textarea>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                          
                        <br/><br/><br/>
                          <label for="descripcion" class="col-md-4 control-label">Descripcion</label>

                          <div class="col-md-6">
                              <textarea rows="4" cols="50" id="nombre" type="text" class="form-control" name="descripcion" value="{{ old('nombre') }}" autofocus>Ejemplo: Información de contacto, Horarios deseados, Zonas comunes, etc
                              </textarea>

                              @if ($errors->has('nombre'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nombre') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Enviar consulta
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
