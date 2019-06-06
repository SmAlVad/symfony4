<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{

  /**
   *@Route("/")
   */
  public function index()
  {
    return new Response('Hello world');
  }

  /**
   *@Route("/news/{slug}")
   */
  public function show($slug)
  {
    $comments = [
      'lalala1',
      'lalala2',
      'lalala3'
    ];

    return $this->render('article/show.html.twig', [
      'title' => ucwords(str_replace('-', ' ', $slug)),
      'comments' => $comments
    ]);
  }
}
