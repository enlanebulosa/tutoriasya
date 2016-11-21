  <!-- Modal -->
  <div class="modal fade" id="users" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Informacion de la tutoría</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/agregartutoria') }}" id="frmUsers">
                {{ csrf_field() }}


                <div class="form-group{{ $errors->has('id_usuario') ? ' has-error' : '' }}">

                    <div class="col-md-6">
                        <input id="id_usuario" type="hidden" class="form-control hidden" name="id_usuario" value="{{ Auth::user() -> id }}" autofocus>

                        @if ($errors->has('id_usuario'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_usuario') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                  <div class="form-group{{ $errors->has('materia') ? ' has-error' : '' }}">
                      <label for="materia" class="col-md-4 control-label">Materia</label>
                    <div class="col-md-6">
                        <select class="form-control" name="materia">
                          <option value="">Elija una materia</option>
                          @foreach($materias as $materia)
                            <option value={{$materia->id}}>{{$materia->nombre}} - {{$materia->nivel}}</option>
                          @endforeach
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary" id='save'>Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
            </div>
            </div>
      </div>

  </div>
