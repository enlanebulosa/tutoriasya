 <!-- Modal -->
<div class="modal fade" id="materia" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Materias</h4>
        </div>
        <div class="modal-body">
            <form role="form" method="POST" action="{{ url('/admin/materias/crearmateria') }}" id="frmMateria">
                
                <div class="row">
                <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                    
                     <label for="nombre" class="col-md-4 control-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control">
                </div> 
                </div>
               
                <div class="form-group{{ $errors->has('nivel') ? ' has-error' : '' }}">
                     <label for="nivel" class="col-md-4 control-label">Nivel</label>

                     <div class="col-md-6">
                         <select name="nivel" class="form-control" value="{{ old('nivel') }}" autofocus>    
                         <option value="Universitario" selected="selected">Universitario</option>
                         <option value="Secundario">Secundario</option>
                         <option value="Primario">Primario</option>
                         </select>

                         @if ($errors->has('nivel'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('nivel') }}</strong>
                             </span>
                         @endif
                     </div>
                 </div>
 
                <input type="hidden" value="" id="id" name="id">


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