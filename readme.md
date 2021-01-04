> unit-test

方便与laravel框架中对于某一个类的方法调试；类似于单元测试

> 框架要求

Laravel >= 5.1

> 安装

composer require "rsj/unit-test"

> Laravel 配置

在 `config/app.php` 注册 ServiceProvider

'providers' => [
    Rsj\UnitTest\Providers\UnitServiceProvider::class,
]

>浏览器中直接访问路由

Route::get('/', 'SJunitController@index');
Route::post('/', 'SJunitController@store')->name('junit.store');