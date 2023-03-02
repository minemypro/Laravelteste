<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualizar Contratos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
    img {
        width: 200px;
    }
</style>

<body>
    <div class="container mt-3">

        <table class="table mt-5">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nº Expediente </th>
                    <th scope="col">Número de matricula </th>
                    <th scope="col">Nome</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Data de Inserção</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <th scope="row">{{ $data->numero_matricula }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->curso }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->contacto }}</td>
                    <td>{{ $data->created_at }}</td>

                </tr>


            </tbody>
        </table>

    </div>




    <div class="container mt-2">

        <div class="row">
            <div class="col-9">
                <iframe src="/assets/{{ $data->file }}" width="100%" height="1000px">

                </iframe>
                <img src="/assets/{{ $data->file }}" alt="">

            </div>


            <div class="col-3">




                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><h4 class="mb">Dados do estudante</h4></li>
                    <li class="list-group-item"><a href="{{ route('visualizar.show') }}"
                        >Apagar contrato</a></li>
                    <li class="list-group-item"><a href="{{ route('visualizar.show') }}"
                        >Editar contrato</a></li>
                    <li class="list-group-item"><a target="_black" href="{{ route('criacao.Uploadpag') }}"
                        >Inserir novo contrato</a></li>
                    <li class="list-group-item"><a href="{{ route('visualizar.show') }}"
                        >Voltar na
                        Listagem</a></li>
                </ul>

            </div>
        </div>

    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
