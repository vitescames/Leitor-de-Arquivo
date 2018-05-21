<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Upload de Arquivo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    </head>
    <body>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Upload de Arquivo</h1>
                <p class="lead">Upload e visualização de arquivo txt em PHP, por Vithor Escames.</p>
            </div>
        </div>

        <div class="container">

            <form enctype="multipart/form-data" method="POST">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />

                <div class="form-group">
                    <label>Enviar arquivo: </label>
                    <input class="form-control-file" name="arquivo" type="file" />
                </div>

                <input name="sub" type="submit" class="btn btn-outline-secondary" value="Enviar arquivo" />
            </form>

            <?php
            
                require_once 'Leitor.php';

                $leitor = new Leitor;   

                if(isset($_POST["sub"])){

                    if(isset($_FILES['arquivo']) && is_uploaded_file($_FILES['arquivo']['tmp_name'])){

                        $leitor->loadContent($_FILES['arquivo']['tmp_name']);
                        echo $leitor->displayContent($_FILES['arquivo']['tmp_name']);

                    } else{
                        echo "Nenhum arquivo foi enviado!";
                    }

                }

            ?>

        </div>
        
    </body>
</html>