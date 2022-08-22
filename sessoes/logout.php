<?php

session_start(); // para iniciar a sessão
session_unset(); // para limpar a sessão
session_destroy(); // para destruir a sessão

// php -S localhost:8000 >>> http://localhost:8000/sessoes/logout.php 