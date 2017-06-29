<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://www.upi.ac.cr/wp-content/uploads/favicon.jpg" />
    <link rel="apple-touch-icon" href="http://www.upi.ac.cr/wp-content/uploads/favicon.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

<link rel='stylesheet' id='qode_stylesheet-css'  href='http://www.upi.ac.cr/wp-content/themes/stockholm/css/stylesheet.min.css?ver=4.7.5' type='text/css' media='all' />
<link rel='stylesheet' id='qode_style_dynamic-css'  href='http://www.upi.ac.cr/wp-content/themes/stockholm/css/style_dynamic.css?ver=1479838562' type='text/css' media='all' />

<link rel='stylesheet' id='qode_custom_css-css'  href='http://www.upi.ac.cr/wp-content/themes/stockholm/css/custom_css.css?ver=1479838562' type='text/css' media='all' />
<script type='text/javascript' src='http://www.upi.ac.cr/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://www.upi.ac.cr/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='stylesheet' id='qode_font-awesome-css'  href='http://www.upi.ac.cr/wp-content/themes/stockholm/css/font-awesome/css/font-awesome.min.css?ver=4.7.5' type='text/css' media='all' />

<link rel='stylesheet' id='qode_responsive-css'  href='http://www.upi.ac.cr/wp-content/themes/stockholm/css/responsive.min.css?ver=4.7.5' type='text/css' media='all' />
<!--Importante archivos y css fin-->
</head>
<body class="page-template-default page page-id-68 page-parent  boxed select-theme-ver-3.0.2 menu-animation-underline fs-menu-animation-underline popup-menu-fade smooth_scroll wpb-js-composer js-comp-ver-4.11.2 vc_responsive">

<!-- inicio header--> 

<header class="page_header scrolled_not_transparent with_border centered_logo centered_logo_animate  stick menu_bottom">
<?php

require("conexionBD/datos_conexion.php");

$usuarioTemp = htmlentities(addslashes($_POST["nombre"]));
 
$password = htmlentities(addslashes($_POST["password"]));

$sql = "select * from usuario where nombre='$usuarioTemp'";

$result = $conn->query($sql);


/*
$sql = "SELECT * FROM estudiantes";

$result = $conn->query($sql);
*/


if ($result->num_rows > 0 ) { 
  $usuarioGuardado = mysqli_fetch_array($result);
 
  if ($usuarioGuardado["password"]==$password) {

    
    if ($usuarioGuardado["rol"]==1) {

     include("menu/menuAdmin.php");
     

    }else if($usuarioGuardado["rol"]==2){
      include("menu/menuUsers.php");

    }
    //faltan angregar algunos usiarios

   
   }else{

    header("location:login.php");
   }
  
} else {
    //echo "Usuario no existente";
  header("location:login.php");
}

$conn->close();


?>


</header>
<!-- inicio Contenido--> 
<div class="content content_top_margin_none">
    <div class="content_inner  ">
        <div class="container">


            <div class="container_inner default_template_holder clearfix" >

               <div class="vc_row wpb_row section vc_row-fluid " style=' text-align:left;'>
                 <div class=" full_section_inner clearfix">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <h1><span style="color: #1090cf;">Home</span></h1>

                            </div> 
                        </div> 
                        <div class="separator  small left  " style="border-color: #f89728"></div>


                    </div>
                 </div>
            </div>

    </div>
    
  

<?php

require("conexionBD/datos_conexion.php");


$usuarioTemp = htmlentities(addslashes($_POST["nombre"]));
 
$password = htmlentities(addslashes($_POST["password"]));

$sql = "select * from usuario where nombre='$usuarioTemp'";

$result = $conn->query($sql);


/*
$sql = "SELECT * FROM estudiantes";

$result = $conn->query($sql);
*/


