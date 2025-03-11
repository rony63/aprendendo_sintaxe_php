<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aprendendo a linguagem PHP</h1>
    <h2>Anotações dos estudos</h2>
    <?php
        // Imprimir na tela
        echo "Hello, world! <br>";

        print "Hello, world! <br>";


        // Variáveis
        $cor = "verde";
        $idade = 24;

        echo $cor . "<br>";
        echo $idade . "<br>";


        // Tipos de variáveis
        var_dump($cor); // para mostrar informações da variável


        // Comentário no php se dá por // ou /* */ para textos maiores. 
        
        // Tipos
        $a_bool = true; // um valor booleano
        $a_str = "foo"; // um texto
        $a_str2 = 'foo'; // um texto
        $an_int = 12; // um inteiro
        
        echo get_debug_type($a_bool), "\n";
        echo get_debug_type($a_str), "\n";


        // Se essa variável conter um inteiro, aumento o número por quatro
        if(is_int($an_int)){
            $an_int += 4;
        }

        var_dump($an_int);

        // Se $a_bool for um texto, imprima
        if (is_string($a_bool)){
            echo "String: $a_bool";
        }

    ?>
</body>
</html>