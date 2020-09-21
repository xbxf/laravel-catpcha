laravel-admin login-captch
======
Installation

First, install dependencies:

    composer require xbxf/laravel-catpcha
 
Second :
    
    php artisan vendor:publish --tag=lang
    
Third :

    php artisan migrate

Configuration
 In the extensions section of the config/admin.php file, add some configuration that belongs to this extension.
 
     'extensions' => [
         'laravel-catpcha' => [
             // set to false if you want to disable this extension
             'enable' => true,
         ]
     ]
 
 