<?php /** @noinspection ALL */

namespace App\Providers;


use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::directive('routeis', function () {
            $route = Route::currentRouteName();
            if($route == 'teacherdashboard')
            return "<?php hello ?>";
            else
                return "nothing here bitch";

        });

        Blade::directive('endrouteis', function ($expression) {

        });
    }
}
