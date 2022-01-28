    <!--== Start Footer Area Wrapper ==-->
    <footer class="footer-area default-style bg-img" data-bg-img="/template_web/assets/img/photos/bg-f1.png">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <?php  
                        $footer_ = DB::table('web_footer')->where('id_footer', '=',1)->get();
                    ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="widget-item mb-sm-30">
                            <div class="about-widget">
                                <a class="footer-logo" href="#">
                                    <img src="{{ $footer_[0]->url_image }}" alt="Logo">
                                </a>
                                <p>{{ $footer_[0]->descripcion }}</p>
                                <div class="opening-time">
                                    <h4 class="title">Hora de apertura</h4>
                                    <ul>
                                        <li>{{ $footer_[0]->horario }}</li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="widget-item pl-20 pl-sm-0 mb-sm-30 mb-xs-40">
                            <h4>ENLACE ÚTIL</h4>
                            <nav class="widget-menu-wrap">
                                <ul class="nav-menu nav">
                                    <li><a href="#">Hello Training</a></li>
                                    <li><a href="#">Equipo</a></li>
                                    <li><a href="#">Cursos</a></li>
                                    <li><a href="#">Tienda</a></li>
                                    <li><a href="viewContacto">Contacto</a></li>
                                </ul>
                              
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="widget-item mb-xs-50">
                            <h4>CONTACTO INFORMACIÓN</h4>
                            <div class="widget-contact-info">
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="/template_web/assets/img/icons/1.png" alt="Logo">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Dirección</h4>
                                        <p>{{ $footer_[0]->direccion }}</p>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="/template_web/assets/img/icons/2.png" alt="Logo">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Teléfono</h4>
                                        <ul>
                                            <li><a href="#">{{ $footer_[0]->telefono }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="/template_web/assets/img/icons/3.png" alt="Logo">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Web</h4>
                                        <ul>
                                            <li><a href="#">{{ $footer_[0]->web }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget-item">
                            <h4>BOLETIN INFORMATIVO</h4>
                            <div class="widget-newsletter">
                                <p>{{ $footer_[0]->boletin }}</p>
                                <form class="newsletter-form input-btn-group">
                                    <input class="form-control" type="text" placeholder="Email here">
                                    <button class="btn btn-theme" type="button"><i
                                            class="fa fa-paper-plane-o"></i></button>
                                </form>
                            </div>
                            <div class="widget-social-icons">
                                <a href="{{ $footer_[0]->red_social_facebook }}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ $footer_[0]->red_social_instagram }}"><i class="fa fa-instagram"></i></a>
                                <a href="{{ $footer_[0]->red_social_tweter }}"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="widget-copyright text-center">
                                <p><i class="fa fa-copyright"></i> 2022 Made with <i class="fa fa-heart"></i> by <a
                                        target="_blank" href="#">Template Design</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

    <!--== Start Side Menu ==-->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-inner">
            <div class="off-canvas-overlay d-none"></div>
            <!-- Start Off Canvas Content Wrapper -->
            <div class="off-canvas-content">
                <!-- Off Canvas Header -->
                <div class="off-canvas-header">
                    <div class="close-action">
                        <button class="btn-close"><i class="pe-7s-close"></i></button>
                    </div>
                </div>

                <div class="off-canvas-item">
                    <!-- Start Mobile Menu Wrapper -->
                    <div class="res-mobile-menu">
                        <!-- Note Content Auto Generate By Jquery From Main Menu -->
                    </div>
                    <!-- End Mobile Menu Wrapper -->
                </div>
                <!-- Off Canvas Footer -->
                <div class="off-canvas-footer"></div>
            </div>
            <!-- End Off Canvas Content Wrapper -->
        </div>
    </aside>
    <!--== End Side Menu ==-->