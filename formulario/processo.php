<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="form.css">
    <title>Resultado</title>
</head>
<body>
<main>

    <div class="box">
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $telefone = htmlspecialchars($_POST['telefone']);
            $genero = htmlspecialchars($_POST['genero']);
            $data_nascimento = htmlspecialchars($_POST['data_nascimento']);
            $cidade = htmlspecialchars($_POST['cidade']);
            $estado = htmlspecialchars($_POST['estado']);
            $endereco = htmlspecialchars($_POST['endereco']);

            echo "<h2>Dados do cadastro</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>E-mail:</strong> $email</p>";
            echo "<p><strong>Telefone:</strong> $telefone</p>";
            echo "<h2>Sexo:</h2>";
            echo "<p><strong>Gênero</strong> $genero</p>";
            echo "<h2>Data de nascimento:</h2>";
            echo "<p><strong>Data de Nascimento</strong> $data_nascimento</p>";
            echo "<h2>Endereço</h2>";
            echo "<p><strong>Cidade:</strong> $cidade</p>";
            echo "<p><strong>Estado:</strong> $estado</p>";
            echo "<p><strong>Endereço:</strong> $endereco</p>";
        } else {
            header("location: ../formulario.php");
            exit();
        }

        $_SERVER["DOCUMENT_ROOT"]."/myFolder/path to upload folder".

        $folder = __DIR__ . "/uploads";

        if(!file_exists($folder) || !is_dir($folder)){
            mkdir($folder, 0755);
        }
        var_dump([
            "filesize" => ini_get('upload_max_filesize'),
            "postsize" => ini_get('post_max_size'),
        ]);

        $getPost = filter_input(INPUT_GET, 'post', FILTER_VALIDATE_BOOLEAN);
        var_dump($_FILES);

        if($_FILES && !empty($_FILES['file']['name'])) {
            $fileUpload = $_FILES['file'];
            var_dump($_FILES);

            $allowebTypes = [
                "image/jpeg",
                "image/png",
                "application/pdf"
            ];
        }elseif ($getPost) {
            echo "<p class='tigger warning'>Opa, calma lá amigão! Parece que o arquivo é grande.</p>";
        } else{
            if($_FILES){
                echo "<p class='tigger warning'>Selecione um arquivo antes de Enviar!</p>";
            }
        }

        var_dump(scandir(__DIR__ . "/uploads/"));
        ?>
    </div>
</main>
</body>
</html>