<?php
 
 include ('conexao.php');

 try{

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $csenha =  $_POST['csenha'];

    if($senha != $csenha){
      // criar um array para armazenar a msg de erro
      $retorno = array('Mensagem'=>'Senhas não conferem,tente novamente :(');

      // cria um variavel que ira receber o arrau acima convertido em JSON
      $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

      // Retorno em formato json
      echo $json;

      // encerra o script
      exit;
}
    $sql = "INSERT INTO tb_usuarios(`nome`, `email`,`senha`) VALUES('$nome', '$email', '$senha')";
    
    $comando = $conexao ->prepare($sql);

    $comando = execute(); 

    $retorno = array('Mensagem'=>'Usuario adicionado com sucesso!! :) ');
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;


  

 }catch(PDOExeption $erro){
   echo $erro -> getMessage();
    
 }
  


?>