$(document).ready(function () {

    $(function ($) {

        $("#telefone").mask("(99) 99999-9999");
    });

    $( "#submit_form" ).click(function() {

        urlAjax = "http://www.mathusaguinchos.com.br/contato/insert";

        var nome = $("#nome").val();
        var telefone = $("#telefone").val();
        var email = $("#email").val();
        var assunto = $("#assunto").val();
        var mensagem = $("#mensagem").val();

        var erro = false;

        if (nome == ''){
            $("#nome").addClass('erro-form');
            erro = true;
        }

        if (telefone == ''){
            $("#telefone").addClass('erro-form');
            erro = true;
        }

        if (erro == false){

        $.ajax({
            type: "POST",
            url: urlAjax,
            data: {nome: nome,telefone:telefone, email:email, assunto:assunto, mensagem:mensagem},
            success: function (retorno) {
                if (retorno == "enviado") {
                    $(".success").show();
                    var nome = $("#nome").val('');
                    var telefone = $("#telefone").val('');
                    var email = $("#email").val('');
                    var assunto = $("#assunto").val('selecione');
                    var mensagem = $("#mensagem").val('');
                } else {
                    $(".erro_mensagem").show();
                }
            }
        });

        }
    });

});

