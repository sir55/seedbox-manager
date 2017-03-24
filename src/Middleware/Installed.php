<?php

namespace App\Middleware;

use App\Seedbox\Install;
use App\Seedbox\Utils;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Installed
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $next)
    {
        $username = Utils::getCurrentUser();

        if (false === is_writable(__DIR__.'/../../conf/users')) {
            return $response->withStatus(302)->withHeader('Location', '/install');
        } elseif (Install::getChmod(__DIR__.'/../../reboot-rtorrent', 4) != 4755) {
            return $response->withStatus(302)->withHeader('Location', '/install');
        } elseif (false === file_exists(__DIR__."/../../conf/users/{$username}/config.ini")) {
            Install::create_new_user($username);
        }

        return $next($request, $response);
    }
}