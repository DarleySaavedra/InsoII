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
                  <div class="col-md-12">
                    <!-- FORMULARIO PTM -->
                    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registro de Articulo <small>Ingrese datos</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up  pull-right"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoria</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Elige Categoria</option>
                            <option>Entrada</option>
                            <option>Plato de Fondo</option>
                            <option>Bebida</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Descripcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Precio </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelarl</button>
                          <button type="submit" class="btn btn-success">Registrar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>



            <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Modificacion de Articulo</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up  pull-right"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoria</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control">
                    <option>Elige Categoria</option>
                    <option>Entrada</option>
                    <option>Plato de Fondo</option>
                    <option>Bebida</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Descripcion <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Precio </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Modificar</button>
                  <button type="submit" class="btn btn-success">Eliminar</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
                    <!-- FORMULARIO PTM -->
                  </div>
                  <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
              </div>
            </div>



            <?php
              include_once 'Plantillas/documento_cierre.inc.php'
             ?>
