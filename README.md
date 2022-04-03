# laravel-spa
Convert Normal Laravel App in to SPA

Installation
  ```php
  composer require rajentrivedi/laravel-spa
  ```
 You need to use following blade directive in to head section of your master blade file, where you load all your assests.
 ```php
 @spa
 ```
 Example
 ```php
<!DOCTYPE html>
<html lang="en">
  <head>
    @spa
  </head>
</html>
```
 
 That's all, you need not to do anything else.

