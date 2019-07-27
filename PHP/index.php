<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
 
    <title>Aprendendo PHP</title>
</head>
<body>
  
    <?php
     
        $x = 0;
        echo"<h1>While</h1>";
        while($x <= 10){
            echo "X é igual a ".$x."<br/>";
            $x++;
        }
        $x=0;

        echo"<h1>For</h1>";
        for($i=0; $i<10; $i++){
            echo "I é igual a ".$i."<br/>";
        }

        echo"<h1>Foreach</h1>";
        $nomes = array(
            array("nome" => "Erick", "idade" => 15),
            array("nome" => "Bruno", "idade" => 17),
            array("nome" => "Rapha", "idade" => 16),
            array("nome" => "Felipe", "idade" => 17)
        );
        foreach($nomes as $aluno){
            echo "Aluno: ".$aluno["nome"]." -Idade: ".$aluno["idade"]."<br/>";
        }

        echo"<h1>Funções</h1>";
        #Funcção criada pelo usuario
        function somarNumero($x , $y){
            $soma = $x + $y;
            return $soma;
        }
        echo somarNumero(10,4)."<br/>";

        #Funções de data
        $dataAtual = date("d/m/Y");
        $horaAtual = date("H:i:s");
        echo $dataAtual."<br/>";
        echo $horaAtual."<br/>";

        #Funções matematicas
        //abs da o valor absoluto
        echo abs(-10)."<br/>";
        //round aredonda com base no numero
        echo round(2.8)."<br/>";
        //ceil arredonda pra cima
        echo ceil(2.1)."<br/>";
        //rand gera um numero aleatorio
        echo rand(0,100)."<br/>";
        //pow faz uma potencia entre dois numeros
        echo pow(2,3)."<br/>";

        #Funções de texto
        //explode separa uma string em um array
        $nome = "Erick Scur";
        $explodeTop = explode(" ", $nome);
        print_r ($explodeTop);
        echo "<br/>";

        //implode coloca os dados de um array em uma unica string
        $nome = array("Erick","Scur");
        $implodeTop = implode(" ",$nome);
        echo $implodeTop."<br/>";

        //number_format possui dois parametros, sendo o primeiro o numero e o segundo o numero de casas após a virgula
        $x = number_format(8.23127382718, 2);
        echo $x."<br/>";

        //str-replace substitui uma palavra dentro de uma string, primeiro parametro é a palavra que deseja mudar, segundo é palavra que vai entrar no lugar e o terceiro é a variavel alvo
        $texto = "O rato roeu a roupa!";
        $string = str_replace("roeu","comeu",$texto);
        echo $string."<br/>";

        //strtolower transforma tudo em minusculo
        echo strtolower("SHAUHSAUHSUAHSUA")."<br/>";

        //strtoupper transforma tudo em maiusculo
        echo strtoupper("hsudhaudhsiada")."<br/>";

        //Pega os caracteres desejados de uma string, primeiro parametro é a variavel, segundo é a posição inicial e o terceiro é a quantidade de caracteres
        $texto = "Erick";
        $x = substr($texto,0,3);
        echo $x."<br/>";

        //ucfirst transforma a primeira letra em maiuscula
        echo ucfirst("erick")."<br/>";

        //ucwords transforma em maiusucula cada primeira letra de cada palavra
        echo ucwords("erick scur padilha")."<br/>";

        #Manipulações de arrays
        $array = array(
            "nome" => "Erick",
            "idade" => 15,
            "cidade" => "Videira",
            "estado" => "Santa catarina",
            "pais" => "Brasil"
        );

        //array_keys pega apenas as chaves do array
        $array2 = array_keys($array);
        print_r($array2);
        echo"<br>";

        //array_values pega apenas os valores do array
        $array2 = array_values($array);
        print_r($array2);
        echo "<br>";

        //array_pop remove o ultimo registro do array
        array_pop($array);
        print_r($array);
        echo "<br>";

        //array_pop remove o primeiro registro do array
        array_shift($array);
        print_r($array);
        echo "<br>";

        $alunos = array("Erick","Bruno","Rapha","Felipe" );

        //asort organiza o array por ordem alfabetica(valores)
        asort($alunos);
        print_r($alunos);
        echo "<br>";

        //arsort organiza o array por ordem alfabetica ao contrario(valores)
        arsort($alunos);
        print_r($alunos);
        echo "<br>";

        //count conta quantos registros tem no array
        echo "Total de registros do array: ".count($alunos)."<br>";

        //in_array verifica se o valor esta no array
        if(in_array("Bruno", $alunos)){
            echo "O melhor aluno é Bruno"."<br><br><br>";
        };

        #criptografia
        //md5 não pode ser descriptografado, utilizado em senhas
        $nome = "Erick";
        $nomeMD5 = md5($nome);
        echo $nomeMD5."<br>";

        //base 64, pode ser descriptografado utilizado base64_decode(codigo)
        $nomeBase64 = base64_encode($nome);
        echo $nomeBase64."<br><br><br><br>";


        
    ?>
    
</body>
</html>