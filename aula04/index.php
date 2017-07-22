<?php
echo "Inserindo Script de conexão <br>";
include './banco/db.php';
ini_set("display_errors", 1);
$resultados = select();
//echo "<br>Fim do Script";
?>
<html>
    <table border="2">
        <tr>
            <th>Descricao</th>
            <th>Valor</th>
            <th>Disponível</th>
        </tr>
        <?php foreach ($resultados as $value) : ?>
            <tr>
                <td><?php echo $value['DESCRICAO']; ?></td>
                <td><?php echo $value['VALOR']; ?></td>
                <td><?php echo $value['DISPONIVEL']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</html>
