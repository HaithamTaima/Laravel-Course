##  الشرح 

----
- حذف الجداول واعادة بنائها{(drop from database)-up} ``php artisan migrate:fresh``
----
- حذف الجدااول من الاحدث وتنفيذ من التحدث ``php artisan migrate:refresh``

----
 - الرجوع الى اخر شي تم تنفيثه في ال migreshn كامل `php artisan migrate:rollback`
 -  ``php artisan migrate:rollback --step=1``
- ``php artisan migrate:refresh = reset+migrate``
- ``php artisan migrate:reset (rollback(down))``
- ``php artisan migrate: refresh`` (down - up)
- ``php artisan make:migration create_flights_table``
- ``php artisan migrate:make add_paid_to_users``
 - ``php artisan make:migration add_paid_to_users_table --table=users``
- ``php artisan make:model student -mcrfs``**model binding**

- ``php artisan make:controller ProductController -r`` **attributes binding**

