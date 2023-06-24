    <?php
    require_once 'head.php';
    require_once 'menu.php';
    ?>

    <body>
        <div class="container">
            <h1 class="text-center text-light">Perguntas Frequentes</h1>

            <div class="accordion" id="accordionFAQ">
                <!-- Pergunta 1 -->
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Como faço para criar uma carteira de criptomoedas?
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                        <div class="card-body">
                            Para criar uma carteira de criptomoedas, você pode utilizar uma plataforma online como a MyEtherWallet ou a
                            MetaMask. Basta acessar o site, seguir as instruções de criação e anotar sua chave privada em um local seguro.
                        </div>
                    </div>
                </div>

                <!-- Pergunta 2 -->
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Quais são as principais criptomoedas disponíveis?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                        <div class="card-body">
                            As principais criptomoedas disponíveis incluem o Bitcoin, Ethereum, Ripple, Litecoin e Bitcoin Cash. Essas
                            são apenas algumas das muitas opções disponíveis no mercado.
                        </div>
                    </div>
                </div>

                <!-- Pergunta 3 -->
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Como posso comprar criptomoedas?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                        <div class="card-body">
                            Para comprar criptomoedas, você pode utilizar uma exchange, como a Binance ou Coinbase. Basta criar uma
                            conta, realizar o cadastro e seguir as instruções para compra de criptomoedas utilizando moedas fiduciárias
                            como o Real ou Dólar.
                        </div>
                    </div>
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