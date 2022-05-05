# Laravel
Trabalhando com este framework e conhecendo duas funcionalidades

rodar o projeto apos clona-lo:
Acesse o projeto:
cd Eventos

Intale as dependencias e o framework:
composer install --no-scripts

Copie o arquivo .env.example:
O arquivo .env foi retirado do .gitignore, mas caso nao apareca digite o comando:
cp .env.example .env

Crie uma nova chave para a aplicacao:
php artisan key:generate

criar um banco de dados "bd_eventos" e coloca-lo depois do = em "DB_DATABASE= " do arquivo .env

para criar as tabelas no banco de dados no prompt de comando dentro do projeto Eventos digitar o comando:
php artisan migrate

e depois te todos esres passos realizado digitar o comando:
php artisan serve


