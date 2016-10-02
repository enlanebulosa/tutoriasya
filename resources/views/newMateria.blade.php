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
           <form action="newMateria" method="post" id="frmMateria">
           <div class="row">

           <div class="col-lg-4 col-sm-4">
           <div class="form-group">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control">
           </div> 
           </div>
           <div class="col-lg-4 col-sm-4">
           <div class="form-group">
            <input type="text" name="nivel" id="nivel" placeholder="Nivel" class="form-control">
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