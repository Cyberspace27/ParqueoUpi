<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Lista de Usuarios</title>
     <!--hojas de estilo locales y boostrap-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="http://www.upi.ac.cr/wp-content/uploads/favicon.jpg" />
    <link rel="apple-touch-icon" href="http://www.upi.ac.cr/wp-content/uploads/favicon.jpg" />

<!--libreria de fonts-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--este es el fin del css local-->
        
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

<!--Importante inicio-->
<link rel='stylesheet' id='qode_stylesheet-css'  href='http://www.upi.ac.cr/wp-content/themes/stockholm/css/stylesheet.min.css?ver=4.7.5' type='text/css' media='all' />
<link rel='stylesheet' id='qode_style_dynamic-css'  href='http://www.upi.ac.cr/wp-content/themes/stockholm/css/style_dynamic.css?ver=1479838562' type='text/css' media='all' />

<link rel='stylesheet' id='qode_custom_css-css'  href='http://www.upi.ac.cr/wp-content/themes/stockholm/css/custom_css.css?ver=1479838562' type='text/css' media='all' />
<script type='text/javascript' src='http://www.upi.ac.cr/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://www.upi.ac.cr/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='stylesheet' id='qode_font-awesome-css'  href='http://www.upi.ac.cr/wp-content/themes/stockholm/css/font-awesome/css/font-awesome.min.css?ver=4.7.5' type='text/css' media='all' />

<link rel='stylesheet' id='qode_responsive-css'  href='http://www.upi.ac.cr/wp-content/themes/stockholm/css/responsive.min.css?ver=4.7.5' type='text/css' media='all' />
<!--Importante fin-->
</head>
<body class="page-template-default page page-id-68 page-parent  boxed select-theme-ver-3.0.2 menu-animation-underline fs-menu-animation-underline popup-menu-fade smooth_scroll wpb-js-composer js-comp-ver-4.11.2 vc_responsive">

    <div class="wrapper">
        <div class="wrapper_inner">

            <header class="page_header scrolled_not_transparent with_border centered_logo centered_logo_animate  stick menu_bottom">
               <div class="header_inner clearfix">

                   <div class="header_top_bottom_holder">
                      <div class="header_bottom clearfix" style='' >
                        <div class="container">
                    <div class="container_inner clearfix" >
                    <div class="header_inner_left">
                        <div class="mobile_menu_button"><span><i class="fa fa-bars"></i></span></div>
                            <div class="logo_wrapper">
                                <div class="q_logo">
                                <a href="http://www.upi.ac.cr/"><img class="normal" src="http://www.upi.ac.cr/wp-content/uploads/upi2.jpg" alt="Logo"/><img class="light" src="http://www.upi.ac.cr/wp-content/uploads/upi2.jpg" alt="Logo"/><img class="dark" src="http://www.upi.ac.cr/wp-content/uploads/upi2.jpg" alt="Logo"/><img class="sticky" src="http://www.upi.ac.cr/wp-content/uploads/upi2.jpg" alt="Logo"/></a>
                                </div>
                            </div>
                    </div>
                    <div class="header_menu_bottom">
                        <div class="header_menu_bottom_inner">
                            <div class="main_menu_header_inner_right_holder with_center_logo">
                                <nav class="main_menu drop_down animate_height">
                                    <ul id="menu-main" class="clearfix">
                                    <li id="nav-menu-item-22057" class="menu-item menu-item-type-post_type menu-item-object-page  narrow" ><a href="tempLogIn.php" class=" current "><i class="menu_icon fa blank"></i><span class="menu-text">Home</span><span class="plus"></span></a></li>
                                    <li id="nav-menu-item-22839" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-68 current_page_item active narrow"><a href="listaUsers.php" class=""><i class="menu_icon fa blank"></i><span class="menu-text">Listar Usuarios</span><span class="plus"></span></a></li>
                                    <li id="nav-menu-item-22838" class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a href="#" class=""><i class="menu_icon fa blank"></i><span class="menu-text">Listar Campos</span><span class="plus"></span></a></li>
                                    <li id="nav-menu-item-22060" class="menu-item menu-item-type-post_type menu-item-object-page  narrow"><a href="#" class=""><i class="menu_icon fa blank"></i><span class="menu-text">Parqueo</span><span class="plus"></span></a></li>
                                    <li id="nav-menu-item-22095" class="menu-item menu-item-type-custom menu-item-object-custom  narrow"><a target="_blank" href="http://www.upi.ac.cr/" class=""><i class="menu_icon fa blank"></i><span class="menu-text">UPI</span><span class="plus"></span></a></li>
                                    <li id="nav-menu-item-22095" class="menu-item menu-item-type-custom menu-item-object-custom  narrow"><a target="_blank" href="#" class=""><i class="menu_icon fa blank"></i><span class="menu-text">Editar</span><span class="plus"></span></a></li>                  
                                  </ul>        
                                </nav>
                            <div class="header_inner_right">
                                <div class="side_menu_button_wrapper right">
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <nav class="mobile_menu">
                            <ul id="menu-main-1" class=""><li id="mobile-menu-item-22057" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="index.php" class=""><span>Home</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
                            <li id="mobile-menu-item-22839" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="listUsers.php" class=""><span>Listar Usuarios</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
                            <li id="mobile-menu-item-22838" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="listCampos.php" class=""><span>Listar Campos</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
                            <li id="mobile-menu-item-22060" class="menu-item menu-item-type-post_type menu-item-object-page "><a href="parqueo.php" class=""><span>Parqueo</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
                            <li id="mobile-menu-item-22095" class="menu-item menu-item-type-custom menu-item-object-custom "><a target="_blank" href="http://nabu.cr/upolitecnica/" class=""><span>Editar</span></a><span class="mobile_arrow"><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span></li>
                            
                        </ul>                      
                    </nav>
                   </div>
                </div>
              </div>
        </div>

    </header>
