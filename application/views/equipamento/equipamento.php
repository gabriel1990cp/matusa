<div class="inner-structure relative w100-l">
    <img src="<?php echo site_url('static/images/about-banner.png')?>" alt="about-banner" />
    <div class="center-qoute w100-l">
        <div class="container">
            <h1>Equipamento</h1>
        </div>
    </div>
</div>

<div class="projects-page w100-l fixed-padding">
    <div class="container">
        <div class="row">
            <h2>Equipamento</h2>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 w100">
                <div class="relative w100-l">
                    <img src="<?php echo site_url('static/images/caminhao1.jpg')?>" alt="project" />
                    <div class="red-bg">
                        <h2>MB 710</h2>
                        <p>Plataforma onde transportamos todos os tipos de veículos leves, pequenos tratores, empilhadeiras de pequeno porte, veículos utilitários e motos.</p>
                    </div>
                    <a href="#" class="fa fa-angle-up ic"></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 w100">
                <div class="relative w100-l">
                    <img src="<?php echo site_url('static/images/caminhao2.jpg')?>" alt="project" />
                    <div class="red-bg">
                        <h2>Ford Cargo 4030</h2>
                        <p>Munck com lança na traseira e quinta roda, nele realizamos serviço de munck em geral até sete toneladas, transbordo de carga, encarretar caminhões de qualquer porte, carga, descarga, destombamento, serviço de reboque de caminhão pesado e transporte de carreta.</p>
                    </div>
                    <a href="#" class="fa fa-angle-up ic"></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 w100">
                <div class="relative w100-l">
                    <img src="<?php echo site_url('static/images/caminhao3.jpg')?>" alt="project" />
                    <div class="red-bg">
                        <h2>Scania 111</h2>
                        <p>Lança extra pesado com redutor de 50 toneladas, com ele fazemos serviço de ribanceira, destombamento, desatolamos caminhões e rebocamos caminhões extra pesados</p>
                    </div>
                    <a href="#" class="fa fa-angle-up ic"></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 w100">
                <div class="relative w100-l">
                    <img src="<?php echo site_url('static/images/caminhao4.jpg')?>" alt="project" />
                    <div class="red-bg">
                        <h2>Scania 112</h2>
                        <p>Lança trucado com quinta roda, com ele fazemos reboque de pesados e extra pesados para longa distância e também rebocamos carretas para cavalo toco ou trucada.</p>
                    </div>
                    <a href="#" class="fa fa-angle-up ic"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-us-simple w100-l fixed-padding">
    <div class="container">
        <div class="row">
            <h2>Contato</h2>
            <p>Fale Conosco. Teremos prazer em atendê-lo.</p>
            <input type="button" value="Realizar Contato" onclick="window.location.href='<?php echo base_url('contato'); ?>'"/>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".ic").on('click',function(ev){
            ev.preventDefault();
            $(this).closest(".relative").children(".red-bg").toggleClass("hover-bg");
            $(this).toggleClass("bc");
            //alert();
        });
    });
</script>
