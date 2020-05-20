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
        $nomeFaixa = $_POST['nomeFaixa'];
        $compositor = $_POST['compositor'];
        $linkFaixa = $_POST['link'];
        $disco = $_POST['discoPertencente'];
        $string_sql = "INSERT INTO faixascd (id_faixa,nome_faixa,link_faixa,autor_faixa,id_produto) VALUES (null,'$nomeFaixa' , '$linkFaixa' ,'$compositor' , '$disco');";
        //echo $string_sql;
        mysqli_query($link, $string_sql);
        if (mysqli_insert_id($link)) {
            header("Location: ../painelAdmin.php");
        } else
            header("Location: ../index.html");
        mysqli_close($link);
        ?>
    </body>
</html>
