<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class PageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    protected $headerimage;

    public function boot()
    {
       $url = Request::path();
        
        switch ($url) {
            case 'contact':
                $this->headerimage = 'sliderL.png';
                break;

            case 'mywork':
                $this->headerimage = 'sliderL.png';
                break;
            
            default:
                # code...
                break;
        }

        

        view()->composer('layouts.pagelayout',function($view){
            $view->with('headerimage', $this->headerimage);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
