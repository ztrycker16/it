<div class="modal fade" tabindex="-1" role="dialog" id="registro" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog" role="document" style="max-width: 1200px;">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title"><i class="fas fa-user-plus"></i> Registro</h4>
            <button type="button" class="close" id="clModReg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <form id="formRegistro" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="false">
            <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form-label-group">
                           <input autocomplete="off" id="nombre" type="text" name="nombre" required  class="form-control">
                           <label for="register-username" class="label-material labels"><i class="fas fa-user-alt"></i> Nombre</label>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-label-group">
                           <input type="text" class="form-control" id="apepa" name="apepa" autocomplete="off" required>
                           <label for="register-username" class="label-material labels"><i class="fas fa-user-alt"></i> Apellido Paterno</label>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-label-group">
                           <input type="text" class="form-control" id="apema" name="apema" autocomplete="off" required>
                           <label for="register-username" class="label-material labels"><i class="fas fa-user-alt"></i> Apellido Materno</label>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form-label-group">
                           <input type="number" class="form-control" id="noControl" name="noControl" autocomplete="off" required>
                           <label for="register-username" class="label-material labels"><i class="fas fa-hashtag"></i> Número de Control</label>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-label-group">
                           <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                           <label for="register-username" class="label-material labels"><i class="fas fa-envelope"></i> Email</label>
                        </div>
                     </div>
                     <br>
                     <div class="col-lg-4">
                        <div class="form-label-group">
                           <input type="email" class="form-control" id="confirmEmail" name="confirmEmail" autocomplete="off" required>
                           <label for="register-username" class="label-material labels"><i class="fas fa-envelope"></i> Confirmar Email</label>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="form-label-group">
                           <input type="text" class="form-control" id="curp" name="curp" autocomplete="off" required>
                           <label for="register-username" class="label-material labels"><i class="fas fa-id-badge"></i> Curp</label>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="submit" id="regUsers" name="regUsers" class="btn btn-success"><i class="fas fa-check-circle"></i> Enviar</button>
            </div>
         </form>
      </div>
   </div>
</div>