if ($result->num_rows > 0 ) { 
  $usuarioGuardado = mysqli_fetch_array($result);
 
  if ($usuarioGuardado["password"]==$password) {

    $idRol = $usuarioGuardado["rol"];

    if ($idRol==1) {     
      
      //echo "Usuario Admin  $usuarioTemp" ;
      echo "<div class='menuAdminContainer' style='text-align: center;'>
        <h2 class='headerMenu'>Bienvenido Administrador ". $usuarioTemp ." </h2>
        <center>
            <table class='menutable' >
                <tr>
                    <td class='izq'><a href=\"listaUsers.php?id=".$usuarioGuardado["rol"]."\" >Listar Usuarios</a></td>
                    <td class='der'><a href=\"listaCampos.php?id=".$usuarioGuardado["rol"]."\">Listar Campos</a></td>
                </tr>
                <tr>
                    <td class='izq'><a href='#'>Perfil</a></td>
                    <td class='der'><a href='#'>Cerrar seccion</a></td>
                </tr>
            </table>
        </center>
    </div>";

    }else if($idRol==2){
      echo "<div class='menuAdminContainer' style='text-align: center;'>
            <h2 class='headerMenu'>Bienvenido Estudiante ". $usuarioTemp ." </h2>
            <center>
                <table class='menutable' >
                    <tr>
                        <td class='izq'><a href='#\'>Perfil</a></td>
                        <td class='der'><a href='#'>Listar Campos</a></td>
                    </tr>
                    <tr>
                        <td class='der'><a href='#'>Cerrar seccion</a></td>
                        <td class='izq'><a href='#'>Ayuda</a></td>
                    </tr>
                </table>
            </center>
        </div>";

    }else if($idRol==3){
      echo "<div class='menuAdminContainer' style='text-align: center;'>
            <h2 class='headerMenu'>Bienvenido Profesor ". $usuarioTemp ." </h2>
            <center>
               <table class='menutable' >
                    <tr>
                        <td class='izq'><a href='#\'>Perfil</a></td>
                        <td class='der'><a href='#'>Listar Campos</a></td>
                    </tr>
                    <tr>
                        <td class='der'><a href='#'>Cerrar seccion</a></td>
                        <td class='izq'><a href='#'>Ayuda</a></td>
                    </tr>
                </table>
            </center>
        </div>";

    }else if($idRol==4){
      echo "<div class='menuAdminContainer' style='text-align: center;'>
            <h2 class='headerMenu'>Bienvenido Colaborador ". $usuarioTemp ." </h2>
            <center>
               <table class='menutable' >
                    <tr>
                        <td class='izq'><a href='#\'>Perfil</a></td>
                        <td class='der'><a href='#'>Listar Campos</a></td>
                    </tr>
                    <tr>
                        <td class='der'><a href='#'>Cerrar seccion</a></td>
                        <td class='izq'><a href='#'>Ayuda</a></td>
                    </tr>
                </table>
            </center>
        </div>";

    }
   
   }
  
} 

$conn->close();



?>

    
<div class="separator separatordesktop normal   " style="margin-top:0px;margin-bottom:0px"></div>


</div>

</div>
</div><!-- fin del Contenido--> 



  <!-- inicio Footer-->  
