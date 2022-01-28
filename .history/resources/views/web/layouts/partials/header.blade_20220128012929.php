 <!--//==Preloader Start==//-->
 <div class="preloader">
     <div class="cssload-container">
         <div class="cssload-loading">
             <div id="object"><i class="fa fa-bath" aria-hidden="true"></i></div>
         </div>
         <h4 class="title">Loading</h4>
     </div>
 </div>
 <!--//==Preloader End==//-->
 <!--Start Header-->
 <header class="js-header">
     <div class="main-header__wrapper">
         <!-- supra menu -->
         <section class="supramenu">
             <div class="container">
                 <div class="row row-flex">
                     <div class="col-md-4 supramenu-left">

                         <ul class="supramenu__list supramenu__list--left">
                             <!-- <li class="supramenu__item supramenu__item--language" id="lang-list">
                                 <div class="js-language-menu js-collapse-sm">
                                     <div class="link-wrapper">
                                         <a class="supramenu__link" style="margin-right: 12px;" href="javascript:void(0)">
                                             <span>es</span>
                                         </a>

                                         <i class="fa fa-globe"></i>

                                     </div>
                                 </div>
                             </li> -->
                             <!-- Obtain the country  -->
                             <li class="supramenu__item supramenu__item--country menu-country-trigger">
                                 <a class="supramenu__link" href="/about_web">¿Quiénes Somos?</a>
                             </li>
                         </ul>
                     </div>
                     <div class="col-md-8 supramenu-right">
                         <ul class="supramenu__list supramenu__list--right">
                             <li class="supramenu__item supramenu__item--icon">
                                 <a class="supramenu__link" href="https://es-es.facebook.com/azulejosrosapedidos/"
                                     target="">
                                     <i class="fa fa-facebook"></i>
                                 </a>
                             </li>
                             <li class="supramenu__item supramenu__item--icon">
                                 <a class="supramenu__link" href="https://www.instagram.com/azulejosrosamadrid/"
                                     target="">
                                     <i class="fa fa-instagram"></i>
                                 </a>
                             </li>
                             <!-- <li class="supramenu__item supramenu__item--icon">
                                 <a class="supramenu__link" href="javascript:void(0)" target="">
                                     <i class="fa fa-twitter"></i>
                                 </a>
                             </li> -->
                             <li class="supramenu__item supramenu__item--login">
                                 <?php if (Auth::check()) { ?>
                                 <a href="/logout" class="supramenu__link"><i class="fa fa-power-off"></i>Logout</a>
                                 <?php } else { ?>
                                 <!-- <a href="/admin/indexs" class="supramenu__link"><i class="fa fa-user"></i>Iniciar sesión</a> -->
                             </li>
                             <?php } ?>


                         </ul>
                     </div>
                 </div>
             </div>
         </section>
     </div>


     <!-- Navigation ===== -->
     <div class="navbar navbar-default navbar-static-top" role="navigation">
         <!--//==Topbar End==//-->
         <!--//==Navbar Start==//-->
         <div id="main-menu" class="wa-main-menu">
             <div class="wathemes-menu relative">
                 <div class="navbar navbar-default navbar-bg-light" role="navigation"
                     style="background-color: #ffffff;">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="navbar-header">
                                     <!-- Button For Responsive toggle -->
                                     <button type="button" class="navbar-toggle" data-toggle="collapse"
                                         data-target=".navbar-collapse">
                                         <span class="sr-only">Toggle navigation</span>
                                         <span class="icon-bar"></span>
                                         <span class="icon-bar"></span>
                                         <span class="icon-bar"></span></button>
                                     <!-- Logo -->
                                     <!-- <a href="#!"><img src="https://www.azulejosrosa.es/logo/1.png"></a> -->
                                     <a href="/"><img src="{{ URL::asset('web/images/logo_AzulRosas.png') }}"
                                             alt="Evento" style="width: 245px; margin-top: 9px;" /></a>
                                     <a id="logo" class="navbar-brand hidden-lg hidden-md hidden-sm" href="/">
                                         <img class="site_logo" alt="Site Logo"
                                             src="{{ URL::asset('web/images/logos.png') }}" />
                                     </a>
                                 </div>
                                 <!-- Navbar Collapse -->
                                 <div class="navbar-collapse collapse">
                                     <!-- Right nav Start -->
                                     <ul class="nav navbar-nav sm" style="float: right;"
                                         data-menus-id="1643350885264045">
                                         <li class="">

                                             <a style="background-color: #ffffff;color: #333;text-transform: uppercase;font-family: Lato, Sans-Serif;"
                                                 href="/#!" class="has-submenu">Productos <span
                                                     class="caret menu-arrow"></span><span
                                                     class="sub-arrow">...</span><span class="sub-arrow">...</span></a>
                                             <ul class="dropdown-menu sm-nowrap"
                                                 style="width: auto; min-width: 200px; display: none; max-width: 400px; top: auto; left: 0px; margin-left: 0px; margin-top: 0px;">
                                                 <li>
                                                     <a href="/#!" class="has-submenu">Cerámica<span
                                                             class="sub-arrow">...</span></a>
                                                     <ul class="dropdown-menu">
                                                         <li><a href="/componets_web/1">Porcelanato</a></li>
                                                         <li><a href="/componets_web/2">Pasta Roja</a></li>
                                                         <li><a href="/componets_web/3">Pasta Blanca</a></li>
                                                         <li><a href="/componets_web/4">B Plus</a></li>
                                                     </ul>
                                                 </li>
                                                 <li>
                                                     <a href="/componets_web/7">Muebles de Baño</a>
                                                 </li>
                                                 <li>
                                                     <a href="/componets_web/8">Platos de Ducha</a>
                                                 </li>
                                                 <li>
                                                     <a href="/#!" class="has-submenu">Grifería<span
                                                             class="sub-arrow">...</span></a>
                                                     <ul class="dropdown-menu">
                                                         <li><a href="/componets_web/5">Grifería para Lavado</a></li>
                                                         <li><a href="/componets_web/6">Grifería para Bide</a></li>
                                                         <li><a href="/componets_web/10">Grifería para Bañera</a></li>
                                                         <li><a href="/componets_web/11">Grifería para Ducha</a></li>
                                                     </ul>
                                                 </li>
                                                 <li>
                                                     <a href="/componets_web/9">Sanitario</a>
                                                 </li>
                                                 <li>
                                                     <a href="/#!" class="has-submenu">Exteriores<span
                                                             class="sub-arrow">...</span></a>
                                                     <ul class="dropdown-menu">
                                                         <li><a href="/componets_web/13">Fachadas</a></li>
                                                         <li><a href="/componets_web/14">Piscinas</a></li>
                                                         <li><a href="/componets_web/15">Escaleras y Peldaños</a></li>
                                                     </ul>
                                                 </li>
                                                 <li>
                                                     <a href="/componets_web/12">Mamparas</a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li>

                                             <a style="background-color: #ffffff;color: #333;text-transform: uppercase;font-family: Lato, Sans-Serif;"
                                                 href="/gallery_web">Galería <span class="caret menu-arrow"></span><span
                                                     class="sub-arrow">...</span></a>
                                         </li>
                                         <li>

                                             <a style="background-color: #ffffff;color: #333;text-transform: uppercase;font-family: Lato, Sans-Serif;"
                                                 href="/presupuesto_web">Solicitud de Presupuesto <span
                                                     class="caret menu-arrow"></span><span
                                                     class="sub-arrow">...</span></a>
                                         </li>
                                         <li>

                                             <a style="background-color: #ffffff;color: #333;text-transform: uppercase;font-family: Lato, Sans-Serif;"
                                                 href="/horario_atention">Horario <span
                                                     class="caret menu-arrow"></span><span
                                                     class="sub-arrow">...</span></a>
                                         </li>
                                         <li>

                                             <a style="background-color: #ffffff;color: #333;text-transform: uppercase;font-family: Lato, Sans-Serif;"
                                                 href="/contact_web">Contacto <span
                                                     class="caret menu-arrow"></span><span
                                                     class="sub-arrow">...</span></a>
                                         </li>
                                     </ul>
                                 </div>
                                 <!-- /.navbar-collapse -->
                             </div>

                         </div>
                         <!-- /.row -->
                     </div>
                     <!-- /.container -->
                 </div>
             </div>
         </div>
         <!--//==Navbar End==//-->
     </div>
 </header>
 <!--End Header-->