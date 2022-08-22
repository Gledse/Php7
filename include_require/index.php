<?php
include_once 'header.php'; // include mesmo tendo erro no script ele mostra o script, once serve para não carregar em simultaneo a mesma pagina tipo repetir
?>

<?php echo "Ola pessoal";?>

<?php
require_once 'footer.php'; // require se tiver um erro no script ele para o programa e somente mostra o erro










// php -S localhost:8000 >>> http://localhost:8000/include_require/index.php
?>

