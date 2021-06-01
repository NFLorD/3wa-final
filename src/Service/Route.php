<?php

namespace App\Service;

use Symfony\Component\Routing\Route as RoutingRoute;

class Route
{
    public static function get(
        string $path, 
        array $defaults = [], 
        array $requirements = [], 
        array $options = [], 
        ?string $host = '', 
        $schemes = [], 
        ?string $condition = ''
    ): RoutingRoute {
        return new RoutingRoute(
            $path, 
            $defaults, 
            $requirements, 
            $options, 
            $host, 
            $schemes, 
            ['GET'],
            $condition
        );
    }

    public static function post(
        string $path, 
        array $defaults = [], 
        array $requirements = [], 
        array $options = [], 
        ?string $host = '', 
        $schemes = [], 
        ?string $condition = ''
    ): RoutingRoute {
        return new RoutingRoute(
            $path, 
            $defaults, 
            $requirements, 
            $options, 
            $host, 
            $schemes, 
            ['POST'],
            $condition
        );
    }
}