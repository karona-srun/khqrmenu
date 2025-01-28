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

echo "Caching config..."
cp .env.example .env

echo "Running generate key..."
php artisan key:generate

echo "Running migrations..."
php artisan migrate  --force

echo "Running seeder..."
php artisan db:seed 

echo "Running generate JWT..."
php artisan jwt:secret

echo "Running l5 Swagger generate..."
php artisan l5-swagger:generate

echo "Publishing cloudinary provider..."
php artisan vendor:publish --provider="CloudinaryLabs\CloudinaryLaravel\CloudinaryServiceProvider" --tag="cloudinary-laravel-config"
