<?php /* Template Name: A Nuvem */ ?>
<?php get_header() ?>

    <section id="anuvem" class="bg-nuvens bg-nuvem-arquitetura">

        <div class="container">
            <section>
                <div class="row espacamento_top">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="titulo-grande text-color-marrom">
                            A Nuvens de Papel
                        </div>
                    </div>
                </div>

                <div class="row espacamento_bottom">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="text-normal text-color-marrom">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row espacamento_top">
                    <div class="col-md-10 col-sm-10 col-xs-10 text-left">
                        <img class="img-responsive" src="<?php echo bloginfo("template_directory") ?>/img/quem-somos-2.png " alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6-col-xs-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <img class="img-responsive" src="<?php echo bloginfo("template_directory") ?>/img/quem_somos_1.png" alt="">
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <div class="text-medio text-color-marrom ">
                                    TICIANA TONIOLO TIEPPO
                                </div>
                                <div class="text-normal text-color-marrom">
                                    <div>Arquiteta e Urbanista</div>
                                    <div>Mãe do João Vitor e da Ana Luiza</div>
                                    <div><strong><span class="text-pequeno text-color-verde">CAU - </span></strong> 12346589</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6-col-xs-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <img class="img-responsive" src="<?php echo bloginfo("template_directory") ?>/img/quem_somos_2.png" alt="">
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <div class="text-medio text-color-marrom">
                                    TICIANA TONIOLO TIEPPO
                                </div>
                                <div class="text-normal text-color-marrom">
                                    <div>Mãe do Antonio</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?  $idFoto = 103;?>
            <div class="espacamento_top espacamento_bottom">
            <div class="row">
				<div class="col-md-12">
					<div class="titulo-grande text-color-marrom">
						Parceiros
					</div>
				</div>
				<div class="col-md-10 col-sm-10 col-xs-10 fotos-carousel">
                    <?php require "parceiros.php" ?>
                </div>
            </div>
        </div>
        </div>

        <div class="container">
			<div id="home-casa" class="espacamento_top">
				<div class="row">
					<div class="col-md-9 col-sm-9 col-xs-9">
						<img class="img-responsive" src="<?php echo bloginfo("template_directory") ?>/img/casas.png" alt="">
					</div>
				</div>
			</div>
		</div>
    </section>

<?php get_footer() ?>
