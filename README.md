<p align="center">
  <img src="media/images/fidelize_preto.png">
</p>

## O que é o Fidelize:

O fidelize e um serviço de Cartão Fidelidade Online, que possui dois painéis e um site institucional, o primeiro painel corresponde a da empresa que pode criar seus cartões e registrar os carimbos dos clientes e verificar os tokens dos clientes. O segundo painel e o do cliente, onde ele pode verificar novos cartões que nunca utilizou, ver seu progresso e ver os tokens, que são gerados quando completa um cartão. O sistema também possui um sistema de avaliação da empresa e destaques para os cartões fidelidade

### Como configurar o projeto:

Crie um arquivo em `include/config.php`, copie tudo de `include/config.php.txt` e cole no novo arquivo, ele é o responsável por salvar as constantes do banco de dados e do serviço de SMS.

O banco de dados e de extrema importância para seu funcionamento, e o serviço de SMS pode ser dispensável, mas alguma funçoes nao irá funcionar pois dependem do SMS.

O arquivo `db_fidelize.sql` e o banco principal para o sistema funcionar, e o arquivo `functions_fidelize.sql` salva algumas functions e procedures para o gráfico do painel da empresa, caso não seja importado apenas o grafico nao ira funcionar.
 
Entre em `include/config.php.txt`, lá você irá encontrar um modelo para o arquivo de configuração, você deve criar um arquivo `include/config.php` e configurar as constante.

Crie uma pasta na raiz do projeto chamada "uploads", será lá que as imagens enviadas ficaram salva.

### Usar o Sistema

Para usar o sistema você pode usar os perfis de lojas e clientes já existentes, a lista está no banco de dados nas tabelas `clientes` e `lojas`, a senha esta criptografada porém todas são `12345678`.

## Telas do Sistema
A seguir algumas Screeshots do sistema.
#### Loja/Empresa
<p float="left">
  <img width="430" src="media/images/screeshots/loja_dashboard.png">
  <img width="430" src="media/images/screeshots/loja_carimbos.png">
  <img width="430" src="media/images/screeshots/loja_cartoes.png">  
  <img width="430" src="media/images/screeshots/loja_tokens.png">
  <img width="430" src="media/images/screeshots/loja_token_valido.png">
</p>

#### Cliente

<p float="left">
  <img width="430" src="media/images/screeshots/cliente_cartoes.png">
  <img width="430" src="media/images/screeshots/cliente_token.png">
</p>
<p float="left">
  <img width="200" src="media/images/screeshots/cliente_cartoes_mobile.png">
  <img width="200" src="media/images/screeshots/cliente_config_mobile.png">
  <img width="200" src="media/images/screeshots/cliente_modal_avalicao.png">  
</p>

