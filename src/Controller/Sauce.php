<?php
namespace  App\Controller\Sauce;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Sauce extends AbstractController
{
    /**
     * @Route("movie/new", name="movie_new")
     */
    public function newAction ()
    {
        return $this->render('movie/new.html.twig');
    }

}