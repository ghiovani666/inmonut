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
                                     <a href="/"><img
                                             src="{{ URL::asset('template_inmonut/images/logo_AzulRosas.png') }}"
                                             alt="Evento" style="width: 245px; margin-top: 9px;" /></a>
                                     <a id="logo" class="navbar-brand hidden-lg hidden-md hidden-sm" href="/">
                                         <img class="site_logo" alt="Site Logo"
                                             src="{{ URL::asset('web/images/logos.png') }}" />
                                     </a>
                                 </div>
                                 <!-- Navbar Collapse -->
                                 <div class="navbar-collapse collapse">
                                     <!-- Right nav Start -->
                                     <ul class="nav navbar-nav" style="float: right;">
                                         <li>
                                             <a style="background-color: #ffffff;color: #333;text-transform: uppercase;font-family: Lato, Sans-Serif;"
                                                 href="#">Decoración <span class="caret menu-arrow"></span><span
                                                     class="sub-arrow">...</span></a>
                                             <ul class="dropdown-menu">
                                                 <li>
                                                     <a href="/">Ejemplo 1</a>
                                                     <ul class="dropdown-menu">
                                                         <li><a href="/productCategory/2">Ejemplo 2</a></li>
                                                     </ul>
                                                     <a href="/productCategory/3">Ejemplo 3</a>
                                                 </li>
                                             </ul>
                                         </li> 
                                         <li>
                                             <a style="background-color: #ffffff;color: #333;text-transform: uppercase;font-family: Lato, Sans-Serif;"
                                                 href="#">Reformas <span class="caret menu-arrow"></span><span
                                                     class="sub-arrow">...</span></a>
                                         </li>
                                         <li>
                                             <a style="background-color: #ffffff;color: #333;text-transform: uppercase;font-family: Lato, Sans-Serif;"
                                                 href="#">Proyectos <span class="caret menu-arrow"></span><span
                                                     class="sub-arrow">...</span></a>
                                         </li>
                                         <li>
                                             <a style="background-color: #ffffff;color: #333;text-transform: uppercase;font-family: Lato, Sans-Serif;"
                                                 href="#">Galería <span class="caret menu-arrow"></span><span
                                                     class="sub-arrow">...</span></a>
                                         </li>
                                         <li>
                                             <a style="background-color: #ffffff;color: #333;text-transform: uppercase;font-family: Lato, Sans-Serif;"
                                                 href="#">Contacto <span class="caret menu-arrow"></span><span
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