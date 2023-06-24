<?php
require_once 'head.php';
require_once 'menu.php';
?>


<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center text-light">Login</h2>
        <form>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
          </div>
          <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </div>
          <div class="text-center">
            <a href="#">Esqueceu sua senha?</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>




















<?php
require_once 'footer.php';
?>