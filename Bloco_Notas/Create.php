<?php
    include 'db.php';

if (isset($_POST['create'])) {
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $conteudo = $_POST['conteudo'];
    $sql = "INSERT INTO notas (user_id, titulo, categoria, conteudo) VALUES (1, '$titulo', '$categoria', '$conteudo')";
    $conn-> query($sql);
    echo "A nota foi criada";
}
?>

<form method="POST">
    Título: <input type="text" name="titulo"><br>
    Categoria: <input type="text" name="categoria"><br>
    Conteúdo: <textarea name="conteudo"></textarea><br>
    <input type="submit" name="create" value="Criar Nota">
</form>
