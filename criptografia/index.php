<?php
// Criptografia

$senha = "123456";

// função para codificar
$novaSenha = base64_encode($senha); // Criptografia de mão dupla
echo "senha codificada ".$novaSenha."<br>";

// função para descodificar
echo "senha descodificada ".base64_decode($novaSenha)."<br>";

echo "<hr>";

// função que somente aceita codificar
echo "Md5: ".md5($senha)."<br>"; // Criptografia de mão única
echo "Sha1: ".sha1($senha)."<br>"; // Criptografia de mão única

echo "<hr>";

// função para codificar
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT); // quando eu for a usar essa função no banco de dados a "senha tem de ter como varchar(255)"
echo $senhaSegura."<br>";;

$senha_db = '$2y$10$jVlOWNXC8ef4kztTf2Hz4uHYvNdQHMxaivT4D4hjb5zwU4M9Flqyq';
// função para descodificar
if (password_verify($senha, $senha_db)){
    echo "senha válida";
} else {
    echo "senha inválida";
}





//php -S localhost:8000 >>> http://localhost:8000/criptografia/index.php