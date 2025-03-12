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
    if (is_int($an_int)) {
        $an_int += 4;
    }

    var_dump($an_int);

    // Se $a_bool for um texto, imprima
    if (is_string($a_bool)) {
        echo "String: $a_bool";
    }

    // Tipo null no php
    $var = null;

    // tipo booleano
    $foo = True; // atribui o valor True para $foo

    // == É um operador que testa
    // igualdade e retorna um booleano
    // if ($action == "mostrar_versao"){
    //     echo "A versão é 1.23";
    // }

    // isto não é necessário ...
    // if ($exibir_separadores == TRUE){
    //     echo "<hr>\n";
    // }

    // ... porque você pode simplesmente escrever isso:
    // if ($exibir_separadores){
    //     echo "<hr>\n";
    // }

    // Tipo inteiros
    $a = 1234;
    echo $a . "<br>" ;

    // Tipo, números flutuantes
    $a = 1.234;
    $b = 1.2e3;
    $c = 7E-10;
    $d = 1_234.567;

    // Tipo Strings 
    /**
     * Uma string literal pode ser especificada de quatro formas diferentes.
     * aspas simples
     * aspas simples
     * aspas duplas
     * sintaxe heredoc
     * sintaxe nowdoc
     */

    // Aspas simples
    echo 'Isto é uma string comum <br>';

    echo 'Você pode incluir novas linhas em strings,
          dessa maneira que estará tudo bem <br>';

    // Imprime: Arnold disse uma vez: "I'll be back"
    echo 'Arnold disse uma vez: "I\'ll be back" <br>';

    // Imprime: Você tem certeza em apagar C:\\*.*?
    echo 'Você tem certeza em apagar C:\*.*? <br>';

    // Imprime: Isto não será substituído: \n uma nova linha
    echo 'Isto não será substituído: \n uma nova linha <br>';

    // Imprime: Variáveis $também não $expandem
    echo 'Variáveis $também não $expandem <br>';

    var_dump("0D1" == "000");
    var_dump("0E1" == "000");
    var_dump("2E1" == "020");

    // Os temidos arrays
    // #1 Um array simples
    $array = [
        "foo" => "bar",
        "bar" => "foo",
    ];


    // Estruturas de controle
    // Estrutura IF
    $a = 1;
    $b = 2;

    if ($a < $b) {
        echo "a é menor que b <br>";
    }

    // Estrutura ELSE
    if ($a > $b){
        echo "a é maior que b <br>";
    }else {
        echo "a NÃO é maior que b <br>";
    }

    // Estrutura ELSEIF
    if ($a > $b){
        echo "a é maior que b <br>";
    }elseif($a == $b){
        echo "a é igual a b <br>";
    }else {
        echo "a é menor que b <br>";
    }

    // Estruturas de controle
    // Estruturas de repetição 
    // Estrura while

    # Exemplo número 1
    $i = 1;

    # tem que ser verdadeiro pra executar
    while ($i <= 10){
        echo $i++ . "<br>";
    }
    echo $i . "<br>";

    # Exemplo número 2
    $ii = 1;

    while ($ii <= 10):
        echo $ii . "<br>";
        $ii++;

    endwhile;

    // Estrutura do-while
    $iii = 0;

    do {
        echo $iii . "<br>";
    } while($iii > 0);



    
    ?>
</body>

</html>