<footer class="footer_border_columns">
    <div class="footer_inner clearfix">
        <div class="footer_top_holder">
            <div class="footer_top footer_top_full">
                <div class="three_columns clearfix">
                    <div class="qode_column column1">
                        <div class="column_inner">
                            <div id="text-2" class="widget widget_text"><h4>Universidad Politécnica Internacional</h4><div class="textwidget">Sede Los Yoses: 4060-1120<div class="separator  transparent center  " style="margin-top:5px"></div>

                            <span class='q_social_icon_holder with_link circle_social' data-hover-background-color=#cbcbcb ><a href='https://www.facebook.com/upicr/' target='_blank'><span class='fa-stack tiny circle_social' style='color: #393939;background-color: #ffffff;border: 1px solid #ffffff;'><i class="fa fa-facebook" style="font-size:20px"></i></span></a></span>

                            <span class='q_social_icon_holder with_link circle_social' data-hover-background-color=#cbcbcb ><a href='https://twitter.com/Upolitecnicacr' target='_blank'><span class='fa-stack tiny circle_social' style='color: #393939;background-color: #ffffff;border: 1px solid #ffffff;'><i class="fa fa-twitter" style="font-size:20px"></i></span></a></span>

                            <span class='q_social_icon_holder with_link circle_social' data-hover-background-color=#cbcbcb ><a href='https://instagram.com/Upolitecnicacr' target='_blank'><span class='fa-stack tiny circle_social' style='color: #393939;background-color: #ffffff;border: 1px solid #ffffff;'><i class="fa fa-instagram" style="font-size:20px"></i></span></a></span>

                            <span class='q_social_icon_holder with_link circle_social' data-hover-background-color=#cbcbcb ><a href='https://www.youtube.com/channel/UC4FNgrYzbuOxFZ7PQWJGMiw' target='_self'><span class='fa-stack tiny circle_social' style='color: #393939;background-color: #ffffff;border: 1px solid #ffffff;'><i class="fa fa-youtube-play" style="font-size:20px"></i></span></a></span>
                            <br />
                            </div>
                      </div> 
                </div>
            </div>
            <div class="qode_column column2">
                <div class="column_inner">
                    <div id="text-3" class="widget widget_text"><h4>Instituto Politécnico Internacional</h4>
                    <div class="textwidget">Sedes Heredia y San José: 4060-1130<br />
                    <div class="separator  transparent center  " style="margin-top:5px"></div>

                    <span class='q_social_icon_holder with_link circle_social' data-hover-background-color=#cbcbcb ><a href='https://www.facebook.com/ipicr/' target='_blank'><span class='fa-stack tiny circle_social' style='color: #393939;background-color: #ffffff;border: 1px solid #ffffff;'><i class="fa fa-facebook" style="font-size:20px"></i></span></a></span>

                    <span class='q_social_icon_holder with_link circle_social' data-hover-background-color=#cbcbcb ><a href='https://twitter.com/PolitecCR' target='_blank'><span class='fa-stack tiny circle_social' style='color: #393939;background-color: #ffffff;border: 1px solid #ffffff;'><i class="fa fa-twitter" style="font-size:20px"></i></span></a></span>

                    <span class='q_social_icon_holder with_link circle_social' data-hover-background-color=#cbcbcb ><a href='https://instagram.com/PolitecCR' target='_blank'><span class='fa-stack tiny circle_social' style='color: #393939;background-color: #ffffff;border: 1px solid #ffffff;'><i class="fa fa-instagram" style="font-size:20px"></i></span></a></span>
                    </div>
                </div>   
            </div>
        </div>

        <div class="qode_column column3">
            <div class="column_inner">
                <div id="text-4" class="widget widget_text"> 
                    <div class="textwidget"><img src="http://www.upi.ac.cr/wp-content/uploads/2014/08/grupo.png" alt="Grupo Interamericano" /></div>
                </div> 
            </div>
        </div>
    </div>
  </div></div>
    <div class="footer_bottom_holder">
        <div class="footer_bottom">
            <div class="textwidget"><span style="display: block; line-height:14px;">Powered by Team #1 UPI</span></div>
        </div>
    </div>
</div>

</footer>

</div>
</div>

<link rel='stylesheet' id='soliloquy-lite-style-css'  href='http://www.upi.ac.cr/wp-content/plugins/soliloquy-lite/assets/css/soliloquy.css?ver=2.5.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='soliloquy-liteclassic-theme-css'  href='http://www.upi.ac.cr/wp-content/plugins/soliloquy-lite/themes/classic/style.css?ver=4.7.5' type='text/css' media='all' />

<script type='text/javascript' src='http://www.upi.ac.cr/wp-content/plugins/soliloquy-lite/assets/js/min/soliloquy-min.js?ver=2.5.1.3'></script>


<script type='text/javascript' src='http://www.upi.ac.cr/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=2.22.0'></script>

<script type='text/javascript' src='http://www.upi.ac.cr/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=4.7.5'></script>

<script type='text/javascript' src='http://www.upi.ac.cr/wp-content/themes/stockholm/js/plugins.js?ver=4.7.5'></script>

<script type='text/javascript' src='http://www.upi.ac.cr/wp-content/themes/stockholm/js/default_dynamic.js?ver=1479838562'></script>

<script type='text/javascript' src='http://www.upi.ac.cr/wp-content/themes/stockholm/js/default.min.js?ver=4.7.5'></script>


</body>
</html>
