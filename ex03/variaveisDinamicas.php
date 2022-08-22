<?php
     // VARIAVEIS DINAMICAS
     $bebida = 'refrigerante';

     $$bebida = 'Coca-cola'; // significa que refrigerante é igual a Coca-cola ou seja refrigerante passa a ser uma variavel dentro da variavel bebida

    echo '<br>'.$bebida .' = '.$$bebida;

    //php -S localhost:8000 >>> http://localhost:8000/ex03/variaveisDinamicas.php
?>