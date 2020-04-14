<?php
namespace  AppBundle\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovieController extends Controller
{
    /**
     * @Route("movie/new", name="movie_new")
     */
    public function newAction ()
    {
        return $this->render('movie/new.html.twig');
    }

}