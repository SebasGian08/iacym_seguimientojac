<?php 
    headerAdmin($data); 
    getModal('modalProductos',$data);
?>
    <main class="app-content">
      <div class="app-title">
        <div>
            <h1><i class="app-menu__icon fa fa-user-md"></i> <?= $data['page_title'] ?>
              <!-- <?php if($_SESSION['permisosMod']['w']){ ?>
                <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fas fa-plus-circle"></i> Nuevo</button>
              <?php } ?>  -->
            </h1>
        </div>
        
      </div>
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableMedicos">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>DNI</th>
                          <th>Nombres y Apellidos</th>
                          <th>Telefono</th>
                          <th>Especialidad</th>
                          <th>Correo</th>
                          <th>Dirección</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
<?php footerAdmin($data); ?>
    