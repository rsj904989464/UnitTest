<?php
namespace Rsj\UnitTest\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class UnitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerRoutes(); //指定组件路由地址

        $this->loadViewsFrom(  //指定视图文件地址
            __DIR__.'/../../resources/views/', 'unit' //unit 表示资源目录地址  view("unit::index") 通过unit关键字找到views视图
        );
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Rsj\UnitTest\Http\Controllers',
            'prefix' => 'unit',
            'middleware' => 'web'
        ];
    }


}