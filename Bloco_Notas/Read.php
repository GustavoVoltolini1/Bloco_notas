<?php
    include "db.php";
    
$result = $conn->query("SELECT * FROM notas");
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["nota_id"] . " - Título: " . $row["titulo"] . "<br>";
    echo "Categoria: " . $row["categoria"] . "<br>";
    echo "Conteúdo: " . $row["conteudo"] . "<br><br>";
}
?>
