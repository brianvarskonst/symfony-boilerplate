<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app.index")
     *
     * @psalm-return Response
     * @return Response
     */
    public function index(): Response
    {
        return $this->render(
            'app/index.html.twig',
            [
                'controller_name' => 'AppController',
            ]
        );
    }
}
