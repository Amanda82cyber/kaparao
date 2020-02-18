<?php include("menu.php")?>

    <script>
        $(document).ready(function(){
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
    </script>

    <body>
        <div class = "container-fluid">

            <div class = "container-fluid rounded mt-2 mb-2" style = "background-color: #F0F8FF">
            
                <div class = "row"><div class = "col-12 text-left p-3"><h4>Contato</h4></div></div>

                <form>
                    <div class = "form-row"> 
                        <div class = "form-group col-md-5">
                            <label for = "end">Endereço </label>
                            <input type = "text" id = "end" required = "required" class = "form-control" placeholder = "Rua/Av..." />
                        </div>

                        <div class = "form-group col-md-1">
                            <label for = "num">Número </label>
                            <input type = "number" id = "num" required = "required" class = "form-control" />
                        </div> 

                        <div class = "form-group col-md-6">
                            <label for = "complemento">Complemento </label>
                            <input type = "text" id = "complemento" class = "form-control" placeholder = "Perto/Atrás/Em frente de..." />
                        </div> 

                        <div class = "form-group col-md-2">
                            <label for = "bairro">Bairro</label>
                            <select class = "custom-select" id = "inputGroupSelect01" name = "bairro" required = "required">
                                <option selected>Escolher...</option>
                                <option value = "Parque Residêncial São Paulo">Parque Residêncial São Paulo</option>
                            </select>
                        </div>

                        <div class = "form-group col-md-2">
                            <label for = "cid">Cidade </label>
                            <input type = "text" id = "cid" required = "required" class = "form-control" />
                        </div> 

                        <div class = "form-group col-md-2">
                            <label for = "UF">UF</label>
                            <select class = "custom-select" id = "inputGroupSelect01" name = "UF" required = "required">
                                <option selected>Escolher...</option>
                                <option value = "AC">Acre (AC)</option>
                                <option value = "AL">Alagoas (AL)</option>
                                <option value = "AP">Amapá (AP)</option>
                                <option value = "AM">Amazonas (AM)</option>
                                <option value = "BA">Bahia (BA)</option>
                                <option value = "CE">Ceará (CE)</option>
                                <option value = "DF">Distrito Federal (DF)</option>
                                <option value = "ES">Espírito Santo (ES)</option>
                                <option value = "GO">Goiás (GO)</option>
                                <option value = "MA">Maranhão (MA)</option>
                                <option value = "MT">Mato Grosso (MT)</option>
                                <option value = "MS">Mato Grosso do Sul (MS)</option>
                                <option value = "MG">Minas Gerais (MG)</option>
                                <option value = "PA">Pará (PA)</option>
                                <option value = "PB">Paraíba (PB)</option>
                                <option value = "PR">Paraná (PR)</option>
                                <option value = "PE">Pernambuco (PE)</option>
                                <option value = "PI">Piauí (PI)</option>
                                <option value = "RJ">Rio de Janeiro (RJ)</option>
                                <option value = "RN">Rio Grande do Norte (RN)</option>
                                <option value = "RS">Rio Grande do Sul (RS)</option>
                                <option value = "RO">Rondônia (RO)</option>
                                <option value = "RR">Roraima (RR)</option>
                                <option value = "SC">Santa Catarina (SC)</option>
                                <option value = "SP">São Paulo (SP)</option>
                                <option value = "SE">Sergipe (SE)</option>
                                <option value = "TO">Tocantins (TO)</option>
                            </select>
                        </div>

                        <div class = "form-group col-md-2">
                            <label for = "cep">CEP </label>
                            <input type = "number" id = "cep" required = "required" class = "form-control" />
                        </div> 

                        <div class = "form-group col-md-2">
                            <label for = "tel">Telefone </label>
                            <input type = "tel" id = "tel" required = "required" class = "form-control" />
                        </div> 

                        <div class = "form-group col-md-2">
                            <label for = "cel">Celular </label>
                            <input type = "number" id = "cel" required = "required" class = "form-control" />
                        </div>

                        <div class = "form-group col-md-6">
                            <label for = "email">E-mail </label>
                            <input type = "email" id = "email" class = "form-control" />
                        </div>

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