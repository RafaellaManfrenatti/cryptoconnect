const connectToMetaMask = async () => {
    try {
      // Verificar se o objeto ethereum está disponível
      if (window.ethereum) {
        // Solicitar permissão para acessar a carteira
        await window.ethereum.enable();
        // Conexão bem-sucedida, faça algo aqui (por exemplo, enviar dados de cadastro)
      } else {
        // A MetaMask não está instalada
        alert('Por favor, instale a MetaMask para continuar.');
      }
    } catch (error) {
      // O usuário rejeitou a solicitação de conexão ou ocorreu algum erro
      console.error(error);
    }
  };
  