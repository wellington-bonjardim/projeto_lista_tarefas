<!doctype html>
<html lang="pt-br">
  <head>
    <title>Lista de Tarefas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- STYLES -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- FONT AWSEOME -->
    <script src="https://kit.fontawesome.com/438b2365a2.js" crossorigin="anonymous"></script>

  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top">
          Lista de Tarefas
        </a>
      </div>
    </nav>

    <?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
      <div class="pt-2 bg-success text-white d-flex justify-content-center ">
        <h5>Tarefa inserida com sucesso!</h5>
      </div>
    <?php } ?>

    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group">
					<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
					<li class="list-group-item active"><a href="#">Nova tarefa</a></li>
					<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
				</ul>
            </div>

            <div class="col-md-9">
                <div class="container pagina">
                    <div class="row">
                        <div class="col">
                            <h4>Nova tarefa</h4>
                            <hr>

                            <form method="POST" action="tarefa_controller.php?acao=inserir">
                                <div class="form-group">
                                    <label>Descrição da tarefa:</label>
                                    <input type="text" class="form-control"   name='tarefa'
                                    placeholder="Exemplo: Ir ao mercado">
                                </div>
                                <button class="btn btn-success">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>