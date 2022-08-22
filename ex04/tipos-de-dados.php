<?php

// TIPO DE DADOS

// string
$nome = 'Olá mundo';
var_dump($nome); // essa função nos mostra informações sobre a variavel $nome

if(is_string($nome)): // validação, is_string($nome) >>> irá verificar se essa variavel é uma string ou não
    echo '<br> é uma string';
else:
    echo '<br> Não é uma string';
endif;
echo '<hr>';

// int
$idade = 21;
var_dump($idade); 
if(is_int($idade)): 
    echo '<br> é um inteiro';
else:
    echo '<br> Não é um inteiro';
endif;
echo '<hr>';

// float
$altura = 1.78;
var_dump($altura); 
if(is_float($altura)): 
    echo '<br> é um float';
else:
    echo '<br> Não é um float';
endif;
echo '<hr>';

// boolean
$admin = false;
var_dump($admin); 
if(is_bool($admin)): 
    echo '<br> é um boolean';
else:
    echo '<br> Não é um boolean';
endif;
echo '<hr>';

// TIPOS DE DADOS COMPOSTOS

// Array
$carros = array("Gol","Uno","Camaro", 8376);
var_dump($carros);
if(is_array($carros)): 
    echo '<br> é um array';
else:
    echo '<br> Não é um array';
endif;
echo '<hr>';

// Objecto
class Cliente { // classe
    public $nome; // atributo
    public function atribuirNome($nom) { // metodo
        $this->$nome = $nom;
    }
}
$funcionario = new Cliente(); // instanciamos a classe Clinte, a nossa variavel funcionario agora é um objecto
$funcionario->atribuirNome('Jamisse');
var_dump($funcionario);
if(is_object($funcionario)): 
    echo '<br> é um objecto';
else:
    echo '<br> Não é um objecto';
endif;
echo '<hr>';

// TIPO DE DADOS ESPECIAIS
// NULL
$cidade = NULL;
var_dump($cidade);

// Resource >>> serve para fazer referencia a recursos externos, fazer conexão com o banco de dados, etc

//php -S localhost:8000 >>> http://localhost:8000/ex04/tipos-de-dados.php

?>