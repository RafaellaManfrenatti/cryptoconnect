<?php
require_once 'head.php';
require_once 'menu.php';
?>


<body>
  <div class="container">
    <h1 class="text-center text-light">Análise de Microcrédito</h1>
    <form>
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
      </div>
      <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF">
      </div>
      <div class="form-group">
        <label for="valor-emprestimo">Valor do Empréstimo:</label>
        <input type="text" class="form-control" id="valor-emprestimo" placeholder="Digite o valor desejado">
      </div>
      <div class="form-group">
        <label for="renda-mensal">Renda Mensal:</label>
        <input type="text" class="form-control" id="renda-mensal" placeholder="Digite sua renda mensal">
      </div>
      <div class="form-group">
        <label for="profissao">Profissão:</label>
        <input type="text" class="form-control" id="profissao" placeholder="Digite sua profissão">
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" placeholder="Digite seu endereço">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Digite seu email">
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="tel" class="form-control" id="telefone" placeholder="Digite seu telefone">
      </div>
      <button type="submit" class="btn btn-yellow btn-block border-0">Enviar</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<?php
require_once 'footer.php';
?>