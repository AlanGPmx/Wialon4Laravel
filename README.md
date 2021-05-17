Laravel Wialon 
=========================

install with 
```$xslt
composer require wialon2laravel/laravel-wialon
```

Use the Key you need, put it in your .env file. 
```$xslt
WIALON_SECRET=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
```

Use
--------
List all units
```php 

        $units = \wialon2laravel\Wialon\Unit::all();
        
```
Get all notifications
```php

        $notifications = Notification::all();
        
```
Find a notification by ID
To find a notification you need the id and the resource->id this method finds it using an underscore as a eparator
```php
        $found_notification = Notification::findByUniqueId("{$resource_id}_{$notification_id}");
```

Better documentation later, you could check the methods used in the testing classes available
Pull requests accepted
        
