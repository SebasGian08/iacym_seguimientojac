	<?php 
		$catFotter = getCatFooter();
	 ?>
	<!-- electronic_newsletter - start
			================================================== -->
	<section class="electronic_newsletter clearfix">
	    <div class="container maxw_1600">
	        <div
	            class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
	            <div class="col-lg-3 col-md-7 col-sm-9 col-xs-12">
	                <div class="title_wrap">
	                    <i class="fal fa-paper-plane"></i>
	                    <h2>Suscríbete al boletín</h2>
	                    <p class="mb-0">...y recibe un cupón de S/20 para tu primera compra.</p>
	                </div>
	            </div>

	            <div class="col-lg-5 col-md-7 col-sm-9 col-xs-12">
	                <form id="frmSuscripcion" name="frmSuscripcion">
	                    <div class="form_item">
	                        <input type="text" id="nombreSuscripcion" name="nombreSuscripcion"
	                            placeholder="Nombre completo" required>
	                        <input type="email" id="emailSuscripcion" name="emailSuscripcion"
	                            placeholder="email@example.com" required>
	                        <button type="submit" class="custom_btn bg_electronic_blue"
	                            style="top: 75%;">Suscribirse</button>
	                    </div>

	                </form>
	            </div>

	            <div class="col-lg-3 col-md-7 col-sm-9 col-xs-12">
	                <!-- <div class="payment_mathoud">
	                    <p>USAMOS PAGOS SEGUROS</p>
	                    <img src="<?= media() ?>/tiendacambio/images/payment_methods_01.png" alt="image_not_found">
	                </div> -->
	            </div>
	        </div>
	    </div>
	</section>
	<!-- electronic_newsletter - end
			================================================== -->


	</main>
	<!-- footer_section - start
		================================================== -->
	<footer class="footer_section electronic_footer clearfix">
	    <div class="footer_widget_area clearfix">
	        <div class="container maxw_1600">
	            <div class="row justify-content-lg-between">
	                <div class="col-lg-3 col-md-4">
	                    <div class="footer_widget footer_about">
	                        <div class="brand_logo mb_30">
	                            <a href="index.html">
	                                <img src="<?= media() ?>/tiendacambio/images/logo/logo_17_1x.png"
	                                    srcset="<?= media() ?>/tiendacambio/images/logo/logo_17_2x.png 2x"
	                                    alt="logo_not_found">
	                            </a>
	                        </div>
	                        <p class="mb_30" style="text-align:justify;">
	                            Empresa líder en minería y construcción, ofreciendo proyectos y servicios innovadores con
	                            enfoque en seguridad, calidad y respeto ambiental. Comprometidos con la satisfacción del
	                            cliente y la mejora continua.
	                        </p>

	                        <div class="footer_electronic_hotline mb_30">
	                            <i class="fal fa-headset"></i>
	                            <h4>¿TIENES PREGUNTAS? ¡LLÁMANOS 24/7!</h4>
	                            <span>925499717 | 916690366</span>
	                        </div>
	                    </div>
	                </div>

	                <div class="col-lg-3 col-md-4">
	                    <div class="footer_widget footer_useful_links clearfix">
	                        <h3 class="footer_widget_title text-white text-uppercase">Categorías</h3>
	                        <?php if(count($catFotter) > 0){ ?>
	                        <ul class="ul_li_block clearfix">
	                            <?php foreach ($catFotter as $cat) { ?>
	                            <li><a
	                                    href="<?= base_url() ?>/tienda/categoria/<?= $cat['idcategoria'].'/'.$cat['ruta'] ?>"><?= $cat['nombre'] ?></a>
	                            </li>

	                            <?php } ?>
	                        </ul>
	                        <?php } ?>
	                    </div>
	                </div>

	                <div class="col-lg-2 col-md-4">
	                    <div class="footer_widget footer_useful_links clearfix">
	                        <h3 class="footer_widget_title text-white text-uppercase">Redes Sociales</h3>
	                        <ul class="ul_li_block clearfix">
	                            <li><a href="https://www.facebook.com/profile.php?id=61560661932877" target="_blank"><i
	                                        class="fab fa-facebook-f"></i> Facebook</a></li>
	                            <li><a href="https://www.instagram.com/ismcmineriajye.eirl/" target="_blank"><i
	                                        class="fab fa-instagram"></i> Instagram</a></li>
	                            <li><a href="https://wa.me/51925499717" target="_blank"><i class="fab fa-whatsapp"></i>
	                                    WhatsApp</a></li>
	                        </ul>
	                    </div>
	                </div>
	                <div id="fb-root"></div>
	                <script async defer crossorigin="anonymous"
	                    src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v20.0&appId=1519395822127618"
	                    nonce="tQeSnKCh"></script>

	                <div class="col-lg-4 col-md-12">
	                    <div class="footer_widget footer_recent_post">
	                        <h3 class="footer_widget_title text-white text-uppercase mb-0">Visítanos en Facebook</h3>
	                        <br>
	                        <div class="row justify-content-lg-between">
	                            <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=61560661932877" data-tabs="timeline"
	                                data-width="500" data-height="10" data-small-header="false"
	                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
	                                <blockquote cite="https://www.facebook.com/profile.php?id=61560661932877" class="fb-xfbml-parse-ignore"><a
	                                        href="https://www.facebook.com/profile.php?id=61560661932877">Facebook</a></blockquote>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <div class="footer_bottom text-center bg_black clearfix">
	        <div class="container maxw_1600">
	            <p class="copyright_text mb-0">INGENIERIA, SOLUCIONES, MANTENIMIENTO, CONSTRUCCION EN MINERIA J y E .
	                EMPRESA INDIVIDUAL DE RESPONSABILIDAD LIMITADA. RUC 20611765194</p>
	            <p class="copyright_text mb-0">Copyright © 2024, <a href="https://grupocodware.com/"
	                    class="author_link">Grupo Codware</a> marketplace eCommerce. All Rights Reserved</p>
	        </div>
	    </div>
	</footer>
	<!-- footer_section - end-->
	<script>
