<?php include("menu.php")?>

    <script>
        $(document).ready(function(){
            $('.mdb-select').materialSelect();
            // $("select[name = 'mult']").multiselect();
            $("#prx").click(function(){
                if($("#end").val() == "" || $("#num").val() == "" || $("select[name = 'bairro']").val() == "Escolher..." || $("#cid").val() == "" || $("select[name = 'UF']").val() == "Escolher..." || $("#cep").val() == "" || $("#tel").val() == ""){
                    alert(" Os campos abaixo são obrigatórios: \n - Endereço; \n - Número; \n - Bairro; \n - Cidade; \n - UF; \n - CEP; \n - Telefone; \n - Celular; \n Verifique se não esqueceu de preencher nenhum destes campos.");
                }else{
                    $.ajax({
                        url: "insere_contato.php",
                        type: "post",
                        data:{end: $("#end").val(), num: $("#num").val(), complemento: $("#complemento").val(), bairro: $("select[name = 'bairro']").val(), cid: $("#cid").val(), UF: $("select[name = 'UF']").val(), cep: $("#cep").val(), tel: $("#tel").val(), cel: $("#cel").val(), email: $("#email").val()},
                        success: function(data){
                            if(data==1){
                                $(location).attr('href', 'comp_familiar.php');
                            }else{
                                alert("Erro!" + data);
                            }
                        }
                    });
                }
            });
        });

        function cont(valor){
            $("#cont").html('<div class = "form-group col-md-6"><label for = "bene">Recebe quantos benefícios do governo? </label><input type = "number" id = "bene" required = "required" class = "form-control" onblur = "cont(this.value)" /></div>');
            for(i=1;i<=valor;i++){
                conteudo = '<div class = "form-group col-md-4">';
                conteudo += '<label for = "nomebene' + i + '">Nome do Benefício ' + i + ' </label>';
                conteudo += '<input type = "text" id = "nomebene' + i + '"  class = "form-control" />';
                conteudo += '</div>';
                conteudo += '<div class = "form-group col-md-2">';
                conteudo += '<label for = "valorbene' + i + '">Valor do Benefício ' + i + ' </label>';
                conteudo += '<input type = "number" id = "valorbene' + i + '"  class = "form-control" step = "0.01" />';
                conteudo += '</div>';

                if(i==valor){
                    conteudo += '<div class = "form-group col-md-12 text-right"><input type = "button" id = "prx" value = "Próximo" class = "btn btn-primary pl-5 pr-5" /></div>';
                }

                $("#cont").append(conteudo);
            }
        }
    </script>

    <body>
        <div class = "container-fluid">

            <div class = "container-fluid rounded mt-2 mb-2" style = "background-color: #F0F8FF">
            
                <div class = "row"><div class = "col-12 text-left p-3"><h4>Situção Social</h4></div></div>

                <form>
                    <div class = "form-row"> 
                        <?php
                            include("conexao.php");

                            $consulta = "SELECT * FROM situacao_social";

                            $resultado = mysqli_query($conexao, $consulta);

                            while($linha = mysqli_fetch_assoc($resultado)){
                                $valor = 3;

                                if($linha["id_situacao"] == 5){
                                    $valor = 6;
                                }

                                echo'<div class = "form-group col-md-'.$valor.'">
                                    <div class = "input-group mb-3">
                                        <div class = "input-group-prepend">
                                            <div class = "input-group-text bg-secondary border-dark">
                                                <input type = "checkbox" value = "'. $linha["nome_situ_soc"] .'" />
                                            </div>
                                        </div>
                                        <input type = "text" class = "form-control" value = "'. $linha["nome_situ_soc"] .'" disabled = "disabled" />
                                    </div>
                                </div>';
                            }
                        ?>
                    </div>
                </form>
            </div>

            <div class = "container-fluid rounded mt-2 mb-2" style = "background-color: #F0F8FF">
            
                <div class = "row"><div class = "col-12 text-left p-3"><h4>Atendido Por </h4></div></div>

                <form>
                    <div class = "form-row"> 
                        <?php
                            include("conexao.php");

                            $consulta = "SELECT * FROM atendimento";

                            $resultado = mysqli_query($conexao, $consulta);

                            while($linha = mysqli_fetch_assoc($resultado)){
                                echo'<div class = "form-group col-md-3">
                                    <div class = "input-group mb-3">
                                        <div class = "input-group-prepend">
                                            <div class = "input-group-text bg-secondary border-dark">
                                                <input type = "checkbox" value = "'. $linha["nome_atendimento"] .'" />
                                            </div>
                                        </div>
                                        <input type = "text" class = "form-control" value = "'. $linha["nome_atendimento"] .'" disabled = "disabled" />
                                    </div>
                                </div>';
                            }
                        ?>
                    </div>
                </form>
            </div>

            <div class = "container-fluid rounded mt-2 mb-5" style = "background-color: #F0F8FF">
            
                <div class = "row"><div class = "col-12 text-left p-3"><h4>Benefícios do Governo </h4></div></div>

                <form>
                    <div class = "form-row" id = "cont"> 
                        <div class = "form-group col-md-6">
                            <label for = "bene">Recebe quantos benefícios do governo? </label>
                            <input type = "number" id = "bene" required = "required" class = "form-control" onmouseout = "cont(this.value)" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include("rodape.php")?>
    </body>
</html>