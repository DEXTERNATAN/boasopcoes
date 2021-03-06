<!DOCTYPE html>
<html lang="en">

<head>
    <title>Boas Opções - Encontre o profissional que precisa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/reset.css" rel="stylesheet">

    <!-- Inclusão do bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>

    <!-- Css customizado pelo site -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/boasopcoes.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <a class="navbar-brand" href="index.php">Boas Opções</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Entrar</button>
            </form>
        </div>
    </nav>

    <section class="jumbotron text-center">
        <div class="container">
            <p class="lead text-muted">
                <img src="images/logo.png" alt="">
                <form class="form-inline my-2 my-lg-0" method="GET" action="busca.php">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <input class="form-control mr-sm-2" type="text" id="consulta" name="consulta" maxlength="255" placeholder="Digite a profissão">
                            <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">Pesquisar</button>
                                </span>
                        </div>
                    </div>
                </form>
            </p>
        </div>
    </section>

    <div class="album text-muted">
        <div class="container">
            <div class="row">
                <div class="card">
                    <img data-src="/images/casa.jpg/100px280/thumb" alt="100%x280" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22156%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20156%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d664aadd5%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d664aadd5%22%3E%3Crect%20width%3D%22156%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2241.6875%22%20y%3D%22146.3%22%3E156x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                    <p class="card-text">CASA</p>
                </div>
                <div class="card">
                    <img data-src="holder.js/100px280/thumb" alt="100%x280" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22156%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20156%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d664aadd8%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d664aadd8%22%3E%3Crect%20width%3D%22156%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2241.6875%22%20y%3D%22146.3%22%3E156x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                    <p class="card-text">CUIDADOS PESSOAIS</p>
                </div>
                <div class="card">
                    <img data-src="holder.js/100px280/thumb" alt="100%x280" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22156%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20156%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d664aadda%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d664aadda%22%3E%3Crect%20width%3D%22156%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2241.6875%22%20y%3D%22146.3%22%3E156x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                    <p class="card-text">AULAS PARTICULARES</p>
                </div>

                <div class="card">
                    <img data-src="holder.js/100px280/thumb" alt="100%x280" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22156%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20156%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d664aaddd%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d664aaddd%22%3E%3Crect%20width%3D%22156%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2241.6875%22%20y%3D%22146.3%22%3E156x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                    <p class="card-text">TRANSPORTES</p>
                </div>
                <div class="card">
                    <img data-src="holder.js/100px280/thumb" alt="100%x280" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22156%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20156%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d664aade1%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d664aade1%22%3E%3Crect%20width%3D%22156%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2241.6875%22%20y%3D%22146.3%22%3E156x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                    <p class="card-text">EVENTOS</p>
                </div>
                <div class="card">
                    <img data-src="holder.js/100px280/thumb" alt="100%x280" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22156%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20156%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d664aade4%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d664aade4%22%3E%3Crect%20width%3D%22156%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2241.6875%22%20y%3D%22146.3%22%3E156x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                    <p class="card-text">GASTRONOMIA</p>
                </div>

                <div class="card">
                    <img data-src="holder.js/100px280/thumb" alt="100%x280" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22156%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20156%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d664aade6%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d664aade6%22%3E%3Crect%20width%3D%22156%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2241.6875%22%20y%3D%22146.3%22%3E156x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                    <p class="card-text">INFORMÁTICA</p>
                </div>
                <div class="card">
                    <img data-src="holder.js/100px280/thumb" alt="100%x280" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22156%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20156%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d664aade9%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d664aade9%22%3E%3Crect%20width%3D%22156%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2241.6875%22%20y%3D%22146.3%22%3E156x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                    <p class="card-text">CARROS</p>
                </div>
                <div class="card">
                    <img data-src="holder.js/100px280/thumb" alt="100%x280" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22156%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20156%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15d664aadf0%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15d664aadf0%22%3E%3Crect%20width%3D%22156%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2241.6875%22%20y%3D%22146.3%22%3E156x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                    <p class="card-text">DIVERSOS</p>
                </div>
            </div>

        </div>
    </div>

    <footer class="text-muted">
        <div class="container">
            <p> © Copyright 2017 Boas Opcoes </p>
        </div>
    </footer>

</body>

</html>
