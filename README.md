# Projeto Marketplace com Inertia.js

Este projeto é uma aplicação de marketplace construída usando Laravel e Vue.js com Inertia.js. O objetivo é fornecer uma plataforma moderna e eficiente para compradores e vendedores interagirem e negociarem produtos.

## Instalação

Para começar com este projeto, siga estes passos:

1. Clone o repositório:

    ```bash
    git clone https://github.com/Alvinzin1/marketplace-inertia.git
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd marketplace-inertia
    ```

3. Instale as dependências PHP usando o Composer:

    ```bash
    composer install
    ```

4. Instale as dependências JavaScript usando npm:

    ```bash
    npm install
    ```

5. Crie um arquivo `.env` copiando o arquivo `.env.example`:

    ```bash
    cp .env.example .env
    ```

6. Gere uma chave de aplicativo:

    ```bash
    php artisan key:generate
    ```

7. Configure seu arquivo `.env` com suas credenciais de banco de dados e quaisquer outras configurações necessárias.

8. Migre o banco de dados:

    ```bash
    php artisan migrate
    ```

9. Preencha o banco de dados com dados de exemplo (opcional):

    ```bash
    php artisan db:seed
    ```

### Executando a Aplicação

Você pode executar a aplicação usando o seguinte comando:

```bash
npm run dev
```

Este comando inicia o servidor de desenvolvimento. Você pode acessar a aplicação no seu navegador no endereço especificado.

## Dependências Principais

- **Inertia.js:** Usado para criar transições contínuas do lado do cliente, aproveitando o roteamento do lado do servidor no Laravel.
- **Vue.js 3:** Um framework JavaScript progressivo usado para construir a interface do usuário.
- **Tailwind CSS:** Um framework CSS utilitário para construir rapidamente designs personalizados.
- **Axios:** Um cliente HTTP baseado em promessas para fazer requisições AJAX.

## Estrutura de Diretórios

- **app/:** Contém arquivos da aplicação Laravel.
- **database/:** Contém migrações e seeders do banco de dados.
- **resources/:** Contém ativos frontend como componentes Vue, CSS e arquivos JavaScript.
- **routes/:** Contém definições de rotas do Laravel.
- **tests/:** Contém casos de teste PHPUnit.

## Controladores

Aqui estão alguns controladores importantes na aplicação:

- **ProductController:** Gerencia operações CRUD para produtos.
- **UserController:** Manipula ações relacionadas a usuários, como registro, login e gerenciamento de perfil.
- **OrderController:** Manipula funcionalidades de gerenciamento de pedidos.

Sinta-se à vontade para explorar os controladores no diretório `app/Http/Controllers` para mais detalhes.

## Contribuindo

Contribuições são bem-vindas! Sinta-se à vontade para fazer um fork deste repositório, fazer alterações e enviar pull requests. Se encontrar problemas ou tiver sugestões de melhorias, por favor, abra uma issue no GitHub.

## Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo LICENSE para mais detalhes.

