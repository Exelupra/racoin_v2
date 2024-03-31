<?php

declare(strict_types=1);

namespace App\Controllers;
use Slim\Views\Twig;

abstract class DefaultController
{
    public function __construct(protected Twig $view)
    {
    }
}
