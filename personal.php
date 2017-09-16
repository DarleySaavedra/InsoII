<?php
include_once 'Plantillas/documento_apertura.inc.php'
 ?>

        <body class="nav-md">
            <div class="container body">
              <div class="main_container">

                <?php
                  include_once 'Plantillas/documento_barralateral.inc.php'
                 ?>

                <!-- top navigation -->
                <?php
                include_once 'Plantillas/documento_navbar.inc.php'
                 ?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                  <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Lista de Personal</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Telefono</th>
                        <th>Categoria</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
<<<<<<< HEAD
                        <td>Diego Francisco</td>
                        <td>Oruna Cabrera</td>
                        <td>06656543</td>
                        <td>965665432</td>
                        <td>Mozo</td>
=======
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
>>>>>>> 65aa5bb017671916be5f44bfd4d9a9640ef7a411
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-3">
                  <button type="submit" class="btn btn-dark" onclick="location.href='mantenimiento_personal.php'">Crear Personal
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                  </button>
                </div>
              </div>
            </div>
                  <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
              </div>
            </div>


            <?php
              include_once 'Plantillas/documento_cierre.inc.php'
             ?>
