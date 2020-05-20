<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $banco = "aavinil";
        //Função para conectar ao servidor
        $link = mysqli_connect($host, $user, $password) or die(mysqli_error());
        //Função para selecionar o banco de dados
        $db = mysqli_select_db($link, $banco);
        $nomeDisco = $_POST['nomeDisco'];
        $precoDisco = $_POST['precoDisco'];
        $quantidadeEstoque = $_POST['quantidadeEstoque'];
        $produtoraDisco = $_POST['produtoraDisco'];
        $seguimento = $_POST['seguimento'];
        $name = $_FILES['arquivo']['name'];
        $string_sql = "INSERT INTO produto (nome_prod, preco_prod, produtora_prod, quantidade_prod, seguimento_prod,arquivo_prod) VALUES ('$nomeDisco' , '$precoDisco' ,'$produtoraDisco' , '$quantidadeEstoque', '$seguimento', '$name');";
        mysqli_query($link, $string_sql);
        echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/painelAdmin.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem cadastrada com Sucesso.\");
						</script>
                    ";
        mysqli_close($link);
        ?>
    </body>
</html>
