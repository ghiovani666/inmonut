    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
        <div class="preloader">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->
    <header class="header-area header-default header-transparent header-style sticky-header"
        style="    padding: 18px 0;">

        <div class="container">

            <div class="row row-gutter-0 align-items-center">
                <?php  
                    $footer_ = DB::table('web_footer')->where('id_footer', '=',1)->get();
                ?>

                <!-- Header Top -->
                <div class="header-top" style="background-color: #0c0c0c !important;">
                    <div class="auto-container">
                        <div class="inner-container">
                            <div class="left-column " style="margin-left: 45px;">
                                <ul class="contact-info" >
                                    <li><a href="/" style="font-size: 14px;">INICIO</a></li>
                                    <li><a href="viewAbout" style="font-size: 14px;">QUIENES SOMOS</a></li>
                                    <li><a href="viewLocation" style="font-size: 14px;">LOCALIZACIÓN</a></li>
                                    <li><a href="viewContacto" style="font-size: 14px;">CONTACTO</a></li>
                                </ul>
                            </div>
                            <div class="right-column" style="margin-left: 10%;">
                                <ul class="social-icon">
                                    <!-- <li><a href="#">Email: {{ $footer_[0]->email }}</a></li> -->
                                    <li><a href="#">Telf: {{ $footer_[0]->telefono }}</a></li>
                                </ul>
                            </div>
                            <footer class="footer-area default-style bg-img" style="margin-right: 45px;text-align: center;flex: auto;margin-bottom: 28px;">
                                <div class="widget-social-icons">
                                    <a href="{{ $footer_[0]->red_social_facebook }}"><i class="fa fa-facebook"></i></a>
                                    <a href="{{ $footer_[0]->red_social_instagram }}"><i class="fa fa-instagram"></i></a>
                                    <a href="{{ $footer_[0]->red_social_tweter }}"><i class="fa fa-twitter"></i></a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-3 col-sm-3 col-md-3 col-xl-3">
                    <div class="header-logo-area">
                        <a href="/">
                            <img class="logo-main" src="{{ $footer_[0]->url_image }}" alt="Logo" />
                            <img class="logo-light" src="{{ $footer_[0]->url_image }}" alt="Logo" />
                        </a>
                    </div>
                </div>
                <div class="col-8 col-sm-9 col-xl-9">
                    <div class="header-align">
                        <div class="header-navigation-area d-none d-xl-block">
                            <ul class="main-menu nav position-relative">
                                <li class="has-submenu"><a href="#">Servicios</a>
                                    <ul class="submenu-nav">
                                        <li><a href="viewServicioTenis">Tenis</a></li>
                                        <li><a href="viewServicioPadel">Padel</a></li>
                                        <li><a href="viewServicioFisio">Fisio</a></li>
                                        <li><a href="viewServicioFitness">Fitness</a></li>
                                    </ul>
                                </li>
                                <li><a href="viewPacks">Packs</a></li>
                                <li><a href="viewEquipos">Equipo</a></li>
                                <li class="has-submenu"><a href="#">Novedades</a>
                                    <ul class="submenu-nav">
                                        <li><a href="viewEvento">Eventos</a></li>
                                        <li><a href="viewBono">Bonos</a></li>
                                        <li><a href="viewNoticia">Noticias</a></li>
                                        <li><a href="viewReto">Retos</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="#">Tienda</a></li>
                                <li><a href="viewContacto">Contacto</a></li>
                            </ul>
                        </div>

                        <div class="header-action-area">
                            <div class="header-action-cart d-none d-xl-block">

                                <?php if (Auth::check()) { ?>
                                <li class="has-submenu"><a href="javascript:return false"><i class="fa fa-power-off" style="margin-right: 10px;"></i>LOGOUT</a>
                                    <ul class="submenu-nav">
                                        <li><a href="/admin/homes">Administrador</a></li>
                                        <li><a href="/logout">Cerrar Sesión</a></li>
                                    </ul>
                                </li>
                                <?php } else { ?>
                                <button class="btn-cart cart-icon" onclick="window.location.href='/admin/homes'">
                                    <span class="cart-count">?</span>
                                    <i class="pe-7s-users"></i>
                                </button>

                                <?php } ?>

                            </div>
                            <button class="btn-menu d-xl-none">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Wrapper ==-->