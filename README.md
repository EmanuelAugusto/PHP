# Sistema de gerenciamento Acadêmico

# Tecnologias usadas
  - Framawork Laravel: Usado na criação da aplicação no lado back-end, respeitando a arquitetura MVC.
  - Materialize: Usado no lado do cliente, para fornercer uma experiência mais próxima de app nativo do sistema, seguindo o conceito do Mobile-Firste conceitos de UI e UX.
  - Jquery: Usado em algumas animações do materialize. Ajuda e facilita o desenvolvimento diminuindo as linhas de código.

# Como rodar o projeto?

0. TODOS o comandos devem ser rodados na pasta do projeto.

1. Renomeie o .env.exemple para .env, Abra o arquivo nele há as regras do banco de dados.
  Ele fica dentro de "unu-estagio-dev/SGA/.env.exemple"
   Ex.:
   
  - DB_CONNECTION=mysql
  - DB_HOST=127.0.0.1
  - DB_PORT=3306
  - DB_DATABASE= Coloque aqui o nome do BD
  - DB_USERNAME= Coloque aqui o nome de usuário
  - DB_PASSWORD= Coloque aqui a senha

2. Em uma linha de comando rode os seguites comandos;

  - composer install
  - php artisan key:generate

3. Para rodar as tabelas no banco de dados, digite o seguinte comando. As tabelas ficam dentro de   
   "unu-estagio-dev/SGA/database/migrations";

  -  php artisan migrate

4. Para rodar o usuário, senha de acesso e alunos predefinido nas seeds rode os comandos abaixo;

  - php artisan db:seed --class=UsersTableSeeder

  - php artisan db:seed --class=AlunosTableSeeder
  
5. Rode os seguintes comandos;

  - php artisan config:clear
  - php artisan cache:clear
  - php artisan config:cache

6. Certifique-se que fez corretamente os passos acima em seguida certifique-se que o laravel e o composer estão instalados na máquina, e então Navegue até a pasta do projeto e rode o comando; 

  - php artisan serve

7. Pronto tudo configurado, abra o chrome ou navegador de sua preferência e digite o endereço

  - 127.0.0.1:8000

  - email e senha predefinidas são email: unudigital@gmail.com senha: password 





