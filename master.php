<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="formulario/form.css">
    <title>IMC</title>
</head>
<body>
    <div class="box">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $peso = htmlspecialchars($_POST['peso']);
        $altura = htmlspecialchars($_POST['altura']);

        $imc = $peso / ($altura ** 2);

        echo "<p class='title'>Seu IMC é de $imc</p>";

        if ($imc < 18.5) {
            echo "<p class='desc'>está ABAIXO DO NORMAL.</p> <br> Procure um médico. Algumas pessoas têm um baixo peso por características do seu
 organismo e tudo bem. Outras podem estar enfrentando problemas, como a desnutrição. É preciso saber qual é o caso.";
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            echo "<p class='desc'>está NORMAL.</p> <br> Que bom que você está com o peso normal! E o melhor jeito de 
continuar assim é mantendo um estilo de vida ativo e uma alimentação equilibrada.";
        } elseif ($imc >= 25 && $imc <= 29.9) {
            echo "<p class='desc'>está SOBREPESO.</p> <br> Ele é, na verdade, uma pré-obesidade e muitas pessoas nessa 
faixa já apresentam doenças associadas, como diabetes e hipertensão. Importante rever hábitos e buscar ajuda antes de, 
por uma série de fatores, entrar na faixa da obesidade pra valer.";
        } elseif ($imc >= 30 && $imc <= 34.9) {
            echo "<p class='desc'>está com OBESIDADE GRAU 1.</p> <br> Sinal de alerta! Chegou na hora de se cuidar, mesmo
 que seus exames sejam normais. Vamos dar início a mudanças hoje! Cuide de sua alimentação. Você precisa iniciar um 
 acompanhamento com nutricionista e/ou endocrinologista.";
        } elseif ($imc >= 35 && $imc <= 39.9) {
            echo "<p class='desc'>está com OBESIDADE GRAU 2.</p> <br> Mesmo que seus exames aparentem estar normais, é 
hora de se cuidar, iniciando mudanças no estilo de vida com o acompanhamento próximo de profissionais de saúde.";
        } else {
            echo "<p class='desc'>está com OBESIDADE GRAU 3.</p> <br> Aqui o sinal é vermelho, com forte probabilidade 
de já existirem doenças muito graves associadas. O tratamento deve ser ainda mais urgente.";
        }
    }
    ?>
    </div>
</body>
</html>