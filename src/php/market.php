<?php
require_once 'head.php';
require_once 'menu.php';
?>


<body>
    <div class="container">
        <h1 class="text-center text-light">Marketplace</h1>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    
                    <div class="card-body">
                        <h5 class="card-title">Trancista</h5>
                        <p class="card-text">Serviço de Trancista </p>
                        <a href="#" class="btn btn-primary bg-warning border-0" id="buttonmeta" onclick="connectToMetaMask()">Pague com Token</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    
                    <div class="card-body">
                        <h5 class="card-title">Manicure</h5>
                        <p class="card-text">Fazemos alongamento.</p>
                        <a href="#" class="btn btn-primary bg-warning border-0"id="buttonmeta" onclick="connectToMetaMask()">Pague com Token</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    
                    <div class="card-body">
                        <h5 class="card-title">Sacolé da Rô</h5>
                        <p class="card-text">Temos diversos sabores.</p>
                        <a href="#" class="btn btn-primary bg-warning border-0" id="buttonmeta" onclick="connectToMetaMask()">Pague com Token</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                   
                    <div class="card-body">
                        <h5 class="card-title">Crochê da Lúcia</h5>
                        <p class="card-text">Casaco em croche.</p>
                        <a href="#" class="btn btn-primary bg-warning border-0" id="buttonmeta" onclick="connectToMetaMask()">Pague com Token</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
  const connectToMetaMask = async () => {
    try {
      if (window.ethereum) {
        await window.ethereum.enable();
        // Conexão bem-sucedida, faça algo aqui
        alert('Conexão com MetaMask estabelecida!');
      } else {
        alert('Por favor, instale a MetaMask para continuar.');
      }
    } catch (error) {
      console.error(error);
    }
  };

  const btnCadastro = document.getElementById('buttonmeta');
  btnCadastro.addEventListener('click', connectToMetaMask);
</script>
    <?php
    require_once 'footer.php';
    ?>