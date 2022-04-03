<?php
namespace Rajen\Spa;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class SpaServiceProvider extends ServiceProvider
{
    public function boot()
        {
            Blade::directive('spa', function() {
                $href = 'https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js';
                return '<meta name="turbolinks-cache-control" content="no-cache"><script src="'.$href.'"></script>';
            });

            Blade::directive('spascript', function (){
                return "<script>
                            $(document).on('turbolinks:load', function(){

                   })";
            });

            Blade::directive('endspascript', function(){
                return '</script>';
            });
        }
}