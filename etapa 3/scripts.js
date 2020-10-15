$(document).ready(function () {

    $("#conteudo").on('submit','#frmCadastro', function (e) {

        e.preventDefault();

        var formulario = $(this).serialize();

        $.ajax({

            type: "post",

            url: "ins_cadastro.php",

            data: formulario,

            dataType: "text",

            success: function (response) {

                if(response == "ok"){

                    $('#frmCadastro').each (function(){

                        this.reset();

                    });

                    alert("Inserido com sucesso!");

                }else{

                    alert(response);

                }

            }

        });

    });

    $("#conteudo").on('click','#btn_bscCadastrar', function (e) {

        e.preventDefault();

        $.ajax({

            type: "post",

            url: "cadastro_busca.php",

            data: "busca",

            dataType: "text",

            success: function (response) {

                $('#tblCadastrar').html(response);

            }

        });

    });
        
    
          $("#conteudo").on('click','#btn_bscConsulta', function (e) {

             e.preventDefault();
    
               $.ajax({
        
                  type: "post",
        
                 url: "consulta_busca.php",
        
                 data: "busca",
        
                 dataType: "text",
        
                success: function (response) {
        
                    $('#tblConsulta').html(response);
             }
        
             });
        
      });
    
      $("#conteudo").on('click','#btn_bscVenda', function (e) {

        e.preventDefault();

        $.ajax({

            type: "post",

            url: "vendas_busca.php",

            data: "busca",

            dataType: "text",

            success: function (response) {

                $('#tblVenda').html(response);

            }

        });
    });
});