<?php

require ('../assets/php/validaciones/secure_login.php');
require ('../assets/php/validaciones/conexion.php');

$conexion = conexion();

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<?php include '../assets/php/layout/head.php'; ?>

<body class="layout-default">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                <!-- Header -->
                <?php include '../assets/php/layout/header.php'; ?>
                
                <!-- // END Header -->


                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">

                    <div class="page__heading">
                        <div class="container-fluid page__container">
                            <h1 class="mb-0">Cursos</h1>
                        </div>
                    </div>
                    <div class="container-fluid page__container">
                        <div class="tab-content">

                            <button type="button" class="btn btn-primary text-right mb-2" data-toggle="modal" data-target="#modal-agregar">Agregar +</button>

                            <div class="alert alert-dismissible text-white border-0 fade show d-none" id="sede-alert" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong id="content-alert"></strong>
                            </div>
                            
                            <div class="card card-form">
                                <div class="row no-gutters">
                            
                                    <div class="col-lg-12 card-form__body">

                                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                                            <div class="search-form search-form--light m-3">
                                                <input type="text" class="form-control search" placeholder="Buscar">
                                                <button class="btn" type="button"><i class="material-icons">search</i></button>
                                            </div>

                                            <!-- <table class="table mb-0 thead-border-top-0">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Dirección</th>
                                                        <th>Correo</th>
                                                        <th>Telefono</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="staff02">
                                                    
                                                </tbody>
                                            </table> -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- // END header-layout__content -->

            </div>
            <!-- // END header-layout -->

        </div>
        <!-- // END drawer-layout__content -->

        <?php include '../assets/php/layout/menu.php'; ?>

    </div>
    <!-- // END drawer-layout -->

    <div class="mdk-drawer js-mdk-drawer" id="events-drawer" data-align="end">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left" data-perfect-scrollbar>




                <small class="text-dark-gray px-3 py-1">
                    <strong>Thursday, 28 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Marketing Team Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="<?php echo $base; ?>/assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="<?php echo $base; ?>/assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="<?php echo $base; ?>/assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Wednesday, 27 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>07:48 PM</small>
                                <small class="text-dark-gray">30 min</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call Alex</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>



                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Tuesday, 26 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>03:13 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Design Team Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="<?php echo $base; ?>/assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="<?php echo $base; ?>/assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="<?php echo $base; ?>/assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="<?php echo $base; ?>/assets/images/stories/256_rsz_clem-onojeghuo-193397-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Monday, 25 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col d-flex">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call Wendy</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>


                                <div class="avatar avatar-xs">
                                    <img src="<?php echo $base; ?>/assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
                'default': 'index.html',
                'fixed': 'fixed-index.html',
                'fluid': 'fluid-index.html',
                'mini': 'mini-index.html'
            }">
        </app-settings>
    </div>

    <!-- MODAL REGISTRAR SEDES -->
    <div id="modal-agregar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Agregar Sedes</h3>
                </div>
                <div class="modal-body">
                    <div class="px-3">

                        <form action="#" class="was-validated" id="registrar_sede_form">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input class="form-control" type="text" name="nombre" required="" placeholder="Nombre Sede" />
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo:</label>
                                <input class="form-control" type="email" name="correo" required="" placeholder="sede@doe.com" />
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input class="form-control" type="text" name="direccion" required="" placeholder="carrera 1 # 2-29" />
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                <input class="form-control" type="number" required="" name="telefono" placeholder="Numero telefonico" />
                            </div>
                            <div class="form-group">
                                <label for="select01">Institución</label>
                                <select id="select01" name="id_institucion" data-toggle="select" class="form-control">
                                    <option value="">Sleccione la Institucion</option>
                                    <?php 

                                        $sql = $conexion->prepare('SELECT * from institucion');
                                        $sql->execute();

                                        $datos = $sql->fetchAll();

                                        foreach ($datos as $dato) { ?>
                                            <option value="<?php echo $dato['id']; ?>"><?php echo $dato['nombre']; ?></option>
                                        <?php }

                                    ?>

                                </select>
                             </div>
                            <!-- <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="terms" />
                                    <label class="custom-control-label" for="terms">I accept <a href="#">Terms and Conditions</a></label>
                                </div>
                            </div> -->
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Agregar Sede</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- // END .modal-body -->
            </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->
    </div>

    <!-- MODAL EDITAR SEDES -->
    <div id="modal-editar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Editar Sedes</h3>
                </div>
                <div class="modal-body">
                    <div class="px-3">

                        <form action="#" class="was-validated" id="editar_sede_form">
                            <div id="content_modal_editar"></div>
                        </form>
                        
                    </div>
                </div> <!-- // END .modal-body -->
            </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->
    </div>

    <!-- MODAL Eliminar INSTITUCION -->
    <div id="modal-eliminar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="px-3">

                        <h2 class="text-center mb-3" id="content_modal_eliminar"></h2>

                        <input type="hidden" name="id_eliminar" id="id_eliminar">

                        <button type="button" class="btn btn-danger" onclick="eliminar_sede()">Eliminar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                         
                    </div>
                </div> <!-- // END .modal-body -->
            </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->
    </div>

    <?php include '../assets/php/layout/scripts.php'; ?>
    <script src="js/sedes/peticion_sede.js"></script>


</body>

</html>