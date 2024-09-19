<?php
try {
    //tentativa de conexão
    $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    $conexao = new PDO(dsn: "mysql:host=localhost; dbname=padparadise", username: "root", password: "", options: $options);
    echo "Conexão realizada com sucesso";

} catch (PDOException $exe) {
    //tratar o erro caso a conexao falhe
    echo "Deu erro, mostre o erro: ";
    echo "O erro é " . $exe->getMessage();
}
?>