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
                <div class="top_nav">
                  <div class="nav_menu">
                    <nav>
                      <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                      </div>

                      <ul class="nav navbar-nav navbar-right">
                        <li class="">
                          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="../prototipo/imagen/Usuario.jpg" alt="">Julio Pérez
                            <span class=" fa fa-angle-down"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="javascript:;"> Perfil </a></li>
                            <li>
                              <a href="javascript:;">
                                <span class="badge bg-red pull-right"></span>
                                <span>Opciones</span>
                              </a>
                            </li>
                            <li><a href="javascript:;">Ayuda</a></li>
                            <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesion </a></li>
                          </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                          <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">213</span>
                          </a>
                          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                            <li>
                              <a>
                                <span class="image"><img src="" alt="Profile Image" /></span>
                                <span>
                                  <span>John Smith</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                  Film festivals used to be do-or-die moments for movie makers. They were where...
                                </span>
                              </a>
                            </li>
                            <li>
                              <div class="text-center">
                                <a>
                                  <strong>Todas las notificaciones </strong>
                                  <i class="fa fa-angle-right"></i>
                                </a>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">

                  <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
              </div>
            </div>



<?php
include_once 'Plantillas/documento_cierre.inc.php'
 ?>
