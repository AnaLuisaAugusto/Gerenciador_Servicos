<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Serviços</title>

        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'                
        ])

        <style>

            body{
                background-color: whitesmoke;
            }

            .container{
                margin-top: 5%!important;
            }
            
        </style>
    </head>

    <body>
        <div class="container">  
            <div class="row">      
                <nav class="navbar bg-primary" data-bs-theme="dark">
                    <nav class="navbar navbar-expand-lg">
                        
                        <div class="container-fluid">
                            <a class="navbar-brand text-white">&nbsp;&nbsp;SISTEMA WEB</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse navbar-dark" id="navbarText">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Cadastrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Consultar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </nav>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5>Cadastrar - Agendamento de Potenciais Clientes</h5>
                        <p>Sistema utilizado para agendamento de serviços.</p>
                        
                        <form method="post" action="" id="form" name="form">
                            <div class="mb-3">
                                <label for="txtNome" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="txtNome" required placeholder="Insira seu nome">
                            </div>
                            <div class="mb-3">
                                <label for="txtTel" class="form-label">Telefone:</label>
                                <input type="tel" class="form-control" id="txtTel" required placeholder="(xx) xxxxx-xxxx">
                            </div>
                            <div class="col-12">
                                <label for="txtTipoTel" class="form-label">Origem:</label>
                                <select id="txtTipoTel" class="form-select">
                                    <option>Celular</option>
                                    <option>Fixo</option>
                                </select>
                            </div> &nbsp;
                            <div class="mb-3">
                                <label for="txtDtContato">Data do Contato:</label>
                                <input type="date" class="form-control" required name="txtDtContato">
                            </div>
                            <div class="mb-3">
                                <label for="txtObs" class="form-label">Observação:</label>
                                <textarea class="form-control" id="txtObs" rows="3"></textarea>
                            </div>
                            <button type="submit" id="btnCadastrar" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>




