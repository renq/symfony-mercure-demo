<?php
declare(strict_types=1);

namespace App\Controller;

use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/publish', name: 'publish')]
class PublishController extends AbstractController
{
    public function __invoke(HubInterface $hub): Response
    {
        $update = new Update(
            'https://lipek.net/test',
            json_encode(['date' => (new DateTimeImmutable())->format('Y-m-d H:i:s.u')]),
        );

        $hub->publish($update);

        return new Response('published!');
    }
}
