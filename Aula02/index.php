<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <form method="POST" action="dados.php">
            <h2>Formulário de Contato</h2>
            <input type="text" name="nome" placeholder="Nome"/>
            <input type="email" name="email" placeholder="Email"/>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
<br>
<?php
if (isset($_POST['nome']) && isset($_POST['email'])) {
    echo "GET<br>";
    var_dump($_GET);
    echo "<br>POST<br>";
    var_dump($_POST['nome']);
    
    echo $_POST['nome'];
    echo $_POST['email'];
}
?>
