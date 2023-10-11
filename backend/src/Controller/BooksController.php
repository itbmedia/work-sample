<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BooksController extends AbstractController
{
    private BookRepository $repository;

    public function __construct(BookRepository $repository) {
        $this->repository = $repository;
    }
    
    /**
     * @Route("/books", name="app_books")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BooksController.php',
        ]);
    }
}
