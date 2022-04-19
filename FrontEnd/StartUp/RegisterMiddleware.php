<?php

namespace FrontEnd\StartUp;

use FrontEnd\Http\Middleware\AstroAuthentication;
use FrontEnd\Http\Middleware\CorsMiddleware;
use FrontEnd\Http\Middleware\OptionsCorsMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class RegisterMiddleware
{
    public function handle(ServiceProvider $serviceProvider, Router $router, Kernel $kernel) {
        $router->aliasMiddleware('astroAuth', AstroAuthentication::class);
        $router->aliasMiddleware('cors', CorsMiddleware::class);
        $router->aliasMiddleware('optionsCors', OptionsCorsMiddleware::class);
    }
}