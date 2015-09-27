<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar_aluno.php");
?>

    <!-- main -->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Envio de arquivo para orientador</h2>
            <form id="formArquivo" action="recebe_arquivo.php" method="post" enctype="multipart/form-data">
                <div class="row"> 
                    <div class="span12"> <span class="label">Observações</span><br>
                         <div class="row">
                             <textarea id="justificativa" name="justificativa" class="textarea" rows="5"></textarea>
                             <ul class="list-h inner-separated pull-right">
                                 <li>Restam 1024 caracteres</li>
                                 <li>Caracteres: 0</li>
                                 <li>Palavras: 0</li>
                             </ul>
                         </div>
                        <span id="contadorJustificativa"></span>  
                    </div>
                </div>
                              
                <fieldset class="bordered rounded shadowed margin-bottom"> 
                    <div class="row"> 
                        <div> Envie o arquivo no formato .pdf <br> 
                            <strong>Tamanho arquivos:</strong> 10 Mb. <br> 
                                
                    <table id="tableAnexos" class="table bordered rounded shadowed striped stroked narrow">
                        <thead class="header"> 
                            <tr> 
                                <th> <br> 
                                    <input type="file" name="parquivo" id="parquivo" /> <br>
                                    <input type="hidden" name="MAX_SIZE_FILE" value="100000" /> <br> <!-- evita que o usuario espere seu careegameento no servidor para saber que é válido-->
                                </th> 
                            </tr> 
                        </thead> 
                    </table> 
                </fieldset>   
                <div class="form-actions bottom">
                    <button id="cancel" type="button" class="btn left"><i class="icon-ban-circle"></i> Cancelar</button>
                     <button id="salvar" type="button" class="btn primary" data-hasqtip="2"><i class="icon-save"></i> Salvar</button>
                     <button id="Enviar" type="button" class="btn primary" data-hasqtip="2"><i class="icon-save"></i> Enviar</button>
                </div>
            </form>
        </div>
    </div>
                    
<?php
	include("../rodape.php");
?>  