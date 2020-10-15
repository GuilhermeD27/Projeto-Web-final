<?php

    if(isset($_POST['campo_tipo'])){

        $tipo = $_POST['campo_tipo'];

        $processador = $_POST['campo_proce'];

        $ram = $_POST['campo_ram'];

        $disco = $_POST['campo_disco'];

        $marca = $_POST['campo_marca'];

        $modelo = $_POST['campo_modelo'];

        $fonte = $_POST['campo_fonte'];

        $tela = $_POST['campo_tela'];

        $sql = "INSERT INTO cadastrar(tipo,processador,ram,disco,marca,modelo,fonte,tela)VALUES('$tipo','$processador','$ram','$disco','$marca','$modelo', '$fonte', '$tela')";

        include "conexao.php";

        if (mysqli_query($con, $sql)) {

            echo "ok";

        }else{

            echo "Erro: " . $sql . "<br>" . mysqli_error($con);

        }

        mysqli_close($con);



    }else{

        echo "erro";

    }

?>