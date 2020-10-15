<?php

    $sql = "SELECT * FROM venda";

    include "conexao.php";

    $resposta = "";

    if ($resultado = mysqli_query($con, $sql)) {

        while ($lh = mysqli_fetch_assoc($resultado)) {

            $resposta .= "<tr>";

            $resposta .= "<td>".$lh['id_cliente']."</td>";

            $resposta .= "<td>".$lh['cliente']."</td>";

            $resposta .= "<td>".$lh['cpf']."</td>";

            $resposta .= "<td>".$lh['produto']."</td>";

            $resposta .= "<td>".$lh['modelo']."</td>";

            $resposta .= "<td>".$lh['valor']."</td>";

            $resposta .= "<td>".$lh['quantidade_comprada']."</td>";

            $resposta .= "<td>".$lh['quantidade_disponivel']."</td>";

            $resposta .= "</tr>";

        }

        mysqli_close($con);

        echo $resposta;

    }else{

        mysqli_close($con);

        echo "Erro: " . $sql . "<br>" . mysqli_error($con);

    }

?>