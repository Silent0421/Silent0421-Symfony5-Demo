<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
    public function show($slug) {
        return new Response(sprintf(ucwords(str_ireplace('-',' ','Future page to show a "%s" question!')), $slug));
    }
}
