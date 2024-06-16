## Getting started

First start local server with php ^8.2 for laravel 11, copy .env.example file from root directory, rename it to .env and configure db connection (for this small project recommended to use SQLite)
After this open terminal and run next commands to automatically seed some data in database:
php artisan migrate
php artisan db:seed
php artisan storage:link

Now you are ready to use app.

## App Usage

So this app have 2 core pages (root path is a shop, dashboard is admin panel).

In root page you can see your products name and price. After you press "Details" button it will open popup with product description.

Dashboard allows you to do CRUD operations with products. Create and update forms supports simple fields validation.
