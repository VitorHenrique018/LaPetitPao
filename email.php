<?php

//verificar se a variavel esta preenchida e esta preenchida
if(isset($_POST['email']) && !empty($_POST['email'])){

//pegar as variaveis atraves do form da pagina contato.html
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

//montar a mensagem e pra quem enviar
$to = "opaonossopanificadora@gmail.com";
$subject = "Site Panificadora";
$body = "Nome: ".$nome."\n".
        "Email: ".$email."\n".
        "Assunto: ".$assunto."\n".
        "Mensagem: ".$mensagem;

$header = "From:vitorhenrique018@gmail.com"."\r\n".
           "Reply-To:".$email."\r\n".
           "X=Mailer:PHP/".phpversion();

//funcao retorna true ou false
if (mail($to,$subject,$body,$header)){
    echo "<script>
    alert('E-mail enviado com sucesso!'); 
    location= './contato.html';
    </script>";
     
}else{
    echo "<script>
    alert('E-mail não enviado!'); 
    location= './contato.html';
	</script>";
}
}
?>