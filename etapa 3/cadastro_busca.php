<?php

    $sql = "SELECT * FROM cadastrar";

    include "conexao.php";

    $resposta = "";

    if ($resultado = mysqli_query($con, $sql)) {

        while ($lh = mysqli_fetch_assoc($resultado)) {

            $resposta .= "<tr>";

            $resposta .= "<td>".$lh['id_cadastro']."</td>";

            $resposta .= "<td>".$lh['tipo']."</td>";

            $resposta .= "<td>".$lh['processador']."</td>";

            $resposta .= "<td>".$lh['ram']."</td>";

            $resposta .= "<td>".$lh['disco']."</td>";

            $resposta .= "<td>".$lh['marca']."</td>";

            $resposta .= "<td>".$lh['modelo']."</td>";

            $resposta .= "<td>".$lh['fonte']."</td>";

            $resposta .= "<td>".$lh['tela']."</td>";

            $resposta .= "</tr>";

        }

        mysqli_close($con);

        echo $resposta;

    }else{

        mysqli_close($con);

        echo "Erro: " . $sql . "<br>" . mysqli_error($con);

    }

?>