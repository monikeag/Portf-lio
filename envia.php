<?php
    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);

    $destino = "guiamarke@guiamarke.com.br";
    $assunto = "Contatos do Site";

    $corpo = "Nome: ".$nome. "\n". "E-mail: ".$email."\n". "Telefone: ".$telefone;

    $corpo  = "De: "."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();
    
    if(mail($destino,$email,$corpo,$corpo)){
        echo("Email- enviado com sucesso");

    }else {echo("Houve um erro ao enviar o email")};

?>