<!-- fin del header--> 


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
                    <h1><span style="color: #1090cf;">Parqueo Universidad PI</span></h1>

                </div> 
            </div> 
            <div class="separator  small left  " style="border-color: #f89728"></div>
        </div>
      </div>
    </div>

        <div class="containterPrueba">
 <?php

 require("conexionBD/datos_conexion.php");
$listaUsers = array();
$sql = "select * from usuario";

$result = $conn->query($sql);
if ($result->num_rows > 0 ) {   
    while($row = mysqli_fetch_assoc($result)) {
    array_push($listaUsers, $row); 
    }   
} else {
    echo "0 results";
}
$conn->close();

$val = current($listaUsers);
    echo "<center><table border=1>";
    echo "<tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>rol</th>
          <th>Editar</th>
          
          </tr>";
    while($val){        
        echo "<tr>
            <td>".$val["nombre"]."</td>         
            <td>".$val["apellido"]."</td>
            <td>".$val["email"]."</td>
            <td>".$val["telefono"]."</td>
            <td>".$val["direccion"]."</td>
            <td>".$val["rol"]."</td>
            <td>
            <form action=\"editarUser.php\" method=\"POST\">
            <input type=\"hidden\" 
            name=\"id\" value=\"".$val["idusuario"]."\">
            <input type=\"submit\" value=\"editar\">
            </form>
            </td>
            </tr>";
        $val = next($listaUsers);
    }
    echo "</table></center>";

?>


        </div>

</div>
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
</div>

<script type='text/javascript' src='http://www.upi.ac.cr/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=2.22.0'></script>

<script type='text/javascript' src='http://www.upi.ac.cr/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=4.7.5'></script>

<script type='text/javascript' src='http://www.upi.ac.cr/wp-content/themes/stockholm/js/plugins.js?ver=4.7.5'></script>

<script type='text/javascript' src='http://www.upi.ac.cr/wp-content/themes/stockholm/js/default_dynamic.js?ver=1479838562'></script>

<script type='text/javascript' src='http://www.upi.ac.cr/wp-content/themes/stockholm/js/default.min.js?ver=4.7.5'></script>

</body>

</html>