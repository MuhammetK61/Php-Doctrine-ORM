<?php
// src/Controller/TaskController.php
namespace App\Controller;

use App\Entity\Task;
use App\Entity\Product;
use App\Form\Type\TaskType;
use App\Form\Type\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class TaskController extends AbstractController
{
    /**
     * @Route("/task/new")
     */
    public function new(Request $request): Response
    {
        // just setup a fresh $task object (remove the example data)
        $product = new Product();
        // $task = new Task();

        $form = $this->createForm(ProductType::class, $product);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($product);

            $entityManager->flush();

            echo "success"; exit;
        }

        return $this->render('task/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
