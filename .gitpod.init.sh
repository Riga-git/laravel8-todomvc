mysql -u root -e "create database laravel"
cp .env.example .env
sed -i "s|APP_URL=http://localhost|APP_URL=$(gp url 8000)|g" .env
composer install
npm install
php artisan key:generate
php artisan migrate --seed
