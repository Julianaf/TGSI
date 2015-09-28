<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <head>
        <title>Upload de arquivos</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            // verifica se foi enviado um arquivo 
            if(isset($_FILES['farquivo']['name']) && $_FILES["farquivo"]["error"] == 0)
            {

                    echo "Voc� enviou o arquivo: <strong>" . $_FILES['arquivo']['name'] . "</strong><br />";
                    echo "Este arquivo � do tipo: <strong>" . $_FILES['arquivo']['type'] . "</strong><br />";
                    echo "Tempor�riamente foi salvo em: <strong>" . $_FILES['arquivo']['tmp_name'] . "</strong><br />";
                    echo "Seu tamanho �: <strong>" . $_FILES['arquivo']['size'] . "</strong> Bytes<br /><br />";

                    $arquivo_tmp = $_FILES['farquivo']['tmp_name'];
                    $nome = $_FILES['farquivo']['name'];


                    // Pega a extensao
                    $extensao = strrchr($nome, '.');

                    // Converte a extensao para mimusculo
                    $extensao = strtolower($extensao);

                    // Somente imagens, .jpg;.jpeg;.gif;.png
                    // Aqui eu enfilero as extes�es permitidas e separo por ';'
                    // Isso server apenas para eu poder pesquisar dentro desta String
                    if(strstr('.jpg;.jpeg;.pdf;.png', $extensao))
                    {
                            // Cria um nome �nico para esta imagem
                            // Evita que duplique as imagens no servidor.
                            $novoNome = md5(microtime()) . $extensao;

                            // Concatena a pasta com o nome
                            $destino = 'imagens/' . $novoNome; 

                            // tenta mover o arquivo para o destino
                            if( @move_uploaded_file( $arquivo_tmp, $destino  ))
                            {
                                    echo "Arquivo salvo com sucesso em : <strong>" . $destino . "</strong><br />";
                                    echo "<img src=\"" . $destino . "\" />";
                            }
                            else
                                    echo "Erro ao salvar o arquivo. Aparentemente voc� n�o tem permiss�o de escrita.<br />";
                    }
                    else
                            echo "Voc� poder� enviar apenas arquivos \"*.jpg;*.jpeg;*.pdf;*.png\"<br />";
            }
            else
            {
                    echo "Voc� n�o enviou nenhum arquivo!";
            }
            ?>

    </body>
</html>