<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Routers\Router;

class RouterTest extends TestCase 
{
    public function testRouter(): void 
    {
        $router = new Router();
        $html = $router->route( url: "http://localhost/orders" );
        $pos = mb_strpos(haystack: $html, needle: "Создание заказа");
        if ($pos === false)
        {
            $pos = -1;
        }
    } 


    function test_router1(): void 
{
    $router = new Router();
    $html = $router->route(url: "http://localhost");
    $pos = mb_strpos(haystack: $html, needle: "Приглашаем в наш онлайн-магазин");
    $this->assertNotFalse( $pos>= 0);
}

function test_router2(): void 
{
    $router = new Router();
    $html = $router->route(url: "http://localhost");
    $pos = mb_strpos(haystack: $html, needle: "Добавить в корзину");
    $this->assertNotFalse( $pos>= 0); 
}
}
