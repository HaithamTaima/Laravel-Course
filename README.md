##  الشرح 

- ``php artisan make:controller ProductController --model-Product``  **_model binding_**
- ``php artisan make:controller ProductController -r``  **_atrbyot binding_**
- ``php  artisan make:migration add_soft_delete_to_products_table``
- ``php artisan db:seed ProductSeeder``

### - Factories:

` php artisan make:factory ProductFactory
`
###   Seeders


`  php artisan make: seeder ProductSeeder` 

### Execute Factory Seeder


`  php artisan db:seed`

`  php artisan db:seed ProductSeeder`
