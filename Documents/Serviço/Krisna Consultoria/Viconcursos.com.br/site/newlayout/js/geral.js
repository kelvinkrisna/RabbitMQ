$(document).ready(function() {
    $('input,#msgf').watermark();
    $('#menu li').hover(function() {
        $('ul', this).slideDown(100);
    }, function() {
        $('ul', this).slideUp(100);
    });
    $("#cadnews").live('click', function() {
        var nome = $('#nomenews').val();
        var email = $('#emailnews').val();
        if ((nome == "Seu nome") || (nome == "")) {
            nome = 0;
            $("#nomenews").removeClass("inputRodape");
            $("#nomenews").addClass("inputRodapxx");
            $("#avisonews").html('Nome em branco!');
            $('#avisonews').fadeIn('slow');
        }
        if ((email == "Seu e-mail") || (email == "")) {
            email = 0;
            $("#emailnews").removeClass("inputRodape");
            $("#emailnews").addClass("inputRodapxx");
            $("#avisonews").html('E-mail em branco!');
            $('#avisonews').fadeIn('slow');
        }
        if ((nome == 0) && (email == 0)) {
            $("#avisonews").html('Preencha os Campos!');
            $('#avisonews').fadeIn('slow');
        }
        er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
        if (er.exec($('#emailnews').val())) {
            var chekmail = "yes";
        }
        else {
            $("#emailnews").removeClass("inputRodape");
            $("#emailnews").addClass("inputRodapxx");
            $("#avisonews").html('E-mail Inválido!');
            $('#avisonews').fadeIn('slow');
        }
        if ((nome != 0) && (email != 0) && (chekmail == "yes")) {
            $('#lightboxWrapRec').fadeIn('slow');
            var nomer = $('#nomer').val(nome);
            var emailr = $('#emailr').val(email);
            $('#mascara').fadeIn('slow');
            $('#mascara').fadeTo('slow', 0.8);
        }
    })
    $(".fecharcadrec a").live('click', function() {
        $('#mascara').fadeOut('slow');
        $('#lightboxWrapRec').fadeOut('slow');
    })
    $(".fffgsair").live('click', function() {
        $('#mascara').fadeOut('slow');
        $('#lightboxWrapRec').fadeOut('slow');
    })
    $("#cadastrarrec").live('click', function() {
        var nome = $('#nomer').val();
        var email = $('#emailr').val();
        var regiao = $('.inputCadastrarrec').val();
        var estado = $('.inputCadastrarrecx').val();
        var url = $('#urlsite').val();
        if ((regiao == 0) || (regiao == "")) {
            $('#validaregiao').fadeIn('slow');
        }
        if ((estado == 0) || (estado == "")) {
            $('#validaregiao').fadeOut('slow');
            $('#validaestado').fadeIn('slow');
        }
        if ((regiao != 0) && (estado != 0) && (regiao != "") && (estado != "")) {
            $.post(url + "funcoes/news/news.php", {nome: nome, email: email, regiao: regiao, estado: estado}, function(data) {
                $("#newrec").html(data);
                $('#newrec').fadeIn('slow');
            });
        }
    })
    $("#indique").live('click', function() {
        var nome = $('#nomeind').val();
        var email = $('#emailind').val();
        if ((nome == "Seu nome") || (nome == "")) {
            nome = 0;
            $("#nomeind").removeClass("inputRodape");
            $("#nomeind").addClass("inputRodapxx");
            $("#avisoind").html('Nome em branco!');
            $('#avisoind').fadeIn('slow');
        }
        if ((email == "E-mail de seu amigo") || (email == "")) {
            email = 0;
            $("#emailind").removeClass("inputRodape");
            $("#emailind").addClass("inputRodapxx");
            $("#avisoind").html('E-mail em branco!');
            $('#avisoind').fadeIn('slow');
        }
        if ((nome == 0) && (email == 0)) {
            $("#avisoind").html('Preencha os Campos!');
            $('#avisoind').fadeIn('slow');
        }
        if ((nome != 0) && (email != 0)) {
            $('#nomeind').val('Seu nome');
            $('#emailind').val('E-mail de seu amigo');
            $("#carregando").html('Enviando...');
            $('#carregando').fadeIn('slow');
            $('#mascara').fadeIn('slow');
            $('#mascara').fadeTo('slow', 0.8);
        }
    });
    $("#logar").live('click', function() {
        $('#mascara').fadeIn('slow');
        $('#mascara').fadeTo('slow', 0.8);
        $('#lightboxWrap').fadeIn('slow');
    });
    $(".fecharlogin a").live('click', function() {
        $('#mascara').fadeOut('slow');
        $('#lightboxWrap').fadeOut('slow');
    });
    $(".fecharcad a").live('click', function() {
        $('#mascara').fadeOut('slow');
        $('#lightboxWrapcad').fadeOut('slow');
    })
    $("#irlogin").live('click', function() {
        $('#lightboxWrapcad').fadeOut('slow');
        $('#lightboxWrap').fadeIn('slow');
    })
    $("#ircadastro").live('click', function() {
        $('#lightboxWrap').fadeOut('slow');
        $('#lightboxWrapcad').fadeIn('slow');
    })
    $("#cadastroform").live('click', function() {
        $('#mascara').fadeIn('slow');
        $('#mascara').fadeTo('slow', 0.8);
        $('#lightboxWrapcad').fadeIn('slow');
    });
    $("#regiao").live('change', function() {
        var regiao = $('#regiao').val();
        var url = $('#urlsite').val();
        if (regiao != 0) {
            //$('#filtro').attr("disabled", '');
            $.post(url + "funcoes/cidades/filtro-cidades.php", {regiao: regiao}, function(data) {
                $("#uf").html(data);
                $('#uf').fadeIn('slow');
            });
        }
        else {
            $('#estado').attr("disabled", true);
            $('#filtro').attr("disabled", true);
        }
    });
    $("#regiaocad").live('change', function() {
        var regiao = $('#regiaocad').val();
        var url = $('#urlsite').val();
        if (regiao != 0) {
            $.post(url + "funcoes/cidades/filtro-cidades-cad.php", {regiao: regiao}, function(data) {
                $("#ufcad").html(data);
                $('#ufcad').fadeIn('slow');
            });
        }
        else {
            $('#estadocad').attr("disabled", true);
        }
    });
    $("#regiaocadup").live('change', function() {
        var regiao = $('#regiaocadup').val();
        var url = $('#urlsite').val();
        if (regiao != 0) {
            $.post(url + "funcoes/cidades/filtro-cidades-cad.php", {regiao: regiao}, function(data) {
                $("#ufcadup").html(data);
                $('#ufcadup').fadeIn('slow');
            });
        }
        else {
            $('#estadocadup').attr("disabled", true);
        }
    });
    $("#cadastrarb").live('click', function() {
        var nome = $('#nomecd').val();
        var email = $('#emailcd').val();
        var regiao = $('#regiaocad').val();
        var estado = $('#estadocad').val();
        var senha = $('#senhacd').val();
        if ((nome == "Seu nome") || (nome == "")) {
            nome = 0;
            $("#nomecd").removeClass("inputCadastrar");
            $("#nomecd").addClass("inputCadastrarx");
            $("#avisonewscad").html('Nome em branco!');
            $('#avisonewscad').fadeIn('slow');
        }
        if ((email == "Seu E-mail") || (email == "")) {
            email = 0;
            $("#emailcd").removeClass("inputCadastrar");
            $("#emailcd").addClass("inputCadastrarx");
            $("#avisonewscad").html('E-mail em branco!');
            $('#avisonewscad').fadeIn('slow');
        }
        if ((regiao == "Selecione a regiÃ£o") || (regiao == 0)) {
            regiao = 0;
            $("#regiaocad").removeClass("inputCadastrar");
            $("#regiaocad").addClass("inputCadastrarx");
            $("#avisonewscad").html('RegiÃ£o em branco!');
            $('#avisonewscad').fadeIn('slow');
        }
        if ((estado == "Selecione o estado") || (estado == 0)) {
            estado = 0;
            $("#estadocad").removeClass("inputCadastrar");
            $("#estadocad").addClass("inputCadastrarx");
            $("#avisonewscad").html('Estado em branco!');
            $('#avisonewscad').fadeIn('slow');
        }
        if ((senha == "xxxxxx") || (senha == 0)) {
            senha = 0;
            $("#senhacd").removeClass("inputCadastrar");
            $("#senhacd").addClass("inputCadastrarx");
            $("#avisonewscad").html('Senha em branco!');
            $('#avisonewscad').fadeIn('slow');
        }
        if ((nome != 0) && (email != 0) && (regiao != 0) && (estado != 0) && (senha != 0)) {
            var url = $('#urlx').val();
            $.post(url + "funcoes/logar/cadastro.php", {email: $('#emailcd').val(), senha: $('#senhacd').val(), nome: $('#nomecd').val(), regiao: $('#regiaocad').val(), estado: $('#estadocad').val()}, function(data) {
                $("#avisonewscad").html(data);
                $('#avisonewscad').fadeIn('slow');
            });
        }
    });
    $("#filtro").live('click', function() {
        var regiao = $('#estado').val();
        if (regiao != 0) {
            var url = $('#urlsite').val();
            location.href = url + "concursos/regiao/" + regiao;
        }
        else {
            alert("Voce Precisa Selecionar um Estado")
        }
    });
    $("#pxqsar").live('click', function() {
        var campo = $('#campo').val();
        var acao = $('#acao').val();
        var url = $('#urlsite').val();
        $.post(url + "funcoes/noticias/pesquisar.php", {campo: campo, acao: acao}, function(data) {
            $("#wrapEsq").html(data);
            $('#wrapEsq').fadeIn('slow');
        });
    });
    $("#comenti").live('click', function() {
        var nome = $('#nome').val();
        var email = $('#email').val();
        var site = $('#site').val();
        var comentario = $('#coment').val();
        var id = $('#id').val();
        var url = $('#url').val();
        if ((nome == "") || (nome == "Seu nome")) {
            $("#nome").removeClass("inputComentar");
            $("#nome").addClass("inputComentarcheck");
            var nome = 0;
        }
        if ((email == "") || (email == "Seu e-mail")) {
            $("#email").removeClass("inputComentar");
            $("#email").addClass("inputComentarcheck");
            var email = 0;
        }
        if (comentario == "") {
            $("#coment").removeClass("textAreaComentar");
            $("#coment").addClass("textAreaComentarcheck");
        }
        if ((nome != 0) && (email != 0) && (comentario !== "")) {
            $.post(url + "funcoes/comentarios/comentarios.php", {nome: nome, email: email, site: site, comentario: comentario, id: id, url: url}, function(data) {
                $("#comentisx").html(data);
                $('#comentisx').fadeIn('slow');
            });
        }
        else {
            $('#validachek').fadeIn('slow');
        }
    });
    $(".sendfale").live('click', function() {
        var nomee = $('#nomef').val();
        var cidadee = $('#cidadef').val();
        var uff = $('#uff').val();
        var msgg = $('#msgf').val();
        var mail = $('#emailf').val();
        if ((nomee == "") || (nomee == "Digite seu nome")) {
            var nome = 0;
            $("#nomef").removeClass("imputf");
            $("#nomef").addClass("imputfX");
            $('#validacampos').fadeIn('slow');
        }
        if ((cidadee == "") || (cidadee == "Sua Cidade")) {
            var cidade = 0;
            $("#cidadef").removeClass("imputf");
            $("#cidadef").addClass("imputfX");
            $('#validacampos').fadeIn('slow');
        }
        if ((uff == "") || (uff == "uf")) {
            var uf = 0;
            $("#uff").removeClass("imputf");
            $("#uff").addClass("imputfX");
            $('#validacampos').fadeIn('slow');
        }
        if ((msgg == "") || (msgg == "Digite sua mensagem")) {
            var msg = 0;
            $("#msgf").removeClass("imputf");
            $("#msgf").addClass("imputfX");
            $('#validacampos').fadeIn('slow');
        }
        er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
        if (er.exec($('#emailf').val())) {
            var chekmail = "yes";
        }
        else {
            $("#emailf").removeClass("imputf");
            $("#emailf").addClass("imputfX");
            $('#validacamposEmail').fadeIn('slow');
        }
        if ((chekmail == "yes") && (nome != 0) && (cidade != 0) && (uf != 0) && (msg != 0)) {
            $('.sendfale').fadeOut('');
            $('#aguardxff').fadeIn('slow');
            $('#validacamposEmail').fadeOut('slow');
            $('#validacampos').fadeOut('slow');
            $.post("http://www.viconcursos.com/funcoes/fale-conosco.php", {nome: nomee, email: mail, cidade: cidadee, uf: uff, msg: msgg}, function(data) {
                $('.mtsend').fadeOut('slow');
                $('#faleconosco').fadeIn('slow');
            });
        }
    });
});