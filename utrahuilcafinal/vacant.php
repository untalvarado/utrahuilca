
<?php 
require_once '../config/conexion.php';
//include('top-cache.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"; charset="utf-8"/> 
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Utrahuilca - Cooperativa Latinoamericana de Ahorro Y Credito</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="Cooperativavirtual.css">
  <!-- Styles slider bottom -->
  <link rel="stylesheet" href="./css/menunew.css">
  <link rel="stylesheet" href="./css/menunavbar.css">
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="css/styleresena.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/sliderbottom.css">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441397-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-136441397-1');
  </script>
  <script>  
    function mostrarVentanaRevalorizacion(){

      $(document).ready(function(){
        $("#mostrarVentanaRevalorizacion").modal("show");
      });
    }
  </script> 
  <!-- PopUp Revalorizacon--> 
  <script>  
    function mostrarVentanaConcurso(){
      $(document).ready(function(){
        $("#mostrarVentanaConcurso").modal("show");
      });
    }
  </script> 
  <style>  
    .pagination {
      height: 36px;
      margin: 18px 0;
    }
    .pagination ul {
      border-radius: 3px 3px 3px 3px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
      display: inline-block;
      margin-bottom: 0;
      margin-left: 0;
    }
    .pagination li {
      display: inline;
    }
    .pagination a {
      -moz-border-bottom-colors: none;
      -moz-border-image: none;
      -moz-border-left-colors: none;
      -moz-border-right-colors: none;
      -moz-border-top-colors: none;
      border-color: #DDDDDD;
      border-style: solid;
      border-width: 1px 1px 1px 0;
      float: left;
      line-height: 34px;
      padding: 0 14px;
      text-decoration: none;
    }
    .pagination a:hover, .pagination .active a {
      background-color: #F5F5F5;
    }
    .pagination .active a {
      color: #999999;
      cursor: default;
    }
    .pagination .disabled a, .pagination .disabled a:hover {
      background-color: transparent;
      color: #999999;
      cursor: default;
    }
    .pagination li:first-child a {
      border-left-width: 1px;
      border-radius: 3px 0 0 3px;
    }
    .pagination li:last-child a {
      border-radius: 0 3px 3px 0;
    }
    .pagination-centered {
      text-align: center;
    }
    .pagination-right {
      text-align: right;
    }
  </style>
  <!-- PopUp politicas reclutamiento--> 
  <script>  
    function mostrarVentanaPoliticas()
    {
      $(document).ready(function()
      {
       $("#mostrarmodalpoliticas").modal("show");
     });
    }
  </script> 
</head>

<body>
  <div class="fondo"></div>
  <div id="fondo-modal">
    <!-- Modal PopUP politicas-->
    <div class="modal fade" id="mostrarmodalpoliticas" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
           <h3>Pol&iacute;ticas Generales de Reclutamiento</h3> 
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>

         <div class="modal-body" align="center" >
           <div class="single-blog-post post-style-3 mt-50 " data-wow-delay="0.2s">

            <!-- Post Thumbnail -->
            <div class="post-thumbnail">

              <!-- Post Content -->
              <div class="post-content d-flex align-items-center justify-content-between">

                <p><ul>
                  <li style="text-align: justify;">UTRAHUILCA brindar&aacute; igualdad de oportunidades a los solicitantes de empleo, independientemente de su raza, sexo, religi&oacute;n o afinidad pol&iacute;tica.</li>  <br>
                  <li style="text-align: justify;">Se dar&aacute; prioridad en sus procesos de reclutamiento a personas que residan o sean oriundas de la ciudad o municipio donde se requiera la vinculaci&oacute;n.</li>  <br>
                  <li style="text-align: justify;">Los aspirantes a laborar en la Cooperativa UTRAHUILCA deber&aacute;n tener una moralidad crediticia comprobada.</li>  <br>
                  <li style="text-align: justify;">En cumplimiento del art&iacute;culo 112 del estatuto de la Cooperativa UTRAHUILCA, los aspirantes a ejercer un cargo en esta entidad, no deber&aacute;n tener, con los funcionarios actuales, ninguno de los parentescos relacionados a continuaci&oacute;n:</li>  <br>
                  <li style="text-align: justify;">Conyugue, compa&ntilde;ero permanente, padre, hijo/a, abuelo/a, nieto/a, hermano/a, suegro/a o yerno/nuera.</li>   <br>
                  <li style="text-align: justify;">UTRAHUILCA se reserva el derecho de admisi&oacute;n en sus procesos de selecci&oacute;n, cuando se considere que el aspirante no se ajusta al perfil requerido para el cargo vacante, o su participaci&oacute;n va en contrav&iacute;a de lo establecido en los reglamentos de la cooperativa y/o el c&oacute;digo de conducta y buen gobierno cooperativo. </li>
                </ul>
              </p>
              <!-- Catagory       -->
              <div class="post-tag"></div>
              <!-- Headline -->
              
              <!-- Post Meta -->
              <div class="post-meta">

              </div>
            </div>
          </div>

        </div>

        
      </div>
      <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
      </div>
    </div>
  </div>
</div>  
<!-- Preloader  -->
<div class="preloader d-flex align-items-center justify-content-center">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div> 


