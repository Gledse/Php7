<?php

session_start();
echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();


// php -S localhost:8000 >>> http://localhost:8000/sessoes/home.php 