<html>
    <form method="POST">
        <input type="text" name="descricao" placeholder="Descrição"/><br>
        <input type="number" name="valor" placeholder="Valor"/><br>
        Disponível <input type="checkbox" value="1" name="disponivel"/><br>
        <button type="submit">Enviar</button>        
    </form>
</html>
<?php
ini_set('display_errors', 1);
include './banco/db.php';
if(isset($_POST['descricao'])){
    insert($_POST['descricao'], $_POST['valor'], $_POST['disponivel']);
    header("Location: http://localhost/aula04");
}
?>
