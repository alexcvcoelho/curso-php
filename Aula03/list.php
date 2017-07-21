<?php
session_start();

$_SESSION['lista'][] = array(
    "nome" => $_POST['nome'],
    "email" => $_POST['email'],
    "comentario" => $_POST['comentario']
);

$lista = $_SESSION['lista'];
//
//foreach ($lista as $value) {
//    echo "<br><br>Nome: {$value['nome']}<br>";
//    echo "<br><br>Email: {$value['email']}<br>";
//    echo "<br><br>Comentario: {$value['comentario']}<br>";
//    echo "<br>----------------------------------<br>";
//}
?>
<html>
    <table border='2'>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Comentário</th>
        </tr>
        <?php foreach ($lista as $value): ?>
            <tr>
                <td><?php echo $value['nome'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['comentario'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</html>