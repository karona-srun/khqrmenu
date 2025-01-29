#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "NPM Installing..."
npm install --no-dev --working-dir=/var/www/html
npm run build --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Get routes..."
php artisan route:list

echo "Setting up environment..."
cp .env.example .env
# Make sure APP_URL is set correctly
sed -i "s#APP_URL=.*#APP_URL=${APP_URL}#" .env
sed -i "s#ASSET_URL=.*#ASSET_URL=${ASSET_URL}#" .env

echo "Running generate key..."
php artisan key:generate

echo "Running migrations..."
php artisan migrate --force

echo "Running seeder..."
php artisan db:seed 

echo "Running storage link..."
php artisan storage:link

echo "Clearing caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo "Recaching configurations..."
php artisan config:cache
php artisan route:cache

echo "Running Terminal is completed"
