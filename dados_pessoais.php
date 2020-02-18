<?php include("menu.php")?>

    <script>
        var cont = 0;
        $(document).ready(function(){
            const inicio = new Date().getTime();
            
            console.log(inicio);


            $("#prx").click(function(){
                if($("#nome").val() == ""){
                    $("#nome").css("border-color", "red");
                    cont++;
                }else{
                    $("#nome").css("border-color", "#D3D3D3");
                }

                if($("select[name = 'sexo']").val() == "Escolher..."){
                    $("select[name = 'sexo']").css("border-color", "red");
                    cont++;
                }else{
                    $("select[name = 'sexo']").css("border-color", "#D3D3D3");
                }

                if($("#data").val() == ""){
                    $("#data").css("border-color", "red");
                    cont++;
                }else{
                    $("#data").css("border-color", "#D3D3D3");
                }

                if($("#cpf").val() == ""){
                    $("#cpf").css("border-color", "red");
                    cont++;
                }else{
                    $("#cpf").css("border-color", "#D3D3D3");
                }

                if($("#rg").val() == ""){
                    $("#rg").css("border-color", "red");
                    cont++;
                }else{
                    $("#rg").css("border-color", "#D3D3D3");
                }

                if($("#nacionalidade").val() == ""){
                    $("#nacionalidade").css("border-color", "red");
                    cont++;
                }else{
                    $("#nacionalidade").css("border-color", "#D3D3D3");
                }

                if($("#naturalidade").val() == ""){
                    $("#naturalidade").css("border-color", "red");
                    cont++;
                }else{
                    $("#naturalidade").css("border-color", "#D3D3D3");
                }

                if($("select[name = 'UF']").val() == "Escolher..."){
                    $("select[name = 'UF']").css("border-color", "red");
                    cont++;
                }else{
                    $("select[name = 'UF']").css("border-color", "#D3D3D3");
                }

                if($("select[name = 'et']").val() == "Escolher..."){
                    $("select[name = 'et']").css("border-color", "red");
                    cont++;
                }else{
                    $("select[name = 'et']").css("border-color", "#D3D3D3");
                }

                if($("select[name = 'est_civil']").val() == "Escolher..."){
                    $("select[name = 'est_civil']").css("border-color", "red");
                    cont++;
                }else{
                    $("select[name = 'est_civil']").css("border-color", "#D3D3D3");
                }

                if($("select[name = 'ocup']").val() == "Escolher..."){
                    $("select[name = 'ocup']").css("border-color", "red");
                    cont++;
                }else{
                    $("select[name = 'ocup']").css("border-color", "#D3D3D3");
                }

                if($("#renda").val() == ""){
                    $("#renda").css("border-color", "red");
                    cont++;
                }else{
                    $("#renda").css("border-color", "#D3D3D3");
                }

                if($("select[name = 'escolaridade']").val() == "Escolher..."){
                    $("select[name = 'escolaridade']").css("border-color", "red");
                    cont++;
                }else{
                    $("select[name = 'escolaridade']").css("border-color", "#D3D3D3");
                }

                if(cont == 0){
                    $.ajax({
                        url: "insere_dados_pessoais.php",
                        type: "post",
                        data:{nome: $("#nome").val(), nome_soc: $("#nome_soc").val(), sexo: $("select[name = 'sexo']").val(), ori_sex: $("#orient").val(), data_nasc: $("#data").val(), mae: $("#mae").val(), pai: $("#pai").val(), cpf: $("#cpf").val(), nis: $("#nis").val(), rg: $("#rg").val(), exp: $("#exp").val(), org_exp: $("#org_exp").val(), nacionalidade: $("#nacionalidade").val(), naturalidade: $("#naturalidade").val(), UF: $("select[name = 'UF']").val(), etnia: $("select[name = 'et']").val(), est_civil: $("select[name = 'est_civil']").val(), prof: $("#prof").val(), def: $("#def").val(), ocup: $("select[name = 'ocup']").val(), empresa: $("#empresa").val(), renda: $("#renda").val(), esco: $("select[name = 'escolaridade']").val()},
                        success: function(data){
                            if(data==1){
                                $(location).attr('href', 'contato.php');
                            }else{
                                alert("Erro!" + data);
                            }
                        }
                    });
                }else{
                    $("#Al1").addClass("alert alert-danger alert-dismissible fade show mt-2 text-center");
                    $("#Al1").html('<h5>Os campos em vermelho são obrigatórios. Preencha-os!</h5><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
                }
            });
        });
    </script>

    <body>
        <div class = "container-fluid">
            <!-- <div class = "row"><div class = "col-12 text-center p-3"><h2>Inscrições Kaparaó</h2></div></div> -->
            <div class = "alert alert-danger alert-dismissible fade show mt-2" role = "alert" id = "Al">
                <h4></h4>
                <p>O cadastro a seguir será feito em etapas e será utilizado em suas inscrições nos cursos. Ele é semelhante a ficha de inscrição que provavelmente você já preencheu no Kaparaó, se for uma pessoa frequente no espaço, claro.</p>
                <p>A partir das informações acima, é possível entender o porquê deste cadastro ser tão longo e a importância de seus campos serem preenchidos corretamente.</p>
                <p><strong>Você só precisa efetuar este cadastro uma vez</strong>, após isto, apenas entre no site com seu CPF e Senha.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div role = "alert" id = "Al1"></div>

            <div class = "container-fluid rounded mb-3 mb-5 mt-2" style = "background-color: #F0F8FF">
            
                <div class = "row"><div class = "col-12 text-left p-3"><h4>Dados do Aluno</h4></div></div>

                <form>
                    <div class = "form-row"> 
                        <div class = "form-group col-md-6">
                            <label for = "nome">Nome </label>
                            <input type = "text" id = "nome" required = "required" class = "form-control" />
                        </div> 

                        <div class = "form-group col-md-6">
                            <label for = "nome_soc">Nome Social</label>
                            <input type = "text" id = "nome_soc" class = "form-control" />
                        </div>

                        <div class = "form-group col-md-3">
                            <label for = "sexo">Sexo</label>
                            <select class = "custom-select" id = "inputGroupSelect01" name = "sexo" required = "required">
                                <option selected>Escolher...</option>
                                <option value = "F">Feminino</option>
                                <option value = "M">Masculino</option>
                            </select>
                        </div>

                        <div class = "form-group col-md-3">
                            <label for = "orient">Orientação Sexual</label>
                            <input type = "text" id = "orient" class = "form-control" />
                        </div>

                        <div class = "form-group col-md-3">
                            <label for = "data">Data de Nascimento</label>
                            <input type = "date" id = "data" required = "required" class = "form-control"/>
                        </div>

                        <div class = "form-group col-md-3">
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

                        <div class = "form-group col-md-6">
                            <label for = "mae">Nome da Mãe</label>
                            <input type = "text" id = "mae" class = "form-control" />
                        </div>

                        <div class = "form-group col-md-6">
                            <label for = "pai">Nome do Pai</label>
                            <input type = "text" id = "pai" class = "form-control" />
                        </div>

                        <div class = "form-group col-md-3">
                            <label for = "cpf">CPF</label>
                            <input type = "number" id = "cpf" required = "required" class = "form-control"/>
                        </div>

                        <div class = "form-group col-md-3">
                            <label for = "nis">NIS</label>
                            <input type = "number" id = "nis" class = "form-control"/>
                        </div>

                        <div class = "form-group col-md-2">
                            <label for = "rg">RG</label>
                            <input type = "text" id = "rg" required = "required" class = "form-control"/>
                        </div>

                        <div class = "form-group col-md-2">
                            <label for = "exp">Data de Expedição</label>
                            <input type = "date" id = "exp" required = "required" class = "form-control"/>
                        </div>

                        <div class = "form-group col-md-2">
                            <label for = "org_exp">Orgão Expeditor</label>
                            <input type = "text" id = "org_exp" required = "required" class = "form-control" placeholder = "Ex.: SSP"/>
                        </div>

                        <div class = "form-group col-md-2">
                            <label for = "nacionalidade">Nacionalidade</label>
                            <input type = "text" id = "nacionalidade" required = "required" class = "form-control" placeholder = "País de nascimento..."/>
                        </div>

                        <div class = "form-group col-md-2">
                            <label for = "naturalidade">Naturalidade</label>
                            <input type = "text" id = "naturalidade" required = "required" class = "form-control" placeholder = "Cidade de nascimento..."/>
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

                        <div class = "form-group col-md-2">
                            <label for = "est_civil">Estado Civil</label>
                            <select class = "custom-select" id = "inputGroupSelect01" name = "est_civil" required = "required">
                                <option selected>Escolher...</option>
                                <option value = "Solteira(o)">Solteira(o)</option>
                                <option value = "Casada(o)">Casada(o)</option>
                                <option value = "União Estável">União Estável</option>
                                <option value = "Viúva(o)">Viúva(o)</option>
                                <option value = "Separada(o) Judicialmente">Separada(o) Judicialmente</option>
                                <option value = "Divorciada(o)">Divorciada(o)</option>
                            </select>
                        </div>

                        <div class = "form-group col-md-2">
                            <label for = "prof">Profissão</label>
                            <input type = "text" id = "prof" required = "required" class = "form-control"/>
                        </div>

                        <div class = "form-group col-md-3">
                            <label for = "def">Se possui alguma deficiência, diga qual</label>
                            <input type = "text" id = "def" class = "form-control"/>
                        </div>

                        <div class = "form-group col-md-3">
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

                        <div class = "form-group col-md-4">
                            <label for = "empresa">Empresa na qual se tem registro trabalhístico</label>
                            <input type = "text" id = "empresa" class = "form-control" placeholder = "Ex.: Lupo" />
                        </div>

                        <div class = "form-group col-md-2">
                            <label for = "renda">Renda</label>
                            <input type = "number" id = "renda" class = "form-control" step = "0.01" placeholder = "R$" required = "required" />
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