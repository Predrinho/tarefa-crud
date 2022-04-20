<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center" id="title" >
    
    <center>
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16" id="icon">
  <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
</svg>
        <h3>Estoque Sorveteria</h3>
    </center>
</div>
</div>
</div>
    <hr />
    <br />
    <div class="row justify-content-center row-cols-5 row-cols-md-2 mb-3 text-center" >
        <div class="col" >
            <div class="card mb-4 rounded-3 shadow-sm" id="test">
                <div class="card-header py-3">
                <h4><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                </svg>&nbsp;&nbsp;<b>Contagem</b></h4>
                </div>
                <div class="card-body text-start" >
                    <form action="index.php" method="POST">
                        <label class="form-label">Sabor</label><br />
                        <input type="text" name="sabor" class="form-control" placeholder="Digite o Sabor" required /><br />
                        <label class="form-label">Quantidade</label><br />
                        <input type="number" name="quantidade" class="form-control" placeholder="Digite a Quantidade" required /><br />
                        <button type="submit" class="btn btn-outline-dark" name="btgravar">Gravar</button>
                    </form>
                    <?php
                    if (isset($_POST['btgravar'])) {
                        $sabor = $_POST['sabor'];
                        $qtde = $_POST['quantidade'];
                        $arquivo = 'dados.txt';
                        $texto = $sabor . ";" . $qtde . ";";
                        $file = fopen($arquivo, 'a');
                        fwrite($file, $texto);
                        fclose($file);
                    } else {
                        echo "";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br />
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm" id="test">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>&nbsp;&nbsp;<b>Pesquisa</b></h4>
                </div>
                <div class="card-body text-start">
                    <form action="pesquisa.php" method="POST">
                        <label class="form-label">Sabor</label><br />
                        <input type="text" name="pesquisa" class="form-control" placeholder="Digite um sabor para pesquisar" required /><br />
                        <button type="submit" class="btn btn-outline-dark" name="btgravar">Pesquisar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br />
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm" id="test">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">&nbsp;&nbsp;<b>Cadastro</b></h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Sabor</th>
                                <th scope="col">Quantidades</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $arquivo = fopen("dados.txt", "r");
                            while (!feof($arquivo)) {
                                $linha = fgets($arquivo);
                            }
                            $dados = explode(";", $linha);
                            fclose($arquivo);
                            echo '<br/><br/>';
                            $conta = count($dados) - 2;
                            for ($i = 0; $i <= $conta; $i++) {
                                $posicao = $i;
                                echo '<tr>';
                                echo '<td>' . $dados[$i] . '</td>';
                                $i++;
                                echo '<td>' . $dados[$i] . '</td>';
                                echo '<td><a href="editar.php?pos=' . $posicao . '">Editar</a> | <a href="excluir.php?pos=' . $posicao . '">Excluir</a></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>