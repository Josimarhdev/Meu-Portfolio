<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "josimarhenriquedeoliveira@gmail.com";
    $assunto = "Contato - JSM dev";

    $corpo = "Nome: ".$nome."\n""E-mail: ".$email."\n""Telefone: ".$telefone."\n""Mensagem: ".$mensagem."\n"

    $cabeca = "From: oliveirajh151@gmail.com"."\n"."Reply-to: ".$email. "\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){

        echo("E-mail enviado com sucesso!")
    }else{

        echo("Houve um erro ao enviar o email");
    }
?>