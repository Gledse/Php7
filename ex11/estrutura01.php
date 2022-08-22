<?php
// Estrutura de repitição
// while e Do while >>> significa enquanto

echo "EXEMPLO 01 while <br>";
$contador = 1;
while ($contador <= 4 ):
    echo "Contador é $contador <br>";
    $contador++;
endwhile;
echo "<hr>";

echo "EXEMPLO 02 Do While <br>";
$contador = 1;
do { // do while executa pelo menos uma vez
    echo "Contador é $contador <br>";
    $contador++;
} while ($contador <= 4 );
echo "<hr>";

// For e Foreach
echo "EXEMPLO 03 For <br>";
for ($contador = 0; $contador <= 4; $contador++){
    echo "8 x $contador = ".($contador*8)."<br>";
}
echo "<hr>";

echo "EXEMPLO 04 Foreach <br>"; // usamos para percorer arrays, foreach >>> significa para cada

$cores = array("Verde", "Vermelho", "Azul");
foreach($cores as $valor){
    echo $valor."<br>";
}
echo "ou <br>";
foreach($cores as $indice => $valor){ // para exibir o indice de cada valor
    echo $indice."-".$valor."<br>";
}





// php -S localhost:8000 >>> http://localhost:8000/ex11/estrutura01.php
?>