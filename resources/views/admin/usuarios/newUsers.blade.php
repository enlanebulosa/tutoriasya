 <!-- Modal -->
  <div class="modal fade" id="users" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Informacion de Usuario</h4>
        </div>
        <div class="modal-body">
           <form action="newUsers" method="post" id="frmUsers">
           <div class="row">

           <div class="col-lg-4 col-sm-4">
           <div class="form-group">
            <input type="text" name="NOMBRE" id="NOMBRE" placeholder="Nombre" class="form-control">
           </div> 
           </div>
           <div class="col-lg-4 col-sm-4">
           <div class="form-group">
            <input type="text" name="APELLIDO" id="APELLIDO" placeholder="Apellido" class="form-control">
           </div> 
           </div>
           <div class="col-lg-4 col-sm-4">
           <div class="form-group">
            <input type="text" name="DNI" id="DNI" placeholder="DNI" class="form-control">
           </div> 
           </div>
           <div class="col-lg-4 col-sm-4">
           <div class="form-group">
            <input type="text" name="EMAIL" id="EMAIL" placeholder="Email" class="form-control">
           </div> 
           </div>
           
           <div class="col-lg-4 col-sm-4">
           <div class="form-group">
            <select name="TIPO" id="TIPO" class="form-control">
            <option value="">Seleccione Rol </option>
            <option value="Administrador">Administrador</option>
            <option value="Alumno">Alumno</option>
            <option value="Profesor">Profesor</option>
            </select>
           </div> 
           </div>
           <input type="hidden" value="" id="id" name="id">


           </div>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Guardar" id="save" class="btn btn-primary">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>