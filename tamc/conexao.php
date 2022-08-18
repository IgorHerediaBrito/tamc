<?php
    //conexão com o banco de dados
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'tamc';

    $mysqli = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    //if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }