<!DOCTYPE html>

<html>

    <head>
        <meta charset = "UTF-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "arquivos_bootstrap/css/bootstrap.css" />
		<script src = "arquivos_bootstrap/js/jquery-3.4.1.min.js"></script>
		<script src = "arquivos_bootstrap/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function(){
                $("#logar").click(function(){
                    $.ajax({
                        url: "validacao.php",
                        type: "post",
                        data:{CPF: $("#CPF").val(), senha: $("#senha").val(), op: $("select[name = 'op']").val()},
                        success: function(data){
                            console.log(data);
                            if(data==1){
                                window.location.href = 'index.php';
                            }else if(data==2){
                                alert("Usuário ou senha inválidos!");
                            }else{
                                alert("Erro ao consultar o banco de dados!");
                            }
                        }
                    });
                });
            });
        </script>
    </head>

    <body>

        <nav class = "navbar navbar-light" style = "background-color: #87CEEB">

            <div class = "navbar-brand">
                <img src = "simbolo_kaparao.png" width = "35" height = "30" class = "d-inline-block align-top" alt = "">
                Espaço Kaparaó
            </div>

                <?php
                    if(!(isset($_COOKIE["nome"]))){
                ?>
                        <div class = "justify-content-right">
                            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarToggleExternalContent1" aria-controls = "navbarToggleExternalContent" aria-expanded = "false" aria-label = "Alterna navegação">
                                <img src = "menuzin.png" width = "30" height = "30" class = "d-inline-block align-top" alt="" />
                            </button>

                            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target ="#navbarToggleExternalContent" aria-controls = "navbarToggleExternalContent" aria-expanded = "false" aria-label = "Alterna navegação">
                                <img src = "icone_usuario.png" width = "30" height = "30" class = "d-inline-block align-top" alt="" />
                            </button>
                        </div>
                <?php
                    }else{
                ?>
                        <script>
                            $(document).ready(function(){
                                var recados_antigos = document.getElementById("uL").innerHTML;
                                document.getElementById("uL").innerHTML = '<a href = "minhas_inscricoes.php" class = "list-group-item list-group-item-action" style = "background-color: #87CEEB;">Minhas Inscrições</a>' + recados_antigos;
                            });
                        </script>

                        <div class = "justify-content-right">
                            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarToggleExternalContent1" aria-controls = "navbarToggleExternalContent" aria-expanded = "false" aria-label = "Alterna navegação">
                                <img src = "menuzin.png" width = "30" height = "30" class = "d-inline-block align-top" alt="" />
                            </button>

                            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target ="#navbarToggleExternalContent2" aria-controls = "navbarToggleExternalContent" aria-expanded = "false" aria-label = "Alterna navegação">
                                <?php echo '<img src = "icone_usuario.png" width = "30" height = "30" class = "d-inline-block align-top" alt="" /><span style = "font-size: 15px;">' . $_COOKIE["nome"] . '</span>'; ?>
                            </button>
                        </div>

                <?php
                    }
                ?>

        </nav>

        <div class = "collapse card float-right" id = "navbarToggleExternalContent" style = "width: 18rem;">
            <div class = "p-4 text-right" style = "background-color: #87CEEB">
                <form>
                    <input class = "form-control" type = "number" placeholder = "CPF" required = "required" id = "CPF" /> <br/>
                    <input class = "form-control" type = "password" placeholder = "Senha" required = "required" id = "senha" /> <br/>
                    <select class = "custom-select" id = "inputGroupSelect01" name = "op" required = "required">
                        <option selected>O que sou?</option>
                        <option value = "Usuário">Usuário</option>
                        <option value = "CRAS">CRAS</option>
                        <option value = "Administrador">Administrador</option>
                    </select><br/><br/>
                    <input class = "btn btn-outline-info" type = "button" value = "Logar" id = "logar"/>
                    <a class = "btn btn-outline-info" href = "dados_pessoais.php">Cadastrar</a>
                </form>
            </div>
        </div>

        <div class = "collapse card float-right bg-white" id = "navbarToggleExternalContent1" style = "width: 18rem;">
            <div class = "list-group list-group-flush" id = "uL">
                <a href="home.php" class="list-group-item list-group-item-action" style = "background-color: #87CEEB;">Home</a>
                <a href="sobre_nos.php" class="list-group-item list-group-item-action" style = "background-color: #87CEEB;">Sobre Nós</a>
                <a href="cursos.php" class="list-group-item list-group-item-action" style = "background-color: #87CEEB;">Cursos Disponíveis</a>
                <a href="contato.php" class="list-group-item list-group-item-action" style = "background-color: #87CEEB;">Contato</a>
            </div>
        </div>

        <div class = "collapse card float-right" id = "navbarToggleExternalContent2" style = "width: 5rem;">
            <div class = "p-2 justify-content-center" style = "background-color: #87CEEB">
                <form>
                    <a class = "btn btn-outline-info" href = "logout.php">Sair</a>
                </form>
            </div>
        </div>