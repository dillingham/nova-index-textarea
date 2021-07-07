<?php

namespace Dillingham\NovaTextarea;

use Laravel\Nova\Nova;
use Laravel\Nova\Fields\Textarea;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Http\Requests\NovaRequest;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Textarea::macro('showOnIndex', function(){
            $this->showOnIndex = true;

            return $this;
        });

        Textarea::macro('limit', function($amount, $ending = '...') {
            if(app(NovaRequest::class)->resourceId == null) {
                $this->displayUsing(function() use($amount, $ending) {
                    return str_limit($this->value, $amount, $ending);
                });
            }

            return $this;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
