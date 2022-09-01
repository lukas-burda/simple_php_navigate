
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>

<body>
    <?php

    $pessoa = array(
        'pessoa1' => array(
            'nome' => "Lukas",
            'idade' => "21",
            'altura' => '1.75'
        ),
        'pessoa2' => array(
            'nome' => "Vinicius",
            'idade' => "18",
            'altura' => '1.20'
        ),
        'pessoa3' => array(
            'nome' => "Luizão",
            'idade' => "15",
            'altura' => '1.232'
        )
    );


    function addPessoa($nome, $idade, $altura){
        global $pessoa;
        return array_push($pessoa, array(
            'nome' => $nome,
            'idade' => $idade,
            'altura' => $altura
        ));
    }
    
    $novo_array = addPessoa('Jeferson','35','1.9');
    addPessoa('Edy','35','1.9');
     
    foreach($pessoa as $a){
        foreach($a as $b){
            echo"$b <br>";
        }
    }
    echo  "<hr>";
    echo $pessoa["pessoa1"]["nome"];


    echo var_dump($novo_array)
    ?>
</body>

</html>