const base_url = "<?= base_url(); ?>";
const smony = "<?= SMONEY; ?>";
	</script>
	<script src="<?= media() ?>/tienda/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/slick/slick.min.js"></script>
	<script src="<?= media() ?>/tienda/js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/parallax100/parallax100.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/sweetalert/sweetalert.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/js/main.js"></script>
	<script src="<?= media();?>/js/functions_admin.js"></script>
	<script src="<?= media() ?>/js/functions_login.js"></script>
	<script src="<?= media() ?>/tienda/js/functions.js"></script>

	<!-- fin -->
	<script src="<?= media() ?>/tiendacambio/js/jquery-3.5.1.min.js"></script>
	<script src="<?= media() ?>/tiendacambio/js/popper.min.js"></script>
	<script src="<?= media() ?>/tiendacambio/js/bootstrap.min.js"></script>

	<!-- mobile menu - jquery include -->
	<script src="<?= media() ?>/tiendacambio/js/mCustomScrollbar.js"></script>

	<!-- animation - jquery include -->
	<script src="<?= media() ?>/tiendacambio/js/parallaxie.js"></script>
	<script src="<?= media() ?>/tiendacambio/js/wow.min.js"></script>

	<!-- nice select - jquery include -->
	<script src="<?= media() ?>/tiendacambio/js/nice-select.min.js"></script>

	<!-- carousel - jquery include -->
	<script src="<?= media() ?>/tiendacambio/js/slick.min.js"></script>

	<!-- countdown timer - jquery include -->
	<script src="<?= media() ?>/tiendacambio/js/countdown.js"></script>

	<!-- popup images & videos - jquery include -->
	<script src="<?= media() ?>/tiendacambio/js/magnific-popup.min.js"></script>

	<!-- filtering & masonry layout - jquery include -->
	<script src="<?= media() ?>/tiendacambio/js/isotope.pkgd.min.js"></script>
	<script src="<?= media() ?>/tiendacambio/js/masonry.pkgd.min.js"></script>
	<script src="<?= media() ?>/tiendacambio/js/imagesloaded.pkgd.min.js"></script>

	<!-- jquery ui - jquery include -->
	<script src="<?= media() ?>/tiendacambio/js/jquery-ui.js"></script>

	<!-- custom - jquery include -->
	<script src="<?= media() ?>/tiendacambio/js/custom.js"></script>



	</body>

	</html>