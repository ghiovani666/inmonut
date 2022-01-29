<style>
.button {
    text-decoration: none;
    font-size: 0.875rem;
    font-weight: 300;
    text-transform: uppercase;
    display: inline-block;
    border-radius: 1.5rem;
    background-color: #fff;
    color: #9191E9;
    padding: 1rem 2rem;
}

.popup {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    width: 100vw;
    height: 100vh;
    bottom: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 2;
    visibility: hidden;
    opacity: 0;
    overflow: hiden;
    transition: 0.64s ease-in-out;
}

.popup-inner {
    position: relative;
    bottom: -100vw;
    right: -100vh;
    display: flex;
    align-items: center;
    max-width: 800px;
    max-height: 600px;
    /* width: 60%; */
    height: 80%;

    /* position: relative;
  bottom: -100vw;
  right: -100vh;
  display: flex;
  align-items: center;
  max-width: 800px;
  max-height: 600px;
  width: 60%;
  height: 80%;
  background-color: #fff;
  transform: rotate(32deg);
  transition: 0.64s ease-in-out; */
}

.popup__photo {
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    width: 40%;
    height: 100%;
    overflow: hidden;
}

.popup__photo img {
    width: auto;
    height: 100%;
}

.popup__text {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 60%;
    height: 100%;
    padding: 4rem;
}

.popup__text h1 {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 2rem;
    text-transform: uppercase;
    color: #0A0A0A;
}

.popup__text p {
    font-size: 0.875rem;
    color: #686868;
    line-height: 1.5;
}

.popup:target {
    visibility: visible;
    opacity: 1;
}

.popup:target .popup-inner {
    bottom: 0;
    right: 0;
    transform: rotate(0);
}

.popup__close {
    /* position: absolute;
  right: -1rem;
  top: -1rem;
  width: 3rem;
  height: 3rem;
  font-size: 0.875rem;
  font-weight: 300;
  border-radius: 100%;
  background-color: #0A0A0A;
  z-index: 4;
  color: #fff;
  line-height: 3rem;
  text-align: center;
  cursor: pointer;
  text-decoration: none; */
    position: absolute;
    right: -3rem;
    top: 3rem;
    width: 3rem;
    height: 3rem;
    font-size: 2.875rem;
    font-weight: 300;
    border-radius: 100%;
    background-color: #0A0A0A;
    z-index: 4;
    color: #fff;
    line-height: 3rem;
    text-align: center;
    cursor: pointer;
}
</style>


<!--//=========Footer Start=========//-->
<footer id="main-footer" class="dark-footer footer-style1">
    <!--Upper Footer Block-->
    <div class="upper-footer wv_footer">
        <div class="container">
            <?php  
                        $footer_ = DB::table('web_footer')->where('id_footer', '=',1)->get();
                    ?>

            <div class="row pad-s15">
                <!--Widget Block-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>Información</h4>
                        <ul>
                            <li><a href="#">
                                    <img src="{{ $footer_[0]->url_image }}" alt="Logo">
                                </a></li>
                            <li><a href="#">
                                    <i class="fa fa-angle-double-right wv_circle"></i>
                                    {{ $footer_[0]->descripcion }}
                                </a></li>
                        </ul>
                    </div>
                </div>
                <!--Widget Block-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>Categoría</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Decoración</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Reformas</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Proyectos</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Galería</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Contacto</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Quiénes Somos</a></li>
                        </ul>
                    </div>
                </div>
                <!--Widget Block-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>Atención</h4>
                        <p>Nuestro Horario de Atención es :</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Lunes a Viernes de 9:00 a
                                    14:00 y de 16:00 a 20:00 </a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Sábado de 8:00 a 14:00
                                </a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Almacen Lunes a Viernes
                                    7:30 a 19:30</a></li>

                        </ul>
                    </div>
                </div>
                <!--Widget Block-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h4>CONTACTOS</h4>
                        <p>{{ $footer_[0]->direccion }}</p>
                        <p><span class="rounded-icon"><i class="fa fa-phone"></i></span>TELEFONO/FAX: {{ $footer_[0]->telefono }}<br> </p>
                        <p style="font-size: 14px;"><span class="rounded-icon"><i class="fa fa-envelope-o"></i></span>{{ $footer_[0]->web }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup" id="popup">
        <div class="popup-inner">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.423606327779!2d-3.717780385108168!3d40.332948068655554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42273301e6de11%3A0x6e38d5ce05ea42a4!2sCalle%20del%20Valle%20de%20Tobalina%2C%203%2C%2028021%20Madrid!5e0!3m2!1ses!2ses!4v1614983198218!5m2!1ses!2ses"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <a class="popup__close" href="#">X</a>
        </div>
    </div>

    <!--Copyright Footer Block-->
    <div class="bottom-footer">
        <div class="container">
            <div class="row pad-s15">
                <div class="col-md-12 copy-right text-center">
                    <p>Copyright &copy; 2021 Azulejos Rosa, Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--//=========Footer End=========//-->