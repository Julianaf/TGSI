<?php
    include("../include/conexao.php");       
    $mysqli = $conexao;
    
    $nome     = $mysqli->real_escape_string($_POST['nome']);
    $data     = $mysqli->real_escape_string($_POST['data']);
    $hora = $mysqli->real_escape_string($_POST['hora']);
    $observacao     = $mysqli->real_escape_string($_POST['observacao']);
    $arquivo    = $mysqli->real_escape_string($_POST['arquivo']);
    $situacao  = $mysqli->real_escape_string($_POST['situacao']);
    $tipo  = $mysqli->real_escape_string($_POST['tipo']);
    
    foreach ($_POST['aluno'] as $key => $value){
            $aluno[$key] = $value;
    }    
    //$arquivo = $mysqli->fetch_array($_POST['arquivo']); 
    
    $sql = "INSERT INTO `arquivo` (`arq_nome`, `arq_data`, `arq_hora`, `arq_observacao`, `arq_arquivo`, `arq_situacao`,'arq_tipo') 
            VALUES ('$nome', '($data)', '$hora', '$observacao', '$arquivo', '$situacao',$tipo);";
  
    $mysqli->query($sql);
    //$queryInsert->execute();
    
   include("../include/funcoes.php");
        
    header("Location: insere_arquivo.php?mensagem=Arquivo enviado com sucesso!");
    die();
?>