<?php
// src/Controller/ProductController.php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MessageGenerator;

class ProductController
{
    /**
     * @Route("/products")
     */
    public function list(LoggerInterface $logger): Response
    {
        $logger->info('Look, I just used a service!');

        die("fsd");

        // ...
    }

    /**
     * @Route("/products/new")
     */
    public function new(MessageGenerator $messageGenerator): Response
    {
        // thanks to the type-hint, the container will instantiate a
        // new MessageGenerator and pass it to you!
        // ...

        $message = $messageGenerator->getHappyMessage();
        $number = $messageGenerator->getRandomNumber();
        echo "$number $message  ";
        exit;
        // ...
    }
}
?>