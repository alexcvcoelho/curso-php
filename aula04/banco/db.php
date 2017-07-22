<?php

function conn() {
//CONNECTION
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "VENDAS";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

function select() {
    try {
        $conn = conn();
        $stmt = $conn->prepare("SELECT * FROM PRODUTOS");
        $stmt->execute();
        // set the resulting array to associative
        $lista = array();
        while ($row = $stmt->fetch()) {
            $lista[] = $row;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $lista;
}

function insert($descricao, $valor, $disponivel) {
    try {
        $conn = conn();
        $sql = "INSERT INTO PRODUTOS (DESCRICAO, VALOR, DISPONIVEL)
      VALUES ('{$descricao}', {$valor}, {$disponivel})";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}
?> 

