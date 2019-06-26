    <style type="text/css">
      hr{
  border:         none;
    border-left:    1px solid hsla(200, 10%, 50%,100);
    height:         2vh;
    width:          1px; 
    display: inline-block;
    margin:0px;
  }
    </style>
                  <!--Menu--> 
                     <div class="container-fluid text-right" style="background-color: white;border-bottom: 0.5px solid lightgray" >
                      <nav class="navbar navbar-expand-lg navbar-light container" style="background-color: white">
                          <a class="navbar-brand" href="index.php">
                            <img src="img/Logo CENTRO IST BLANCO-05[1393].png" width="190" height="40" alt="">
                              <hr >
                            <img src="img/Diplomado2-1.png" width="120" height="50">  
                          </a> 
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon">
                              </span>
                          </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <div class="navbar-nav ml-auto">
                            
                                <div class="dropdown pmd-dropdown pmd-user-info ml-auto">
                                  <a href="javascript:void(0);" class="btn-user dropdown-toggle media align-items-center" data-toggle="dropdown" data-sidebar="true" aria-expanded="false">
                                    <img class="mr-2 rounded-circle" src='<?php echo $avatar; ?>' width="40" height="40" alt="avatar">
                                    <div class="media-body" id="usuarioc" style="color: black">
                                    <?php echo $nombre ?>
                                    </div>
                                    <i class="material-icons md-light ml-2 pmd-sm"></i>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a class="dropdown-item" href="participante_index.php">
                                      Modulos
                                    </a>
                                    <a class="dropdown-item" href="editar_perfil.php">
                                      Editar Perfil
                                    </a>
                                    <a class="dropdown-item" href="php/destroysession.php">
                                      Cerrar sesión
                                    </a>
                                  </ul>
                                </div>
                              </div>
                            </div>
                      </nav>
                  </div>  
                <!--Fin menu-->     
         










 <!--Menu-->

                <!--Fin menu-->
