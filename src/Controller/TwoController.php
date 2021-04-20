<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwoController extends AbstractController
{
    #[Route('/name/{name}', name: 'Name')]
    public function index(string $name=""): Response
    {
        $greet = '';
        if ($name) {
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars("Мистер ".$name));
        }
        return new Response(<<<EOF
<html>
    <body>
    $greet
        <img src="/images/under-construction.gif" />
    </body>
</html>
EOF

        );

    }
}
