# PHP MySQL CRUD Project
Este projeto foi desenvolvido como parte de um estudo em PHP e MySQL. Ele implementa um sistema CRUD (Create, Read, Update, Delete) simples.

## Requisitos
Para rodar este projeto, você precisará:
- PHP na versão 8.0 ou superior
- Composer
- MySQL


## Instalação
Siga os passos abaixo para configurar e rodar o projeto localmente:

1. Clone o repositório:
    ```sh
    git clone https://github.com/GuiiKal/php_mysql.git
    ```
2. Instale as dependências do Composer:
    ```sh
    composer install
    ```

3. Configure o banco de dados MySQL:
    - Crie um banco de dados no MySQL.
    - Importe o arquivo `mysql.sql` que está no repositório para criar as tabelas necessárias.

4. Verifique o arquivo `conection.php` para garantir que as informações de conexão com o banco de dados estão corretas:

5. Inicie o servidor PHP:
    ```sh
    php -S localhost:8000
    ```

6. Acesse o projeto no seu navegador:
    ```
    http://localhost:8000
    ```

## Funcionalidades
Este projeto permite:
- Criar registros
- Ler registros
- Atualizar registros
- Excluir registros
- Gerar relatórios em pdf
