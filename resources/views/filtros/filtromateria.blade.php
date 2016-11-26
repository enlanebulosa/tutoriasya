
@extends('layouts.app')
@section("title", "Listar por materia")
@section("content")
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Informacion de la tutoría</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/listarpormaterias') }}" id="frmUsers">
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

                <div class="modal-footer">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary" id='save'>Buscar</button>
                </div>
            </form>
            </div>
            </div>
@endsection
