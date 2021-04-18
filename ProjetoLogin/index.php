<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Uni Help Desk</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style>
            .card-login {
                padding:  30px 0 0 0;
                width: 350px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a href="#" class="nacbar-brand">
                <img src="logo.png" width="33" height="33" class="d-inline-block align-top">
                Uni Help Desk
            </a>
        </nav>

        <div class="container">
            <div class="row">
                <div class="card-login">

                <?php if(isset($_GET['login']) && $_GET['login'] == 'logoff'){ ?>
                    <div class="text-success text-center">
                        Deslogado com sucesso!      
                    </div><br>
                <?php } ?>

                    <div class="card">
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">
                            <form action="valida_login.php" method="POST">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Senha">
                                </div>

                                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                                        <div class="text-danger text-center ">
                                            Usuário ou senha inválido(s)!
                                        </div><br>                               
                                <?php } ?>

                                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
                                        <div class="text-danger text-center">
                                            Faça login antes de entrar!
                                        </div><br>
                                <?php } ?>
                
                                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>		
        </div>
    </body>
</html>