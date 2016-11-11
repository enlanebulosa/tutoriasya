 <!-- Modal -->
 <!DOCTYPE html>
 </div>
 <!-- Modal -->

  <div class="modal fade" id="users" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">  <font face="arial,arial,verdana" color=black size="6"> Editar Usuario:  </font> <font face="arial,arial,verdana" color=red size="7">{{$user->nombre}} </font> </h4>    
        </div>   
        <div class="modal-body">
             {!!Form::model($user,['route'=>[ 'usuarios.update',$user->id ], 'method' => 'PATCH'])!!}                       
                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <label for="nombre" class="col-md-4 control-label">  <font face="Comic Sans MS,arial,verdana" color=blue size="6"> Nombre </font> </label>
                    

                    <div class="col-md-6">
                        <input id="nombre" type="text"() class="form-control" name="nombre" value="{{$user->nombre}}" autofocus>

                        @if ($errors->has('nombre'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                        
                <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                    <label for="apellido" class="col-md-4 control-label"> <font face="Comic Sans MS,arial,verdana" color=blue size="6"> Apellido  </font> </label>

                    <div class="col-md-6">
                        <input id="apellido" type="text" class="form-control" name="apellido" value="{{ $user->apellido }}" autofocus>

                        @if ($errors->has('apellido'))
                            <span class="help-block">
                                <strong>{{ $errors->first('apellido') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                        
                <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                    <label for="dni" class="col-md-4 control-label"> <font face="Comic Sans MS,arial,verdana" color=blue size="6">  DNI  </font>  </label>

                    <div class="col-md-6">
                        <input id="dni" type="number" class="form-control" name="dni" value="{{ $user->dni}}" autofocus>

                        @if ($errors->has('dni'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dni') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                        
                <hr>
                        
                <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                    <label for="tipo" class="col-md-4 control-label">  <font face="Comic Sans MS,arial,verdana" color=blue size="6"> Tipo de usuario   </font> </label>

                    <div class="col-md-6">
                        <select name="tipo" class="form-control" value="{{ $user->tipo }}" autofocus>    
                        <option value="administrador" selected="selected">Administrador</option>
                        <option value="alumno">Alumno</option>
                        <option value="profesor">Profesor</option>
                        </select>

                        @if ($errors->has('tipo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tipo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                        
                <hr>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">  <font face="arial,arial,verdana" color=blue size="6">  E-Mail Address </font>  </label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>         
                <div class="modal-footer">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary" id='save'>Editar</button>
                    
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
            </div>
            </div>
      </div>
      
  </div>