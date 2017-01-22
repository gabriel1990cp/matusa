<div class="inner-structure relative w100-l">
    <img src="<?php echo site_url('static/images/about-banner.png') ?>" alt="about-banner"/>
    <div class="center-qoute w100-l">
        <div class="container">
            <h1>Contato</h1>
        </div>
    </div>
</div>

<div class="contact-us w100-l fixed-padding">
    <div class="container">
        <div class="row">
            <h2>Contato</h2>
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-6 w100">
                <span class="icon-location-pin"></span>
                <h3>Endereço</h3>
                <p>Alameda dos Carvalhos, 110</p>
                <p>Quinta dos Carvalhos – Mairiporã – SP</p>
                <p>São Paulo</p>
            </div>

            <div class="col-lg-6 col-md-3 col-sm-4 col-xs-6 w100">
                <span class="icon-bubbles"></span>
                <h3>Contato</h3>
                <p>Tel. 011 4419-2890 / 011 4419-2868</p>
                <p>Cel. 011 99821-4695 / 011 7891-8155</p>
                <p>Nextel 55*9*8827</p>
                <p><a href="#">contato@matusaguinchos.com.br</a></p>
            </div>
        </div>
    </div>
</div>

<div class="message-us w100-l fixed-padding">
    <div class="container">
        <form enctype="multipart/form-data" id="form_contato" name="form_contato">
            <div class="row">
                <h2>Mensagem</h2>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 w100">
                    <input type="text" placeholder="Nome*" id="nome" name="nome"/>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 w100">
                    <input type="text" placeholder="Telefone*" id="telefone" name="telefone"/>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 w100">
                    <input type="text" placeholder="Email*" id="email" name="email"/>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 w100">
                    <select id="assunto" name="Assunto">
                        <option value="">services*</option>
                        <option value="airplane">airplane</option>
                        <option value="ocation cargo">ocation cargo</option>
                    </select>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <textarea placeholder="Mensagem*" id="mensagem" name="mensagem"></textarea>
                </div>
                <div id="ferror"></div>
                <div class="success"></div>
                <div class="text-center">
                    <input type="button" onclick="sendContact();" value="Enviar">
                </div>
            </div>
        </form>
    </div>
</div>

<div class="map-section w100-l">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14020.40678696969!2d77.06516027403846!3d28.53666281928909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1bcf2fc619c5%3A0x4de8c714a5dc27ea!2sPushpanjali+Farms%2C+New+Delhi%2C+Delhi!5e0!3m2!1sen!2sin!4v1453367049850" width="" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>