# laravel-spa
Convert Normal Laravel App in to SPA

Installation
  ```php
  composer require rajentrivedi/laravel-spa
  ```
 You need to use following blade directive in to head section of your master blade file, where you load all your assests.
 ```
 @spa
 ```
 Example
 ```
<!DOCTYPE html>
<html lang="en">
  <head>
    @spa
  </head>
</html>
```
Blade directives to write javascript code.
```
@spascript
  $('#your_id').click(function(){
    console.log('working');
  })
@endspascript
```

If you want to disable spa for perticular link.
```
@disablespa
```
Example
```
<a href="{{route('excel.download')}}" class="btn btn-primary btn-md m-5" @disablespa>Excel</a>
```

 This package will increase the page load speed, as this package is using [Tubolinks](https://github.com/turbolinks/turbolinks#canceling-visits-before-they-start).
 
 That's all, you need not to do anything else.

