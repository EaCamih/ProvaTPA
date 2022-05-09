<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/pagina.css">
    <?php

        $nome = "Marcelo Vinicius Viana Moraes";

        $userA = $_POST["usuario"];
        $senha = $_POST["senha"];

        $userParts = explode(" ", $nome);
        $usuario = $userParts[0] . char_at($userParts[1], 0) . char_at($userParts[2], 0);


        $estado = false;
        if($userA == $usuario && $senha == $userParts[1])
        {
            $estado = true;
        }

        function char_at($str, $pos)
        {
        return $str{$pos};
        }
    ?>
</head>
<body>
    <h1><?php
    if($estado == true)
    {
        echo(utf8_decode("Logado com sucesso."));
    }
    else
    {
        echo(utf8_decode("Acesso negado."));
    }
    ?></h1>
</body>
</html>