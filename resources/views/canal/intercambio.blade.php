<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="/css/intercambio.css">

<body>
    <div class="container">

        <div class="row mt-5 completo">
            <div class="col toca1">
                <h1 class="titulo">Canal de Intercambio</h1>
            </div>
            <div class="col">
                <form action="" method="post">

                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nome:">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="Telefone">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Curso:">
                    </div>
                    <div class="mb-3">
                        <input type="date" class="form-control" id="exampleFormControlInput1"
                            placeholder="Data do intercambio">
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="mensagem"></textarea>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            Aceito em receber comunicações e ofertas personalizadas da UPRA. <a target="_blank"
                                href="https://www.apd.ao/ao/legislacao/">Lei do 22/11 de 17 Junho -
                                Protecção de Dados Pessoais</a>
                        </label>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="reset" class="btn btn-danger ">Limpar</button>
                        <button type="button" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
