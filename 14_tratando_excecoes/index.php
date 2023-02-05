<?php
// Ocorrência anormal que afecta o funcionamento da aplicação
// Exception é a classe base para todas as Exceptions
// message, code, file, line

class Newsletter{
    public function cadastrarEmail($email){

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Esse email é inválido", 121);
        else:
            echo "Email cadastrado com sucesso!";
        endif;
    }
}

$news = new Newsletter();

try{
    $news->cadastrarEmail("texto@contato");
}catch(Exception $e){
    echo "Mensagem: {$e->getMessage()} <br>";
    echo "Código: {$e->getCode()} <br>";
    echo "Linha: {$e->getLine()} <br>";
    echo "Arquivo: {$e->getFile()} ";
}