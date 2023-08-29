<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RVTech - Página inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .header{
            color: #FFF;
            font-size: 25px;
            padding: 20px 50px;
            font-weight: bold;
            justify-content: space-between;
        }

        .container{
            margin-top: 50px;
        }

        .nav-link{
            color: #FFF;
            margin: 0 20px;
            font-size: 16px
        }

        .img{
            width: 80%;
            align-self: center;
            border: 1px solid;
            margin: 20px;
            border-radius: 15px
        }

        .col-4{
            margin-top: 15px
        }

        .card-body{
            text-align: center
        }

        .row{
            padding: 25px
        }

        h3{
            margin-bottom: 25px
        }

        .footer{
            color: #FFF;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark header">
        {{$titulo}}

        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#servicos" class="nav-link">Servicos</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#quem_somos" class="nav-link">Quem somos</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#equipe" class="nav-link">Equipe</a>
            </li>
        </ul>
    </nav>

    <div class="container servicos" id="servicos">
        <h3>Serviços</h3>
        <ul>
            @foreach ($servicos as $servico)
                <li>{{$servico}}</li>
            @endforeach
        </ul>
    </div>

    <hr>

    <div id="quem_somos" class="container">
        <h3>Quem somos</h3>
        <p>Somos uma empresa de serviços que visa trazer comodidade e facilidade para suas tarefas no dia a dia, com sistemas que atendam a sua demanda e totalmente personalizados ao seu negócio</p>
    </div>

    <hr>

    <div class="container" id="equipe">
        <h3>Equipe</h3>
        <p>Contamos com uma equipe de profissionais de qualidade e que estaram sempre dispostos a melhor te atender e te ajudar no que você precisar</p>

        <h6>Membros</h6>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('images/imagem.jpg')}}" class="card-img-top img" alt="Membro da equipe">
                    <div class="card-body">
                      <h6 class="card-title">Designer</h6>
                      <p class="card-text">Rafael Vitor</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('images/imagem.jpg')}}" class="card-img-top img" alt="Membro da equipe">
                    <div class="card-body">
                      <h6 class="card-title">Desenvolvedor Web Full-stack</h6>
                      <p class="card-text">Rafael Vitor</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('images/imagem.jpg')}}" class="card-img-top img" alt="Membro da equipe">
                    <div class="card-body">
                      <h6 class="card-title">Desenvolvedor Mobile Full-stack</h6>
                      <p class="card-text">Rafael Vitor</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('images/imagem.jpg')}}" class="card-img-top img" alt="Membro da equipe">
                    <div class="card-body">
                      <h6 class="card-title">Técnico em manutenção</h6>
                      <p class="card-text">Rafael Vitor</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('images/imagem.jpg')}}" class="card-img-top img" alt="Membro da equipe">
                    <div class="card-body">
                      <h6 class="card-title">Técnico em redes</h6>
                      <p class="card-text">Rafael Vitor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    RVTech - {{date('Y')}} &copy; todos os direitos reservdos
                </div>
                <div class="col-6">
                    <h6>contatos</h6>
                    <ul class="navbar-nav">
                        <li class="nav-item d-none d-sm-inline-block">
                            (38) 9 9190-6355
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            rafaelpereira0599@fmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
