# hotel-reservation-laravel #

Instale as dependências do projeto. No diretório do projeto, execute:
composer install

Copie o arquivo .env.example para .env:
cp .env.example .env

Gere a chave da aplicação:
php artisan key:generate

Execute as migrações do banco de dados:
php artisan migrate

Inicie o servidor de desenvolvimento do Laravel:
php artisan serve