<!-- Modal PopUP Revalorizacion-->
<div class="modal fade" id="mostrarVentanaRevalorizacion" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
       <h3>Revalorizaci&oacutenes 2018</h3> 
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>

     <div class="modal-body" align="center" >
      <form action="./Revalorizacion.php" method="post" target="_self">

        <div>
          <label for="mail">Numero Documento:</label>
          <input type="number" id="textd" name="documento" maxlength="12" required/>
        </div>
        
        <div>
          <label for="msg">Fecha expedicion:</label>
          <input type="date" id="fech" name="fech" required/>
        </div>
        
        <div class="modal-footer">
          <button type="submit"  class="btn btn-danger">Consultar</button>
        </div>
      </form>
    </div>
               <!-- <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
            </div>   -->
          </div>
        </div>
      </div>  
      <!-- End Modal Revalorizaciones -->

      <!-- Modal PopUP Concurso-->
      <div class="modal fade" id="mostrarVentanaConcurso" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
           <div class="modal-header">
             <h3>AHORRANDO VOY GANANDO</h3> 
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           </div>

           <div class="modal-body" align="center" >
            <form action="./concurso.php" method="post" target="_self">
              <div>
               <label for="iddd">Tipo Documento:</label>
               <select name="tipoide" required>
                <option value="C">CEDULA CIUDADANIA</option>
                <option value="E">CEDULA EXTRANJERIA</option>
                <option value="M">PERMISO ESPECIAL DE PERMANENCIA</option>
                <option value="P">PASAPORTE</option>
              </select> 
            </div>
            <div>
              <label for="mail">Documento:</label>
              <input type="number" id="textd" name="documento" maxlength="12" required/>
            </div>
            
            <div>
              <label for="msg">Fecha expedicion:</label>
              <input type="date" id="fech" name="fech" required/>
            </div>
            
            <div class="modal-footer">
              <button type="submit"  class="btn btn-danger">Consultar</button>
            </div>
          </form>
        </div>
               <!-- <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
            </div>   -->
          </div>
        </div>
      </div>  
      <!-- End Modal Concurso -->

      <!-- Modal PopUP Concurso-->
      <div class="modal fade" id="mostrarVentanaConcursoBRE" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
           <div class="modal-header">
             <h3> MESES BRE DEL CRÉDITO</h3> 
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           </div>

           <div class="modal-body" align="center" >
            <form action="./ConcursoBRE.php" method="post" target="_self">
              <div>
               <label for="iddd">Tipo Documento:</label>
               <select name="tipoide">
                <option value="C">CEDULA CIUDADANIA</option>
                <option value="E">CEDULA EXTRANJERIA</option>
                <option value="M">PERMISO ESPECIAL DE PERMANENCIA</option>
                <option value="P">PASAPORTE</option>
              </select> 
            </div>
            <div>
              <label for="mail">Documento:</label>
              <input type="number" id="textd" name="documento" maxlength="12"/>
            </div>
            
            <div>
              <label for="msg">Fecha expedicion:</label>
              <input type="date" id="fech" name="fech"/>
            </div>
            
            <div class="modal-footer">
              <button type="submit"  class="btn btn-danger">Consultar</button>
            </div>
          </form>
        </div>
               <!-- <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
            </div>   -->
          </div>
        </div>
      </div>  
      <!-- End Modal Concurso -->

      <!-- menunavbar vertical -->
      <nav id="menunavbar" class="paraizq">
        <ul>
          <li>
            <p><b>Inicio</b></p>
          </li>
          <li>
            <p><b>Conózcanos</b></p>
            <ul>
              <li>
                <p>Quienes Somos</p>
                <ul>
                  <li>
                    <a href="historia">Reseña histórica</a>
                  </li>
                  <li>
                    <a href="somos">Misión y Visión</a>
                  </li>
                  <li>
                    <a href="himno">Himno</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="trabajo">Trabaje con nosotros</a>
              </li>
              <li>
                <a href="alianza">Alianzas</a>
              </li>
              <li>
                <a href="agencias">Agencias</a>
              </li>
            </ul>
          </li>
          <li>
            <p><b>Ahorro</b></p>
            <ul>
              <li>
                <p>Persona Natural</p>
                <ul>
                 <li>
                  <a href="AhorroNatural.php?tabPag=1">Utracrecer</a>
                </li>
                <li>
                  <a href="AhorroNatural.php?tabPag=2">Utradiario</a>
                </li>
                <li>
                  <a href="AhorroNatural.php?tabPag=3">Aportes Sociales</a>
                </li>
                <li>
                  <a href="AhorroNatural.php?tabPag=4">Ahorro Permanente</a>
                </li>
                <li>
                  <a href="AhorroNatural.php?tabPag=5">Utramás</a>
                </li>

                <li>
                  <a href="AhorroNatural.php?tabPag=6">Utravivienda</a>
                </li>
                <li>
                  <a href="AhorroNatural.php?tabPag=7">CDAT</a>
                </li>
                <li>
                  <a href="AhorroNatural.php?tabPag=8">Infantil-Juvenil</a>
                </li>
                <li>
                  <a href="AhorroNatural.php?tabPag=9">Utra-Amigos</a>
                </ul>
              </li>


              <li>
                <p>Persona Jurídica</p>
                <ul>
                  <li>
                    <a href="AhorroJuridico_Empresas.php?tabPag=1">Aportes Sociales</a>
                  </li>
                  <li>
                    <a href="AhorroJuridico_Empresas.php?tabPag=2">Ahorro Permanente</a>
                  </li>
                  <li>
                    <a href="AhorroJuridico_Empresas.php?tabPag=3">Utramás</a>
                  </li>
                  <li>
                    <a href="AhorroNatural.php?tabPag=4">Utracrecer</a>
                  </li>
                  <li>
                    <a href="AhorroNatural.php?tabPag=5">Utradiario</a>
                  </li>
                  <li>
                    <a href="AhorroNatural.php?tabPag=6">CDAT</a>
                  </li>
                </ul>
              </li>

            </ul>
          </li>
          <li>
            <p><b>Crédito</b></p>
            <ul>
              <li>
                <p>Persona Natural</p>
                <ul>
                 <li>
                  <a href="CreditoNatural.php?tabPag=1">Libre Inversión</a>
                </li>
                <li>
                  <a href="CreditoNatural.php?tabPag=2">Microcrédito</a>
                </li>
                <li>
                  <a href="CreditoEducativo.php">Educativo</a>
                </li>
                <li>
                  <a href="CreditoNatural.php?tabPag=3">Utravance</a>
                </li>
                <li>
                  <a href="CreditoNatural.php?tabPag=4">Utrarápido</a>
                </li>
                <li>
                  <a href="CreditoNatural.php?tabPag=5">Especial</a>
                </li>
                <li>
                  <a href="CreditoNatural.php?tabPag=6">Recreación y Turismo</a>
                </li>
                <li>
                  <a href="CreditoNatural.php?tabPag=7">Salud</a>
                </li>
                <li>
                  <a href="CreditoNatural.php?tabPag=8">Bienes e Inmuebles</a>
                </li>
              </ul>
            </li>     
            <li>
              <p>Persona Jurídica</p>
              <ul>
               <li>
                <a href="CreditoJuridico_Empresas.php?tabPag=1">Especial</a>
              </li>
              <li>
                <a href="CreditoJuridico_Empresas.php?tabPag=2">Utrarápido</a>
              </li>
              <li>
                <a href="CreditoJuridico_Empresas.php?tabPag=3">Libre Inversión</a>
              </li>
              <li>
                <a href="CreditoJuridico_Empresas.php?tabPag=4">Bienes e Inmuebles</a>
              </li>
              <li>
                <a href="CreditoJuridico_Empresas.php?tabPag=5">Microcrédito</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        <p><b>Enterése</b></p>
        <ul>
         <?php 
         $sql=" SELECT * FROM tasa WHERE estado=1";
         $result=mysqli_query($conexion,$sql);
         while ($mostrar=mysqli_fetch_array($result)) {
          ?>
          <li>
            <a href="../file1/<?php  echo $mostrar['archivost'];?>" target="_blank">Tasas</a>
          </li>
        <?php }  ?>
        <?php 
        $sql=" SELECT * FROM tarifas WHERE estado=1";
        $result=mysqli_query($conexion,$sql);
        while ($mostrar=mysqli_fetch_array($result)) {
          ?>
          <li>
            <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank" >Tarifas</a>
          </li>
        <?php }  ?>
        <li>
          <a href="#format">Formatos</a>
        </li>
        <li>
          <a href="javascript:mostrarVentanaRevalorizacion();">Revalorizaciones</a>
        </li>
        <li>
          <a href="">Concursos</a>
          <ul>
            <li>
              <a href="javascript:mostrarVentanaConcurso();">Ahorrando Voy Ganando</a>
            </li>
            <li>
              <a href="javascript:mostrarVentanaConcursoBRE();">Meses Bre</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <p><b>¿Qué necesita?</b></p>
    </li>
    <li style="margin-let: -20px; padding: 0 !important">
      <p><img src="AgenciaVirtual/Cooperativa_Virtual_Utrahuilca_OK-03.svg" class="img-fluid" alt="img-virtual"  /></p>
      <ul>
        <li>
          <p>SOY ASOCIADO - Persona Natural</p>
          <ul>
            <li>
              <a  href="#exampleModal" data-toggle="modal">Transferencias</a>
            </li>
            <li>
              <a  href="#exampleModal" data-toggle="modal">Pagos</a>
            </li>
            <li>
              <a href="#UtraPortalNuatural" data-toggle="modal">Certificados</a>
            </li>
            <li>
              <a href="#UtraPortalNuatural" data-toggle="modal">Consultas de Cuentas</a>
            </li>
            <li>
              <a href="#UtraPortalNuatural" data-toggle="modal">Extractos</a>
            </li>
          </ul>
          <br>
          <p>SOY ASOCIADO - Persona Jurídica</p>
          <ul>
            <li>
              <a href="#UtraPortalJuridica" data-toggle="modal">Certificados</a>
            </li>
            <li>
              <a href="#UtraPortalJuridica" data-toggle="modal">Consultas de Cuentas</a>
            </li>
            <li>
              <a href="#UtraPortalJuridica" data-toggle="modal">Extractos</a>
            </li>
          </ul>

        </li>
      </ul>
    </li>
  </ul>




  <a href="#" id="showmenunavbar"> <i class="fa fa-align-justify"></i></a> </nav>
  <!-- /menunavbar vertical --> 


  
  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 d-flex justify-content-between">
            <!-- Logo Area -->
            <div class="logo"></div>
            <div class="top-contact-info d-flex align-items-center">
             <span>Siguenos En </span>
             <a href="https://www.facebook.com/utrahuilca/"><i class="fa fa-facebook" aria-hidden="true"></i></a> <span></span>
             <a href="https://twitter.com/utrahuilca?lang=es"><i class="fa fa-twitter" aria-hidden="true"></i>   </a>  <span></span>
             <a href="https://www.instagram.com/utrahuilca/"><i class="fa fa-instagram" aria-hidden="true"></i>   </a>  <span></span>
             <a href="https://www.linkedin.com/company/cooperrativa-latinoamericana-de-ahorro-y-cr%C3%A9dito-utrahuilca/"><i class="fa fa-linkedin" aria-hidden="true"></i>  </a> <span></span>
             <a href="https://www.youtube.com/channel/UCZa_TvUo3FlzVz-jnn_67jw"><i class="fa fa-youtube" aria-hidden="true"></i>  </a>
                <!--<form  role="search">
                                                    <div>
                                                        <input type="search" id="mySearch" name="q" placeholder="Buscar" size="30">
                                                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                                      </div>
                                                    </form>-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="credit-main-menu" id="sticker">
                                            <div class="classy-nav-container navbar-expand-sm breakpoint-off">
                                              <div class="container">
                                                <nav class="classy-navbar" id="creditNav">
                                                  <div class="classy-navbar-toggler"></div>
                                                  <div class="contact">
                                                    <a href="index"><img src="img/core-img/logo.png" alt=""></a>
                                                  </div>
                                                  <div class="classy-menu">
                                                    <div class="classycloseIcon">
                                                      <div class="cross-wrap"></div>
                                                    </div>
                                                    <div>
                                                      <ul class="navmax">
                                                        <li>
                                                          <a href="index"><i class="fa fa-home"></i><b>Inicio</b></a>
                                                        </li>
                                                        <li>
                                                          <a href=""><b>Conózcanos</b></a>
                                                          <ul>
                                                            <li>
                                                              <a href="">Quiénes somos</a>
                                                              <ul>
                                                                <li>
                                                                  <a href="historia">Reseña histórica</a>
                                                                </li>
                                                                <li>
                                                                  <a href="somos">Misión y Visión</a>
                                                                </li>
                                                                <li>
                                                                  <a href="himno">Himno</a>
                                                                </li>
                                                              </ul>
                                                            </li>
                                                            <li>
                                                              <a href="trabajo">Trabaje con nosotros</a>
                                                            </li>
                                                            <li>
                                                              <a href="alianza">Alianzas</a>
                                                            </li>
                                                            <li>
                                                              <a href="agencias">Agencias</a>
                                                            </li>
                                                            <li>
                                                              <a href="pqrs">PQRSF</a>
                                                            </li>
                                                          </ul>
                                                        </li>
                                                        <li>
                                                          <a href=""><b>Ahorro</b></a>
                                                          <ul>
                                                            <li>
                                                              <a href="">Persona Natural</a>
                                                              <ul>
                                                               <li>
                                                                <a href="AhorroNatural.php?tabPag=1">Utracrecer</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=2">Utradiario</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=3">Aportes Sociales</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=4">Ahorro Permanente</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=5">Utramás</a>
                                                              </li>

                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=6">Utravivienda</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=7">CDAT</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=8">Infantil-Juvenil</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=9">Utra-Amigos</a>
                                                              </li>
                                                            </ul>
                                                          </li>
                                                          <li>
                                                            <a href="">Persona Jurídica</a>
                                                            <ul>
                                                              <li>
                                                                <a href="AhorroJuridico_Empresas.php?tabPag=1">Aportes Sociales</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroJuridico_Empresas.php?tabPag=2">Ahorro Permanente</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroJuridico_Empresas.php?tabPag=3">Utramás</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=4">Utracrecer</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=5">Utradiario</a>
                                                              </li>
                                                              <li>
                                                                <a href="AhorroNatural.php?tabPag=6">CDAT</a>
                                                              </li>
                                                            </ul>
                                                          </li>

                                                        </ul>
                                                      </li>
                                                      <li>
                                                        <a href=""><b>Crédito</b></a>
                                                        <ul>
                                                          <li>
                                                            <a href="">Persona Natural</a>
                                                            <ul>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=1">Libre Inversión</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=2">Microcrédito</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoEducativo.php">Educativo</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=3">Utravance</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=4">Utrarápido</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=5">Especial</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=6">Recreación y Turismo</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=7">Salud</a>
                                                              </li>
                                                              <li>
                                                                <a href="CreditoNatural.php?tabPag=8">Bienes e Inmuebles</a>
                                                              </li>
                                                            </ul>
                                                          </li>     
                                                          <li>
                                                            <a href="">Persona Jurídica</a>
                                                            <ul>
                                                             <li>
                                                              <a href="CreditoJuridico_Empresas.php?tabPag=1">Especial</a>
                                                            </li>
                                                            <li>
                                                              <a href="CreditoJuridico_Empresas.php?tabPag=2">Utrarápido</a>
                                                            </li>
                                                            <li>
                                                              <a href="CreditoJuridico_Empresas.php?tabPag=3">Libre Inversión</a>
                                                            </li>
                                                            <li>
                                                              <a href="CreditoJuridico_Empresas.php?tabPag=4">Bienes e Inmuebles</a>
                                                            </li>
                                                            <li>
                                                              <a href="CreditoJuridico_Empresas.php?tabPag=5">Microcrédito</a>
                                                            </li>
                                                          </ul>
                                                        </li>
                                                      </ul>
                                                    </li>
                                                    <li>
                                                      <a href=""><b>Enterése</b></a>
                                                      <ul>
                                                       <?php 
                                                       $sql=" SELECT * FROM tasa WHERE estado=1";
                                                       $result=mysqli_query($conexion,$sql);
                                                       while ($mostrar=mysqli_fetch_array($result)) {
                                                        ?>
                                                        <li>
                                                          <a href="../file1/<?php  echo $mostrar['archivost'];?>" target="_blank">Tasas</a>
                                                        </li>
                                                      <?php }  ?>
                                                      <?php 
                                                      $sql=" SELECT * FROM tarifas WHERE estado=1";
                                                      $result=mysqli_query($conexion,$sql);
                                                      while ($mostrar=mysqli_fetch_array($result)) {
                                                        ?>
                                                        <li>
                                                          <a href="../file1/<?php  echo $mostrar['archivost'];?>"target="_blank" >Tarifas</a>
                                                        </li>
                                                      <?php }  ?>
                                                      <li>
                                                        <a href="index.php#format">Formatos</a>
                                                      </li>
                                                      <li>
                                                        <a href="javascript:mostrarVentanaRevalorizacion();">Revalorizaciones</a>
                                                      </li>
                                                      <li>
                                                        <a href="">Concursos</a>
                                                        <ul>
                                                          <li>
                                                            <a href="javascript:mostrarVentanaConcurso();">Ahorrando Voy Ganando</a>
                                                          </li>
                                                          <li>
                                                            <a href="javascript:mostrarVentanaConcursoBRE();">Meses Bre</a>
                                                          </li>
                                                        </ul>
                                                      </li>
                                                    </ul>
                                                  </li>
                                                  <li>
                                                    <a href=""><b>¿Qué necesita?</b></a>
                                                  </li>
                                                </ul>
                                              </div>
                                              <div class="classynav">
                                                <ul>
                                                  <li class="float-right position-absolute imgcoop" id="imgempresa" style=
                                                  "z-index: 10000 !important;">
                                                  <div class="megamenu position-absolute " id="virtualCoop">
                                                    <div id="persona" style="z-index: 1 !important; padding: 0; margin:0" class="ml-5 mr-5 py-3">
                                                      <ul style="padding: 0; margin:0; margin-top: 20px">
                                                        <li class="" style="color: black!important; font-weight: bold;margin-left: 5%;cursor: pointer;font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;font-size: 17px;">
                                                          SOY ASOCIADO - Persona Natural
                                                          <ul>
                                                            <li>
                                                              <a href="#exampleModal" data-toggle="modal" style=
                                                              "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                              "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Tus Cuentas de Ahorro">
                                                            Transferencias</a>
                                                          </li>
                                                          <li>
                                                            <a href="#exampleModal" data-toggle="modal" style=
                                                            "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;" title=
                                                            "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                                          Pagos</a>
                                                        </li>
                                                        <li>
                                                          <a href="#UtraPortalNuatural" data-toggle="modal" style=
                                                          "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                          "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                                        Certificados</a>
                                                      </li>
                                                      <li>
                                                        <a href="#UtraPortalNuatural" data-toggle="modal" style=
                                                        "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                        "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                                      Consultas de Cuentas</a>
                                                    </li>
                                                    <li>
                                                      <a href="#UtraPortalNuatural" data-toggle="modal" style=
                                                      "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                      "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                                    Extractos</a>
                                                  </li>
                                                </ul>
                                              </li>
                                            </ul>
                                            <br>
                                            <ul>
                                              <li class="" style=
                                              "color: black!important; font-weight: bold;margin-left: 5%;cursor: pointer; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;font-size: 17px;">
                                              SOY ASOCIADO - Persona  Jurídica
                                              <ul>
                                                <li>
                                                  <a href="#UtraPortalJuridica" data-toggle="modal" style=
                                                  "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                  "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                                Consultas de Cuentas</a>
                                              </li>
                                              <li>
                                                <a href="#UtraPortalJuridica" data-toggle="modal" style=
                                                "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                                "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                              Extractos</a>
                                            </li>
                                            <li>
                                              <a href="#UtraPortalJuridica" data-toggle="modal" style=
                                              "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;"  title=
                                              "Por medio de Nuestra Cooperativa virtual en esta Sección Prodras Relizar Consultas de Extractos">
                                            Certificados</a>
                                          </li>
                                        </ul>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </header>
              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" id="exampleModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-header bg-white font-weight-bold" style="width: 165px; height:55px">
                    <b>Soy Asociado <br>
                    Persona Natural</b>
                  </div>
                  <div class="modal-content" style="border: 1px solid white">
                    <div class="modal-body pb-5 mt-3" style="margin: 0;padding: 0;">
                      <div id="contenido1">
                        <nav>
                          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="background: #1f8a32">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><b style="font-size: 25px; color: white">¿Usuario <br> Nuevo?</b></a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><b style="font-size: 25px; color: white">Usuario <br>Registrado</b></a>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <h1 class="text-center mt-5" style="color: #eb9008">Tenga en Cuenta</h1>
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Sí aún no está registrado en la cooperativa virtual, acérquese a la agencia de UTRAHUILCA más cercana, actualice sus datos y realice el registro con su asesor de confianza; si ya actualizó sus datos durante el último año y no cuenta con una agencia a su alcance, realice los siguientes pasos:</p>
                            <div class="float-right mr-5" style="cursor: pointer;">
                              <div id="next1"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="col text-center mt-5">
                              <button class="btn btn-lg text-white w-50"  role="link" onclick="window.location=' https://multiportal.redcoopcentral.com/multiportalvisio/Login/Index?ENTIDAD=00000048#'" style="background: #eb9008">Ingresar</button>
                              <p class="font-weight-bold"> <a href="#Recomendaciones" data-toggle="modal" >Ver recomendaciones de seguridad </a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="contenido2" style="display: none;">
                        <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 1</h1>
                        <center>
                          <p class="text-dark mt-3 ml-5 mb-5 w-50 mr-5" style="font-size: 25px">Descargue el formato de solicitud del servicio virtual <b style="color:#eb9008; font-size: 30px"> <a href="AgenciaVirtual/ASO-FO-020 SOLICITUD SERVICIO MULTIPOTAL UTRAHUILCA.docx" target="_blank"> AQUÍ.</a></b></p>
                        </center>
                        <div class="float-left mr-5 ml-5" style="cursor: pointer;"> 
                          <div id="previus2"><h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1></div>
                        </div>
                        <div class="float-right mr-5" style="cursor: pointer;"> 
                          <div id="next2"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                        </div>
                      </div>
                      <div id="contenido3" style="display: none">
                        <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 2</h1>
                        <center>
                          <p class="text-dark mt-3 ml-5 mb-5 w-50 mr-5" style="font-size: 25px">Diligencie, imprima, <b style="color:#eb9008; font-size: 30px"> firme </b> y escaneé el formato.</p>
                        </center>
                        <div class="float-left mr-5 ml-5" style="cursor: pointer;"> 
                          <div id="previus3"><h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1></div>
                        </div>
                        <div class="float-right mr-5" style="cursor: pointer;">
                          <div id="next3"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                        </div>
                      </div>
                      <div id="contenido4" style="display: none">
                        <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 3</h1>
                        <center>
                          <p class="text-dark mt-3 ml-5 mb-5 w-75 mr-5" style="font-size: 25px">Envíe el formato firmado al correo electrónico: <br><b style="color:#eb9008; font-size: 30px"> admonoperacion@utrahuilca.com </b> </p>
                        </center>
                        <div class="float-left mr-5 ml-5" style="cursor: pointer;"> 
                          <div id="previus4"><h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1></div>
                        </div>
                        <div class="float-right mr-5" style="cursor: pointer;">
                          <div id="next4"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                        </div>
                      </div>
                      <div id="contenido5" style="display: none">
                        <h1 class="text-center mt-5" style="color: #eb9008">Paso No. 4</h1>
                        <center>
                          <p class="text-dark mt-3 ml-5 mb-5 w-75 mr-5" style="font-size: 25px">De 24 a 48 horas, UTRAHUILCA enviará un correo electrónico para continuar con el registro. </p>
                        </center>
                        <div class="float-left mr-5 ml-5" style="cursor: pointer;"> 
                          <div id="previus5"><h1 style="color: #eb9008"><i class="fa fa-backward fa-lg" aria-hidden="true"></i> Atrás</h1></div>
                        </div>
                        <div class="float-right mr-5" style="cursor: pointer;">
                          <div id="next5"><h1 style="color: #eb9008">Cerrar <i class="fa fa-close fa-lg" aria-hidden="true"></i></h1></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ##### Header Area End ##### -->

              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" id="UtraPortalNuatural" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-header bg-white font-weight-bold" style="width: 165px; height:55px">
                    <b>Soy Asociado <br>
                    Persona Natural</b>
                  </div>
                  <div class="modal-content" style="border: 1px solid white">
                    <div class="modal-body pb-5 mt-3" style="margin: 0;padding: 0;">
                      <div id="contenido11">
                        <nav>
                          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="background: #1f8a32">
                            <a class="nav-item nav-link active" id="nav-home-tab1" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home" aria-selected="true"><b style="font-size: 25px; color: white">¿Usuario <br> Nuevo?</b></a>
                            <a class="nav-item nav-link" id="nav-profile-tab1" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile" aria-selected="false"><b style="font-size: 25px; color: white">Usuario <br>Registrado</b></a>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
                            Debe tener correo electrónico y número de celular actualizado y correcto, ya que estos serán los medios que se usarán para la confirmación al momento de registro.</p>
                            <div class="col text-center mt-5">
                              <button class="btn btn-lg text-white w-50"  role="link" onclick="window.location='http://192.168.101.137:8081/Registry.aspx'" style="background: #eb9008">Registrarse</button>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
                            Podrá realizar consultas de información, generar extractos, certificaciones tributarias y Certificado de Asociado.</p>
                            <div class="col text-center mt-5">
                              <button class="btn btn-lg text-white w-50" role="link" onclick="window.location='http://192.168.101.137:8081/Login.aspx'" style="background: #eb9008">Ingresar</button>
                              <p class="font-weight-bold"> <a href="#Recomendaciones" data-toggle="modal" >Ver recomendaciones de seguridad </a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ##### Header Area End ##### -->



              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" id="UtraPortalJuridica" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-header bg-white font-weight-bold" style="width: 165px; height:55px">
                    <b>Soy Asociado <br>
                    Persona Jurídica</b>
                  </div>
                  <div class="modal-content" style="border: 1px solid white">
                    <div class="modal-body pb-5 mt-3" style="margin: 0;padding: 0;">
                      <div id="contenido11">
                        <nav>
                          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist" style="background: #1f8a32">
                            <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab" href="#nav-home2" role="tab" aria-controls="nav-home" aria-selected="true"><b style="font-size: 25px; color: white">¿Usuario <br> Nuevo?</b></a>
                            <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile" aria-selected="false"><b style="font-size: 25px; color: white">Usuario <br>Registrado</b></a>
                          </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
                            Debe tener correo electrónico y número de celular actualizado y correcto, ya que estos serán los medios que se usarán para la confirmación al momento de registro.</p>
                            <div class="col text-center mt-5">
                              <button class="btn btn-lg text-white w-50"  role="link" onclick="window.location='http://192.168.101.137:8081/Registry.aspx'" style="background: #eb9008">Registrarse</button>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">
                            Podrá realizar consultas de información, generar extractos, certificaciones tributarias y Certificado de Asociado.</p>
                            <div class="col text-center mt-5">
                              <button class="btn btn-lg text-white w-50" role="link" onclick="window.location='http://192.168.101.137:8081/Login.aspx'" style="background: #eb9008">Ingresar</button>
                              <p class="font-weight-bold"> <a href="#Recomendaciones" data-toggle="modal" >Ver recomendaciones de seguridad </a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ##### Header Area End ##### -->





              <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" tabindex="-1" id="Recomendaciones" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-header bg-white font-weight-bold" style="width: 165px; height:55px">
                    <b>Recomendaciones
                    </b>
                  </div>
                  <div class="modal-content" style="border: 1px solid white">
                    <div class="modal-body pb-5 mt-3" style="margin: 0;padding: 0;">
                      <div id="contenido6">
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <h3 class="text-center mt-5" style="color: #eb9008">TENGA EN CUENTA LAS SIGUIENTES RECOMENDACIONES DE SEGURIDAD:</h3>
                            <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Realice sus transacciones únicamente desde equipos de uso personal, evite el uso de equipos ubicados en sitios públicos o que no sean de absoluta confianza como los café Internet, salas universitarias o lugares donde extraños puedan tener acceso a su información confidencial. </p>
                            <div class="float-right mr-5" style="cursor: pointer;">
                              <div id="next6"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="contenido7" style="display: none;">
                        <h1 class="text-center mt-5" style="color: #eb9008">Recomendaciones</h1>
                        <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Nunca ingrese a través de enlaces en correos electrónicos falsos (phishing), que puedan llevarle a sitios fraudulentos. Recuerde que UTRAHUILCA no solicita información confidencial por este medio. <br></p>

                        <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">El Usuario y la Clave Principal es personal e intransferible, no se puede compartir con nadie, darlas a conocer generará riesgos de fraudes.<br></p>
                        <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Utilice contraseñas fáciles de recordar para usted, memorícelas y no la escriba en ningún lugar, en caso de olvidar la clave debe ingresar a la Cooperativa Virtual UTRAHUILCA para reestablecerla.<br></p>



                        <div class="float-right mr-5" style="cursor: pointer;">
                          <div id="next7"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                        </div>
                      </div>

                      <div id="contenido8" style="display: none">
                        <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Para mayor seguridad NO utilice en sus claves: 
                          <i class="fa fa-check "></i> Secuencia de números, ejemplo: 1234, 5678…
                          <br>
                        </p>
                        <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px"> <i class="fa fa-check "></i> Los números de su teléfono celular, fecha de cumpleaños, fechas de nacimiento, número de documento de identidad o dirección.
                          <br>
                          <i class="fa fa-check "></i> El mismo carácter, por ejemplo 1111, 2222, 3333 …
                          <br>
                          <i class="fa fa-check "></i> Los mimos caracteres numéricos que conforman el nombre de su usuario en la agencia virtual (Si los tiene).
                          <br></p>
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Utilice contraseñas fáciles de recordar para usted, memorícelas y no la escriba en ningún lugar, en caso de olvidar la clave debe ingresar a la Cooperativa Virtual UTRAHUILCA para reestablecerla.<br></p>

                          <div class="float-right mr-5" style="cursor: pointer;">
                            <div id="next8"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                          </div>
                        </div>
                        <div id="contenido9" style="display: none">
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">UTRAHUILCA nunca solicitará el cambio de claves a través de correo electrónico o mensajes de texto.<br></p>
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Nunca preste su cuenta para recibir fondos cuyo origen usted desconoce.<br></p>
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">El Usuario y la Clave Principal es personal e intransferible, no se puede compartir con nadie, darlas a conocer generará riesgos de fraudes. <br></p>
                          <div class="float-right mr-5" style="cursor: pointer;">
                            <div id="next9"><h1 style="color: #eb9008">Continúe <i class="fa fa-forward fa-lg" aria-hidden="true"></i></h1></div>
                          </div>
                        </div>

                        <div id="contenido10" style="display: none">
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">La Cooperativa Virtual UTRAHUILCA no permite conexiones simultáneas, por lo tanto el usuario solo podrá tener una única sesión activa.<br></p>
                          <p class="text-dark mt-3 ml-5 mr-5 text-justify" style="font-size: 25px">Asegurarse de cerrar sesión una vez termine las transacciones para evitar que otros ingresen a ella. Dejar las sesiones abiertas pone en peligro la privacidad y seguridad de su información. Siempre finalice la sesión de Cooperativa Virtual UTRAHUILCA a través de la opción “Cierre de Sesión”.<br></p>
                          <div class="float-right mr-5" style="cursor: pointer;">
                            <button type="button"  data-dismiss="modal"><h1 style="color: #eb9008">Cerrar <i class="fa fa-close fa-lg" aria-hidden="true"></i></h1></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ##### Header Area End ##### -->



                <!-- ##### Call To Action Start ###### -->
                <section class="cta-area d-flex flex-wrap">
                  <!-- Cta Content -->
                  <div class="cta-content">
                    <!-- Section Heading -->
                    <div class="section-heading white">
                      <div class="line"></div>
                      <p>Institucional</p>
                      <h2>Trabaja con Nosotros</h2>
                    </div>
                    <h6 class="mb-0">Nuestro talento humano es la mayor fortaleza que tenemos, queremos que hagas parte de nuestro proyecto cooperativo, que trabaja incansablemente por el desarrollo personal y profesional de cada uno de sus colaboradores/as.</h6>
                    <br>  
                  </div>
                  <!-- Cta Thumbnail -->
                  <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/19.jpg);"></div>
                </section>

                <div class="regular-page-wrap section-padding-100">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-12 col-md-10 col-lg-8">
                        <?php
                        require ('paginator.php');
                   //DO NOT limit this query with LIMIT keyword, or...things will break!
                        $query = "SELECT * FROM `comvocatorias` WHERE estado= 1";
                    //these variables are passed via URL
                  $limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 1; //movies per page
                  $page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; //starting page
                  $links =5 ;
                  $paginator = new Paginator( $conexion, $query ); //__constructor is called
                  $results = $paginator->getData( $limit, $page );
                //print_r($results);die; $results is an object, $result->data is an array
                 //print_r($results->data);die; //array
                  ?> 
                  <?php
                  for ($p = 0; $p < count($results->data); $p++): ?> 
                    <?php 
        //store in $movie variable for easier reading
                    $mostrar = $results->data[$p]; 
                    ?> 
                    
                    <div class="page-content">
                      <center>
                        <img src="../file1/<?php  echo $mostrar['imagen'];?>" alt="" class="" style="width: 40%; height: 100%"/>
                      </center>
                      <br>
                      <br>
                      <h4><?php  echo $mostrar['titulo'];?></h4><p style="text-align: justify;"><?php  echo $mostrar['descripcion'];?></p>
                      <h4>Con formación académica:</h4><p style="text-align: justify;"><?php  echo $mostrar['formacionAcademica'];?></p>
                      <h4>Conocimientos específicos en:</h4><p style="text-align: justify;"><?php  echo $mostrar['ConocimientosBasicos'];?></p>
                      <h4>Con las siguientes habilidades:</h4><p style="text-align: justify;"><?php  echo $mostrar['habilidades'];?></p>
                      <h4>Otros Requisitos:</h4><p style="text-align: justify;"><?php  echo $mostrar['requisitos'];?></p>
                      <h4>Funciones principales:</h4><p style="text-align: justify;"><?php  echo $mostrar['funcionesPrincipales'];?></p>
                      <h4>Experiencia laboral mínima requerida:</h4><p style="text-align: justify;"><?php  echo $mostrar['Experiencias'];?></p>
                      <h4>Tipo de contrato:</h4><p style="text-align: justify;"><?php  echo $mostrar['TipoContrato'];?></p>
                      <h4>Salario:</h4><p style="text-align: justify;"><?php  echo $mostrar['salario'];?></p>
                      <h4>Jornada Laboral::</h4><p style="text-align: justify;"><?php  echo $mostrar['jornadaLavoral'];?></p>

                      <!-- Post Meta -->
                      <div class="post-meta second-part">
                        <p>Actualizado <?php  echo $mostrar['fecha'];?> A las <?php  echo $mostrar['hora'];?></p>
                      </div>

                      <blockquote class="mb-30">
                        <a href="Formato_Unico_Hoja_de_Vida_UTRAHUILCA.zip"> DESCARGUE AQUI EL FORMATO DE HOJA DE VIDA  Y ENVIARLO AL CORREO ELECTRONICO: seleccionth@utrahuilca.com</a>

                      </blockquote>

                      <blockquote class="mb-30">

                        <?php 
                        $sql="SELECT * FROM `condicion` WHERE idcondicion='7' and estado= 1";
                        $result=mysqli_query($conexion,$sql);
                        while ($mostrar=mysqli_fetch_array($result)) {
                         ?>

                         <ul>
                          <p style="text-align: justify;">
                           <a href="<?php  echo $mostrar['link'];?>"><?php  echo $mostrar['titulo'];?> </a> <br>
                         </ul>
                         <?php 
                       }
                       ?>

                     </blockquote>
                     
                   </div>
                   <?php 
                   echo $paginator->createLinks( $links, 'pagination pagination-sm' );
                 endfor; ?>
                 
               </div>
             </div>
           </div>
         </div>
         <!-- ##### Call To Action Start ###### -->
         <section class="cta-2-area">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <!-- Cta Content -->
                <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                  <div class="cta-text">
                    <h4>Pol&iacute;ticas Generales de Reclutamiento.</h4>
                    <p>Conoce nuestras condiciones para aplicar a las convocatorias</p>
                  </div>
                  <div class="cta-btn">
                    <a href="javascript:mostrarVentanaPoliticas();" class="btn credit-btn box-shadow">Leer Mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- ##### Call To Action End ###### -->
        <!-- ##### Newsletter Area Start ###### -->
        <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10 col-lg-8">
                <div class="nl-content text-center">
                  <h2>Las personas vinculadas a UTRAHUILCA se destacaran y diferenciaran por resaltar en el actuar personal e institucional los anteriores principios y valores cooperativos.</h2> 
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- ##### Newsletter Area End ###### -->


        <!-- ##### Services Alianzas ###### -->
        <section class="services-area section-padding-100-0">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="sliderBottom">
                  <div class="slideBottom-track">
                   <?php 
                   $sql="SELECT * FROM `alianzas` WHERE estado=1";
                   $result=mysqli_query($conexion,$sql);
                   while ($mostrar=mysqli_fetch_array($result)) {
                     ?>
                     <div class="slideBottom">
                      <img src="../filesN/<?php  echo $mostrar['imagen'];?>"   alt="">
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ##### Footer Area Start ##### -->
      <footer class="footer-area section-padding-100-0">
       <div class="container">
        <div class="row">

          <!-- Single Footer Widget -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget mb-100">
              <h5 class="widget-title">Oficina Central</h5>
              <!-- Nav -->
              <nav>
                <p class="mb-0"><i class="fa fa-building-o"></i> Cra 6 # 5-37</p>
                <p class="mb-0"> <i class="fa fa-phone"></i> 8728181-8728182 </p>

                <h4></h4>
                <p class="mb-0"><i class="fa fa-calendar"></i> Lunes a Viernes:  8:00 am a 12:00 m  <br>
                S&aacute;bados 8:00 a.m a 12:00 a.m.</p>        
              </nav>
            </div>
          </div>

          <!-- Single Footer Widget -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget mb-100">
              <h5 class="widget-title">Links de inter&eacute;s</h5>
              <!-- Nav -->
              <nav>
                <ul>
                  <li><a href="./trabajo.php">Trabaje con nosotros</a></li>
                  <li><a href="aviso de privacidad.pdf">Aviso de privacidad</a></li>
                  <li><a href="./alianza.php">Alianzas</a></li>
                  <li><a href="./Pqrs.php"><P>PQRSF</P></a></li>
                </ul>
              </nav>
            </div>
          </div>

          <!-- Single Footer Widget -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget mb-100">
              <h5 class="widget-title">Cooperativa Virtual</h5>

              <!-- Single News Area -->
              <div class="single-latest-news-area d-flex align-items-center">
                <div class="news-thumbnail">
                 <h3> <i class="fa fa-drivers-license-o" aria-hidden="true"></i> </h3>
               </div>
               <div class="news-content">
                <a href="#">Empresas</a>
                <div class="news-meta">
                  <a href="#UtraPortalJuridica" data-toggle="modal" class="post-author" target="_blank"><img src="img/core-img/pencil.png" alt=""> Genere sus certificados y extractos</a>
                </div>
              </div>
            </div>

            <!-- Single News Area -->
            <div class="single-latest-news-area d-flex align-items-center">
              <div class="news-thumbnail">
                <h3><i class="fa fa-child" aria-hidden="true"></i> </h3>
              </div>
              <div class="news-content">
                <a href="#">Personas</a>
                <div class="news-meta">
                  <a href="#UtraPortalNuatural" data-toggle="modal" class="post-author" target="_blank"><img src="img/core-img/pencil.png" alt=""> Realice sus transacciones en línea</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Copywrite Area -->
    <div class="copywrite-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
              <!-- Footer Logo -->
              <a href="http://www.supersolidaria.gov.co/" target="_blank" class="imgcenter"><img src="img/Footer/super-ok.png" ></a>
              <a href="https://www.fogacoop.gov.co/" target="_blank" class="imgcenter"><img src="img/Footer/Fogacoop-ok.png" ></a>
              <a href="index.php" class="imgcenter"><img src="img/Footer/sello-ok.png"></a>
              <a href="https://www.coopcentral.com.co/" class="imgcenter" target="_blank"><img src="img/Footer/red-ok.png" ></a>
              <!-- Copywrite Text -->
              <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               Copyright &copy;Todos los derechos reservados Utrahuilca.coop <i class="fa fa-heart-o" aria-hidden="true"></i>
               <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </footer>
 </div>
 <!-- PopUp Revalorizacon--> 
 <!-- ##### Footer Area Start ##### -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
 <script>
  $("#showmenunavbar").click(function(e){
    e.preventDefault();
    $("#menunavbar").toggleClass("show");
  });


  $("#menunavbar p").click(function(event){
    event.preventDefault();
    if($(this).next('ul').length){
      $(this).next().toggle('fast');
      $(this).children('i:last-child').toggleClass('fa-caret-down fa-caret-left');
    }
  });
</script>
<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
<script src="menu.js"></script>
<!--<script src="menu.js"></script>-->
</body>

</html>

<?php 
//include('bottom-cache.php');
?>