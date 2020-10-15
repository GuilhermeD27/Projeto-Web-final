<?php

    $sql = "SELECT * FROM consulta";

    include "conexao.php";

    $resposta = "";

    if ($resultado = mysqli_query($con, $sql)) {

        while ($lh = mysqli_fetch_assoc($resultado)) {

            $resposta .= "<tr>";

            $resposta .= "<td>".$lh['id_consulta']."</td>";

            $resposta .= "<td>".$lh['produto']."</td>";

            $resposta .= "<td>".$lh['preco']."</td>";

            $resposta .= "<td>".$lh['quantidade']."</td>";


        }

        mysqli_close($con);

        echo $resposta;

    }else{

        mysqli_close($con);

        echo "Erro: " . $sql . "<br>" . mysqli_error($con);

    }

?>