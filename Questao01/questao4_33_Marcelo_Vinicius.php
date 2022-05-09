<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
    <?php

        $temps = array(10.40, 17.30, 12.33, 10.55, 11.44, 22.22);

        $maior = 0;
        $somaMedia = 0;
        for($i = 0; $i < 6; $i++)
        {
            $temp = $temps[$i];

            if($temp > $maior)
            {
                $maior = $temp;
            }

            if($temp < 15)
            {
                $somaMedia = $somaMedia + $temp;
            }

        }

        $menor = $maior;
        for($i = 0; $i < 6; $i++)
        {
            $temp = $temps[$i];
            if($temp < $menor)
            {
                $menor = $temp;
            }
        }    
    ?>
</head>
<body>
    <h1><?php echo(utf8_decode("A maior temperatura é: " . $maior)) ?></h1>
    <h1><?php echo(utf8_decode("A menor temperatura é: " . $menor)) ?></h1>
    <h1><?php echo(utf8_decode("A média dos valores menores que 15 é: " . $somaMedia / 4)) ?></h1>
</body>
</html>