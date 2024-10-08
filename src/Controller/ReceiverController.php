<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/receive', name: 'receive')]
class ReceiverController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('receiver.html.twig');
    }
}
