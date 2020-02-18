<?php include("menu.php")?>

    <script>
        $(document).ready(function(){
            listar_dados();
            alert('Preencha estes campos com os dados das pessoas que moram com você. Adicione uma por uma, ou seja, preencha este formulário quantas vezes necessitar. As pessoas que você cadastrar, aparecerão na tabela abaixo do formulário. Após cadastrar todas as pessoas que moram com você, clique em "Próximo".');

            $("#adicionar").click(function(){
                $.ajax({
                    url: "insere_familia.php",
                    type: "post",
                    data:{nome: $("#nome").val(), idade: $("#idade").val(), parentesco: $("#parentesco").val(), ocup: $("select[name = 'ocup']").val(), renda: $("#renda").val(), escolaridade: $("select[name = 'escolaridade']").val(), etnia: $("select[name = 'et']").val()},
                    success: function(data){
                        if(data==1){
                            listar_dados();
                        }else{
                            alert("Erro!" + data);
                        }
                    },
                });
            });

            function listar_dados(){
                $.ajax({
                    url: "listar_familia.php",
                    type: "get",
                    success: function(matriz){
                        $("#bd").html("");
                        for(i=0;i<matriz["familia"].length; i++){
                            list = "<tr>";
                            var indice = i + 1;
                            list += "<th scope = 'row'>"+ indice + "</th>";
                            list += "<td>"+ matriz["familia"][i].nome + "</td>";
                            list += "<td>"+ matriz["familia"][i].idade + "</td>";
                            list += "<td>"+ matriz["familia"][i].parentesco + "</td>";
                            list += "<td>"+ matriz["familia"][i].ocupacao + "</td>";
                            list += "<td>"+ matriz["familia"][i].renda + "</td>";
                            list += "<td>"+ matriz["familia"][i].escolaridade + "</td>";
                            list += "<td>"+ matriz["familia"][i].cor_etnia + "</td>";
                            list += "</tr>";

                            $("#bd").append(list);
                        }
                    }
                });
            }

            $("#prx").click(function(){
                $(location).attr('href', 'sit_atend.php');
            });
        });
    </script>

    <body>
        <div class = "container-fluid">

            <div class = "container-fluid rounded mt-2 mb-2" style = "background-color: #F0F8FF">
            
                <div class = "row"><div class = "col-12 text-left p-3"><h4>Composição Familiar</h4></div></div>

                <form>
                    <div class = "form-row"> 
                        <div class = "form-group col-md-6">
                            <label for = "nome">Nome </label>
                            <input type = "text" id = "nome" required = "required" class = "form-control" />
                        </div>

                        <div class = "form-group col-md-2">
                            <label for = "idade">Idade </label>
                            <input type = "number" id = "idade" required = "required" class = "form-control" />
                        </div> 

                        <div class = "form-group col-md-4">
                            <label for = "escolaridade">Escolaridade</label>
                            <select class = "custom-select" id = "inputGroupSelect01" name = "escolaridade" required = "required">
                                <option selected>Escolher...</option>
                                <option value = "Analfabeto">Analfabeto</option>
                                <option value = "Ensino Fundamental Incompleto/Cursando">Ensino Fundamental Incompleto/Cursando</option>
                                <option value = "Ensino Fundamental Completo">Ensino Fundamental Completo</option>
                                <option value = "Ensino Médio Incompleto/Cursando">Ensino Médio Incompleto/Cursando</option>
                                <option value = "Ensino Médio Completo">Ensino Médio Completo</option>
                                <option value = "Ensino Superior Incompleto/Cursando">Ensino Superior Incompleto/Cursando</option>
                                <option value = "Ensino Superior Completo">Ensino Superior Completo</option>
                            </select>
                        </div>

                        

                        <div class = "form-group col-md-3" id = "P">
                            <label for = "ocup">Ocupação</label>
                            <select class = "custom-select" id = "inputGroupSelect01" name = "ocup" required = "required">
                                <option selected>Escolher...</option>
                                <option value = "Aposentada(o)">Aposentada(o)</option>
                                <option value = "Autônoma(o)">Autônoma(o)</option>
                                <option value = "Dona de Casa">Dona de Casa</option>
                                <option value = "Desempregada(o)">Desempregada(o)</option>
                                <option value = "Estágio">Estágio</option>
                                <option value = "Empregado Com Carteira">Empregado Com Carteira</option>
                                <option value = "Empregado Sem Carteira">Empregado Sem Carteira</option>
                                <option value = "Seguro Desemprego">Seguro Desemprego</option>
                                <option value = "Auxílio INSS">Auxílio INSS</option>
                            </select>
                        </div>

                        <div class = "form-group col-md-3">
                            <label for = "renda">Renda </label>
                            <input type = "number" id = "renda" required = "required" class = "form-control" />
                        </div> 

                        <div class = "form-group col-md-2">
                            <label for = "parentesco">Parentesco </label>
                            <input type = "text" id = "parentesco" class = "form-control" placeholder = "Minha avó/mãe/tia..." />
                        </div> 

                        <div class = "form-group col-md-2">
                            <label for = "et">Etnia/Cor</label>
                            <select class = "custom-select" id = "inputGroupSelect01" name = "et" required = "required">
                                <option selected>Escolher...</option>
                                <option value = "Amarela">Amarela</option>
                                <option value = "Branca">Branca</option>
                                <option value = "Indígena">Indígena</option>
                                <option value = "Negra">Negra</option>
                                <option value = "Parda">Parda</option>
                            </select>
                        </div>

                        <div class = "form-group col-md-2 text-left">
                            <input type = "button" id = "adicionar" value = "Adicionar" class = "btn btn-primary" style = "margin-top: 32px;" />
                        </div>

                        <table class = "table table-striped table-primary table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Idade</th>
                                <th scope="col">Parentesco</th>
                                <th scope="col">Ocupação</th>
                                <th scope="col">Renda</th>
                                <th scope="col">Escolaridade</th>
                                <th scope="col">Cor/Etnia</th>
                                </tr>
                            </thead>

                            <tbody id = "bd">

                            </tbody>
                        </table>

                        <div class = "form-group col-md-12 text-right">
                            <input type = "button" id = "prx" value = "Próximo" class = "btn btn-primary pl-5 pr-5" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include("rodape.php")?>
    </body>
</html>