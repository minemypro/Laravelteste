<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de contratos</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg " style="background-color: #87c4f210; ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('visualizar.show') }}">Listagem de Contratos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <hr>

    <section class="todac">
        <h1 class="formulario_titulo">Formulario para cadastro de contratos

            <br><br><br>
        </h1>

        <div class="container formulario_principaldiv">
            <div class="container mt-4">
                <form class="formulariom" action="{{ url('uploadproduct') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nome do Produto</label>
                                <input type="text" name="name" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1" placeholder="Nome do Produto">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email do Estudante</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Email do estudante">
                            </div>


                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                <select class="form-select" aria-label="Default select example" name="curso">
                                    <option selected>Curso</option>
                                    <option value="Arquitetura"> Arquitetura </option>
                                    <option value="Ciências Farmacêuticas">Ciências Farmacêuticas</option>
                                    <option value="Comunicação Social">Comunicação Social </option>
                                    <option value="Enfermagem"> Enfermagem</option>
                                    <option value="Eng. Civil">Eng. Civil</option>
                                    <option value="Eng. Informática">Eng. Informática</option>
                                    <option value="Eng. Mecânica">Eng. Mecânica</option>
                                    <option value="Fisioterapia">Fisioterapia</option>
                                    <option value="Gestão e Contabilidade ">Gestão e Contabilidade </option>
                                    <option value="Medicina">Medicina</option>
                                    <option value="Odontologia">Odontologia</option>
                                    <option value="Relações Internacionais">Relações Internacionais</option>
                                    <option value="Turismo e Gestão Hoteleira ">Turismo e Gestão Hoteleira </option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Numero matricula</label>
                                <input type="text" name="numero_matricula" class="form-control"
                                    id="exampleFormControlInput1" placeholder="numero_matricula">
                            </div>

                        </div>


                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                <input type="text" name="contacto" class="form-control"
                                    id="exampleFormControlInput1" placeholder="telefone">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Descrição</label>
                                <input type="text" name="description" class="form-control"
                                    id="exampleFormControlInput1" placeholder="Alguma situação?">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Inserir contrato</label>
                                <input class="form-control" type="file" id="formFile" name="file">
                            </div>


                        </div>

                        <div class="avisodecadastro">

                        </div>
<br><br>
                        <div class="container centralizarbotoes">
                            <button type="submit" class="btn btn-success btn-lg">Cadastrar Contrato</button>

                            <button type="reset" class="btn btn-success btn-lg">Limpar formulario</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
</body>

</html>
