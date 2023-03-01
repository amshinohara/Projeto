<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formulário de Contato</title>
        <link href="estilo.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mx-auto bg-light mt-1 w-90">
            <header class="row">
                <div class="ocultar col-12" id="barra_acessibilidade">
                    <ul id="atalhos">
                        <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
                        <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <img src="logotipo.jpg" alt="Logotipo da empresa formado por diversos retangulos se sobrepondo um ao outro formando para formar um círculo." height="80" width="80">
                </div>
                <div class="col-sm-9">
                    <h1>Empresa XPTO</h1>
                </div>
            </header>
            <section class="row">
                <div class="ocultar col-12">
                    <h2 id="menu">Menu</h2>
                </div>
                <div class="col-12">
                    <div class="pos-f-t">
                        <div class="collapse" id="navbarToggleExternalContent">
                            <div class="bg-light p-4">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="Home.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Contato</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> 
                        </div>
                        <nav class="navbar navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Alterna navegação">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                    </div>     
                </div> 
                <article class="col-12"> 
                    <h2 id="formulario">Formulário de Contato</h2>
                    <form class="needs-validation" novalidate action="#" method="post">
                        <div class="form-group row">
                            <label for="validationCustom01" class="col-sm-2 col-form-label col-form-label-sm">Nome*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="validationCustom01" placeholder="Digite seu nome" required>
                            <div class="valid-feedback">
                                Tudo certo!
                            </div>
                            <div class="invalid-feedback">
                                Campo nome obrigatório.
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom02" class="col-sm-2 col-form-label col-form-label-sm">E-mail*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-sm" id="validationCustom02" placeholder="Digite seu email" required>
                            <div class="valid-feedback">
                                Tudo certo!
                            </div>
                            <div class="invalid-feedback">
                                Campo e-mail obrigatório.
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm">Mensagem*</label>
                            <div class="col-sm-10">
                                <textarea class="form-control form-control-sm" id="mensagem" required></textarea>
                            <div class="valid-feedback">
                                Tudo certo!
                            </div>
                            <div class="invalid-feedback">
                                Campo mensagem obrigatório.
                            </div>
                                <button type="submit" class="btn btn-primary my-1 float-left">Enviar</button><br/><br/>
                                <p class="aviso float-left">* Campos Obrigatórios.</p>
                            </div>
                        </div>
                    </form>
                </article>
            </section>
            <footer class="row">
                <div class="col-12">
                   <p>Copyright © 2023</p>
                </div>
            </footer>
        <script>
            (function () {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName("needs-validation");
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener("submit", function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                        }, false);
                    });
            }, false);
            })();
        </script>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <noscript>Atualize seu navegador</noscript>
    </body>
</html>