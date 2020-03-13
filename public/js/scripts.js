function moveWindow (){window.location.hash="qq";}
moveWindow();

$("#enviar").click(function() {
    validarDadosForm();
});

$("input").change(function(){
    validarForm()
});

// function limitarCheckboxes (questao, limite){
//     var Checkboxes = $( "#q" + questao + " input[type='checkbox']");
//     Checkboxes.click(function()
//     {
//         if (Checkboxes.filter(":checked").length > limite)
//             $(this).removeAttr("checked");
//         if (Checkboxes.filter(":checked").length == limite)
//         {
//             var proximo = $( "#p" + questao + " span");
//             proximo.removeClass("cinza");
//             proximo.addClass("azul");
//             var imagens = $( "#p"+ questao + " img");
//             imagens.attr("src","righta.svg");
//             $("#p"+ questao + " a").attr("href","#q" + (questao+1));
//             $("#p"+ questao + " a").css("cursor","pointer");
//
//
//         }else{
//             var proximo = $( "#p" + questao + " span");
//             proximo.removeClass("azul");
//             proximo.addClass("cinza");
//             var imagens = $( "#p"+ questao + " img");
//             imagens.attr("src","righta2.svg");
//             $("#p"+ questao + " a").removeAttr("href");
//             $("#p"+ questao + " a").css("cursor","no-drop");
//
//         }
//     });
// }

function limitarCheckboxes (questao, limite , urlImage1, urlImage2){

    var Checkboxes = $( "#q" + questao + " input[type='checkbox']");
    Checkboxes.click(function()
    {
        if (Checkboxes.filter(":checked").length > limite)
            $(this).removeAttr("checked");
        if (Checkboxes.filter(":checked").length == limite)
        {
            var proximo = $( "#p" + questao + " span");
            proximo.removeClass("cinza");
            proximo.addClass("azul");
            var imagens = $( "#p"+ questao + " img");
            imagens.attr("src", urlImage1);
            $("#p"+ questao + " a").attr("href","#q" + (questao+1));
            $("#p"+ questao + " a").css("cursor","pointer");
            return true;

        }else{
            var proximo = $( "#p" + questao + " span");
            proximo.removeClass("azul");
            proximo.addClass("cinza");
            var imagens = $( "#p"+ questao + " img");
            imagens.attr("src", urlImage2);
            $("#p"+ questao + " a").removeAttr("href");
            $("#p"+ questao + " a").css("cursor","no-drop");
            return false;
        }
    });
}

function start() {
    window.location.hash="q1";
    $('#titulo', parent.document).css('height','20px');
    // $('#setaanimada', parent.document).hide();
    $('#guy', parent.document).append('<img src="guy.jpg">')

}

function fechar() {
    window.top.location.href = "http://alphage.com.br/";
}

// function validarForm(){
//     var nome = $("#nome").val()
//     var email = $("#email").val();
//     var cpf = $("#cpf").val();
//     if (nome.length > 0 && email.length > 0 && cpf.length > 0 ) {
//         $('#enviar').removeAttr('disabled');
//     }
// }

// function validarDadosForm(){
//     var nome = $("#nome").val()
//     var email = $("#email").val();
//     var cpf = $("#cpf").val();
//     var acpf = cpf.split('');

//     if ( nome.length<5)
//         alert("Nome muito curto. Informe um nome válido." )
//     if ( !emailValido(email))
//         alert( "Por favor, informe um E-mail válido." );
//     if ( cpf.length< 11 || cpf.length >14 || !cpfValido(acpf))
//         alert("Por favor, informe um CPF válido." )

//     if  (emailValido(email) && cpfValido(acpf) && nome.length>4){
//         window.location.hash="q1";
//         $('#titulo', parent.document).html('Queremos saber um pouco mais sobre você!');
//         $('#titulo', parent.document).css('padding','0px');
//         $('#setaanimada', parent.document).hide();
//         $('#paragrafo', parent.document).html('Responda com muita sinceridade! Não tente “acertar” as respostas que parecem mais “adequadas” ou “socialmente corretas”. Para não distorcer o resultado, procure ser bem verdadeiro e escolher a resposta mais adequada “para você”!');
//         $('#guy', parent.document).append('<img src="guy.jpg">')
//     }
// }

// function cpfValido(acpf){
//     var numeroscpf= 0;
//     var numeros = ['0', '1','2', '3','4', '5','6', '7','8', '9']
//     acpf.forEach(element => {
//         if (numeros.includes(element))
//         numeroscpf+=1;
//     });
//     if  (numeroscpf==11)
//         return true
//     else    return false

// }

// function emailValido(email){
//     usuario = email.substring(0, email.indexOf("@"));
//     dominio = email.substring(email.indexOf("@")+ 1, email.length);
//     if ((usuario.length >=1) &&
//         (dominio.length >=3) &&
//         (usuario.search("@")==-1) &&
//         (dominio.search("@")==-1) &&
//         (usuario.search(" ")==-1) &&
//         (dominio.search(" ")==-1) &&
//         (dominio.search(".")!=-1) &&
//         (dominio.indexOf(".") >=1)&&
//         (dominio.lastIndexOf(".") < dominio.length - 1)) {
//         return true;
//     }
//     else{
//         return false;
//     }
// }

limitarCheckboxes(1,5);
limitarCheckboxes(2,5);
limitarCheckboxes(3,5);
limitarCheckboxes(4,1);
limitarCheckboxes(5,4);
limitarCheckboxes(6,5);
limitarCheckboxes(7,5);
limitarCheckboxes(8,1);
limitarCheckboxes(9,4);
limitarCheckboxes(10,5);
limitarCheckboxes(11,1);
limitarCheckboxes(12,1);
limitarCheckboxes(13,4);

for (let i = 14; i < 40; i++) {
    limitarCheckboxes(i,1);
}



