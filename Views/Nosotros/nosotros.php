<?php 
headerTienda($data);
//$banner = media()."/tienda/images/bg-01.jpg";
 $banner = $data['page']['portada'];
 $idpagina = $data['page']['idpost'];
 ?>
 <script>
 	document.querySelector('header').classList.add('header-v4');
 </script>
<!-- Content page -->
<!-- blog_section - end
			================================================== -->
			<section class="blog_section mb_50 clearfix">
        <div class="container maxw_1600">
            <div class="electronic_section_title clearfix">
                <h2 class="title_text mb-0" data-bg-color="#ffe7e7">
                    <span data-bg-color="#edb5b5"><i class="fal fa-plug"></i></span> <strong>Sobre</strong> Nosotros.
                </h2>
            </div>

            <div class="electronic_content_container">
                <div class="electronic_blog_listlayout">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7">
                            <div class="item_image">
                                <img src="<?= media() ?>/tiendacambio/images/blog/electronic/img_01.jpg"
                                    alt="image_not_found">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="item_content">
                                <h3 class="item_title mb_30">
                                    Nuestra Misión
                                </h3>
                                <p class="mb_30" style="text-align:justify;">
                                    Contribuir al éxito de nuestros clientes, mediante bienes y servicios innovadores y
                                    diferenciados, mejorando sus expectativas en términos de seguridad, calidad y
                                    respeto del medio ambiente. Consolidando un equipo, de personas íntegras y altamente
                                    motivadas que promuevan la creatividad formando nuevos líderes que apoyen al
                                    crecimiento de la organización, Así mismo se vasa en vender productos herramientas y
                                    equipos para minería y construcción de alta calidad.
                                </p>
                                <a class="custom_btn btn_sm bg_electronic_blue" href="#!">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="electronic_blog_listlayout">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7 order-last">
                            <div class="item_image">
                                <img src="<?= media() ?>/tiendacambio/images/blog/electronic/img_02.jpg"
                                    alt="image_not_found">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="item_content">
                                <h3 class="item_title mb_30">
                                    Nuestra Visión
                                </h3>
                                <p class="mb_30" style="text-align:justify;">
                                    Ser la mejor empresa contratista en minería y construcción, brindando proyectos y
                                    servicios innovadores con seguridad, calidad y respeto al medio ambiente. Orientados
                                    a satisfacer las necesidades de nuestros clientes
                                </p>
                                <a class="custom_btn btn_sm bg_electronic_blue" href="#!">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog_section - end

<?php 
	

	footerTienda($data);
?>