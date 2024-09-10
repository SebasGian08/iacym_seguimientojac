<?php 
	headerTienda($data);
	$arrSlider = $data['slider'];
    $arrCategorias = $data['categorias'];
	$arrBanner = $data['banner'];
	$arrProductos = $data['productos'];
	$contentPage = "";
	if(!empty($data['page'])){
		$contentPage = $data['page']['contenido'];
	}
?>
<main>





    <!-- slider_section - start
================================================== -->
    <section class="slider_section sec_ptb_50 clearfix">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                    <div class="alldepartments_menu_wrap">
                        <button class="alldepartments_btn bg_electronic_blue text-uppercase" type="button"
                            data-toggle="collapse" data-target="#alldepartments_dropdown" aria-expanded="false"
                            aria-controls="alldepartments_dropdown" style="background-color:#00305d!important;">
                            <i class="far fa-bars"></i> Nuestras Categorias
                        </button>
                        <div class="alldepartments_dropdown show_lg collapse" id="alldepartments_dropdown">
                            <div class="card">
                                <?php 
                                    for ($j=0; $j < count($arrCategorias); $j++) {
                                        $ruta = $arrCategorias[$j]['ruta']; 
                                    ?>
                                <ul class="alldepartments_menulist ul_li_block clearfix">
                                    <li class="has_child"><a
                                            href="<?= base_url().'/tienda/categoria/'.$arrCategorias[$j]['idcategoria'].'/'.$ruta; ?>"><?= $arrCategorias[$j]['nombre'] ?></a>
                                    </li>
                                </ul>
                                <?php 
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="electronic_slider position-relative clearfix">
                        <div class="main_slider clearfix" data-slick='{"arrows": false}'>
                            <?php for ($i = 0; $i < count($arrSlider); $i++) : ?>
                            <div class="item clearfix"
                                data-background="<?= media() ?>/tiendacambio/images/slider/electronic/bg_01.jpg">
                                <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".4s">
                                    <img src="<?= $arrSlider[$i]['portada'] ?>" alt="image_not_found">
                                </div>
                                <div class="slider_content">
                                    <h3 class="text-uppercase" data-animation="fadeInUp" data-delay=".6s">
                                        <?= $arrSlider[$i]['nombre'] ?></h3>
                                    <p data-animation="fadeInUp" data-delay=".8s">
                                        <?= $arrSlider[$i]['descripcion'] ?>
                                    </p>
                                    <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                        <a href="<?= base_url(); ?>/tienda"
                                            class="custom_btn btn_sm btn_border border_electronic">Navegar
                                            ahora</a>
                                    </div>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <!-- slider progress -->
                        <div class="slick-progress">
                            <span></span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <?php 
				for ($j=0; $j < count($arrBanner); $j++) {
					$ruta = $arrBanner[$j]['ruta']; 
				 ?>
                    <div class="advertisement_image mb_30">
                        <a href="#!">
                            <img src="<?= $arrBanner[$j]['portada'] ?>" alt="image_not_found">
                        </a>
                        <?php 
                                    }
                                    ?>
                    </div>
                </div>

            </div>
    </section>
    <!-- slider_section - end
================================================== -->

    <section class="section-slide">
        <div class="wrap-slick1 rs1-slick1">
            <div class="slick1">
                <?php 
                for ($j=0; $j < count($arrCategorias); $j++) {
                    $ruta = $arrCategorias[$j]['ruta']; 
                ?>
                <div class="item-slick1" style="background-image: url(<?= $arrCategorias[$j]['portada'] ?>);">
                    <div class="container h-full">
                    </div>
                </div>
                <?php 
						}
						?>
            </div>
        </div>
    </section>

    <!-- product_section - start
			================================================== -->
    <section class="product_section mb_50 clearfix">
        <div class="container maxw_1600">
            <div class="electronic_content_container">
                <div class="row justify-content-lg-between">

                    <div class="col-lg-4">
                        <div class="electronic_deals_slider">
                            <div class="item_header">
                                <h2 class="title_text text-white mb-0"><strong>Ofertas</strong> por campaña</h2>
                            </div>
                            <div class="weekly_deals_carousel position-relative">
                                <div class="slideshow1_slider" data-slick='{"dots": false}'>
                                    <?php 
                // Obtener tres productos aleatorios
                $productosAleatorios = array_rand($arrProductos, 3);
                foreach ($productosAleatorios as $indice) {
                    $rutaProducto = $arrProductos[$indice]['ruta']; 
                    if(count($arrProductos[$indice]['images']) > 0 ){
                        $portada = $arrProductos[$indice]['images'][0]['url_image'];
                    } else {
                        $portada = media().'/images/uploads/product.png';
                    }
                    ?>
                                    <div class="item">
                                        <div class="electronic_deals_item">
                                            <div class="item_price">
                                                <strong><?= SMONEY.formatMoney($arrProductos[$indice]['precio']); ?></strong>
                                            </div>
                                            <h3 class="item_title mb-0">
                                                <a
                                                    href="<?= base_url().'/tienda/producto/'.$arrProductos[$indice]['idproducto'].'/'.$rutaProducto; ?>"><?= $arrProductos[$indice]['nombre'] ?></a>
                                            </h3>
                                            <div class="item_image">
                                                <img src="<?= $portada ?>" alt="image_not_found">
                                            </div>
                                            <div class="countdown_wrap">
                                                <div class="countdown_content">
                                                    <h4>Apresúrate!</h4>
                                                    <p>La oferta termina en:</p>
                                                </div>
                                                <ul class="countdown_timer timein_box ul_li clearfix"
                                                    data-countdown="2024/10/24"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="carousel_nav clearfix">
                                    <button type="button" class="left_arrow d-inline-block"><i
                                            class="fal fa-angle-left mr-1"></i> Previous deal</button>
                                    <button type="button" class="right_arrow d-inline-block">Next deal <i
                                            class="fal fa-angle-right ml-1"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8">
                        <div class="electronic_product_group clearfix">
                            <div class="tab-content">
                                <div id="featured_tab" class="tab-pane fade active">
                                    <ul class="electronic_product_columns ul_li has_4columns clearfix">
                                        <?php 
                    $totalProductos = count($arrProductos);
                    $indicesAleatorios = array_rand($arrProductos, min(8, $totalProductos)); // Obtener 8 índices aleatorios
                    for ($i = 0; $i < min(8, $totalProductos); $i++) {
                        $p = $indicesAleatorios[$i];
                        $rutaProducto = $arrProductos[$p]['ruta']; 
                        if(count($arrProductos[$p]['images']) > 0 ){
                            $portada = $arrProductos[$p]['images'][0]['url_image'];
                        }else{
                            $portada = media().'/images/uploads/product.png';
                        }
                    ?>
                                        <li>
                                            <div class="electronic_product_item">
                                                <ul class="product_label ul_li clearfix">
                                                    <li>20%</li>
                                                </ul>
                                                <div class="item_image">
                                                    <img style="max-height: 100%;" src="<?= $portada ?>" alt="image_not_found">
                                                </div>
                                                <div class="item_content">
                                                    <span class="item_name"><?= $arrProductos[$p]['categoria'] ?></span>
                                                    <h3 class="item_title">
                                                        <a
                                                            href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>"><?= $arrProductos[$p]['nombre'] ?></a>
                                                    </h3>
                                                    <span
                                                        class="item_price"><?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?></span>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- product_section - end
			================================================== -->

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
                                <a class="custom_btn btn_sm bg_electronic_blue" href="https://wa.me/51925499717"
                                    target="_blank">Contáctanos</a>
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
                                <a class="custom_btn btn_sm bg_electronic_blue" href="https://wa.me/51925499717"
                                    target="_blank">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="abtn_wrap text-center clearfix">
                    <a href="<?= base_url(); ?>/nosotros" class="custom_btn btn_border border_electronic">Sobre
                        Nosotros</a>
                </div>
            </div>
        </div>
    </section>
    <!-- blog_section - end
			================================================== -->
            
    <!-- product_section - start
			================================================== -->
    <section class="product_section mb_50 clearfix">
        <div class="container maxw_1600">
            <div class="electronic_section_title clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-3">
                        <h2 class="title_text mb-0" data-bg-color="#ffd4d3">
                            <span data-bg-color="#e09e9c"><i class="fal fa-plug"></i></span> <strong>Productos</strong>
                            Exclusivos
                        </h2>
                    </div>

                    <div class="col-lg-3 order-last">
                        <div class="deals_items_countdown countdown_wrap">
                            <div class="countdown_content">
                                <h4>Hurry up!</h4>
                                <p>Offer ends in:</p>
                            </div>
                            <ul class="countdown_timer timein_box ul_li_right clearfix" data-countdown="2024/8/24"></ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="electronic_content_container">
                <div class="tab-content">
                    <div id="tvvideo_tab" class="tab-pane active">
                        <ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
                            <?php for ($p = 0; $p < count($arrProductos); $p++) : ?>
                            <?php
                                $rutaProducto = $arrProductos[$p]['ruta'];
                                if (count($arrProductos[$p]['images']) > 0) {
                                    $portada = $arrProductos[$p]['images'][0]['url_image'];
                                } else {
                                    $portada = media() . '/images/uploads/product.png';
                                }
                            ?>
                            <li>
                                <div class="electronic_product_item">
                                    <ul class="product_label ul_li clearfix">
                                        <li>Disponible</li>
                                    </ul>
                                    <div class="item_image">
                                        <img style="max-height: 100%;" src="<?= $portada ?>" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a
                                                href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$rutaProducto; ?>"><?= $arrProductos[$p]['nombre'] ?></a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar"
                                                    data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="value_text">Stock : <?= $arrProductos[$p]['stock'] ?> </span>
                                        </div>
                                        <span
                                            class="item_price"><?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?></span>
                                    </div>
                                </div>
                            </li>
                            <?php endfor; ?>
                        </ul>
                        <div class="abtn_wrap text-center clearfix">
                            <a href="<?= base_url().'/tienda';?>" class="custom_btn btn_border border_electronic">Ver
                                más productos</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- product_section - end
			================================================== -->
<!-- feature_section - start
			================================================== -->
			<section class="feature_section electronic_feature_carousel mb_50 clearfix">
				<div class="slideshow1_slider clearfix" data-slick='{"arrows": false}'>
					<div class="item" data-background="<?= media() ?>/tiendacambio/images/backgrounds/bg_12.jpg">
						<div class="container maxw_1600">
							<div class="row align-items-center justify-content-lg-between">
								<div class="col-lg-7">
									<div class="item_image">
										<img src="<?= media() ?>/tiendacambio/images/feature/electronic/img_01.png" alt="image_not_found">
									</div>
								</div>

								<div class="col-lg-5">
									<div class="item_content">
										<!-- <span class="item_price">
											<strong>£99.00</strong>
											<i>ALL-NEW-SPORT</i>
										</span> -->
										<div class="item_type">
											<span>
												<i>Todas las herramientas</i>
												<small>Disponibles</small>
											</span>
										</div>
										<h3 class="item_title text-white">
											SOMOS TU MEJOR OPCIÓN
										</h3>
										<a href="<?= base_url(); ?>/tienda" class="custom_btn bg_white">Ver Productos</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					
				</div>
			</section>
			<!-- feature_section - end


    </section>
    <?php 
	footerTienda($data);
?>