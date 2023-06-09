<h4>Clientes</h4>
    <a class="btn btn-primary mb-2 btn-sm" href="<?php echo APP; ?>cliente/novo">Cadastrar Novo Cliente</a>
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($clientes as $cliente) {
            if($cliente['ativo'] == 'true'){
              $path_editar = APP.'cliente/editar';
              $path_excluirC = APP.'cliente/excluirC';

              echo "
              <tr>
                <td>{$cliente['id']}</td>
                <td>{$cliente['nome']}</td>
                <td><a class='btn btn-warning btn-sm' href='$path_editar/{$cliente['id']}'>Editar</a></td>
                <td><a class='btn btn-danger btn-sm' onclick='return confirm(\"Você deseja Excluir?\")' href='$path_excluirC/{$cliente['id']}'>Excluir</a></td>
              </tr>
              ";
          }
        }
         ?>

      </tbody>
    </table>
    <a class="btn btn-success btn-sm"  href="<?php echo APP.'compra/novo' ?>" >Cadastrar Compra</a>
