## Getting started

First use <h4>composer install</h4> to download core Laravel modules. Copy .env.example file from root directory, rename it to .env and configure it (for this small project recommended to use SQLite). Then start local server with php ^8.2 for laravel 11.
After this open terminal and run next commands to automatically seed some data in database:
<p>php artisan migrate</p>
<p>php artisan db:seed</p>
<p>php artisan storage:link</p>

Now you are ready to use app.

## App Usage

So this app have 2 core pages (root path is a shop, dashboard is admin panel).

In root page you can see your products name and price. After you press "Details" button it will open popup with product description.

Dashboard allows you to do CRUD operations with products. Create and update forms supports simple fields validation.
