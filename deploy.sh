#!/bin/bash

# Run database migrations
php artisan migrate --force

# Cache config and routes
php artisan config:cache
php artisan route:cache
