<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function homepage()
    {
        return new Response('What a beautiful controller we are created');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'Make sure your cat is sitting purrrrfectly still',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards'
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_ireplace('-',' ', $slug)),
            'answers' => $answers,
        ]);
    }
}
