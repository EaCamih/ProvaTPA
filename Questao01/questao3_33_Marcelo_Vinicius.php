<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <?php
        $i = 1;
        $valores = "";
        $somaPar = 0;
        $somaMedia = 0;
        for($i = 1; $i <= 4; $i++)
        {
            $valores = $valores . $i . ", ";
            $somaMedia = $somaMedia + $i;
            if($i % 2 == 0)
            {
                $somaPar = $somaPar + $i;
            }
        }
    ?>
</head>
<body>
    <h1><?php echo(utf8_decode("Valores percorridos: " . $valores)) ?></h1>
    <h1><?php echo(utf8_decode("Soma dos valores par: " . $somaPar)) ?></h1>
    <h1><?php echo(utf8_decode("Média dos valroes: " . $somaMedia / 4)) ?></h1>
</body>
</html>