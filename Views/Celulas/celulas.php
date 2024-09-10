<?php 
    headerAdmin($data); 
    /* getModal('modalClientes',$data); */
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <!-- <h1><i class="fas fa-user-tag"></i> <?= $data['page_title'] ?> -->

            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <!-- <?php if($_SESSION['permisosMod']['w']){ ?> -->
            <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle"></i>
                Nueva Celula</button>
            <!-- <?php } ?> -->
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableCelulas">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre de Celula</th>
                                    <th>Estado</th>
                                    <th>Fecha de Creación</th>
                                    <th></th>
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