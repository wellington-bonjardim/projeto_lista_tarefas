<?php 
  $acao = 'recuperarTarefasPendentes';
  require 'tarefa_controller.php';
?>

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

    <script>
      function editar(id, txt_tarefa) {
        //Criar um form de edição
        let form = document.createElement('form')
        form.action = 'index.php?pag=index&acao=atualizar'
        form.method = 'POST'
        form.className = 'row'

        //Criar um input
        let inputTarefa = document.createElement('input')
        inputTarefa.type = 'text'
        inputTarefa.name = 'tarefa'
        inputTarefa.className = 'col-md-9 form-control'
        inputTarefa.value = txt_tarefa

        //Criar um input hidden para guardar o ID da tarefa editada
        let inputId = document.createElement('input')
        inputId.type = 'hidden'
        inputId.name = 'id'
        inputId.value = id

        //Criar um botao de envio
        let button = document.createElement('button')
        button.type = 'submit'
        button.className = 'col-md-3 btn btn-info'
        button.innerHTML = 'Atualizar'

        //Árvore de elementos
        form.appendChild(inputTarefa)
        form.appendChild(inputId)
        form.appendChild(button)
        
        let tarefa = document.getElementById('tarefa_'+ id)
        tarefa.innerHTML = ''
        tarefa.insertBefore(form, tarefa[0])
      }

      function remover(id) {
        location.href = 'index.php?pag=index&acao=remover&id='+id
      }

      function marcarRealizada(id) {
        location.href = 'index.php?pag=index&acao=marcarRealizada&id='+id
      }

    </script>
    
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

    <div class="container app">
      <div class="row">
        <div class="col-md-3 menu">
          <ul class="list-group">
            <li class="list-group-item active">
              <a href="#">Tarefas pendentes</a>
            </li>
            <li class="list-group-item">
              <a href="nova_tarefa.php">Nova tarefa</a>
            </li>
            <li class="list-group-item">
              <a href="todas_tarefas.php">Todas as tarefas</a>
            </li>
          </ul>
        </div>

        <div class="col-md-9">
          <div class="container pagina">
            <div class="row">
              <div class="col">
                <h4>Tarefas Pendentes</h4>
                
                <hr>

                <?php foreach($tarefas as $indice => $tarefa) { ?>
                  <div class="row mb-3 d-flex align-items-center tarefa">
                    <div class="col-sm-9" id= 'tarefa_<?= $tarefa -> id ?>'> 
                      <?= $tarefa -> tarefa ?> 
                    </div>
                    <div class="col-sm-3 mt-1 d-flex justify-content-between">
                      <i class="fas fa-trash-alt fa-lg text-danger" onclick = "remover(<?= $tarefa -> id ?>)"></i>
                      <i class="fas fa-edit fa-lg text-info" onclick = "editar(<?= $tarefa -> id ?>, '<?= $tarefa->tarefa ?>')"></i>
                      <i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa -> id ?>)"></i>
                    </div>
                  </div>
                  <hr>
                <?php } ?>

                </div>
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