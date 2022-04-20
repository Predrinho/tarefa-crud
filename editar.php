<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <?php
    $pos = $_GET['pos'];
    $pos2 = $pos + 1;
    $arquivo = fopen("dados.txt", "r");
    while (!feof($arquivo)) {
        $linha = fgets($arquivo);
    }
    $dados = explode(";", $linha);
    fclose($arquivo);
    ?>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm" id="test">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-eyedropper" viewBox="0 0 16 16">
  <path d="M13.354.646a1.207 1.207 0 0 0-1.708 0L8.5 3.793l-.646-.647a.5.5 0 1 0-.708.708L8.293 5l-7.147 7.146A.5.5 0 0 0 1 12.5v1.793l-.854.853a.5.5 0 1 0 .708.707L1.707 15H3.5a.5.5 0 0 0 .354-.146L11 7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-.647-.646 3.147-3.146a1.207 1.207 0 0 0 0-1.708l-2-2zM2 12.707l7-7L10.293 7l-7 7H2v-1.293z"/>
</svg>&nbsp;&nbsp;<b>Editar Estoque</b></h4>
                </div>
                <div class="card-body text-start">
                    <form action="edita.php?pos=<?php echo $pos; ?>" method="POST">
                        <label class="form-label">Sabor</label><br />
                        <input type="text" name="sabor" class="form-control" value="<?php echo $dados[$pos]; ?>" required /><br />
                        <label class="form-label">Quantidade</label><br />
                        <input type="number" name="qtde" class="form-control" value="<?php echo $dados[$pos2]; ?>" required /><br />
                        <button type="submit" class="btn btn-outline-dark" name="bteditar">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>