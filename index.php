<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Loja de Produtos</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <div class="container">
        <h1>Loja de Produtos</h1>
        <div class="link-container">
            <a href="cadastro.html" class="btn">Cadastrar Novo Produto</a>
        </div>
        <div class="product-list">
            <?php
            include 'db_conn.php';

            $sql = "SELECT id, nome, descricao, preco, data_criacao FROM produtos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product'>";
                    echo "<h2>" . $row["nome"] . "</h2>";
                    echo "<p>" . $row["descricao"] . "</p>";
                    echo "<p>Preço: R$ " . $row["preco"] . "</p>";
                    echo "<p>Adicionado em: " . $row["data_criacao"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "Nenhum produto cadastrado.";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
