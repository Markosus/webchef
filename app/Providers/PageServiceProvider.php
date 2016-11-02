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
    protected $headertext;

    public function boot()
    {
       $url = Request::path();
        
        switch ($url) {
            case 'contact':
                $this->headerimage = 'contact.png';
                break;
              

            case 'mywork':
                $this->headerimage = 'portfolio.jpg';
                $this->headertext = 'beautiful design';
                break;
            
            default:
                # code...
                break;
        }

        

        view()->composer('layouts.pagelayout',function($view){
            $view->with('headerimage', $this->headerimage);
            $view->with('headertext', $this->headertext);
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
