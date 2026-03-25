<?phpinclude("conexao.php");
$sgl ="SELECT * FROM produtos ORDER BY id Desc";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang= "pt-BR">
    <head>
        <title> INGRIDISYS</title>
</head>
<body>
    <h1>Cadastro de Produto </h1>

    <from action="salvar.php" method="post>
<label> Nome </label>
<input type="text" name "nome" required>

</form>
</body>
