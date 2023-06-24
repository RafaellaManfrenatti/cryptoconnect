<?php
require_once 'head.php';
require_once 'menu.php';
?>





<body>
  <div class="container">
    <h1 class="text-center text-light">Solicitação de Suporte e Mentoria</h1>
    <form>
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Digite seu email">
      </div>
      <div class="form-group">
        <label for="mensagem">Mensagem:</label>
        <textarea class="form-control" id="mensagem" rows="5" placeholder="Digite sua mensagem"></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-block bg-warning border-0">Enviar</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>




















<?php
require_once 'footer.php';
?>