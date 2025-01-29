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

echo "Caching config..."
cp .env.example .env

echo "Running generate key..."
php artisan key:generate

echo "Running migrations..."
php artisan migrate  --force

echo "Running seeder..."
php artisan db:seed 

echo "Running storage link..."
php artisan storage:link

echo "Running Terminal is completed"
